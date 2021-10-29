<?php

use Database\Seeders\StaffSeeder;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('staff')) {
            Schema::create('staff', function (Blueprint $table) {
                $table->id();
                $table->foreignId('team_id')->on('team');
                $table->string('first_name', 50);
                $table->string('last_name', 50);
                $table->enum('position', ['General Manager',]);
                $table->timestamps();
            });
        }

        Artisan::call('db:seed', [
            '--class' => StaffSeeder::class
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staff');
    }
}
