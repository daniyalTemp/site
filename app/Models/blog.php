<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    use HasFactory;
    protected $table='blogs';
    protected $fillable=[
        'title',
        'type_id',
        'image',
        'text',
        'show_post',
    ];

    public function Type()
    {
        return $this->hasOne(blog_types::class , 'id','type_id');

    }
}
