@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mb-2">
            <div class="col-md-12">
                <h2>Podcasts</h2>
                @foreach ($feed as $podcast)
                    <div class="card">
                        <div class="card-header">{{ $podcast['title'] }}</div>
                        <div class="card-body">{{ $podcast['status'] }}</div>
                        <div class="card-footer">
                            {{ gmdate('i:s', random_int(50, 500)) }}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
