<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobField extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'company_id'
    ];
}
