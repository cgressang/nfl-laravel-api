<?php

namespace Database\Seeders;

use App\Models\Coach;
use Illuminate\Database\Seeder;

class CoachSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	$items = [
			['id' => 1, 'team_id' => 1, 'first_name' => 'Kliff', 'last_name' => 'Kingsbury', 'position' => 'Head Coach',],
			['id' => 2, 'team_id' => 2, 'first_name' => 'Arthur', 'last_name' => 'Smith', 'position' => 'Head Coach',],
			['id' => 3, 'team_id' => 3, 'first_name' => 'John', 'last_name' => 'Harbaugh', 'position' => 'Head Coach',],
			['id' => 4, 'team_id' => 4, 'first_name' => 'Sean', 'last_name' => 'McDermott', 'position' => 'Head Coach',],
			['id' => 5, 'team_id' => 5, 'first_name' => 'Matt', 'last_name' => 'Rhule', 'position' => 'Head Coach',],
			['id' => 6, 'team_id' => 6, 'first_name' => 'Matt', 'last_name' => 'Nagy', 'position' => 'Head Coach',],
			['id' => 7, 'team_id' => 7, 'first_name' => 'Zac', 'last_name' => 'Taylor', 'position' => 'Head Coach',],
			['id' => 8, 'team_id' => 8, 'first_name' => 'Kevin', 'last_name' => 'Stefanski', 'position' => 'Head Coach',],
			['id' => 9, 'team_id' => 9, 'first_name' => 'Mike', 'last_name' => 'McCarthy', 'position' => 'Head Coach',],
			['id' => 10, 'team_id' => 10, 'first_name' => 'Vic', 'last_name' => 'Fangio', 'position' => 'Head Coach',],
			['id' => 11, 'team_id' => 11, 'first_name' => 'Dan', 'last_name' => 'Campbell', 'position' => 'Head Coach',],
			['id' => 12, 'team_id' => 12, 'first_name' => 'Matt', 'last_name' => 'LaFleur', 'position' => 'Head Coach',],
			['id' => 13, 'team_id' => 13, 'first_name' => 'David', 'last_name' => 'Culley', 'position' => 'Head Coach',],
			['id' => 14, 'team_id' => 14, 'first_name' => 'Frank', 'last_name' => 'Reich', 'position' => 'Head Coach',],
			['id' => 15, 'team_id' => 15, 'first_name' => 'Urban', 'last_name' => 'Meyer', 'position' => 'Head Coach',],
			['id' => 16, 'team_id' => 16, 'first_name' => 'Andy', 'last_name' => 'Reid', 'position' => 'Head Coach',],
			['id' => 17, 'team_id' => 17, 'first_name' => 'Rich', 'last_name' => 'Bisaccia', 'position' => 'Head Coach',],
			['id' => 18, 'team_id' => 18, 'first_name' => 'Brandon', 'last_name' => 'Staley', 'position' => 'Head Coach',],
			['id' => 19, 'team_id' => 19, 'first_name' => 'Sean', 'last_name' => 'McVay', 'position' => 'Head Coach',],
			['id' => 20, 'team_id' => 20, 'first_name' => 'Brian', 'last_name' => 'Flores', 'position' => 'Head Coach',],
			['id' => 21, 'team_id' => 21, 'first_name' => 'Mike', 'last_name' => 'Zimmer', 'position' => 'Head Coach',],
			['id' => 22, 'team_id' => 22, 'first_name' => 'Bill', 'last_name' => 'Belichick', 'position' => 'Head Coach',],
			['id' => 23, 'team_id' => 23, 'first_name' => 'Sean', 'last_name' => 'Payton', 'position' => 'Head Coach',],
			['id' => 24, 'team_id' => 24, 'first_name' => 'Joe', 'last_name' => 'Judge', 'position' => 'Head Coach',],
			['id' => 25, 'team_id' => 25, 'first_name' => 'Robert', 'last_name' => 'Saleh', 'position' => 'Head Coach',],
			['id' => 26, 'team_id' => 26, 'first_name' => 'Nick', 'last_name' => 'Sirianni', 'position' => 'Head Coach',],
			['id' => 27, 'team_id' => 27, 'first_name' => 'Mike', 'last_name' => 'Tomlin', 'position' => 'Head Coach',],
			['id' => 28, 'team_id' => 28, 'first_name' => 'Kyle', 'last_name' => 'Shanahan', 'position' => 'Head Coach',],
			['id' => 29, 'team_id' => 29, 'first_name' => 'Pete', 'last_name' => 'Carroll', 'position' => 'Head Coach',],
			['id' => 30, 'team_id' => 30, 'first_name' => 'Bruce', 'last_name' => 'Arians', 'position' => 'Head Coach',],
			['id' => 31, 'team_id' => 31, 'first_name' => 'Mike', 'last_name' => 'Vrabel', 'position' => 'Head Coach',],
			['id' => 32, 'team_id' => 32, 'first_name' => 'Ron', 'last_name' => 'Rivera', 'position' => 'Head Coach',],
    	];

    	foreach ($items as $item) {
    		Coach::updateOrCreate($item);
    	}
    }
}















