<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;

final class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Country::create([
            'name' => 'Việt Nam',
            'lat' => 14.058324,
            'long' => 108.277199,
        ]);
        Country::create([
            'name' => 'Nhật Bản',
            'lat' => 36.204824,
            'long' => 138.252924,
        ]);
    }
}
