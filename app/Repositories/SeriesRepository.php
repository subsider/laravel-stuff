<?php

namespace App\Repositories;

use App\Models\Series;
use Illuminate\Support\Facades\Cache;

class SeriesRepository
{
    public function getSeries(int $count = null)
    {
        $key = "series.get{$count}";

        return Cache::remember($key, 1440, function () use ($count) {
            return Series::latest()->take($count)->get();
        });
    }

    public function getFeaturedSeries($ids = null)
    {
        $ids = $ids ?: config('laralist.featured');

        return Series::whereIn('id', $ids)->get();
    }
}
