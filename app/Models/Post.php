<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Define the table if it doesn't follow Laravel's naming convention (plural form of the model)
    protected $table = 'posts';

    // Define which attributes are mass assignable
    protected $fillable = [
        'title',
        'content',
        'author_id', // if you have an author ID field, for example
    ];

    // If you want to use timestamps, you can enable/disable them as needed
    public $timestamps = true;

    // Optionally, if you want to use custom date formats
    protected $dates = [
        'created_at',
        'updated_at',
        'published_at', // if you have a published date
    ];

    // You can also define relationships (example: one-to-many with comments)
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    // Example of a relationship with an Author model (if you have one)
    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }
}
