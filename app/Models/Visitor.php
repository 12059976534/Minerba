<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    use HasFactory;
    protected $fillable = [
        'ip_address',
        'country_name',
        'country_code',
        'region_code',
        'region_name',
        'city_name',
        'zip_code',
        'iso_code',
        'postal_code',
        'latitude',
        'longitude',
        'metro_code',
        'area_code',
        'device',
        'device_name',
        'platform',
        'platform_version',
        'browser',
        'browser_version',
        'last_visited_at'
    ];
}
