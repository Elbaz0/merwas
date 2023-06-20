<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class services_product extends Model
{
    use HasFactory;

    protected $fillable=[

        'id','products_id','serviceable',



     ];

}
