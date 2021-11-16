<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;

class CountriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => 'Poland', 'flag' => 'https://falski.info/images/UPOMINKI/dvpl_gif.jpg', 'language' =>'Polish' ],
            ['name' => 'Germany', 'flag' => 'https://upload.wikimedia.org/wikipedia/en/thumb/b/ba/Flag_of_Germany.svg/383px-Flag_of_Germany.svg.png', 'language' =>'German' ],
            ['name' => 'England', 'flag' => 'https://upload.wikimedia.org/wikipedia/en/thumb/a/ae/Flag_of_the_United_Kingdom.svg/1200px-Flag_of_the_United_Kingdom.svg.png', 'language' =>'English' ],
            ['name' => 'Argentina', 'flag' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/1a/Flag_of_Argentina.svg/240px-Flag_of_Argentina.svg.png', 'language' => 'Spanish' ],
            ['name' => 'France', 'flag' => 'https://sklep.reklamex.com.pl/images/EUROPA/FRANCJA.jpg', 'language' => 'French' ],
        ];
        Country::insert($data);
    }
}
