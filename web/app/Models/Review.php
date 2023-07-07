<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'title',
        'content',
        'review',
        'product_id',
        'variant_id'
    ];
}
