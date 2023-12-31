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
                                                <option value="/category/{{$category->slug}}/az" {{$sort == "az" ? 'selected' : ''}}>
                                                    Ada Göre Sırala (A-Z)
                                                </option>
                                                <option value="/category/{{$category->slug}}/za"  {{$sort == "za" ? 'selected' : ''}}>
                                                    Ada Göre Sırala (Z-A)
                                                </option>
                                                <option value="/category/{{$category->slug}}/new-old"  {{$sort == "new-old" ? 'selected' : ''}}>
                                                    Tarihe Göre Sırala (Önce Yeni)
                                                </option>
                                                <option value="/category/{{$category->slug}}/old-new"  {{$sort == "old-new" ? 'selected' : ''}}>
                                                    Tarihe Göre Sırala (Önce Eski)
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
                                    <img src="{{ $place->cover}}" alt="{{$place->title}}" />
                                </div>
                                <div class="text-box">
                                    <span>{{$place->website}}</span>
                                </div>
                            </div>

                            <div class="place-one__single-content">
                                <div class="top-content">
                                    <h2 class="mb-3"><a href="/place/{{$place->slug}}">{{$place->title}}</a></h2>
                                    <div class="d-flex flex-wrap">
                                        @foreach ($place->Features as $feature)
                                            <span class="badge bg-primary me-2 mb-2 p-0 pe-2" style="font-size:7px"><span class="p-2 {{$feature->Feature->icon}}"></span> {{$feature->Feature->name}}</span>
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
                    @endforeach
                </div>
            </section>
        </div>
    </div>
</section>

@if ($section->where('section', 'comments')->where('status',1)->first())
<!--Start Testimonial One-->
<section class="testimonial-one">
    <div class="testimonial-one__bg"
        style="background-image: url(assets/images/backgrounds/3.png);"></div>
    <div class="container">
        <div class="sec-title text-center">
            <h2 class="sec-title__title">{{$section->where('section', 'comments')->where('status',1)->first()->title}}</h2>
            <p class="sec-title__text">{{$section->where('section', 'comments')->where('status',1)->first()->subtitle}}</p>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="owl-carousel owl-theme thm-owl__carousel testimonial-one__carousel"
                    data-owl-options='{
                    "loop": true,
                    "autoplay": true,
                    "margin": 30,
                    "nav": false,
                    "dots": false,
                    "smartSpeed": 500,
                    "autoplayTimeout": 3000,
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

                    <!--Start Testimonial One Single-->
                    @foreach ($comments as $comment)
                        <div class="testimonial-one__single">
                            <div class="testimonial-one__single-quote-icon">
                                <span class="fa fa-quote-left"></span>
                            </div>
                            <div class="testimonial-one__single-top">
                                <div class="text-box">
                                    <h2>{{$comment->User->name}}</h2>
                                    <p>{{$comment->Place->title}}</p>
                                </div>
                            </div>
                            <div class="testimonial-one__single-text">
                                <p>{{$comment->comment}}</p>
                            </div>
                        </div>
                    @endforeach
                    <!--End Testimonial One Single-->
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Testimonial One-->
@endif
@endsection