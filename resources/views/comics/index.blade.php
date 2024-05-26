@extends('layouts.web')

@section('content')
    <h1>Products List</h1>
    <div class="container">
        <div class="row g-4">
            @foreach ($comics as $comic)
                <div class="col-4">
                    <div class="card">
                        <img src="{{-- $comic->thumb --}} https://upload.wikimedia.org/wikipedia/en/thumb/5/5a/Action_Comics_1.jpg/200px-Action_Comics_1.jpg" class="card-img-top" alt="{{ $comic->title }}">
                        <div class="card-body">
                            <h5>{{ $comic->title }}</h5>
                            <div class="overflow-y-auto" style="height: 8rem">
                                <p>{{ $comic->description }}</p>
                            </div>
                            <div><strong>Series:</strong> {{ $comic->series }}</div>
                            <div><strong>Type:</strong> {{ $comic->type }}</div>
                            <div><strong>Price:</strong> {{ $comic->price }}</div>
                            <div>
                                <a rel="stylesheet" href="{{route('comics.show', $comic->id)}}">Info</a>
                            </div>
                            <a rel="stylesheet" href="{{route('comics.edit', $comic->id)}}">Edit</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
