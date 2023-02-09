<?php

namespace Database\Seeders;

use App\Models\BodyStyle;
use Illuminate\Database\Seeder;

class BodyStyleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bodyStyles = [
            'Hatchback',
            'Minivan',
            'CUV',
            'Coupe',
            'Supercar',
            'Cabriolet',
            'Sedan',
            'Campervan',
            'Electric',
            'Micro',
            'SUV',
            'Roadster',
        ];

        foreach ($bodyStyles as $bodyStyle) {
            BodyStyle::create(['name' => $bodyStyle]);
        }
    }
}
