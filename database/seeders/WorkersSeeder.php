<?php

namespace Database\Seeders;

use App\Models\Worker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WorkersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 21; $i++){
            $data = [
                'name' => "Worker name $i",
                'surname' => "Worker surname $i",
                'email' => "Worker email $i",
                'phone_number' => "Worker number $i",
                'company' => "Worker company $i"
            ];
            Worker::insert($data);
        }
    }
}
