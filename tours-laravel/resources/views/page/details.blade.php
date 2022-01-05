@extends('source')
@section('content')
<main class="main">

    <!--==================== ABOUT ====================-->
    <section class="about section" id="about">
        <div class="about__container container grid">
            <div class="about__data">
                <h2 class="section__title about__title">{{$tours->name}}</h2>
                <div class="about__description">
                    <p class="date-start">Date start: {{$tours->date_start}}</p>
                    <p class="number-of-days">Number of days: {{$tours->number_days}}</p>
                    <p>Available: <span class="available">{{$tours->seats}} seats</span></p>
                    <br>
                    <table width="100%">
                        <tr>
                            <th>Age</th>
                            <th>Price</th>
                        </tr>
                        <tr>
                            <td>Adult (> 17)</td>
                            <td class="adult-price">${{$tours->adult_price}}</td>
                        </tr>
                        <tr>
                            <td>Children (14 - 17)</td>
                            <td class="children-price">${{$tours->children_price}}</td>
                        </tr>
                        <tr>
                            <td>Children (< 14)</td>
                            <td class="y-children-price">${{$tours->youngchildren_price}}</td>
                        </tr>
                    </table>
                </div>
                <a href="/checkout/{{$tours->id}}" class="button">Book Now</a>
            </div>

            <div class="about__img">
                <div class="about__img-overlay">
                    <img src="{{$tours->image}}" alt="" class="about__img-one">
                </div>

                <div class="about__img-overlay">
                    <img src="{{$tours->image}}" alt="" class="about__img-two">
                </div>
            </div>
        </div>
    </section>

    <!--==================== SCHEDULE ====================-->
    <section class="schedule section">
        <h2 class="schedule__title">Schedule</h2>

        <div class="schedule__container container">
            <!-- <h4>Day 1</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam doloremque eveniet fuga iste mollitia
                nihil praesentium quam qui recusandae, repellendus totam vero voluptatibus! Cum facilis necessitatibus
                repellat similique tenetur velit.</p>
            <h4>Day 2</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam doloremque eveniet fuga iste mollitia
                nihil praesentium quam qui recusandae, repellendus totam vero voluptatibus! Cum facilis necessitatibus
                repellat similique tenetur velit.</p>
            <h4>Day 3</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam doloremque eveniet fuga iste mollitia
                nihil praesentium quam qui recusandae, repellendus totam vero voluptatibus! Cum facilis necessitatibus
                repellat similique tenetur velit.</p>
            <h4>Day 4</h4> -->
            <p>{{$tours->long_description}}</p>
        </div>
    </section>
</main>
@endsection