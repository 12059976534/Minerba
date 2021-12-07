<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPersonDetail extends Model
{
    use HasFactory;
    protected $table = "user_personal_informations";
    protected $fillable = ['unique_id','address','province_id','city_id','subdistrict_id','urban_village_id','postal_code','education_id','major','university','telephone','image','user_id'];
}
