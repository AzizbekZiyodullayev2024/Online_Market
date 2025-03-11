<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Volume extends Model
{
    
    public function volumes()
    {
        return $this->hasMany(Post::class, 'volume_id','id');
    }
}