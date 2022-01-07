@extends('source')
@section('content')
<main class="main">

    <!--==================== PLACES ====================-->
    <section class="place section" id="place">
        @foreach ($type_name as $type_name)
            <h2 class="section__title">Place: {{$type_name->name}}</h2>
        @endforeach

        <h2 class="section__title">Choose Your Favorite Tour</h2>

        <div class="place__container container grid">
            <!--==================== PLACES CARD ====================-->
            @foreach ($tours as $tours)
            <div class="place__card">
                <img src="{{$tours->image1}}" alt="" class="place__img">

                <div class="place__content">
                            <span class="place__rating">
                                <i class="ri-star-line place__rating-icon"></i>
                                <!-- <span class="place__rating-number">4,8</span> -->
                            </span>

                    <div class="place__data">
                        <h3 class="place__title">{{$tours->name}}</h3>
                        <span class="place__subtitle">{{$tours->short_description}}</span>
                        <span class="place__price">Price: ${{$tours->adult_price}}/ 1</span>
                    </div>
                </div>

                <button class="button button--flex place__button">
                    <a href="/details/{{$tours->id}}" class="ri-arrow-right-line" style="color: white"></a>
                </button>
            </div>
            @endforeach
        </div>
    </section>
</main>
@endsection