<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TicketsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tickets')->insert([
            [
                'topic' => 'Issue with Payment',
                'description' => 'Customer reported an issue with payment processing on the website.',
                'lead_id' => 1,
                'ticket_category_id' => 1,
                'ticket_sub_category_id' => 1,
                'call_id' => null,
                'tags' => json_encode(['payment', 'issue', 'customer']),
                'outlet_id' => null,
                'crm' => 1,
                'order_ref' => 'ORD12345',
                'ticket_status_id' => 2,
                'due_at' => now()->addDays(3),
                'bill_no' => 'BILL001',
                'is_synced' => 0,
                'synced_at' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            [
                'topic' => 'Technical Support Request',
                'description' => 'User needs help with software installation.',
                'lead_id' => 2,
                'ticket_category_id' => 2,
                'ticket_sub_category_id' => 3,
                'call_id' => null,
                'tags' => json_encode(['support', 'technical', 'installation']),
                'outlet_id' => 1,
                'crm' => 0,
                'order_ref' => null,
                'ticket_status_id' => 1,
                'due_at' => now()->addDays(1),
                'bill_no' => null,
                'is_synced' => 1,
                'synced_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            [
                'topic' => 'Product Inquiry',
                'description' => 'Customer wants more information about product features.',
                'lead_id' => null,
                'ticket_category_id' => 3,
                'ticket_sub_category_id' => null,
                'call_id' => null,
                'tags' => json_encode(['inquiry', 'product']),
                'outlet_id' => 2,
                'crm' => 1,
                'order_ref' => 'ORD67890',
                'ticket_status_id' => 3,
                'due_at' => now()->addDays(5),
                'bill_no' => 'BILL002',
                'is_synced' => 0,
                'synced_at' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
        ]);
    }
}
