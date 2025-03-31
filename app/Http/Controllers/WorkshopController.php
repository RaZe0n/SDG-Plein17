<?php

namespace App\Http\Controllers;

use App\Models\Calendar;
use App\Models\Event;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class WorkshopController extends Controller
{
    public function enter($workshop, $user)
    {
        if (empty($workshop) || empty($user)) {
            return response()->json([
                'error' => 'Workshop and User are required.'
            ], 422);
        }

        $workshopData = Calendar::find($workshop);

        $decoded = json_decode($workshopData->participants);

        if (($key = array_search(intval($user), $decoded)) !== false) {
            unset($decoded[$key]);
            $workshopData->participants = json_encode(array_values($decoded));
            $workshopData->save();
            return response()->json([
                'message' => 'User has left the workshop.'
            ], 200);
        } else {
            $decoded[] = intval($user);
            $workshopData->participants = json_encode(array_values($decoded));
            $workshopData->save();
            return response()->json([
                'message' => 'User has entered the workshop.'
            ], 200);
        }
    }

    public function index()
    {
        $workshops = Calendar::paginate(10);
        
        return view('admin.events', ['workshops' => $workshops]);
    }
}

