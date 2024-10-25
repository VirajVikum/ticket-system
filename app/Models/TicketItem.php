<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'topic',
        'description',
        'lead_id',
        'ticket_category_id',
        'ticket_sub_category_id',
        'call_id',
        'tags',
        'outlet_id',
        'crm',
        'order_ref',
        'ticket_status_id',
        'due_at',
        'bill_no',
        'is_synced',
        'synced_at',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
