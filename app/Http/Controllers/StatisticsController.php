<?php

namespace App\Http\Controllers;

use App\Models\Bowl;
use App\Models\Over;
use App\Models\User;
use DB;

class StatisticsController extends Controller
{
    public function allOvers()
    {
        return Over::with('bowler')
            ->withCount([
                'bowls as balls_bowled',
                'bowls as dots' => function ($query) {
                    return $query
                        ->where('run', 0)
                        ->where('extra', 0);
                },
                'bowls as no_bowls' => function ($query) {
                    return $query->where('extra_type', 'nb');
                },
                'bowls as wide_bowls' => function ($query) {
                    return $query->where('extra_type', 'wd');
                },
                'bowls as runs' => function ($query) {
                    return $query
                        ->select(DB::raw('SUM(run + extra)'));
                },
                'bowls as sixes' => function ($query) {
                    return $query
                        ->where('boundary_type', 'six');
                },
                'bowls as fours' => function ($query) {
                    return $query
                        ->where('boundary_type', 'four');
                },
                'bowls as outs' => function ($query) {
                    return $query
                        ->whereNull('out_by')
                        ->whereNotNull('out_type');
                }
            ])
            ->get();
    }

    public function singleOver(Over $over)
    {
        return $over->with('bowler')
            ->withCount([
                'bowls as balls_bowled',
                'bowls as dots' => function ($query) {
                    return $query
                        ->where('run', 0)
                        ->where('extra', 0);
                },
                'bowls as no_bowls' => function ($query) {
                    return $query->where('extra_type', 'nb');
                },
                'bowls as wide_bowls' => function ($query) {
                    return $query->where('extra_type', 'wd');
                },
                'bowls as runs' => function ($query) {
                    return $query
                        ->select(DB::raw('SUM(run + extra)'));
                },
                'bowls as sixes' => function ($query) {
                    return $query
                        ->where('boundary_type', 'six');
                },
                'bowls as fours' => function ($query) {
                    return $query
                        ->where('boundary_type', 'four');
                },
                'bowls as outs' => function ($query) {
                    return $query
                        ->whereNull('out_by')
                        ->whereNotNull('out_type');
                }
            ])
            ->first();
    }

    public function batting(User $user)
    {
        return Bowl::where('striker_id', $user->id)
            ->selectRaw('COUNT(*) AS balls_faced')
            ->selectRaw('SUM(run) AS runs')
            ->selectRaw("SUM(CASE WHEN side = 'on_side' THEN 1 END) AS on_sides")
            ->selectRaw("SUM(CASE WHEN side = 'off_side' THEN 1 END) AS off_sides")
            ->selectRaw("SUM(CASE WHEN boundary_type = 'four' THEN 1 END) AS fours")
            ->selectRaw("SUM(CASE WHEN boundary_type = 'six' THEN 1 END) AS sixes")
            ->first();
    }

    public function bowling(User $user)
    {
        return Bowl::join('overs', function ($join) use ($user) {
                $join
                    ->on('bowls.over_id', '=', 'overs.id')
                    ->where('overs.bowler_id', '=', $user->id);
            })
            ->selectRaw("COUNT(DISTINCT overs.id) AS overs")
            ->selectRaw('SUM(run + extra) AS runs')
            ->selectRaw("SUM(CASE WHEN run = 0 AND extra = 0 THEN 1 END) AS dots")
            ->selectRaw("SUM(CASE WHEN extra_type = 'nb' THEN 1 END) AS no_bowls")
            ->selectRaw("SUM(CASE WHEN extra_type = 'wd' THEN 1 END) AS wide_bowls")
            ->selectRaw("SUM(CASE WHEN out_type IS NOT NULL AND out_by IS NULL THEN 1 END) AS outs")
            ->selectRaw("SUM(CASE WHEN boundary_type = 'four' THEN 1 END) AS fours")
            ->selectRaw("SUM(CASE WHEN boundary_type = 'six' THEN 1 END) AS sixes")
            ->first();
    }
}
