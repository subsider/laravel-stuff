<?php

namespace App\Models;

use Illuminate\Support\Str;

class Series extends BaseModel
{
    public function getExcerptAttribute()
    {
        return Str::limit($this->description, 90, '...');
    }
}
