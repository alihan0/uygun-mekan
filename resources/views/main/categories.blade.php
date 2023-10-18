@extends('master')

@section('title', 'Kategoriler')
    
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
                        <h2>{{$section->where('section', 'page-header')->where('status',1)->first()->title}}</h2>
                        <div class="page-header__menu">
                            <ul>
                                <li><a href="/"><i class="fas fa-home"></i></a></li>
                                <li>Tüm Kategoriler</li>
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
<!--Start Categories One-->
<section class="categories-one">
    <div class="container">
        <div class="sec-title text-center">
            <h2 class="sec-title__title">{{$section->where('section', 'all-categories')->where('status',1)->first()->title}}</h2>
            <p class="sec-title__text">{{$section->where('section', 'all-categories')->where('status',1)->first()->subtitle}}</p>
        </div>
        <div class="row masonary-layout">
            @foreach ($categories as $category)
                <!--Start Categories One Single-->
                    <div class="col-xl-4 col-lg-4 wow animated fadeInUp" data-wow-delay="0.3s">
                        <div class="categories-one__single">
                            <div class="categories-one__single-img">
                                <img src="{{$category->cover}}" alt="" />
                                <div class="text-box">
                                    <h2><a href="/category/{{$category->slug}}">{{$category->name}}</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Categories One Single-->
            @endforeach
        </div>
    </div>
</section>
<!--End Categories One-->

@if ($section->where('section', 'category-features')->where('status',1)->first())
    <!--Start Features One-->
<section class="features-one">
    <div class="container">
        <div class="sec-title text-center">
            <h2 class="sec-title__title">{{$section->where('section', 'category-features')->where('status',1)->first()->title}}</h2>
            <p class="sec-title__text">{{$section->where('section', 'category-features')->where('status',1)->first()->subtitle}}</p>
        </div>
        <div class="row">{!! $section->where('section', 'category-features')->where('status',1)->first()->content !!}</div>
    </div>
</section>
<!--End Features One-->
@endif

@endsection