@extends('layouts.web')

@section('content')
<h1 class="text-center">{{ $comic->title }}</h1>
<div class="container">
    <div class="card mx-auto my-5" style="width: 40%">
        <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
        <div class="card-body">
            <h5>{{ $comic->title }}</h5>
            <div class="overflow-y-auto" style="height: 8rem">
                <p>{{ $comic->description }}</p>
            </div>
            <div><strong>Series:</strong> {{ $comic->series }}</div>
            <div><strong>Type:</strong> {{ $comic->type }}</div>
            <div><strong>Price:</strong> {{ $comic->price }}</div>
            <a rel="stylesheet" href="{{ route('comics.edit', $comic->id) }}"
                class="btn btn-secondary my-2">Edit</a>
            <form action="{{ route('comics.destroy', ['comic' => $comic->id]) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
</div>
@endsection