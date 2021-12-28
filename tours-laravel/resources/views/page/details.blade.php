@extends('source')
@section('content')
<main class="main">

    <!--==================== ABOUT ====================-->
    <section class="about section" id="about">
        <div class="about__container container grid">
            <div class="about__data">
                <h2 class="section__title about__title">Cung Dinh Hue</h2>
                <div class="about__description">
                    <p class="date-start">Date start: 22/12/2021</p>
                    <p class="number-of-days">Number of days: 13</p>
                    <p>Price: <span class="price">$1000</span></p>
                </div>
                <a href="checkout.html" class="button">Book Now</a>
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

    <!--==================== SCHEDULE ====================-->
    <section class="schedule section">
        <h2 class="schedule__title">Schedule</h2>

        <div class="schedule__container container">
            <h4>Day 1</h4>
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
            <h4>Day 4</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam doloremque eveniet fuga iste mollitia
                nihil praesentium quam qui recusandae, repellendus totam vero voluptatibus! Cum facilis necessitatibus
                repellat similique tenetur velit.</p>
        </div>
    </section>
</main>
@endsection