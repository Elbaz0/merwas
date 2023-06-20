<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class services_order extends Model
{
    use HasFactory;
    protected $fillable=[

        'id','orders_id','serviceable',



     ];
}
