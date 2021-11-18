<?php

namespace Database\Seeders;

use App\Models\File;
use Illuminate\Database\Seeder;

class FilesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => 'poland_flag.png','path' => 'uploaded/poland.png', 'country_id' => 1, 'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
            ['name' => 'germany_flag.png','path' => 'uploaded/germany.png', 'country_id' => 2, 'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
            ['name' => 'england_flag.png','path' => 'uploaded/england.png', 'country_id' => 3, 'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
            ['name' => 'argentina_flag.png','path' => 'uploaded/argentina.png', 'country_id' => 4, 'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
            ['name' => 'france_flag.png','path' => 'uploaded/france.png', 'country_id' => 5, 'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
        ];
        File::insert($data);
    }
}
