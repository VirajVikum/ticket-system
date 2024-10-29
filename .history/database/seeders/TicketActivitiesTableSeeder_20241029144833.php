<?php

namespace Database\Seeders;

use App\Models\TicketActivity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TicketActivitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TicketActivity::insert([
            [
                'ticket_id' => 1,
                'type' => 'Created',
                'comment' => null,
                'user_id' => 28,
            ],
            [
                'ticket_id' => 2,
                'type' => 'Created',
                'comment' => null,
                'user_id' => 28,
            ],
            [
                'ticket_id' => 5,
                'type' => 'Created',
                'comment' => null,
                'user_id' => 26,
            ],
            [
                'ticket_id' => 7,
                'type' => 'Created',
                'comment' => null,
                'user_id' => 28,
            ],
            [
                'ticket_id' => 8,
                'type' => 'Created',
                'comment' => null,
                'user_id' => 28,
            ],
        ]);
    }
}
