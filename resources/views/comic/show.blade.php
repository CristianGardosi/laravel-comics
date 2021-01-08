@extends('layouts.main')

@section('content')

    <main class="comic-detail">
        <section class="hero" 
        style="background-image: url({{ $comic['image-hero'] }});">
            <div class="container">
                <img src=" {{ $comic['image-cover'] }} " alt={{ $comic['title'] }}>
            </div>
        </section>
        <section class="comic-texts mt-2 mb-2">
            <div class="container">
                <h1 class="upper">
                    {{ $comic['title'] }}
                </h1>
                <div class="price-and-description mt-2 mb-2">
                    {{'U.S. Price: $' . $comic['price'] }}
                    <span class="upper">
                        avaiable on 11/10
                    </span>
                    <a href="#">
                        <span>
                            Check Aviability
                        </span>
                        <i class="fas fa-chevron-down"></i>
                    </a>
                </div>
                <div class="text">
                    {!! $comic['body'] !!}
                </div>
            </div>
        </section>
    </main>

@endsection 