<?php

namespace Database\Seeders;

use App\Models\CountryVisitor;
use Illuminate\Database\Seeder;

class CountryVisitorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CountryVisitor::factory()->count(100)->create();
    }
}
