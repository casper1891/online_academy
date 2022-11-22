<?php

namespace Database\Seeders;


use App\Models\Manager;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class ManagerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Manager::create([
            'name'=>'baha obeid',
            'email'=>'baha1891@gmail.com',
            'password'=>Hash::make('123456')
        ]);
    }
}
