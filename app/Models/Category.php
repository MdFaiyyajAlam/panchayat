<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'keywords',
        'color',
    ];

    public function navigation()
    {
        return $this->hasOne(Navigation::class, 'category_id', 'id');
    }

    public function subcategory()
    {
        return $this->hasOne(Subcategory::class, 'category_id', 'id');
    }

    public function child()
    {
        return $this->hasMany(Subcategory::class, 'category_id', 'id');
    }

    public function setSlugAttribute($val)
    {
        $slug = trim(preg_replace("/[^\w\d]+/i", "-", $val), "-");
        $count = Category::where('slug', 'like', "%{$slug}%")->count();
        if($count > 0){
            $slug = $slug."-".($count+1);
            $this->attributes['slug'] = strtolower($slug);
        } else {
            $this->attributes['slug'] = strtolower($slug);
        }
    }

}
