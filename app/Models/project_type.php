<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class project_type extends Model
{
    use HasFactory;

    protected $table='project_types';

    protected $fillable=[
        'name',

    ];

    public function Projects()
    {
        return $this->hasMany(project::class , 'type_id' , 'id');

    }
}
