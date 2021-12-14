<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserJobField extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'job_field_id'
    ];

    public function jobField()
    {
        return $this->hasOne(JobField::class, 'id', 'job_field_id');
    }
}
