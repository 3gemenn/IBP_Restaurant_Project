<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = ['id'];

    protected $fillable = [
        'content',
        'sendUserId',
        'receiveUserId',
    ];

    protected $casts = [
        'created_date' => 'datetime',
    ];
}
