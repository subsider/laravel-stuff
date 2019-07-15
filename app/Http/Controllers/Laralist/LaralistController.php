<?php

namespace App\Http\Controllers\Laralist;

use App\Models\Series;
use App\Models\Testimonial;
use App\Repositories\SeriesRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LaralistController extends Controller
{
    /**
     * @var SeriesRepository
     */
    private $seriesRepository;

    /**
     * LaralistController constructor.
     * @param SeriesRepository $seriesRepository
     */
    public function __construct(SeriesRepository $seriesRepository)
    {
        $this->seriesRepository = $seriesRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $series = $this->seriesRepository->getSeries(12);

        $testimonials = Testimonial::with('author')
            ->inRandomOrder()
            ->take(4)
            ->get();

        return view('laralist.index')->with([
            'series' => $series,
            'testimonials' => $testimonials,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
