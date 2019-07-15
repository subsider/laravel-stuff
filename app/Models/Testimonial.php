<?php

namespace App\Models;

class Testimonial extends BaseModel
{
    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}
