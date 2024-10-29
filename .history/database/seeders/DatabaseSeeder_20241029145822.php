<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // $this->call(TicketSeeder::class);
        // $this->call(TicketItemSeeder::class);

        // $this->call(LeadsTableSeeder::class);
        // $this->call(OutletsTableSeeder::class);
        // $this->call(TicketActivitiesTableSeeder::class);
        $this->call(TicketCategoriesTableSeeder::class);
        $this->call(TicketItemsTableSeeder::class);
        $this->call(TicketsTableSeeder::class);
        $this->call(TicketStatusTableSeeder::class);
    }
}
