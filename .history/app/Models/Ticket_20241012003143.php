<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'title1',
        'title2',
        'content',
        'contact',
        'status',
    ];
}


//  status
// 0- new
// 1- open
// 2- overdue
// 3- closed