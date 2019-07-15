@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mb-2">
            <div class="col-md-12">
                <h2>Some series</h2>
            </div>
        </div>
        @foreach ($series->chunk(4) as $row)
            <div class="row mb-4">
                @foreach ($row as $seriesItem)
                    <div class="col-md-3">
                        <div class="card">
                            <img class="card-img-top" src="{{ $seriesItem->image }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $seriesItem->name }}</h5>
                                <p class="card-text">{{ $seriesItem->excerpt }}</p>
                                <a href="#" class="btn btn-primary">Go</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
        <hr>
        <div class="row">
            <div class="col-md-12 mb-2">
                <h2>Testimonials</h2>
            </div>
            @foreach ($testimonials as $testimonial)
                <div class="col-md-3">
                    <div class="card">
                        <img class="card-img-top" src="{{ $testimonial->author->image }}">
                        <div class="card-body">
                            <blockquote class="blockquote">
                                <p class="mb-2">{{ $testimonial->body }}</p>
                                <footer class="blockquote-footer text-right">
                                    <cite title="Source Title">{{ $testimonial->author->name }}</cite>
                                </footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12 is-centered-xy">
                <div class="wrap is-circle is-centered-xy">
                    <div class="object is-a is-circle"></div>
                    <div class="object is-b is-circle"></div>
                    <div class="object is-c is-circle"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
