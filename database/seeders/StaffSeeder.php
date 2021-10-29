<?php

namespace Database\Seeders;

use App\Models\Staff;
use Illuminate\Database\Seeder;

class StaffSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	$items = [
			['id' => 1, 'team_id' => 1, 'first_name' =>  'Steve', 'last_name' => 'Keim', 'position' => 'General Manager',],
			['id' => 2, 'team_id' => 2, 'first_name' =>  'Terry', 'last_name' => 'Fontenot', 'position' => 'General Manager',],
			['id' => 3, 'team_id' => 3, 'first_name' =>  'Eric', 'last_name' => 'DeCosta', 'position' => 'General Manager',],
			['id' => 4, 'team_id' => 4, 'first_name' =>  'Brandon', 'last_name' => 'Beane', 'position' => 'General Manager',],
			['id' => 5, 'team_id' => 5, 'first_name' =>  'Scott', 'last_name' => 'Fitterer', 'position' => 'General Manager',],
			['id' => 6, 'team_id' => 6, 'first_name' =>  'Ryan', 'last_name' => 'Pace', 'position' => 'General Manager',],
			['id' => 7, 'team_id' => 7, 'first_name' =>  'Duke', 'last_name' => 'Tobin', 'position' => 'General Manager',],
			['id' => 8, 'team_id' => 8, 'first_name' =>  'Andrew', 'last_name' => 'Berry', 'position' => 'General Manager',],
			['id' => 9, 'team_id' => 9, 'first_name' =>  'Jerry', 'last_name' => 'Jones', 'position' => 'General Manager',],
			['id' => 10, 'team_id' => 10, 'first_name' =>  'George', 'last_name' => 'Paton', 'position' => 'General Manager',],
			['id' => 11, 'team_id' => 11, 'first_name' =>  'Brad', 'last_name' => 'Holmes', 'position' => 'General Manager',],
			['id' => 12, 'team_id' => 12, 'first_name' =>  'Brian', 'last_name' => 'Gutekunst', 'position' => 'General Manager',],
			['id' => 13, 'team_id' => 13, 'first_name' =>  'Nick', 'last_name' => 'Caserio', 'position' => 'General Manager',],
			['id' => 14, 'team_id' => 14, 'first_name' =>  'Chris', 'last_name' => 'Ballard', 'position' => 'General Manager',],
			['id' => 15, 'team_id' => 15, 'first_name' =>  'Trent', 'last_name' => 'Baalke', 'position' => 'General Manager',],
			['id' => 16, 'team_id' => 16, 'first_name' =>  'Brett', 'last_name' => 'Veach', 'position' => 'General Manager',],
			['id' => 17, 'team_id' => 17, 'first_name' =>  'Mike', 'last_name' => 'Mayock', 'position' => 'General Manager',],
			['id' => 18, 'team_id' => 18, 'first_name' =>  'Tom', 'last_name' => 'Telesco', 'position' => 'General Manager',],
			['id' => 19, 'team_id' => 19, 'first_name' =>  'Les', 'last_name' => 'Snead', 'position' => 'General Manager',],
			['id' => 20, 'team_id' => 20, 'first_name' =>  'Chris', 'last_name' => 'Grier', 'position' => 'General Manager',],
			['id' => 21, 'team_id' => 21, 'first_name' =>  'Rick', 'last_name' => 'Spielman', 'position' => 'General Manager',],
			['id' => 22, 'team_id' => 22, 'first_name' =>  'Bill', 'last_name' => 'Belichick', 'position' => 'General Manager',],
			['id' => 23, 'team_id' => 23, 'first_name' =>  'Mickey', 'last_name' => 'Loomis', 'position' => 'General Manager',],
			['id' => 24, 'team_id' => 24, 'first_name' =>  'Dave', 'last_name' => 'Gettleman', 'position' => 'General Manager',],
			['id' => 25, 'team_id' => 25, 'first_name' =>  'Joe', 'last_name' => 'Douglas', 'position' => 'General Manager',],
			['id' => 26, 'team_id' => 26, 'first_name' =>  'Howie', 'last_name' => 'Roseman', 'position' => 'General Manager',],
			['id' => 27, 'team_id' => 27, 'first_name' =>  'Kevin', 'last_name' => 'Colbert', 'position' => 'General Manager',],
			['id' => 28, 'team_id' => 28, 'first_name' =>  'John', 'last_name' => 'Lynch', 'position' => 'General Manager',],
			['id' => 29, 'team_id' => 29, 'first_name' =>  'John', 'last_name' => 'Schneider', 'position' => 'General Manager',],
			['id' => 30, 'team_id' => 30, 'first_name' =>  'Jason', 'last_name' => 'Licht', 'position' => 'General Manager',],
			['id' => 31, 'team_id' => 31, 'first_name' =>  'Jon', 'last_name' => 'Robinson', 'position' => 'General Manager',],
			['id' => 32, 'team_id' => 32, 'first_name' =>  'Martin', 'last_name' => 'Mayhew', 'position' => 'General Manager',],
    	];

    	foreach ($items as $item) {
    		Staff::updateOrCreate($item);
    	}
    }
}
