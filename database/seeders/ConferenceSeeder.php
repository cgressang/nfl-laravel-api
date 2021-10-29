<?php

namespace Database\Seeders;

use App\Models\Conference;
use Illuminate\Database\Seeder;

class ConferenceSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	$items = [
    		['id' => 1, 'name' => 'American Football Conference', 'name_abbr' => 'AFC'],
    		['id' => 2, 'name' => 'National Football Conference', 'name_abbr' => 'NFC'],
    	];

    	foreach ($items as $item) {
    		Conference::updateOrCreate($item);
    	}
    }
}
