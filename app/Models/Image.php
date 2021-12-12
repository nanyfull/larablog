<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'image',
        'post_id',
    ];

    /**
     * Get the user that owns the phone.
     */
    public function Post()
    {
        return $this->belongsTo(Post::class);
    }

}
