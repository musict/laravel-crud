<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompaniesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 11; $i++){
            $data = [
                'name' => "Company name $i",
                'nip' => "Company nip $i",
                'address' => "Company address $i",
                'city' => "Company city $i",
                'postal_code' => "Company code $i"
            ];
            Company::insert($data);
        }
    }
}
