<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Expert extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'education_id',
        'major',
        'position',
        'skill',
        'training',
        'company_id',
        'name'
    ];

    public function education()
    {
        return $this->hasOne(Education::class, 'id', 'education_id');
    }
}
