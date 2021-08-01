<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'post_type',
        'title',
        'slug',
        'description',
        'keywords',
        'visibility',
        'show_right_column',
        'featured',
        'breaking',
        'slider',
        'recommended',
        'show_auth_user',
        'send_subscriber',
        'tags',
        'opt_url',
        'content',
        'main_image',
        'main_image',
        'opt_main_image_url',
        'main_image_desc',
        'category_id',
        'subcategory_id',
        'scheduled_post',
    ];

}
