<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $events = DB::table('calendar')
            ->where('type', 'event')
            ->orderBy('start', 'desc')
            ->limit(3)
            ->get();


        return view('welcome', ["events" => $events]);
    }
}
