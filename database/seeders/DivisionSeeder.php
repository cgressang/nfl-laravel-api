<?php

namespace Database\Seeders;

use App\Models\Division;
use Illuminate\Database\Seeder;

class DivisionSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $items = [
        	['id' => 1, 'conference_id' => '1', 'name' => 'East'],
        	['id' => 2, 'conference_id' => '1', 'name' => 'North'],
        	['id' => 3, 'conference_id' => '1', 'name' => 'South'],
        	['id' => 4, 'conference_id' => '1', 'name' => 'West'],
        	['id' => 5, 'conference_id' => '2', 'name' => 'East'],
        	['id' => 6, 'conference_id' => '2', 'name' => 'North'],
        	['id' => 7, 'conference_id' => '2', 'name' => 'South'],
        	['id' => 8, 'conference_id' => '2', 'name' => 'West'],
        ];

        foreach ($items as $item) {
        	Division::updateOrCreate($item);
        }
    }
}
