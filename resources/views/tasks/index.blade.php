@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mb-2">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Tasks
                    </div>
                    <ul class="list-group list-group-flush">
                        @foreach ($tasks as $task)
                            <li class="list-group-item">
                                {{ $task->name }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
