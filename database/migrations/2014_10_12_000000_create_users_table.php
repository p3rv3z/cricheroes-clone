<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('middle_name')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->text('address')->nullable();

            $table->string('player_id');
            $table->string('player_type')->nullable();
            $table->string('play_role')->nullable();
            $table->string('bat_style')->nullable();
            $table->string('bowl_style')->nullable();

            $table->string('height')->nullable();
            $table->string('weight')->nullable();
            $table->enum('gender', ['male', 'female', 'other']);
            $table->string('hair_style')->nullable();

            $table->foreignId('country_id')->nullable();
            $table->foreignId('city_id')->nullable();

            // $table->string('email')->unique();
            // $table->timestamp('email_verified_at')->nullable();
            // $table->string('password');
            // $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
