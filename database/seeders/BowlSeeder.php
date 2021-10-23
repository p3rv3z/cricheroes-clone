<?php

namespace Database\Seeders;

use App\Models\Bowl;
use Illuminate\Database\Seeder;

class BowlSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bowl::insert([
            [
                'over_id' => 1,
                'bowl_speed' => 80,
                'bowl_type' => null,

                'run' => 2,
                'extra' => 0,
                'extra_type' => null,
                'boundary_type' => null,
                'side' => 'off_side',
                'striker_id' => 1,

                'out_type' => null,
                'out_by' => null,
                'assist_by' => null,
            ],
            [
                'over_id' => 1,
                'bowl_speed' => 80.5,
                'bowl_type' => null,

                'run' => 1,
                'extra' => 1,
                'extra_type' => 'nb',
                'boundary_type' => null,
                'side' => 'off_side',
                'striker_id' => 1,

                'out_type' => null,
                'out_by' => null,
                'assist_by' => null,
            ],
            [
                'over_id' => 1,
                'bowl_speed' => 80.5,
                'bowl_type' => null,

                'run' => 1,
                'extra' => 0,
                'extra_type' => null,
                'boundary_type' => null,
                'side' => 'on_side',
                'striker_id' => 1,

                'out_type' => null,
                'out_by' => null,
                'assist_by' => null,
            ],
            [
                'over_id' => 1,
                'bowl_speed' => 80,
                'bowl_type' => null,

                'run' => 0,
                'extra' => 0,
                'extra_type' => null,
                'boundary_type' => null,
                'side' => null,
                'striker_id' => 2,

                'out_type' => null,
                'out_by' => null,
                'assist_by' => null,
            ],
            [
                'over_id' => 1,
                'bowl_speed' => 70,
                'bowl_type' => null,

                'run' => 6,
                'extra' => 0,
                'extra_type' => null,
                'boundary_type' => 'six',
                'side' => 'on_side',
                'striker_id' => 2,

                'out_type' => null,
                'out_by' => null,
                'assist_by' => null,
            ],
            [
                'over_id' => 1,
                'bowl_speed' => 80,
                'bowl_type' => null,

                'run' => 1,
                'extra' => 0,
                'extra_type' => null,
                'boundary_type' => null,
                'side' => 'off_side',
                'striker_id' => 2,

                'out_type' => null,
                'out_by' => null,
                'assist_by' => null,
            ],
            [
                'over_id' => 1,
                'bowl_speed' => 80,
                'bowl_type' => null,

                'run' => 0,
                'extra' => 0,
                'extra_type' => null,
                'boundary_type' => null,
                'side' => null,
                'striker_id' => 1,

                'out_type' => 'bowled',
                'out_by' => null,
                'assist_by' => null,
            ],

            // over 2 start
            [
                'over_id' => 2,
                'bowl_speed' => 80,
                'bowl_type' => null,

                'run' => 2,
                'extra' => 0,
                'extra_type' => null,
                'boundary_type' => null,
                'side' => 'off_side',
                'striker_id' => 1,

                'out_type' => null,
                'out_by' => null,
                'assist_by' => null,
            ],
            [
                'over_id' => 2,
                'bowl_speed' => 80.5,
                'bowl_type' => null,

                'run' => 0,
                'extra' => 1,
                'extra_type' => 'wd',
                'boundary_type' => null,
                'side' => 'off_side',
                'striker_id' => 1,

                'out_type' => null,
                'out_by' => null,
                'assist_by' => null,
            ],
            [
                'over_id' => 2,
                'bowl_speed' => 80.5,
                'bowl_type' => null,

                'run' => 1,
                'extra' => 0,
                'extra_type' => null,
                'boundary_type' => null,
                'side' => 'on_side',
                'striker_id' => 1,

                'out_type' => null,
                'out_by' => null,
                'assist_by' => null,
            ],
            [
                'over_id' => 2,
                'bowl_speed' => 80,
                'bowl_type' => null,

                'run' => 0,
                'extra' => 0,
                'extra_type' => null,
                'boundary_type' => null,
                'side' => null,
                'striker_id' => 2,

                'out_type' => null,
                'out_by' => null,
                'assist_by' => null,
            ],
            [
                'over_id' => 2,
                'bowl_speed' => 70,
                'bowl_type' => null,

                'run' => 4,
                'extra' => 0,
                'extra_type' => null,
                'boundary_type' => 'four',
                'side' => 'on_side',
                'striker_id' => 2,

                'out_type' => null,
                'out_by' => null,
                'assist_by' => null,
            ],
            [
                'over_id' => 2,
                'bowl_speed' => 80,
                'bowl_type' => null,

                'run' => 1,
                'extra' => 0,
                'extra_type' => null,
                'boundary_type' => null,
                'side' => 'off_side',
                'striker_id' => 2,

                'out_type' => null,
                'out_by' => null,
                'assist_by' => null,
            ],
            [
                'over_id' => 2,
                'bowl_speed' => 80,
                'bowl_type' => null,

                'run' => 0,
                'extra' => 0,
                'extra_type' => null,
                'boundary_type' => null,
                'side' => null,
                'striker_id' => 1,

                'out_type' => 'bowled',
                'out_by' => null,
                'assist_by' => null,
            ],
        ]);
    }
}
