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
@endsection