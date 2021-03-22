<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            PermissionsSeeder::class,
            CitiesSeeder::class,
            StatusSeeder::class,
            ChannelsSeeder::class,
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Juan Zapata',
            'id_card' => '1010112139',
        ])->assignRole('admin');

        \App\Models\User::factory()->create([
            'name' => 'Vanesa Morales',
            'id_card' => '0000000000',
        ])->assignRole('consulters');

        \App\Models\User::factory()->create([
            'name' => 'Asesor TAT',
            'id_card' => '1111111111',
        ])->assignRole('advisor');

        \App\Models\User::factory()->create([
            'name' => 'Asesor PDV',
            'id_card' => '2222222222',
        ])->assignRole('advisor');

        \App\Models\User::factory(10)->create();
        \App\Models\Advisor::factory(10)->create();
    }
}
