<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\CatalogueOil;
use App\Models\CatalogueAccessory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        CatalogueOil::factory(100)->create();
        CatalogueAccessory::factory(100)->create();
    }
}
