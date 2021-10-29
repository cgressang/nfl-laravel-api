<?php

namespace Database\Seeders;

use App\Models\Owner;
use Illuminate\Database\Seeder;

class OwnerSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            ['id'  => 1, 'team_id' => 1, 'first_name' => 'Bill', 'last_name' => 'Bidwell',],
            ['id'  => 2, 'team_id' => 2, 'first_name' => 'Auther', 'last_name' => 'Blank',],
            ['id'  => 3, 'team_id' => 3, 'first_name' => 'Steve', 'last_name' => 'Bisciotti',],
            ['id'  => 4, 'team_id' => 4, 'first_name' => 'Kim', 'last_name' => 'Pegula',],
            ['id'  => 5, 'team_id' => 4, 'first_name' => 'Terry', 'last_name' => 'Pegula',],
            ['id'  => 6, 'team_id' => 5, 'first_name' => 'David', 'last_name' => 'Tepper',],
            ['id'  => 7, 'team_id' => 6, 'first_name' => 'Virginia', 'last_name' => 'Halas McCaskey',],
            ['id'  => 8, 'team_id' => 7, 'first_name' => 'Mike', 'last_name' => 'Brown',],
            ['id'  => 9, 'team_id' => 8, 'first_name' => 'Jimmy', 'last_name' => 'Haslam',],
            ['id'  => 10, 'team_id' => 8, 'first_name' => 'Dee', 'last_name' => 'Haslam',],
            ['id'  => 11, 'team_id' => 9, 'first_name' => 'Jerry', 'last_name' => 'Jones',],
            ['id'  => 12, 'team_id' => 10, 'first_name' => 'Joe', 'last_name' => 'Ellis',],
            ['id'  => 13, 'team_id' => 11, 'first_name' => 'Sheila', 'last_name' => 'Ford Hamp',],
            ['id'  => 14, 'team_id' => 12, 'first_name' => 'Green Bay', 'last_name' => 'Packers, Inc',],
            ['id'  => 15, 'team_id' => 13, 'first_name' => 'Janice', 'last_name' => 'McNair',],
            ['id'  => 16, 'team_id' => 14, 'first_name' => 'Jim', 'last_name' => 'Irsay',],
            ['id'  => 17, 'team_id' => 15, 'first_name' => 'Shahid', 'last_name' => 'Khan',],
            ['id'  => 18, 'team_id' => 16, 'first_name' => 'Clark', 'last_name' => 'Hunt',],
            ['id'  => 19, 'team_id' => 17, 'first_name' => 'Carol', 'last_name' => 'Davis',],
            ['id'  => 20, 'team_id' => 17, 'first_name' => 'Mark', 'last_name' => 'Davis',],
            ['id'  => 21, 'team_id' => 18, 'first_name' => 'Dean', 'last_name' => 'Spanos',],
            ['id'  => 22, 'team_id' => 19, 'first_name' => 'Stan', 'last_name' => 'Kroenke',],
            ['id'  => 23, 'team_id' => 20, 'first_name' => 'Stephen', 'last_name' => 'Ross',],
            ['id'  => 24, 'team_id' => 21, 'first_name' => 'Zygi', 'last_name' => 'Wilf',],
            ['id'  => 25, 'team_id' => 22, 'first_name' => 'Robert', 'last_name' => 'Kraft',],
            ['id'  => 26, 'team_id' => 23, 'first_name' => 'Gayle', 'last_name' => 'Benson',],
            ['id'  => 27, 'team_id' => 24, 'first_name' => 'John', 'last_name' => 'Mara',],
            ['id'  => 28, 'team_id' => 24, 'first_name' => 'Steve', 'last_name' => 'Tisch',],
            ['id'  => 29, 'team_id' => 25, 'first_name' => 'Robert', 'last_name' => 'Wood Johnson IV',],
            ['id'  => 30, 'team_id' => 25, 'first_name' => 'Christopher', 'last_name' => 'Wold Johnson',],
            ['id'  => 31, 'team_id' => 26, 'first_name' => 'Jeffery', 'last_name' => 'Lurie',],
            ['id'  => 32, 'team_id' => 27, 'first_name' => 'Art', 'last_name' => 'Rooney II',],
            ['id'  => 33, 'team_id' => 28, 'first_name' => 'Denise', 'last_name' => 'DeBartolo York',],
            ['id'  => 34, 'team_id' => 28, 'first_name' => 'Jed', 'last_name' => 'York',],
            ['id'  => 35, 'team_id' => 29, 'first_name' => 'Jody', 'last_name' => 'Allen',],
            ['id'  => 36, 'team_id' => 30, 'first_name' => 'Bryan', 'last_name' => 'Glazer',],
            ['id'  => 37, 'team_id' => 31, 'first_name' => 'Amy', 'last_name' => 'Adams Strunk',],
            ['id'  => 39, 'team_id' => 32, 'first_name' => 'Dan', 'last_name' => 'Snyder',],
        ];

        foreach ($items as $item) {
            Owner::updateOrCreate($item);
        }
    }
}
