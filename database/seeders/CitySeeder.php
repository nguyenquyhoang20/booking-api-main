<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;

final class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        City::create([
            'country_id' => 1,
            'name' => 'Hà Nội',
            'lat' => 21.028511,
            'long' => 105.804817,
        ]);

        City::create([
            'country_id' => 1,
            'name' => 'Đà Lạt',
            'lat' => 11.940419,
            'long' => 108.458313,
        ]);
    }
}
