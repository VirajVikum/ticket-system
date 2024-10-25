<?php

namespace Database\Seeders;

use App\Models\TicketItem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TicketItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 300; $i++) {
            
            TicketItem::create([
                'topic' => 'Issue with product A',
                'description' => 'Customer reported a problem with product A.',
                'lead_id' => 1,
                'ticket_category_id' => 2,
                'ticket_sub_category_id' => 5,
                'call_id' => 10,
                'tags' => 'issue, product',
                'outlet_id' => 1,
                'order_ref' => 'ORD12345',
                'ticket_status_id' => 1,
                'due_at' => now()->addDays(3),
                'bill_no' => 'BILL12345',
                'is_synced' => true,
                'synced_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ]);
        }
    }
}
