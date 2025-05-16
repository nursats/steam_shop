<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Knife;

class KnifeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Knife::create([
            'name' => 'Shadow Dagger | Fade',
            'description' => 'Красивый нож с градиентной окраской.',
            'price' => 15999.00,
            'image' => 'shadow_dagger_fade.jpg',
        ]);

        Knife::create([
            'name' => 'Karambit | Doppler',
            'description' => 'Эпический нож для коллекционеров.',
            'price' => 28999.00,
            'image' => 'karambit_doppler.jpg',
        ]);
    }
}
