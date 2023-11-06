@extends('master')

@section('title')
    {{$place->title}} Mekan Detayları
@endsection

@section('content')
    <!--Start Page Header-->
    <section class="page-header">
        <div class="page-header__bg" style="background-image: url(https://unicktheme.com/korax/assets/images/backgrounds/page-header-img1.jpg);">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page-header__wrapper">
                        <div class="page-header__content text-center">
                            <h2>{{$place->title}}</h2>
                            <div class="page-header__menu">
                                <ul>
                                    <li><a href="/"><i class="fas fa-home"></i></a></li>
                                    <li>{{$place->MainCategory->name}}</li>
                                    <li>{{$place->title}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Page Header-->

    <!--Start Listings Details Page-->
    <section class="listings-details-page">
        <div class="container">
            <div class="row">
                <!--Start Listings Details Page Content-->
                <div class="col-xl-8 col-lg-7">
                    <div class="listings-details-page__content">
                        <div class="listings-details-page__content-img1">
                            <img src="{{$place->cover}}" alt="#">
                        </div>

                        <div class="listings-details-page__content-text-box1">
                            <h3>Açıklama</h3>
                            <p class="text1">
                                {!! $place->detail !!}
                            </p>

                            
                            @auth
                            <div class="btn-box">
                                <a href="https://{{$place->website}}" target="_blank" class="thm-btn">Web Sitesini Ziyaret Et</a>
                            </div>
                            @endauth
                            
                        </div>

                        <div class="listings-details-page__content-listing-features">
                            <h3>Özellikler</h3>
                            <ul>
                                @foreach ($place->Features as $item)
                                <li>
                                    <div class="inner">
                                        <div class="icon">
                                            <a href="javascript:;"> <span class="{{$item->Feature->icon}}"></span></a>
                                        </div>

                                        <div class="text">
                                            <a href="javascript:;"> {{$item->Feature->name}}</a>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>


                        <div class="listings-details-page__content-gallery">
                            <h3>Gallery</h3>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="owl-carousel owl-theme thm-owl__carousel listings-details-page__content-gallery--carousel"
                                        data-owl-options='{
                                        "loop": true,
                                        "autoplay": false,
                                        "margin": 30,
                                        "nav": false,
                                        "dots": false,
                                        "smartSpeed": 500,
                                        "autoplayTimeout": 10000,
                                        "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                                        "responsive": {
                                            "0": {
                                                "items": 1
                                            },
                                            "768": {
                                                "items": 2
                                            },
                                            "992": {
                                                "items": 2
                                            },
                                            "1200": {
                                                "items": 2
                                            }
                                        }
                                    }'>

                                        <div class="listings-details-page__content-gallery-single">
                                            <div class="listings-details-page__content-gallery-single-img">
                                                <img src="assets/images/resources/listings_details-img2.jpg"
                                                    alt="#">
                                                <div class="listings-details-page__content-gallery-single-img-link">
                                                    <a class="img-popup"
                                                        href="assets/images/resources/listings_details-img2.jpg"><span
                                                            class="icon-plus"></span></a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="listings-details-page__content-gallery-single">
                                            <div class="listings-details-page__content-gallery-single-img">
                                                <img src="assets/images/resources/listings_details-img3.jpg"
                                                    alt="#">
                                                <div class="listings-details-page__content-gallery-single-img-link">
                                                    <a class="img-popup"
                                                        href="assets/images/resources/listings_details-img3.jpg"><span
                                                            class="icon-plus"></span></a>
                                                </div>
                                            </div>
                                        </div>


                                    </div>

                                </div>
                            </div>
                        </div>



                        <div class="review_and_progress_bar">
                            <div class="review_box">
                                <div class="review_box_details">
                                    <h2>4.5</h2>
                                    <div class="review-count">
                                        <a href="#"><i class="icon-star"></i></a>
                                        <a href="#"><i class="icon-star"></i></a>
                                        <a href="#"><i class="icon-star"></i></a>
                                        <a href="#"><i class="icon-star"></i></a>
                                        <a href="#" class="clr-gray"><i class="icon-star-1"></i></a>
                                    </div>
                                    <p>48 Total Reviews</p>
                                </div>
                            </div>
                            <div class="progress_bar">
                                <div class="progress-levels">
                                    <!--Skill Box-->
                                    <div class="progress-box">
                                        <div class="text">Rating</div>
                                        <div class="inner count-box">
                                            <div class="bar">
                                                <div class="bar-innner">
                                                    <div class="skill-percent">
                                                        <span class="count-text" data-speed="3000"
                                                            data-stop="95">0</span>
                                                        <span class="percent">%</span>
                                                    </div>
                                                    <div class="bar-fill" data-percent="95"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Skill Box-->
                                    <div class="progress-box">
                                        <div class="text">Hospitality</div>
                                        <div class="inner count-box">
                                            <div class="bar">
                                                <div class="bar-innner">
                                                    <div class="skill-percent">
                                                        <span class="count-text" data-speed="3000"
                                                            data-stop="85">0</span>
                                                        <span class="percent">%</span>
                                                    </div>
                                                    <div class="bar-fill" data-percent="85"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Skill Box-->
                                    <div class="progress-box">
                                        <div class="text">Services</div>
                                        <div class="inner count-box">
                                            <div class="bar">
                                                <div class="bar-innner">
                                                    <div class="skill-percent">
                                                        <span class="count-text" data-speed="3000"
                                                            data-stop="75">0</span>
                                                        <span class="percent">%</span>
                                                    </div>
                                                    <div class="bar-fill" data-percent="75"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Skill Box-->
                                    <div class="progress-box marb">
                                        <div class="text">Pricing</div>
                                        <div class="inner count-box">
                                            <div class="bar">
                                                <div class="bar-innner">
                                                    <div class="skill-percent">
                                                        <span class="count-text" data-speed="3000"
                                                            data-stop="65">0</span>
                                                        <span class="percent">%</span>
                                                    </div>
                                                    <div class="bar-fill" data-percent="65"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="comment-one listings-details-page__content-comment">
                            <h3 class="comment-one__title">Comments(02)</h3>
                            <div class="comment-one__single">
                                <div class="comment-one__image">
                                    <img src="assets/images/blog/comment-1-1.png" alt="">
                                </div>
                                <div class="comment-one__content">
                                    <h3>Dani Smith</h3>
                                    <span>11 jun, 2022</span>
                                    <p>Lorem Ipsum available, but the majority have suffered alteration in
                                        some form If you are going to use a passage of Lorem Ipsum, you need
                                    </p>
                                    <ul class="reviews-box">
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star-1"></span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="comment-one__single comment-one__single--two">
                                <div class="comment-one__image">
                                    <img src="assets/images/blog/comment-1-2.png" alt="">
                                </div>
                                <div class="comment-one__content">
                                    <h3>Robin Wiliam</h3>
                                    <span>14 dec 2022</span>
                                    <p>Lorem Ipsum available, but the majority have suffered alteration in
                                        some form If you are going to use a passage of Lorem Ipsum, you need
                                    </p>

                                    <ul class="reviews-box">
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star-1"></span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="comment-form listings-details-page__content-form">
                            <h3 class="comment-form__title">Add Review</h3>
                            <form action="assets/inc/sendemail.php" class="comment-one__form contact-form-validated"
                                novalidate="novalidate">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="comment-form__input-box">
                                            <input type="text" placeholder="Full name" name="name">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="comment-form__input-box">
                                            <input type="email" placeholder="Email Address" name="email">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="comment-form__input-box text-message-box">
                                            <textarea name="message" placeholder="Comments"></textarea>
                                        </div>
                                        <div class="comment-form__btn-box">
                                            <button type="submit" class="comment-form__btn thm-btn">Post
                                                Comment</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!--End Listings Details Page Content-->

                <!--Start Listings Details Page Sidebar-->
                <div class="col-xl-4 col-lg-5">
                    <div class="listings-details-page__sidebar">
                        <!--Start Listings Details Page Sidebar Single-->
                        <div class="listings-details-page__sidebar-single sidebar__working-hours wow animated fadeInUp"
                            data-wow-delay="0.1s">
                            <div class="title">
                                <h2>Working Hours</h2>
                            </div>

                            <ul class="sidebar__working-hours-list">
                                <li><a href="#">Saturday <span>Closed</span></a></li>
                                <li><a href="#">Sunday <span>9 AM - 5 PM</span></a>
                                </li>
                                <li><a href="#">Monday <span>9 AM - 5 PM</span> </a>
                                </li>
                                <li><a href="#">Tuesday <span>9 AM - 5 PM</span></a></li>
                                <li><a href="#">Wednesday <span>9 AM - 5 PM</span></a></li>
                                <li><a href="#">Thursday <span>9 AM - 5 PM</span></a></li>
                                <li><a href="#">Friday <span>Closed</span></a></li>
                            </ul>
                        </div>
                        <!--End Listings Details Page Sidebar Single-->

                        <!--Start Listings Details Page Sidebar Single-->
                        <div class="listings-details-page__sidebar-single sidebar__location-contacts wow animated fadeInUp"
                            data-wow-delay="0.2s">
                            <div class="title">
                                <h2>Location / Contacts</h2>
                            </div>

                            <div class="sidebar__location-contacts-google-map">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd"
                                    class="sidebar__location-contacts-map" allowfullscreen></iframe>
                            </div>

                            <ul class="sidebar__location-contacts-list">
                                <li>
                                    <p><i class="icon-pin"></i> <span> Adress :</span> USA 20TH Brooklyn NY
                                    </p>
                                </li>

                                <li>
                                    <p><i class="icon-phone-call"></i> <span> Phone :</span> <a
                                            href="tel:123456789">+099 695 695 35</a>
                                    </p>
                                </li>

                                <li>
                                    <p><i class="icon-email"></i> <span> Mail :</span> <a
                                            href="mailto:info@madina.com">rubel@example.com</a>
                                    </p>
                                </li>

                                <li>
                                    <p><i class="icon-email"></i> <span> Website :</span> <a
                                            href="https://www.themeholder.com/">Themeholder1.com</a>
                                    </p>
                                </li>
                            </ul>

                            <ul class="sidebar__location-contacts-social-links">
                                <li><a href="#"><span class="icon-facebook-app-symbol"></span></a></li>
                                <li><a href="#"><span class="icon-twitter"></span></a></li>
                                <li><a href="#"><span class="icon-instagram"></span></a></li>
                                <li><a href="#"><span class="icon-pinterest"></span></a></li>
                            </ul>
                        </div>
                        <!--End Listings Details Page Sidebar Single-->

                        <!--Start Listings Details Page Sidebar Single-->
                        <div class="listings-details-page__sidebar-single sidebar__post wow animated fadeInUp"
                            data-wow-delay="0.3s">
                            <div class="title">
                                <h2>Similar Listings </h2>
                            </div>

                            <ul class="sidebar__post-list list-unstyled">
                                <li>
                                    <div class="sidebar__post-image">
                                        <img src="assets/images/blog/lp-1-1.jpg" alt="">
                                    </div>
                                    <div class="sidebar__post-content">
                                        <h3>
                                            <a href="#">Contrary to popular <br> belief
                                            </a>
                                        </h3>
                                        <span class="sidebar__post-content-meta"><i class="icon-clock"></i>
                                            April 25, 2022</span>
                                    </div>
                                </li>

                                <li>
                                    <div class="sidebar__post-image">
                                        <img src="assets/images/blog/lp-1-2.jpg" alt="">
                                    </div>
                                    <div class="sidebar__post-content">
                                        <h3>
                                            <a href="#">All the Lorem Ipsum <br>generators on
                                            </a>
                                        </h3>
                                        <span class="sidebar__post-content-meta"><i class="icon-clock"></i>
                                            April 25, 2022</span>
                                    </div>
                                </li>

                                <li>
                                    <div class="sidebar__post-image">
                                        <img src="assets/images/blog/lp-1-3.jpg" alt="">
                                    </div>
                                    <div class="sidebar__post-content">
                                        <h3>
                                            <a href="#">The standard chunk <br> of Lorem Ipsum
                                            </a>
                                        </h3>
                                        <span class="sidebar__post-content-meta"><i class="icon-clock"></i>
                                            April 25, 2022</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!--End Listings Details Page Sidebar Single-->

                        <!--Start Listings Details Page Sidebar Single-->
                        <div class="listings-details-page__sidebar-single sidebar__tags wow animated fadeInUp"
                            data-wow-delay="0.4s">
                            <div class="title">
                                <h2>Tags</h2>
                            </div>
                            <div class="sidebar__tags-list">
                                <a href="#">Restaurants</a>
                                <a href="#">Trending</a>
                                <a href="#">Shops</a>
                                <a href="#">Tips</a>
                                <a href="#">Hotel</a>
                                <a href="#">Parking</a>
                                <a href="#">Room</a>
                                <a href="#">Food</a>
                            </div>
                        </div>
                        <!--End Listings Details Page Sidebar Single-->

                    </div>
                </div>
                <!--End Listings Details Page Sidebar-->
            </div>
        </div>
    </section>
    <!--End Listings Details Page-->
@endsection