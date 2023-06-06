<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameCategory extends Model
{
    use HasFactory;

    protected $table = 'game_category';

    protected $fillable = [
        'id',
        'name',
        'status',
        'type',
        'img',
        'created_date',
    ];
}
