<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class config extends Model
{
    use HasFactory;

    protected $table='configs';
    protected $fillable=[
        'firstName',
        'lastName',
        'address',
        'email',
        'phone',
        'instagram',
        'telegram',
        'github',
        'linkedin',
        'youtube',
        'image',
        'googleApi',
        'about',
        'birthday',
    ];
}
