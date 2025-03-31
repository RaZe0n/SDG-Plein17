<?php

namespace App\Http\Controllers;

use App\Models\RegisteredEvents;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $awardedPredicates = DB::table('awarded_predicates')->where('user_id', Auth::user()->id)
        ->orderBy('created_at', 'desc')
        ->get();

        $items = RegisteredEvents::orderBy('created_at', 'desc')->get();

        return view('dashboard', [
            'awarded_predicates' => $awardedPredicates,
            'registered_events' => $items
        ]);
    }
}
