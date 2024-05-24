@extends('layouts.web')

@section('content')
    <h1>Products List</h1>
    <div class="container">
        <div class="row">
            @foreach ($comics as $comic)
                <div class="col-3">
                    <div class="card">
                        <div>
                            {{ $comic->title }}
                        </div>
                        <div>
                            {{ $comic->description }}
                        </div>
                        <div>
                            {{ $comic->thumb }}
                        </div>
                        <div>
                            {{ $comic->price }}
                        </div>
                        <div>
                            {{ $comic->series }}
                        </div>
                        <div>
                            {{ $comic->sale_date }}
                        </div>
                        <div>
                            {{ $comic->type }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
