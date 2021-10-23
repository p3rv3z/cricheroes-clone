<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBowlsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bowls', function (Blueprint $table) {
            $table->id();

            $table
                ->foreignId('over_id')
                ->constrained('overs')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
            $table->float('bowl_speed')->nullable();
            $table->string('bowl_type')->nullable();

            $table->integer('run')->default(0);
            $table->integer('extra')->default(0);
            $table->enum('extra_type', ['nb', 'wd', 'b', 'lb', 'pen'])->nullable();
            $table->enum('side', ['on_side', 'off_side', 'straight'])->nullable();
            $table->enum('boundary_type', ['six', 'four'])->nullable();
            $table
                ->foreignId('striker_id')
                ->nullable()
                ->constrained('users', 'id')
                ->onUpdate('CASCADE')
                ->onDelete('SET NULL');


            $table->string('out_type')->nullable();
            $table
                ->integer('out_by')
                ->nullable()
                ->constrained('users', 'id')
                ->onUpdate('CASCADE')
                ->onDelete('SET NULL');
            $table
                ->integer('assist_by')
                ->nullable()
                ->constrained('users', 'id')
                ->onUpdate('CASCADE')
                ->onDelete('SET NULL');

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
        Schema::dropIfExists('bowl');
    }
}
