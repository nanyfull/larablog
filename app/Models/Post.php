<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'url_clean',
        'content',
        'posted',
        'category_id'
    ];


    protected $with = [
        'category',
        'image'
    ];


    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    public function image()
    {
        return $this->hasOne(Image::class);
    }
}
