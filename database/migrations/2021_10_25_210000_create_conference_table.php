<?php

use Database\Seeders\ConferenceSeeder;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConferenceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('conference')) {
            Schema::create('conference', function (Blueprint $table) {
                $table->id();
                $table->string('name', '50');
                $table->string('name_abbr', '3');
                $table->timestamps();
            });
        }

        Artisan::call('db:seed', [
            '--class' => ConferenceSeeder::class
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('conference');
    }
}
