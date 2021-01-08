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
                            <a href=" {{ route('comic-details', $comic['slug']) }} ">
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
        <section class="blue-adds pt-2 pb-2">
            <div class="container">
                <ul class="adds-list">
                    <li class="adds-item">
                        <a href="#">
                            <img src="../img/digital-comics.png" alt="">
                            <span class="upper">
                                Digital Comics
                            </span>
                        </a>
                    </li>
                    <li class="adds-item">
                        <a href="#">
                            <img src="../img/merchandise.png" alt="">
                            <span class="upper">
                                Merchandise
                            </span>
                        </a>
                    </li>
                    <li class="adds-item">
                        <a href="#">
                            <img src="../img/subscriptions.png" alt="">
                            <span class="upper">
                                Subscription
                            </span>
                        </a>
                    </li>
                    <li class="adds-item">
                        <a href="#">
                            <img src="../img/subscriptions.png" alt="">
                            <span class="upper">
                                Shop Locator
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </section>
    </main>

@endsection 
