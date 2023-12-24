<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    use HasFactory;

    protected $table = 'projects';
    protected $fillable = [
        'title',
        'website',
        'type_id',
        'text',
    ];

    public function Type(){
        return $this->hasOne(project_type::class ,'id' , 'type_id' );
    }

}
