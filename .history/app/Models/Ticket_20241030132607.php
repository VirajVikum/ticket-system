<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ticket extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'tickets';

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
    ];

    protected $casts = [
        'tags' => 'array',
        'crm' => 'boolean',
        'is_synced' => 'boolean',
        'due_at' => 'datetime',
        'synced_at' => 'datetime',
    ];

    public function lead()
    {
        return $this->belongsTo(Lead::class);
        // return $this->belongsTo(Lead::class, 'id', 'lead_id');
    }

    public function status()
    {
        return $this->belongsTo(TicketStatus::class);
        // return $this->belongsTo(Lead::class, 'id', 'lead_id');
    }
}
