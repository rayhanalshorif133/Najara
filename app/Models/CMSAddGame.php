<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CMSAddGame extends Model
{
    use HasFactory;

    protected $table = 'cms_add_game';

    protected $fillable = [
        'id',
        'cp_id',
        'cat_id',
        'upload_by',
        'type',
        'game_name',
        'preview_img_details',
        'preview_img',
        'screenshot1',
        'screenshot2',
        'screenshot3',
        'screenshot4',
        'html5_url',
        'modified_date',
        'status',
    ];


    public function GET_IMAGE($id, $img)
    {
        return 'http://bkashcms.b2mwap.com/uploads/games/HTML5/' . $id . '/' . $img;
    }

    public function category()
    {
        return $this->belongsTo(GameCategory::class, 'cat_id', 'id');
    }
}
