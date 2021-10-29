<?php

use Database\Seeders\StadiumSeeder;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStadiumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('stadium')) {
            Schema::create('stadium', function (Blueprint $table) {
                $table->id();
                $table->string('name', 50);
                $table->timestamps();
            });
        }

        Artisan::call('db:seed', [
            '--class' => StadiumSeeder::class
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stadium');
    }
}
