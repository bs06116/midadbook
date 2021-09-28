<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Country;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = ['country 1', 'country 2', 'country 4'];

        foreach($countries as $country){
            Country::updateOrCreate(['name' => $country]);
        }
    }
}
