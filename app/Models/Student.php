<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'student_code',
        'citizen_card_number',
        'tax_identification_number',
        'email',
        'address1',
        'address2',
        'postal_code',
        'locality',
    ];
}
