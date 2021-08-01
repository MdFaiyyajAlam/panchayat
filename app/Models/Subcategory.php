<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'keywords',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function parent()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function setSlugAttribute($val)
    {
        $slug = trim(preg_replace("/[^\w\d]+/i", "-", $val), "-");
        $count = Subcategory::where('slug', 'like', "%{$slug}%")->count();
        if($count > 0){
            $slug = $slug."-".($count+1);
            $this->attributes['slug'] = strtolower($slug);
        } else {
            $this->attributes['slug'] = strtolower($slug);
        }
    }
}
