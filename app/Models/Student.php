<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public function address(){
        return $this->belongsTo(StudentAddress::class, 'student_address_id');
    }

    protected $fillable = [
        'name',
        'email',
        'phone',
        'student_address_id'
       
    ];
}
