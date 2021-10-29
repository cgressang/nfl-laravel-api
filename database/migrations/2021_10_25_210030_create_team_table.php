<?php

use Database\Seeders\TeamSeeder;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('team')) {
            Schema::create('team', function (Blueprint $table) {
                $table->id();
                $table->foreignId('stadium_id')->on('stadium');
                $table->foreignId('conference_id')->on('conference');
                $table->foreignId('division_id')->on('division');
                $table->string('location', 25);
                $table->string('name', 25);
                $table->string('name_abbr', 3);
                $table->year('established');
                $table->string('site_url', 2083);
                $table->timestamps();
            });
        }

        Artisan::call('db:seed', [
            '--class' => TeamSeeder::class
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('team');
    }
}
