@extends('master')

@section('title', 'Anasayfa')
    
@section('content')

 <!-- Start Banner One -->
 <section class="banner-one">
    <div class="banner-one__inner">
        <div class="slider-bg-slide"
            data-options='{ "delay": 5000, "slides": [ 
                @foreach($sliders as $slide)
                    {"src": "{{ $slide->src }}" }{{ $loop->last ? '' : ',' }}
                @endforeach
             ], "transition": "fade", "animation": "kenburns", "timer": false, "align": "top" }'>
        </div>
        <div class="slider-bg-slide-overly"></div>
        <div class="container">
            <div class="banner-one__content text-center">
                <div class="title">
                    <h2>Mükemmel Mekanı Bul</h2>
                </div>
                <div class="text">
                    <p>Şehirindeki mekanları listele, sana en uygun olanı bul.</p>
                </div>


                <!--Start Banner One Tab Box-->
                <div class="banner-one__tab-box">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="banner-one__tab tabs-box">
                                
                                <div class="banner-one__tab-content-item">
                                    <div class="banner-one__tab-content-places">
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="banner-one__tab-content-places-form">
                                                    <form action="assets/inc/sendemail.php"
                                                        class="comment-one__form contact-form-validated"
                                                        novalidate="novalidate">

                                                        <ul>
                                                            <li>
                                                                <div class="comment-form__input-box">
                                                                    <div class="icon">
                                                                        <span
                                                                            class="fas fa-keyboard"></span>
                                                                    </div>
                                                                    <input type="text" placeholder="Hangi mekanlara bakıyorsunuz?" name="name">
                                                                </div>
                                                            </li>

                                                            <li>
                                                                <div class="comment-form__input-box">
                                                                    <div class="icon">
                                                                        <span class="icon-pin"></span>
                                                                    </div>
                                                                    <input type="text"
                                                                        placeholder="Konum"
                                                                        value="İstanbul"
                                                                        name="name">
                                                                </div>
                                                            </li>

                                                            <li>
                                                                <div
                                                                    class="comment-form__input-box clearfix">
                                                                    <div class="icon">
                                                                        <span class="icon-list"></span>
                                                                    </div>
                                                                    <div class="select-box">
                                                                        <select class="selectmenu wide">
                                                                            <option value="0" selected="selected"> Tüm Kategoriler</option>
                                                                            @foreach ($categories as $category)
                                                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </li>

                                                            <li>
                                                                <button
                                                                    class="thm-btn comment-form__btn"
                                                                    type="submit"
                                                                    data-loading-text="Please wait...">Ara
                                                                    <span class="icon-search"></span>
                                                                </button>
                                                            </li>
                                                        </ul>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Banner One Tab Box Tab Box-->


                <div class="banner-one__categories">
                    <div class="title">
                        <h4>Sadece etrafa mı bakıyorsun? Kategoriye göre hızlı aramayı kullanın:</h4>
                    </div>
                    <ul class="banner-one__categories-list">
                        @foreach ($categories as $category)
                        <li class="banner-one__categories-list-item">
                            <div class="inner">
                                <div class="icon">
                                    <span class="{{$category->icon}}"></span>
                                </div>
                                <p><a href="#">{{$category->short_name}}</a></p>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Banner One -->

