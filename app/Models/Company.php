<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'slug',
        'name',
        'category',
        'npwp',
        'nib',
        'telephone',
        'address',
        'city_id',
        'description',
        'image',
        'is_verified',
        'verified_at',
        'verified_by',
    ];
}
