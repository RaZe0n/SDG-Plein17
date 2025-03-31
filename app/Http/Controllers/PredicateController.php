<?php

namespace App\Http\Controllers;

use App\Mail\AcceptedPredicateMail;
use App\Mail\ConfirmPredicateMail;
use App\Models\AwardedPredicate;
use App\Models\Predicate;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class PredicateController extends Controller
{

    protected $sdgs = [
        1 => 'Geen armoede',
        2 => 'Geen honger',
        3 => 'Goede gezondheid en welzijn',
        4 => 'Kwaliteitsonderwijs',
        5 => 'Gendergelijkheid',
        6 => 'Schoon water en sanitair',
        7 => 'Betaalbare en duurzame energie',
        8 => 'Eerlijk werk en economische groei',
        9 => 'Industrie, innovatie en infrastructuur',
        10 => 'Ongelijkheid verminderen',
        11 => 'Duurzame steden en gemeenschappen',
        12 => 'Verantwoorde consumptie en productie',
        13 => 'Klimaatactie',
        14 => 'Leven in het water',
        15 => 'Leven op het land',
        16 => 'Vrede, justitie en sterke publieke diensten',
        17 => 'Partnerschap om doelstellingen te bereiken'
    ];

    public function __construct()
    {
        $sdgs = $this->sdgs;
    }

    public function index()
    {
        $predicates = Predicate::orderBy('created_at', 'desc')->paginate(10);

        return view('admin.predicates', ["predicates" => $predicates]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'email' => 'required|email',
            'contactperson' => 'required|string',
            'company' => 'required|string',
            'sector' => 'required|string',
            'street' => 'required|string',
            'postalcode' => 'required|string',
            'city' => 'required|string',
            'province' => 'required|string',
            'involvement' => 'required|string',
            'acknowledge' => 'required|string',
            'steps' => 'required|string',
            'impact' => 'required|string',
            'collab' => 'required|string',
            'results' => 'required|string',
            'play' => 'required|string',
            'proud' => 'required|string',
        ]);


        try {
            $userId = Auth::id();
            if (!$userId) {
                throw new \Exception("Gebruiker niet ingelogd.");
            }

            Predicate::create([
                'user_id' => $userId,
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'email' => $request->email,
                'contactperson' => $request->contactperson,
                'company' => $request->company,
                'sector' => $request->sector,
                'street' => $request->street,
                'postalcode' => $request->postalcode,
                'city' => $request->city,
                'province' => $request->province,
                'involvement' => $request->involvement,
                'acknowledge' => $request->acknowledge,
                'steps' => $request->steps,
                'impact' => $request->impact,
                'collab' => $request->collab,
                'results' => $request->results,
                'play' => $request->play,
                'proud' => $request->proud,
                'status' => 'aangevraagd',
            ]);
            $user = User::findOrFail($userId);
            $email = new ConfirmPredicateMail($user);
            Mail::to($user->email)->send($email);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }

        return redirect()->route('predicaat')->with('success', 'Record succesvol aangemaakt!');
    }

    public function show($id)
    {
        $predicate = Predicate::find($id);

        return view('admin.predicates.show', ['predicate' => $predicate]);
    }

    public function update(Request $request, $id)
    {
        try {
            $predicate = Predicate::findOrFail($id);

            $predicate->status = $request->status;
            $predicate->save();

            switch ($predicate->status) {
                case 'goedgekeurd':
                    $user = User::findOrFail($predicate->user_id);
                    $email = new AcceptedPredicateMail($user);
                    Mail::to($user->email)->send($email);

                    AwardedPredicate::create([
                        'user_id' => $predicate->user_id,
                        'company' => $predicate->company,
                        'goal' => $predicate->impact,
                        'description' => "Deze award is toegekend aan " . $predicate->company . " voor het behalen van de volgende doelstelling: " . $this->sdgs[$predicate->impact],
                    ]);

                    break;

                case 'afgekeurd':
                    $user = User::findOrFail($predicate->user_id);
                    $email = new ConfirmPredicateMail($user);
                    Mail::to($user->email)->send($email);
                    break;

                case 'in behandeling':
                    $user = User::findOrFail($predicate->user_id);
                    $email = new ConfirmPredicateMail($user);
                    Mail::to($user->email)->send($email);
                    break;

                default:
                break;
            }
            return redirect()->route('admin.predicates')->with('success', 'Record succesvol geüpdatet!');
        } catch (\Exception $e) {
            Log::error('Update error: ' . $e->getMessage());
            return back()->with('error', 'Er is een fout opgetreden bij het updaten!');
        }
    }
}
