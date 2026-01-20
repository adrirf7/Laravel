<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Database\Factories\PostFactory;

class PostARF extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'posts';

    /**
     * Create a new factory instance for the model.
     */
    protected static function newFactory()
    {
        return PostFactory::new();
    }

    protected $fillable = [
        'user_id',
        'title',
        'content',
        'excerpt',
        'views',
        'category',
        'published_at',
        'is_published',
    ];

    protected $casts = [
        'published_at' => 'datetime',
        'is_published' => 'boolean',
        'views' => 'integer',
    ];

    /**
     * Relación con el usuario autor
     */
    public function user()
    {
        return $this->belongsTo(UserARF::class, 'user_id');
    }
}
