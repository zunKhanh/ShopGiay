<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;
    protected $table='bill';
    protected $fillable=[
        'user_id',
        'total',
        'billCode',
        'status',
    ];
}
