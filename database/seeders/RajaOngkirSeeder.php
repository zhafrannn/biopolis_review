<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Province;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class RajaOngkirSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jsonProvince = file_get_contents(public_path('province_ongkir.json'));
        $provinces = json_decode($jsonProvince, true);

        $jsonCity = file_get_contents(public_path('city_ongkir.json'));
        $cities = json_decode($jsonCity, true);

        foreach ($provinces as $province) {
            Province::query()->updateOrCreate([
                'id' => $province['province_id'],
                'province_name' => $province['province']
            ]);
        }

        foreach ($cities as $city) {
            City::query()->updateOrCreate([
                'city_id' => $city['city_id'],
                'province_id' => $city['province_id'],
                'province_name' => $city['province'],
                'city_name' => $city['city_name'],
                'type' => $city['type'],
            ]);
        }
    }
}
