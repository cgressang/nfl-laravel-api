<?php

use Database\Seeders\CoachSeeder;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoachTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('coach')) {
            Schema::create('coach', function (Blueprint $table) {
                $table->id();
                $table->foreignId('team_id')->on('team');
                $table->string('first_name', 50);
                $table->string('last_name', 50);
                $table->enum('position', [
                    'Head Coach',
                    'Defensive Coordinator',
                    'Offensive Coordinator',
                    'Special Teams Coordinator',
                ]);
                $table->timestamps();
            });
        }

        Artisan::call('db:seed', [
            '--class' => CoachSeeder::class
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coach');
    }
}
