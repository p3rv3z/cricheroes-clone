<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            [
                'first_name' => 'Shakib',
                'last_name' => 'Al',
                'middle_name' => 'Hasan',
                'date_of_birth' => '1987-03-24',
                'address' => 'Magura, Jessore',
                'gender' => 'male',
                'player_id' => '1001',
                'play_role' => 'Batsman All Rounder',
                'bat_style' => 'Left Handed Bat',
                'bowl_style' => 'Left-arm orthodox',
            ],
            [
                'first_name' => 'Tamim',
                'last_name' => 'Iqbal',
                'middle_name' => null,
                'date_of_birth' => '1989-03-20',
                'address' => 'Chittagong',
                'gender' => 'male',
                'player_id' => '1002',
                'play_role' => 'Batsman',
                'bat_style' => 'Left Handed Bat',
                'bowl_style' => null,
            ],
            [
                'first_name' => 'Mustafizur',
                'last_name' => 'Rahman',
                'middle_name' => null,
                'date_of_birth' => '1995-08-06',
                'address' => 'Satkhira',
                'gender' => 'male',
                'player_id' => '1003',
                'play_role' => 'Bowler',
                'bat_style' => 'Left Handed Bat',
                'bowl_style' => 'Left-arm fast-medium',
            ],
        ]);
    }
}
