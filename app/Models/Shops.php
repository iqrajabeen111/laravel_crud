<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shops extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'shop_name'
    ];
 

    public static function getAllPosts()
    {   
         $data = shops::all(); // To return all shops'

         return $data;
    }
  
}
