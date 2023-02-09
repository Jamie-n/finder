<?php

namespace Database\Seeders;

use App\Models\Model;
use Illuminate\Database\Seeder;

class ModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::factory()
            ->count(10)
            ->create();
    }
}
