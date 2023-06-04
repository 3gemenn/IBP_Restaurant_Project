<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    protected $fillable = [
        'name',
        'lastName',
        'phone',
        'email',
        'password'
    ];
    public function input()
    {
        // input() yönteminin işlemleri burada yer alacak
    }
}
