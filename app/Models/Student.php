<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table='students';

    protected $fillable=[
        'name',
        'phone',
        'email',
        'address',
        'section',
        'country_id',
        'state_id',
        'district_id',
        'taluk_id'
    ];

}
