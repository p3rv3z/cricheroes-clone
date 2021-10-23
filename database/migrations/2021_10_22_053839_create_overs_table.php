<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('overs', function (Blueprint $table) {
            $table->id();
            $table
                ->foreignId('bowler_id')
                ->nullable()
                ->constrained('users')
                ->onUpdate('CASCADE')
                ->onDelete('SET NULL');

            $table
                ->foreignId('innings_id');
                // ->constrained('innings)
                // ->onUpdate('CASCADE')
                // ->onDelete('SET');

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
        Schema::dropIfExists('overs');
    }
}
