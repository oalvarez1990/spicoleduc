<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asignature extends Model
{
    use HasFactory;
    protected $fillable = [
        'nameAsignature',
        'codeAsignature',
        'description',
        'credits',
        'knowledgeArea',
        'elective',
    ];
    
    public function students()
    {
        return $this->belongsToMany(Student::class,'asignature_student');
    }

}
