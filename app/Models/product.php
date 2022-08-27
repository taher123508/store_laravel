<?php

namespace App\Models;

use App\Http\Controllers\CategoryController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
protected $table='products';
    protected $fillable=['name','price','id_cat'];



    public function category(){


        return $this->belongsTo(category::class,'id');
    }


}

