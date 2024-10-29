<?php

namespace Database\Seeders;

use App\Models\Outlet;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OutletsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Outlet::insert([
            [
                'title' => 'Pannipitiya',
                'address_1' => null,
                'address_2' => null,
                'city' => null,
                'contact_no' => '001',
            ],
            [
                'title' => 'Rajagiriya',
                'address_1' => null,
                'address_2' => null,
                'city' => null,
                'contact_no' => '003',
            ],
            [
                'title' => 'Kotte',
                'address_1' => null,
                'address_2' => null,
                'city' => null,
                'contact_no' => '004',
            ],
            [
                'title' => 'Battaramulla',
                'address_1' => null,
                'address_2' => null,
                'city' => null,
                'contact_no' => '005',
            ],
            [
                'title' => 'Maharagama',
                'address_1' => null,
                'address_2' => null,
                'city' => null,
                'contact_no' => '006',
            ],
            [
                'title' => 'Kaduwela',
                'address_1' => null,
                'address_2' => null,
                'city' => null,
                'contact_no' => '007',
            ],
            [
                'title' => 'Nugegoda',
                'address_1' => null,
                'address_2' => null,
                'city' => null,
                'contact_no' => '008',
            ],
            [
                'title' => 'Piliyandala',
                'address_1' => null,
                'address_2' => null,
                'city' => null,
                'contact_no' => '009',
            ],
        ]);
    }
}
