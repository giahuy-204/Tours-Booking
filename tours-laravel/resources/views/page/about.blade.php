@extends('source')
@section('content')
<main class="main">
    <section class="home" id="home">
        <img src="/sources/assets/img/our-company.jfif" alt="" class="home__img">

        <div class="home__container container grid">
            <div class="home__data">
                <h1 class="home__data-title" style="text-align: center">WANDERER</h1>
                <h4 style="text-align: center; color: rgba(255,255,255,0.85)">Provide tours around Hue - Da Nang - Hoi
                    An</h4>
            </div>

            <div class="home__social">
                <a href="https://www.facebook.com/" target="_blank" class="home__social-link">
                    <i class="ri-facebook-box-fill"></i>
                </a>
                <a href="https://www.instagram.com/" target="_blank" class="home__social-link">
                    <i class="ri-instagram-fill"></i>
                </a>
                <a href="https://twitter.com/" target="_blank" class="home__social-link">
                    <i class="ri-twitter-fill"></i>
                </a>
            </div>
        </div>
    </section>
</main>
@endsection