<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'company_name',
        'company_email',
        'email',
        'phone_number',
        'date',
        'send_message'
    ];
}
