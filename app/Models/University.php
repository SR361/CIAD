<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    use HasFactory;

    protected $table = 'universites';

    protected $fillable = [
        'user_id',
        'university_name',
        'job_title',
        'university_id_number',
    ];
}
