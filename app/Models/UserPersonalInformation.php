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

    public function education()
    {
        return $this->hasOne(Education::class, 'id', 'education_id');
    }

    public function province()
    {
        return $this->hasOne(Province::class, 'id', 'province_id');
    }

    public function city()
    {
        return $this->hasOne(City::class, 'id', 'city_id');
    }
    
    public function subdistrict()
    {
        return $this->hasOne(Subdistrict::class, 'id', 'subdistrict_id');
    }
    
    public function urbanVillage()
    {
        return $this->hasOne(UrbanVillage::class, 'id', 'urban_village_id');
    }

}
