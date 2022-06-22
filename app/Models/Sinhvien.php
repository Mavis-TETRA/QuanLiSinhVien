<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sinhvien extends Model
{
    use HasFactory;
    protected $fillable = [
        'MaSV',
        'FirthName',
        'LastName',
        'Birth',
        'Gender',
        'Address',
        'BirthPlace',
        'Email',
        'PhoneNumber',
        'CitizenIdentityCard',
        'Image',
        'Status',
    ];
}
