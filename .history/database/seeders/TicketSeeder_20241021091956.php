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
        
            for ($i = 1; $i <= 10000; $i++) {
                Ticket::create([
                    'title1' => 'complain ' . $i,
                    'title2' => 'customer care',
                    'content' => 'This is the content of ticket number ' . $i,
                    'contact' => '0755488759',
                    'status' => '0', // Random status between 0 and 3
                ]);
            }
      
    }
}