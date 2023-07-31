<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'rose_count',
        'lily_count',
        'orchid_count',
        'tulip_count',
        'daffodil_count',
        'delivery_address',
        'delivery_date_time',
    ];
    use HasFactory;
}