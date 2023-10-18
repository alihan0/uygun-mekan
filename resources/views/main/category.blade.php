@extends('master')

@section('title')
    {{$category->name}}
@endsection
    
@section('content')
@if($section->where('section', 'page-header')->where('status',1)->first())
 <!--Start Page Header-->
 <section class="page-header">
    <div class="page-header__bg" style="background-image: url({{$section->where('section', 'page-header')->where('status',1)->first()->cover}});">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="page-header__wrapper">
                    <div class="page-header__content text-center">
                        <h2>{{$category->name}}</h2>
                        <div class="page-header__menu">
                            <ul>
                                <li><a href="/"><i class="fas fa-home"></i></a></li>
                                <li><a href="/categories">Kategoriler</a></li>
                                <li>{{$category->name}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Page Header-->
@endif

<section class="listings_one_wrap listings_one_wrap--listings-three">
    <div class="container clearfix">
        <div class="listings__one__content">
            <div class="listings_one_content_left">
                

                

                

                <div class="row">
                    <div class="col-xl-12">
                        <div class="filter">
                            <div class="filter_inner_content">
                                <div class="left">
                                    <h4>({{$places->count()}}) mekan listelendi.</h4>
                                </div>
                                <div class="right">
                                    <div class="shorting">
                                        <div class="select-box">
                                            <select class="selectmenu wide" onchange="window.location.href = this.value">
                                                <option value="/category/{{$category->slug}}/sort-az" selected="selected">
                                                    Ada Göre Sırala (A-Z)
                                                </option>
                                                <option value="/category/{{$category->slug}}/sort-za">
                                                    Ada Göre Sırala (Z-A)
                                                </option>
                                                <option value="/category/{{$category->slug}}/sort-new-old">
                                                    Tarihe Göre Sırala (Önce Yeni)
                                                </option>
                                                <option value="/category/{{$category->slug}}/sort-old-new">
                                                    Tarihe Göre Sırala (Önce Eski)
                                                </option>
                                                <option value="/category/{{$category->slug}}/sort-hight-low">
                                                    Puana Göre Sırala (Yüksekten Düşüğe)
                                                </option>
                                                <option value="/category/{{$category->slug}}/sort-low-high">
                                                    Puana Göre Sırala (Düşükten Yükseğe)
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <section class="listings_three-page one">
                <div class="row">
                    <!--Start Place One Single-->
                    @foreach ($places as $place)
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="place-one__single">
                            <div class="place-one__single-img">
                                <div class="place-one__single-img-inner">
                                    <div class="icon-box">
                                        <a href="#"><span class="fa fa-heart"></span></a>
                                    </div>
                                    <img src="assets/images/resources/place-v1-img1.jpg" alt="" />
                                </div>
                                <div class="text-box">
                                    <span>Hotel Storn</span>
                                </div>
                            </div>

                            <div class="place-one__single-content">
                                <div class="top-content">
                                    <h2><a href="listings-details.html">{{$place->title}}</a></h2>
                                    <p>Excepteur sint occaecat </p>

                                    <div class="top-content-bottom">
                                        <div class="location-box">
                                            <div class="icon-box">
                                                <span class="fa fa-map-marker"></span>
                                            </div>
                                            <div class="text">
                                                <p>London,Dhaka</p>
                                            </div>
                                        </div>

                                        <div class="number-box">
                                            <div class="icon">
                                                <span class="fa fa-clock"></span>
                                            </div>
                                            <div class="text">
                                                <a href="tel:123456789">+65556522222</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="bottom-content">
                                    <ul class="review-box">
                                        <li><span class="fa fa-star"></span></li>
                                        <li><span class="fa fa-star"></span></li>
                                        <li><span class="fa fa-star"></span></li>
                                        <li><span class="fa fa-star"></span></li>
                                        <li><span class="icon-star-1"></span></li>
                                    </ul>
                                    <div class="count-box">
                                        <p>(04)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </section>
        </div>
    </div>
</section>
@endsection