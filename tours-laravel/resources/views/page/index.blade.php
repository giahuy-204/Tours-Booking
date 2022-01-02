@extends('source')
@section('content')
<main class="main">
    <!--==================== HOME ====================-->
    <section class="home" id="home">
        <img src="/sources/assets/img/home1.jpg" alt="" class="home__img">

        <div class="home__container container grid">
            <div class="home__data">
                <h1 class="home__data-title">Explore The <br> Best <b>Beautiful <br> City</b> in the <br>Central of Vietnam</h1>

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

            <div class="home__info">
                <div>
                    <span class="home__info-title">5 best places to visit</span>
                    <a href="" class="button button--flex button--link home__info-button">
                        More <i class="ri-arrow-right-line"></i>
                    </a>
                </div>

                <div class="home__info-overlay">
                    <img src="/sources/assets/img/home2.jpg" alt="" class="home__info-img">
                </div>
            </div>
        </div>
    </section>

    <!--==================== ABOUT ====================-->
    <section class="about section" id="about">
        <div class="about__container container grid">
            <div class="about__data">
                <h2 class="section__title about__title">More Information <br> About The Best Beaches</h2>
                <p class="about__description">You can find the most beautiful and pleasant places at the best
                    prices with special discounts, you choose the place we will guide you all the way to wait, get your
                    place now.
                </p>
                <a href="#" class="button">Reserve a place</a>
            </div>

            <div class="about__img">
                <div class="about__img-overlay">
                    <img src="/sources/assets/img/about1.jpg" alt="" class="about__img-one">
                </div>

                <div class="about__img-overlay">
                    <img src="/sources/assets/img/about2.jpg" alt="" class="about__img-two">
                </div>
            </div>
        </div>
    </section>

    <!--==================== PLACES ====================-->
    <section class="discover section" id="place">
        <h2 class="section__title">Discover the most <br> attractive places</h2>

        <div class="discover__container container swiper-container">
            <div class="swiper-wrapper">
                <!--==================== DISCOVER====================-->
                @foreach ($type_tours as $type)
                <div class="discover__card swiper-slide">
                    <a href="/places/{{$type -> id}}"><img src="{{$type -> image}}" alt="" class="discover__img"></a>
                    <div class="discover__data">
                        <h2 class="discover__title">{{$type -> name}}</h2>
                        <span class="discover__description">{{$type -> description}}</span>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!--==================== EXPERIENCE ====================-->
    <section class="experience section">
        <h2 class="section__title">With Our Experience <br> We Will Serve You</h2>

        <div class="experience__container container grid">
            <div class="experience__content grid">
                <div class="experience__data">
                    <h2 class="experience__number">20</h2>
                    <span class="experience__description">Year <br> Experience</span>
                </div>

                <div class="experience__data">
                    <h2 class="experience__number">75</h2>
                    <span class="experience__description">Complete <br> tours</span>
                </div>

                <div class="experience__data">
                    <h2 class="experience__number">650+</h2>
                    <span class="experience__description">Tourist <br> Destination</span>
                </div>
            </div>

            <div class="experience__img grid">
                <div class="experience__overlay">
                    <img src="/sources/assets/img/experience1.jpg" alt="" class="experience__img-one">
                </div>

                <div class="experience__overlay">
                    <img src="/sources/assets/img/experience2.jpg" alt="" class="experience__img-two">
                </div>
            </div>
        </div>
    </section>

    <!--==================== SUBSCRIBE ====================-->
    <section class="subscribe section">
        <div class="subscribe__bg">
            <div class="subscribe__container container">
                <h2 class="section__title subscribe__title">Subscribe Our <br> Newsletter</h2>
                <p class="subscribe__description">Subscribe to our newsletter and get a
                    special 30% discount.
                </p>

                <form action="" class="subscribe__form">
                    <input type="text" placeholder="Enter email" class="subscribe__input">

                    <button class="button">
                        Subscribe
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!--==================== SPONSORS ====================-->
    <section class="sponsor section">
        <div class="sponsor__container container grid">
            <div class="sponsor__content">
                <img src="/sources/assets/img/sponsors1.png" alt="" class="sponsor__img">
            </div>
            <div class="sponsor__content">
                <img src="/sources/assets/img/sponsors2.png" alt="" class="sponsor__img">
            </div>
            <div class="sponsor__content">
                <img src="/sources/assets/img/sponsors3.png" alt="" class="sponsor__img">
            </div>
            <div class="sponsor__content">
                <img src="/sources/assets/img/sponsors4.png" alt="" class="sponsor__img">
            </div>
            <div class="sponsor__content">
                <img src="/sources/assets/img/sponsors5.png" alt="" class="sponsor__img">
            </div>
        </div>
    </section>
</main>
@endsection