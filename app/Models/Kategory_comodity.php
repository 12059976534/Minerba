<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategory_comodity extends Model
{
    use HasFactory;
    protected $table = "comodities";
    protected $guarded = ['id'];

    public function product(){
        return $this->hasMany(Product::class);
    }
}
