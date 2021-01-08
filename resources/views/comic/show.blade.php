@extends('layouts.main')

@section('content')

    <main class="comic-detail">
        <section class="hero" 
        {{-- Inline styling used for giving the specific background image to every details page. One of the rare occasions for consider inline styling a best practice --}}
        style="background-image: url({{ $comic['image-hero'] }});">
            <div class="container">
                {{-- Specific img cover for each details page --}}
                <img src=" {{ $comic['image-cover'] }} " alt={{ $comic['title'] }}>
            </div>
        </section>
        <section class="comic-texts mt-2 mb-2">
            <div class="container">
                <h1 class="upper">
                    {{-- Specific title for each details page --}}
                    {{ $comic['title'] }}
                </h1>
                <div class="price-and-description mt-2 mb-2">
                    {{-- Specific price for each details page --}}
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
                    {{-- Specific body description for each details page --}}
                    {!! $comic['body'] !!}
                </div>
            </div>
        </section>
    </main>

@endsection 