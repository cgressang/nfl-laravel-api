<?php

use Database\Seeders\OwnerSeeder;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOwnerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('owner')) {
            Schema::create('owner', function (Blueprint $table) {
                $table->id();
                $table->foreignId('team_id')->on('team');
                $table->string('first_name', 50);
                $table->string('last_name', 50);
                $table->timestamps();
            });
        }

        Artisan::call('db:seed', [
            '--class' => OwnerSeeder::class
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('owner');
    }
}
