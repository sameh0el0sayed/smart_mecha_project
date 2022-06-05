@extends('layouts.ecommerce')

@section('content')
    <!--==================== HOME ====================-->
    <section class="home" id="home">
        <div class="home__container container grid">
            <div class="home__img-bg">
                <img src="{{asset('ecommerce_assets/img/home.png')}}" alt="" class="home__img">
            </div>

            <div class="home__social">
                <a href="https://youtube.com/" target="_blank" class="home__social-link">
                    YouTube
                </a>
                <a href="https://www.instagram.com/" target="_blank" class="home__social-link">
                    Instagram
                </a>

                <a href="https://www.Whatsapp.com/" target="_blank" class="home__social-link">
                    Whatsapp
                </a>

            </div>

            <div class="home__data">
                <h1 class="home__title">NEW WATCH <br> COLLECTIONS B720</h1>
                <p class="home__description">
                    Latest arrival of the new imported watches of the B720 series,
                    with a modern and resistant design.
                </p>
                <span class="home__price">$1245</span>

                <div class="home__btns">
                    <a href="#" class="button button--gray button--small">
                        Discover
                    </a>

                    <button class="button home__button">ADD TO CART</button>
                </div>
            </div>
        </div>
    </section>

    <!--==================== NEWSLETTER ====================-->
    <section class="newsletter section container">
        <div class="newsletter__bg grid">
            <div>
                <h2 class="newsletter__title">Search for your <br> Car</h2>
                <p class="newsletter__description">
                    Add your car information from the manufacturer, year and number of cylinders
                    to serve you better and facilitate your use
                </p>
            </div>

            <div action="" class="form flex-nowrap">
                <div class="row"></div>
                <div class="input-group mb-1">
                    <span class="input-group-text">Manufacturer</span>

                    <select class="form-control">
                        <option>Demo</option>
                    </select>
                </div>
                <div class="input-group mb-1">
                    <span class="input-group-text">Model</span>

                    <select class="form-control">
                        <option>Demo</option>
                    </select>



                </div>
                <div class="input-group mb-1">
                    <span class="input-group-text">Year</span>

                    <select class="form-control">
                        <option>Demo</option>
                    </select>
                </div>
                <div class="input-group mb-1">
                    <span class="input-group-text">Cylinder</span>

                    <select class="form-control">
                        <option>Demo</option>
                    </select>
                </div>

                <div class="input-group mb-1">
                    <button class="btn btn-outline-secondary form-control col-12">
                        Filter
                    </button>
                </div>


            </div>
        </div>
    </section>

    <!--==================== FEATURED ====================-->
    <section class="featured section container" id="featured">
        <h2 class="section__title">
            Featured
        </h2>

        <div class="featured__container grid">
            <article class="featured__card">
                <span class="featured__tag">Sale</span>

                <img src="{{asset('ecommerce_assets/img/featured1.png')}}" alt="" class="featured__img">

                <div class="featured__data">
                    <h3 class="featured__title">Jazzmaster</h3>
                    <span class="featured__price">$1050</span>
                </div>

                <button class="button featured__button">ADD TO CART</button>
            </article>

            <article class="featured__card">
                <span class="featured__tag">Sale</span>

                <img src="{{asset('ecommerce_assets/img/featured2.png')}}" alt="" class="featured__img">

                <div class="featured__data">
                    <h3 class="featured__title">Ingersoll</h3>
                    <span class="featured__price">$250</span>
                </div>

                <button class="button featured__button">ADD TO CART</button>
            </article>

            <article class="featured__card">
                <span class="featured__tag">Sale</span>

                <img src="{{asset('ecommerce_assets/img/featured3.png')}}" alt="" class="featured__img">

                <div class="featured__data">
                    <h3 class="featured__title">Rose gold</h3>
                    <span class="featured__price">$890</span>
                </div>

                <button class="button featured__button">ADD TO CART</button>
            </article>
        </div>
    </section>

    <!--==================== STORY ====================-->
    <section class="story section container">
        <div class="story__container grid">
            <div class="story__data">
                <h2 class="section__title story__section-title">
                    Our Story
                </h2>

                <h1 class="story__title">
                    Inspirational Watch of <br> this year
                </h1>

                <p class="story__description">
                    The latest and modern watches of this year, is available in various
                    presentations in this store, discover them now.
                </p>

                <a href="#" class="button button--small">Discover</a>
            </div>

            <div class="story__images">
                <img src="{{asset('ecommerce_assets/img/story.png')}}" alt="" class="story__img">
                <div class="story__square"></div>
            </div>
        </div>
    </section>

    <!--==================== NEW ====================-->
    <section class="new section container" id="new">
        <h2 class="section__title">
            New Arrivals
        </h2>

        <div class="new__container">
            <div class="swiper new-swiper">
                <div class="swiper-wrapper">
                    <article class="new__card swiper-slide">
                        <span class="new__tag">New</span>

                        <img src="{{asset('ecommerce_assets/img/new1.png')}}" alt="" class="new__img">

                        <div class="new__data">
                            <h3 class="new__title">Longines rose</h3>
                            <span class="new__price">$980</span>
                        </div>

                        <button class="button new__button">ADD TO CART</button>
                    </article>

                    <article class="new__card swiper-slide">
                        <span class="new__tag">New</span>

                        <img src="{{asset('ecommerce_assets/img/new2.png')}}" alt="" class="new__img">

                        <div class="new__data">
                            <h3 class="new__title">Jazzmaster</h3>
                            <span class="new__price">$1150</span>
                        </div>

                        <button class="button new__button">ADD TO CART</button>
                    </article>

                    <article class="new__card swiper-slide">
                        <span class="new__tag">New</span>

                        <img src="{{asset('ecommerce_assets/img/new3.png')}}" alt="" class="new__img">

                        <div class="new__data">
                            <h3 class="new__title">Dreyfuss gold</h3>
                            <span class="new__price">$750</span>
                        </div>

                        <button class="button new__button">ADD TO CART</button>
                    </article>

                    <article class="new__card swiper-slide">
                        <span class="new__tag">New</span>

                        <img src="{{asset('ecommerce_assets/img/new4.png')}}" alt="" class="new__img">

                        <div class="new__data">
                            <h3 class="new__title">Portuguese rose</h3>
                            <span class="new__price">$1590</span>
                        </div>

                        <button class="button new__button">ADD TO CART</button>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <!--==================== PRODUCTS ====================-->
    <section class="products section container" id="products">
        <h2 class="section__title">
            Products
        </h2>

        <div class="products__container grid">
            <article class="products__card">
                <img src="{{asset('ecommerce_assets/img/product1.png')}}" alt="" class="products__img">

                <h3 class="products__title">Spirit rose</h3>
                <span class="products__price">$1500</span>

                <button class="products__button">
                    <i class='bx bx-shopping-bag'></i>
                </button>
            </article>

            <article class="products__card">
                <img src="{{asset('ecommerce_assets/img/product2.png')}}" alt="" class="products__img">

                <h3 class="products__title">Khaki pilot</h3>
                <span class="products__price">$1350</span>

                <button class="products__button">
                    <i class='bx bx-shopping-bag'></i>
                </button>
            </article>

            <article class="products__card">
                <img src="{{asset('ecommerce_assets/img/product3.png')}}" alt="" class="products__img">

                <h3 class="products__title">Jubilee black</h3>
                <span class="products__price">$870</span>

                <button class="products__button">
                    <i class='bx bx-shopping-bag'></i>
                </button>
            </article>

            <article class="products__card">
                <img src="{{asset('ecommerce_assets/img/product4.png')}}" alt="" class="products__img">

                <h3 class="products__title">Fosil me3</h3>
                <span class="products__price">$650</span>

                <button class="products__button">
                    <i class='bx bx-shopping-bag'></i>
                </button>
            </article>

            <article class="products__card">
                <img src="{{asset('ecommerce_assets/img/product5.png')}}" alt="" class="products__img">

                <h3 class="products__title">Duchen</h3>
                <span class="products__price">$950</span>

                <button class="products__button">
                    <i class='bx bx-shopping-bag'></i>
                </button>
            </article>
        </div>
    </section>

    <!--==================== TESTIMONIAL ====================-->
    <section class="testimonial section container">
        <div class="testimonial__container grid">
            <div class="swiper testimonial-swiper">
                <div class="swiper-wrapper">
                    <div class="testimonial__card swiper-slide">
                        <div class="testimonial__quote">
                            <i class='bx bxs-quote-alt-left'></i>
                        </div>
                        <p class="testimonial__description">
                            They are the best watches that one acquires, also they are always with the latest
                            news and trends, with a very comfortable price and especially with the attention
                            you receive, they are always attentive to your questions.
                        </p>
                        <h3 class="testimonial__date">March 27. 2021</h3>

                        <div class="testimonial__perfil">
                            <img src="{{asset('ecommerce_assets/img/testimonial1.jpg')}}" alt=""
                                class="testimonial__perfil-img">

                            <div class="testimonial__perfil-data">
                                <span class="testimonial__perfil-name">Lee Doe</span>
                                <span class="testimonial__perfil-detail">Director of a company</span>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial__card swiper-slide">
                        <div class="testimonial__quote">
                            <i class='bx bxs-quote-alt-left'></i>
                        </div>
                        <p class="testimonial__description">
                            They are the best watches that one acquires, also they are always with the latest
                            news and trends, with a very comfortable price and especially with the attention
                            you receive, they are always attentive to your questions.
                        </p>
                        <h3 class="testimonial__date">March 27. 2021</h3>

                        <div class="testimonial__perfil">
                            <img src="{{asset('ecommerce_assets/img/testimonial2.jpg')}}" alt=""
                                class="testimonial__perfil-img">

                            <div class="testimonial__perfil-data">
                                <span class="testimonial__perfil-name">Samantha Mey</span>
                                <span class="testimonial__perfil-detail">Director of a company</span>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial__card swiper-slide">
                        <div class="testimonial__quote">
                            <i class='bx bxs-quote-alt-left'></i>
                        </div>
                        <p class="testimonial__description">
                            They are the best watches that one acquires, also they are always with the latest
                            news and trends, with a very comfortable price and especially with the attention
                            you receive, they are always attentive to your questions.
                        </p>
                        <h3 class="testimonial__date">March 27. 2021</h3>

                        <div class="testimonial__perfil">
                            <img src="{{asset('ecommerce_assets/img/testimonial3.jpg')}}" alt=""
                                class="testimonial__perfil-img">

                            <div class="testimonial__perfil-data">
                                <span class="testimonial__perfil-name">Raul Zaman</span>
                                <span class="testimonial__perfil-detail">Director of a company</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-button-next">
                    <i class='bx bx-right-arrow-alt'></i>
                </div>
                <div class="swiper-button-prev">
                    <i class='bx bx-left-arrow-alt'></i>
                </div>
            </div>

            <div class="testimonial__images">
                <div class="testimonial__square"></div>
                <img src="{{asset('ecommerce_assets/img/testimonial.png')}}" alt="" class="testimonial__img">
            </div>
        </div>
    </section>
@endsection
