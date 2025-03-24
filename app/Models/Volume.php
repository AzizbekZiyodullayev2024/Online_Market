<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Volume extends Model
{
    protected $table = 'product_volumes';
    protected $fillable = ['name'];

    public function products()
    {
        return $this->hasMany(Product::class, 'product_volume', 'name');
    }

    public function volumes()
    {
        return $this->hasMany(Volume::class, 'parent_volume_id', 'id');
    }
}