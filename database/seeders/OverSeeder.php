<?php

namespace Database\Seeders;

use App\Models\Over;
use Illuminate\Database\Seeder;

class OverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Over::insert([
            [
                'bowler_id' => 1,
                'innings_id' => 1
            ],
            [
                'bowler_id' => 3,
                'innings_id' => 1
            ],
            [
                'bowler_id' => 1,
                'innings_id' => 1
            ],
            [
                'bowler_id' => 3,
                'innings_id' => 1
            ],
            [
                'bowler_id' => 1,
                'innings_id' => 1
            ],
            [
                'bowler_id' => 3,
                'innings_id' => 1
            ],
        ]);
    }
}
