<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContentSlug extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'status'
    ];


    public function contents()
    {
        return $this->hasMany(Content::class);
    }
}
