@extends('layouts.web')

@section('content')
<section id="hero"></section>

    <section class="cards bg-dark">
        <div class="container py-5 position-relative">
            <div class="py-2 px-3 banner banner-top">CURRENT SERIES</div>
            <div class="row pt-3">
                @foreach ($comics as $comic)
                    <div class="col-2">
                        <div class="single-card">
                            <div class="card-img">
                                <img src="{{ $comic->thumb }}" alt="">
                            </div>
                            <h5>{{ $comic->series }}</h5>
                            <a rel="stylesheet" href="{{ route('comics.destroy', $comic->id) }}"
                                class="btn btn-primary">Info</a>
                            <a rel="stylesheet" href="{{ route('comics.edit', $comic->id) }}"
                                class="btn btn-secondary my-2">Edit</a>
                            <form action="{{ route('comics.destroy', ['comic' => $comic->id]) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-center mt-5">
                <button class="banner banner-btn">LOAD MORE</button>
            </div>
        </div>
    </section>

    <section class="features-ctn">
        <div class="container">
            <div class="features">
                <img src="{{Vite::asset('resources/img/buy-comics-digital-comics.png')}}" alt="e-commerce">
                <span>DIGITAL COMICS</span>
            </div>
            <div class="features">
                <img src="{{Vite::asset('resources/img/buy-comics-merchandise.png')}}" alt="e-commerce">
                <span>DC MERCHANDISE</span>
            </div>
            <div class="features">
                <img src="{{Vite::asset('resources/img/buy-comics-subscriptions.png')}}" alt="e-commerce">
                <span>SUBSCRIPTIONS</span>
            </div>
            <div class="features">
                <img class="locator" src="{{Vite::asset('resources/img/buy-comics-shop-locator.png')}}" alt="e-commerce">
                <span>COMIC SHOP LOCATOR</span>
            </div>
            <div class="features last">
                <img src="{{Vite::asset('resources/img/buy-dc-power-visa.svg')}}" alt="e-commerce">
                <span>DC POWER VISA</span>
            </div>
        </div>
    </section>
@endsection
