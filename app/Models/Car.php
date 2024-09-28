<?php
namespace App\Models;  

use Illuminate\Database\Eloquent\Model;  

class Car extends Model  
{  
    protected $fillable = [  
        'make',  
        'model',  
        'year',  
        'color',  
        'plate_number',  
        'rental_price',  
    ];  
}  
