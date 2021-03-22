<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChannelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('channels')->insert([
            ['channel' => 'Canal TAT'],
            ['channel' => 'Canal Tropas'],
            ['channel' => 'Punto de Venta'],
        ]);
    }
}