<!--Start Place One-->
<section class="place-one">
    <div class="container">
        <div class="sec-title text-center">
            <h2 class="sec-title__title">Vitrindeki Mekanlar</h2>
            <p class="sec-title__text">Editörlerimizin sizin için seçtiği mükemmel mekanlara göz atın.</p>
        </div>
        <div class="row">
            @foreach ($places as $place)
                 <!--Start Place One Single-->
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="place-one__single">
                    <div class="place-one__single-img">
                        <div class="place-one__single-img-inner">
                            
                            <img src="{{ $place->cover}}" alt="" />
                        </div>
                        <div class="text-box">
                            <span>{{$place->MainCategory->name}}</span>
                        </div>
                    </div>

                    <div class="place-one__single-content">
                        <div class="top-content">
                            <h2><a href="/place/{{$place->slug}}">{{$place->title}}</a></h2>
                            
                           
                                
                                
                                <div class="d-flex flex-wrap">
                                    @foreach ($place->Features as $feature)
                                        <span class="badge bg-primary me-2 mb-2 pe-4"><span class="p-2 {{$feature->Feature->icon}}"></span> {{$feature->Feature->name}}</span>
                                    @endforeach
                                </div>

                            
                        </div>
                      
                    
                    
                        <div class="bottom-content d-flex justify-content-between">
                            <ul class="review-box">
                                @for ($i = 1; $i <= 5; $i++)
                                    @if ($place->Stars->count() > 0)
                                        @if ($i <= round($place->Stars->sum('star') / $place->Stars->count()))
                                            <li><span class="fas fa-star"></span></li>
                                        @else
                                        <li><span class="far fa-star"></span></li>
                                        @endif
                                    @else
                                        <li><span class="far fa-star"></span></li>
                                    @endif
                                   
                                @endfor
                                <li class="text-dark">
                                    ({{$place->Stars->count() > 0 ?  round($place->Stars->sum('star') / $place->Stars->count()) : '0'}})
                                </li>
                            </ul>
                            

                            <span>
                                <i class="fas fa-comments"></i> {{$place->Comments->count()}}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Place One Single-->
            @endforeach
        </div>
    </div>
</section>
<!--End Place One-->


<!--Start Features One-->
<section class="features-one">
    <div class="container">
        <div class="sec-title text-center">
            <h2 class="sec-title__title">Nasıl Kullanılır?</h2>
            <p class="sec-title__text">4 adımda uygunmekan.com nasıl kullanılır?</p>
        </div>
        <div class="row">
            <!--Start Features One Single-->
            <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInLeft" data-wow-delay="0ms"
                data-wow-duration="1000ms">
                <div class="features-one__single text-center">
                    <div class="features-one__single-icon">
                        <span class="fas fa-user-plus"></span>
                    </div>
                    <div class="features-one__single-title">
                        <h2><a href="#">Hesap Oluştur</a></h2>
                    </div>
                </div>
            </div>
            <!--End Features One Single-->

            <!--Start Features One Single-->
            <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInLeft" data-wow-delay="100ms"
                data-wow-duration="1000ms">
                <div class="features-one__single text-center">
                    <div class="features-one__single-icon">
                        <span class="fas fa-search"></span>
                    </div>
                    <div class="features-one__single-title">
                        <h2><a href="#">Mekanları Ara</a></h2>
                    </div>
                </div>
            </div>
            <!--End Features One Single-->

            <!--Start Features One Single-->
            <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInRight" data-wow-delay="0ms"
                data-wow-duration="1000ms">
                <div class="features-one__single text-center">
                    <div class="features-one__single-icon">
                        <span class="icon-checklist"></span>
                    </div>
                    <div class="features-one__single-title">
                        <h2><a href="#">Uygun Olanı Bul</a></h2>
                    </div>
                </div>
            </div>
            <!--End Features One Single-->

            <!--Start Features One Single-->
            <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInRight" data-wow-delay="100ms"
                data-wow-duration="1000ms">
                <div class="features-one__single text-center">
                    <div class="features-one__single-icon">
                        <span class="fas fa-share"></span>
                    </div>
                    <div class="features-one__single-title">
                        <h2><a href="#">Görüşlerini Paylaş </a></h2>
                    </div>
                </div>
            </div>
            <!--End Features One Single-->
        </div>
    </div>
</section>
<!--End Features One-->


<!--Start Video One-->
<section class="video-one">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="video-one__inner">
                    <div class="video-one__bg"
                        style="background-image: url(assets/images/backgrounds/3.png);"></div>
                    <div class="video-box">
                        <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="video-popup">
                            <div class="video-one__video-icon">
                                <span class="fa fa-play"></span>
                                <i class="ripple"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Video One-->

@endsection