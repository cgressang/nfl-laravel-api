<?php

namespace Database\Seeders;

use App\Models\Stadium;
use Illuminate\Database\Seeder;

class StadiumSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            ['id' => 1, 'name' => 'State Farm Stadium',],
            ['id' => 2, 'name' => 'Mercedes-Benz Stadium',],
            ['id' => 3, 'name' => 'M&T Bank Stadium',],
            ['id' => 4, 'name' => 'Highmark Stadium',],
            ['id' => 5, 'name' => 'Bank of America Stadium',],
            ['id' => 6, 'name' => 'Soldier Field',],
            ['id' => 7, 'name' => 'Paul Brown Stadium',],
            ['id' => 8, 'name' => 'FirstEnergy Stadium',],
            ['id' => 9, 'name' => 'AT&T Stadium',],
            ['id' => 10, 'name' => 'Empower Field at Mile High',],
            ['id' => 11, 'name' => 'Ford Field',],
            ['id' => 12, 'name' => 'Lambeau Field',],
            ['id' => 13, 'name' => 'NRG Stadium',],
            ['id' => 14, 'name' => 'Lucas Oil Stadium',],
            ['id' => 15, 'name' => 'TIAA Bank Field',],
            ['id' => 16, 'name' => 'Arrowhead Stadium',],
            ['id' => 17, 'name' => 'Allegiant Stadium',],
            ['id' => 18, 'name' => 'SoFi Stadium',],
            ['id' => 19, 'name' => 'Hard Rock Stadium',],
            ['id' => 20, 'name' => 'U.S. Bank Stadium',],
            ['id' => 21, 'name' => 'Gillette Stadium',],
            ['id' => 22, 'name' => 'Caesars Superdome',],
            ['id' => 23, 'name' => 'MetLife Stadium',],
            ['id' => 24, 'name' => 'Lincoln Financial Field',],
            ['id' => 25, 'name' => 'Heinz Field',],
            ['id' => 26, 'name' => "Levi's Stadium",],
            ['id' => 27, 'name' => 'Lumen Field',],
            ['id' => 28, 'name' => 'Raymond James Stadium',],
            ['id' => 29, 'name' => 'Nissan Stadium',],
            ['id' => 30, 'name' => 'FedExField',],
        ];

        foreach ($items as $item) {
            Stadium::updateOrCreate($item);
        }
    }
}
