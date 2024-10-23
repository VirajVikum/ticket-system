<?php

namespace Database\Seeders;

use App\Models\Ticket;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
            for ($i = 1; $i <= 10; $i++) {
                Ticket::create([
                    'title1' => 'Sample Ticket ' . $i,
                    'title2' => 'Ticket Subtitle ' . $i,
                    'content' => 'This is the content of ticket number ' . $i,
                    'contact' => 'user' . $i . '@example.com',
                    'status' => rand(0, 3), // Random status between 0 and 3
                ]);
      
    }
}
