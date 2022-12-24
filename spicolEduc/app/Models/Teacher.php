<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable = [
        'typeDocument',
        'document',
        'firstName',
        'lastName',
        'firstSurname',
        'secondSurname',
        'email',
        'phone',
        'address',
        'city',        
    ];

    public function asignatures()
    {
        return $this->belongsToMany(Asignature::class, 'asignature_teacher');
    }
}
