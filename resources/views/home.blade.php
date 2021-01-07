@extends('layouts.main')

@section('content')

    <main class="home">
        <section class="hero">
            <div class="container">
                <img src="{{ asset('img/cover-home.jpg') }}" alt="Teen Go comic">
                <div class="current">
                    <h3 class="upper">
                        Current series
                    </h3>
                </div>
            </div>
        </section>
        <section class="comics pt-4 pb-4">
            <div class="container">
                <ul class="comics-list">
                    @foreach ($comics as $comic)
                        <li class="comics-item">
                            <a href=" {{ route('comic-details', $comic['id']) }} ">
                                <img 
                                class="pb-1"
                                src="{{ $comic['image'] }}" 
                                alt="{{ $comic['title'] }}">
                                <h3>{{ $comic['title'] }}</h3>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="load-more mt-4">
                <a href="#" class="blue-btn upper">
                    Load more
                </a>
            </div>
        </section>
    </main>

@endsection 
