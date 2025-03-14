<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // protected static function boot()
    // {
    //     parent::boot();
    //     static::creating(function ($model){
    //         $model->slug= Carbon::now(). Str::slug($model->title);
    //     });
    // }

    public function productCategory()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
    public function productVolume()
    {
        return $this->belongsTo(Volume::class, 'product_volume', 'id');
    }
    public function images(){
        return $this->morphMany(Image::class,'imageable');
    }
}
