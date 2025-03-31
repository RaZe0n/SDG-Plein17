<?php

namespace App\Http\Controllers;

use App\Models\AwardedPredicate;
use App\Models\Calendar;
use App\Models\Event;
use App\Models\Posts;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        $userCount = User::count();
        $awardedCount = AwardedPredicate::count();
        $workshopCount = Calendar::where('type', 'workshop')->count();
        $postsCount = Posts::count();

        return view('admin.dashboard', [
            'userCount' => $userCount,
            'awardedCount' => $awardedCount,
            'workshopCount' => $workshopCount,
            'postsCount' => $postsCount
        ]);
    }

    public function sectorChart()
    {
        $sectors = User::select('sector', DB::raw('count(*) as total'))
            ->groupBy('sector')
            ->get();

        return response()->json($sectors);
    }

    public function requestsChart()
    {
        $currentYear = date('Y');
        $requests = DB::table('predicates')
            ->select(DB::raw('MONTH(created_at) as month'), DB::raw('count(*) as total'))
            ->whereYear('created_at', $currentYear)
            ->groupBy(DB::raw('MONTH(created_at)'))
            ->get();

        return response()->json($requests);
    }
}
