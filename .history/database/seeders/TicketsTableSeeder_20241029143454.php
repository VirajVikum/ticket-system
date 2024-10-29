<?php

namespace Database\Seeders;

use App\Models\Ticket;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TicketsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 3000; $i++) {
            Ticket::insert([
                [
                    'topic' => 'Test',
                    'description' => 'Test',
                    'lead_id' => 1,
                    'ticket_category_id' => 1,
                    'ticket_sub_category_id' => 2,
                    'call_id' => null,
                    'tags' => json_encode(['Technical']),
                    'outlet_id' => 3,
                    'crm' => 1,
                    'order_ref' => null,
                    'ticket_status_id' => 4,
                    'due_at' => null,
                    'bill_no' => null,
                    'is_synced' => null,
                    'synced_at' => null,
                ],
                [
                    'topic' => 'Late attendant',
                    'description' => 'Wait 3 weeks',
                    'lead_id' => 2556,
                    'ticket_category_id' => 1,
                    'ticket_sub_category_id' => 2,
                    'call_id' => null,
                    'tags' => json_encode(['Product Service']),
                    'outlet_id' => 3,
                    'crm' => 1,
                    'order_ref' => null,
                    'ticket_status_id' => 4,
                    'due_at' => null,
                    'bill_no' => null,
                    'is_synced' => null,
                    'synced_at' => null,
                ],
                [
                    'topic' => 'Desc ab',
                    'description' => 'A',
                    'lead_id' => 2553,
                    'ticket_category_id' => 2,
                    'ticket_sub_category_id' => 4,
                    'call_id' => null,
                    'tags' => json_encode(['Singhe']),
                    'outlet_id' => 1,
                    'crm' => 1,
                    'order_ref' => null,
                    'ticket_status_id' => 4,
                    'due_at' => null,
                    'bill_no' => null,
                    'is_synced' => null,
                    'synced_at' => null,
                ],
            ]);
    }
    }
}
