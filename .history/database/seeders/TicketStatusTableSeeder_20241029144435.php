<?php

namespace Database\Seeders;

use App\Models\TicketStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TicketStatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TicketStatus::insert([
            [
                'title' => 'New',
                'step' => 1,
                'color' => 'blue',
            ],
            [
                'title' => 'Open',
                'step' => 2,
                'color' => 'green',
            ],
            [
                'title' => 'Overdue',
                'step' => 3,
                'color' => 'orange',
            ],
            [
                'title' => 'Closed',
                'step' => 4,
                'color' => 'stone',
            ],
            [
                'title' => 'Canceled',
                'step' => 5,
                'color' => 'yellow',
            ],
        ]);
    }
}
