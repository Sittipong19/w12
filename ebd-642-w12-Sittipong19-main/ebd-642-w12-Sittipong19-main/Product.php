<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table='product';
    protected $fillable=['name','cost_price','img_path','stock_qty','unit_price','category_id'];
    public function category(){
        return $this->belongsTo(Category::class,'category_id','id');
    }
}
