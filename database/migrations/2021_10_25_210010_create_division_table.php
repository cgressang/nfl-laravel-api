<?php

use Database\Seeders\DivisionSeeder;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDivisionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('division')) {
            Schema::create('division', function (Blueprint $table) {
                $table->id();
                $table->foreignId('conference_id')->on('conference');
                $table->string('name', 20);
                $table->timestamps();
            });
        }

        Artisan::call('db:seed', [
            '--class' => DivisionSeeder::class
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('division');
    }
}
