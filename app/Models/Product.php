<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // Define the table if it doesn't follow Laravel's naming convention (plural form of the model)
    protected $table = 'products';

    // Define which attributes are mass assignable
    protected $fillable = [
        'slug',
        'title',
        'image', // if you have an author ID field, for example
        'quantity', // if you have an author ID field, for example
    ];

    // If you want to use timestamps, you can enable/disable them as needed
    public $timestamps = true;

    // Optionally, if you want to use custom date formats
    protected $dates = [
        'created_at',
        'updated_at',
        'published_at', // if you have a published date
    ];

}
