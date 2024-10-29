<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lead extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'leads';

    protected $fillable = [
        'contact_number',
        'unique_id',
        'agent_id',
        'skill_id',
        'extension',
        'status_id',
        'first_name',
        'last_name',
        'nic',
        'address_line_1',
        'address_line_2',
        'city',
        'contact_number_2',
        'email',
        'priority_level_id',
        'satisfaction_level_id',
    ];
}
