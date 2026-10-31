<?php

namespace Database\Seeders;

use App\Models\State;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('states')->delete();

        $states = [
            ['name' => 'Andhra Pradesh'], ['name' => 'Arunachal Pradesh'], ['name' => 'Assam'],
            ['name' => 'Bihar'], ['name' => 'Chhattisgarh'], ['name' => 'Goa'], ['name' => 'Gujarat'],
            ['name' => 'Haryana'], ['name' => 'Himachal Pradesh'], ['name' => 'Jharkhand'],
            ['name' => 'Karnataka'], ['name' => 'Kerala'], ['name' => 'Madhya Pradesh'],
            ['name' => 'Maharashtra'], ['name' => 'Manipur'], ['name' => 'Meghalaya'],
            ['name' => 'Mizoram'], ['name' => 'Nagaland'], ['name' => 'Odisha'], ['name' => 'Punjab'],
            ['name' => 'Rajasthan'], ['name' => 'Sikkim'], ['name' => 'Tamil Nadu'], ['name' => 'Telangana'],
            ['name' => 'Tripura'], ['name' => 'Uttar Pradesh'], ['name' => 'Uttarakhand'],
            ['name' => 'West Bengal'], ['name' => 'Delhi'], ['name' => 'Jammu & Kashmir']
        ];

        foreach ($states as $state) {
            State::create($state);
        }
    }
}
