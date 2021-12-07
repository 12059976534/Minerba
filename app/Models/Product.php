<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = "products";
    protected $fillable = ['name','slug','product_category_id','comodity_id','unit','main_image','price','admin_fee','selling_price','description','views','company_id','status'];
}
