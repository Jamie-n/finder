<?php

namespace Database\Seeders;

use App\Models\BodyStyle;
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
            ColourSeeder::class,
            ManufacturerSeeder::class,
            ModelSeeder::class,
            YearSeeder::class,
            BodyStyleSeeder::class,
        ]);
    }
}
