<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TopBanner extends Model
{
    public function category(){
        return $this->belongsTo(Category::class);
    }
}