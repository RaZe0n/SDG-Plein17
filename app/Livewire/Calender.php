<?php

namespace App\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Calender extends Component
{
    public function render()
    {
        $events = DB::table('calendar')
            ->where('type', 'event')
            ->orderBy('start', 'desc')
            ->limit(3)
            ->get();

        return view('livewire.calender', ["events" => $events]);
    }
}
