<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog_types extends Model
{
    use HasFactory;

    protected $table = 'blog_types';
    protected $fillable = [
        'name'
    ];

    public function Blogs()
    {
        return $this->belongsTo(blog::class , 'type_id' , 'id');
    }
}
