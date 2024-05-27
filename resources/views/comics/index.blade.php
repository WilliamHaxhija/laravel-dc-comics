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
                            <div><strong>Series:</strong> {{ $comic->series }}</div>
                            <div><strong>Type:</strong> {{ $comic->type }}</div>
                            <div><strong>Price:</strong> {{ $comic->price }}</div>
                            <div>
                                <a rel="stylesheet" href="{{route('comics.destroy', $comic->id)}}">Info</a>
                            </div>
                            <div>
                                <a rel="stylesheet" href="{{route('comics.edit', $comic->id)}}">Edit</a>
                            </div>
                            <form action="{{ route('comics.destroy', ['comic' => $comic->id])}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
