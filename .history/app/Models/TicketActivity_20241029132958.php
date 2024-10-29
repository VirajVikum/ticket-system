<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TicketActivity extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'ac_ticket_activities';

    protected $fillable = [
        'ticket_id',
        'type',
        'comment',
        'user_id',
    ];

    // Relationships
    public function ticket()
    {
        return $this->belongsTo(Ticket::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
