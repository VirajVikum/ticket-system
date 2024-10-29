<?php

namespace Database\Seeders;

use App\Models\TicketCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TicketCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TicketCategory::insert([
            [
                'title' => 'Complaint',
            ],
            [
                'title' => 'Inquiry',
            ],
            [
                'title' => 'Order',
            ],
        ]);
    }
}
