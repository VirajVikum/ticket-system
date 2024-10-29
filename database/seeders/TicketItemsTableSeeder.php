<?php

namespace Database\Seeders;

use App\Models\TicketItem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TicketItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TicketItem::insert([
            [
                'ticket_id' => 1,
                'item_id' => 61,
                'barcode' => null,
                'portion_id' => null,
                'qty' => 1,
                'unit_price' => 1000.00,
                'line_total' => 1000.00,
                'parent_item_id' => null,
            ],
            [
                'ticket_id' => 2,
                'item_id' => 2,
                'barcode' => null,
                'portion_id' => null,
                'qty' => 1,
                'unit_price' => 800.00,
                'line_total' => 800.00,
                'parent_item_id' => null,
            ],
            [
                'ticket_id' => 5,
                'item_id' => 63,
                'barcode' => null,
                'portion_id' => null,
                'qty' => 2,
                'unit_price' => 1000.00,
                'line_total' => 2000.00,
                'parent_item_id' => null,
            ],
            [
                'ticket_id' => 7,
                'item_id' => 63,
                'barcode' => null,
                'portion_id' => null,
                'qty' => 1,
                'unit_price' => 1000.00,
                'line_total' => 1000.00,
                'parent_item_id' => null,
            ],
            [
                'ticket_id' => 8,
                'item_id' => 96,
                'barcode' => null,
                'portion_id' => null,
                'qty' => 1,
                'unit_price' => 1500.00,
                'line_total' => 1500.00,
                'parent_item_id' => null,
            ],
            [
                'ticket_id' => 9,
                'item_id' => 96,
                'barcode' => null,
                'portion_id' => null,
                'qty' => 1,
                'unit_price' => 1500.00,
                'line_total' => 1500.00,
                'parent_item_id' => null,
            ],
            [
                'ticket_id' => 10,
                'item_id' => 96,
                'barcode' => null,
                'portion_id' => null,
                'qty' => 1,
                'unit_price' => 1500.00,
                'line_total' => 1500.00,
                'parent_item_id' => null,
            ],
        ]);
    }
}
