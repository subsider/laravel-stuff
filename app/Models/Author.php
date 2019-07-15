<?php

namespace App\Models;

class Author extends BaseModel
{
    public function testimonials()
    {
        return $this->hasMany(Testimonial::class);
    }
}
