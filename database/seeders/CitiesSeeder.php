<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert([
            ['city' => 'Alcalá'],
            ['city' => 'Andalucía'],
            ['city' => 'Armenia'],
            ['city' => 'Bogotá'],
            ['city' => 'Buga'],
            ['city' => 'Cali'],
            ['city' => 'Cartago'],
            ['city' => 'Circasia'],
            ['city' => 'Fresno'],
            ['city' => 'Jamundí'],
            ['city' => 'Lérida'],
            ['city' => 'Manizales'],
            ['city' => 'Mariquita'],
            ['city' => 'Palmira'],
            ['city' => 'Pereira'],
            ['city' => 'Pradera'],
            ['city' => 'Tuluá'],
            ['city' => 'Villa María'],
            ['city' => 'Yumbo'],
        ]);
    }
}
