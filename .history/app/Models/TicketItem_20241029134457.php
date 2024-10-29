<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketItem extends Model
{
    use HasFactory;

    protected $table = 'ticket_items'; // Specify the table name if it doesn't follow Laravel conventions

    protected $fillable = [
        'ticket_id',
        'item_id',
        'barcode',
        'portion_id',
        'qty',
        'unit_price',
        'line_total',
        'parent_item_id',
    ];
}
