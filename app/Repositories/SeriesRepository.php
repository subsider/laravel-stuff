<?php

namespace App\Repositories;

use App\Models\Series;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Cache;

class SeriesRepository
{
    /**
     * @param int|null $count
     * @return Collection
     */
    public function getSeries(int $count = null): Collection
    {
        $key = "series.get{$count}";

        return Cache::remember($key, 1440000, function () use ($count) {
            return Series::latest()->take($count)->get();
        });
    }

    /**
     * @param array|null $ids
     * @return Collection
     */
    public function getFeaturedSeries(array $ids = null): Collection
    {
        $ids = $ids ?: config('laralist.featured');

        return Cache::remember('series.featured', 1440000, function () use ($ids) {
            return Series::find($ids);
        });
    }
}
