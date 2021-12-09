<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserPersonalInformation extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'user_personal_informations';
    protected $fillable = [
        'unique_id',
        'address',
        'province_id',
        'city_id',
        'subdistrict_id',
        'urban_village_id',
        'postal_code',
        'telephone',
        'user_id',
        'education_id',
        'major',
        'university',
        'image'
    ];
}
