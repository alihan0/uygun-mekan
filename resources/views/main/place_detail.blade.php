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


                        



                        <div class="review_and_progress_bar">
                            <h3 class="mb-4">Puan</h3>
                            <div class="review_box">
                                <div class="review_box_details">
                                    <h2>4.5</h2>
                                    <div class="review-count">

                                        @for ($i = 1; $i <= 5; $i++)
                                        @if ($place->Stars->count() > 0)
                                            @if ($i <= round($place->Stars->sum('star') / $place->Stars->count()))
                                            <a href="#"><i class="icon-star"></i></a>
                                            @else
                                            <a href="#"><i class="icon-star"></i></a>
                                            @endif
                                        @else
                                        <a href="#"><i class="icon-star"></i></a>
                                        @endif
                                       
                                    @endfor
                                    </div>
                                    <p> Toplam <b>{{$place->Stars->count() > 0 ?  round($place->Stars->sum('star') / $place->Stars->count()) : '0'}}</b> Oylama</p>
                                </div>
                            </div>
                            
                        </div>

                        <div class="comment-one listings-details-page__content-comment">
                            <h3 class="comment-one__title">Yorumlar ({{$place->Comments->count()}})</h3>
                            
                            @foreach ($place->Comments as $item)
                            <div class="comment-one__single">
                                <div class="comment-one__image">
                                    <img src="assets/images/blog/comment-1-1.png" alt="">
                                </div>
                                <div class="comment-one__content">
                                    <h3>{{$item->User->name ?? "-"}}</h3>
                                    <span>{{$item->created_at}}</span>
                                    <p>
                                        {{$item->comment}}
                                    </p>
                                    
                                </div>
                            </div>
                            @endforeach
                            
                        </div>

                        @auth
                        <div class="comment-form listings-details-page__content-form">
                            <h3 class="comment-form__title">Yorum Gönder</h3>
                            <form action="javascript:;" class="comment-one__form"
                                >
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="comment-form__input-box">
                                            <input type="text" value="{{Auth::user()->name ?? ""}}" readonly>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="comment-form__input-box">
                                            <input type="text" value="{{Auth::user()->email ?? ""}}" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="comment-form__input-box text-message-box">
                                            <textarea id="message" placeholder="Yorumunuz"></textarea>
                                        </div>
                                        <div class="comment-form__btn-box">
                                            <button type="submit" class="comment-form__btn thm-btn" onclick="sendComment('{{Auth::user()->id}}','{{$place->id}}')">Yorum Yap</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        @endauth
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
                                <h2>Çalışma Saatleri</h2>
                            </div>

                            <ul class="sidebar__working-hours-list">
                                <li><a href="#">Pazartesi <span> {{ \Carbon\Carbon::parse($place->monday_open_time)->format('H:i') }} - {{ \Carbon\Carbon::parse($place->monday_close_time)->format('H:i') }}</span></a></li>
                                <li><a href="#">Salı <span>{{ \Carbon\Carbon::parse($place->tuesday_open_time)->format('H:i') }} - {{ \Carbon\Carbon::parse($place->tuesday_close_time)->format('H:i') }}</span></a>
                                </li>
                                <li><a href="#">Çarşamba <span>{{ \Carbon\Carbon::parse($place->wednesday_open_time)->format('H:i') }} - {{ \Carbon\Carbon::parse($place->wednesday_close_time)->format('H:i') }}</span> </a>
                                </li>
                                <li><a href="#">Perşembe <span>{{ \Carbon\Carbon::parse($place->thursday_open_time)->format('H:i') }} - {{ \Carbon\Carbon::parse($place->thursday_close_time)->format('H:i') }}</span></a></li>
                                <li><a href="#">Cuma <span>{{ \Carbon\Carbon::parse($place->friday_open_time)->format('H:i') }} - {{ \Carbon\Carbon::parse($place->friday_close_time)->format('H:i') }}</span></a></li>
                                <li><a href="#">Cumartesi <span>{{ \Carbon\Carbon::parse($place->saturday_open_time)->format('H:i') }} - {{ \Carbon\Carbon::parse($place->saturday_close_time)->format('H:i') }}</span></a></li>
                                <li><a href="#">Pazar <span> {{ \Carbon\Carbon::parse($place->sunday_open_time)->format('H:i') }} - {{ \Carbon\Carbon::parse($place->sunday_close_time)->format('H:i') }}</span></a></li>
                            </ul>
                        </div>
                        <!--End Listings Details Page Sidebar Single-->

                        <!--Start Listings Details Page Sidebar Single-->
                        <div class="listings-details-page__sidebar-single sidebar__location-contacts wow animated fadeInUp"
                            data-wow-delay="0.2s">
                            <div class="title">
                                <h2>İletişim</h2>
                            </div>

                            

                            <ul class="sidebar__location-contacts-list">
                                <li>
                                    <p><i class="icon-pin"></i> <span> Adres :</span>
                                        {{Auth::check() ? $place->address : "Giriş Yapın"}}
                                    </p>
                                </li>

                                <li>
                                    <p><i class="icon-phone-call"></i> <span> Telefon :</span> 
                                        {{Auth::check() ? $place->phone : "Giriş Yapın"}}
                                    </p>
                                </li>

                                <li>
                                    <p><i class="icon-email"></i> <span> E-posta :</span>
                                        {{Auth::check() ? $place->email : "Giriş Yapın"}}
                                    </p>
                                </li>

                                <li>
                                    <p><i class="fas fa-globe"></i> <span> Website :</span> 
                                        {{Auth::check() ? $place->website : "Giriş Yapın"}}
                                    </p>
                                </li>
                            </ul>

                            @auth
                            <ul class="sidebar__location-contacts-social-links">
                                
                                @if ($place->facebook)
                                    <li><a href="{{$place->facebook}}"><span class="icon-facebook-app-symbol"></span></a></li>
                                @endif

                                @if ($place->twitter)
                                    <li><a href="{{$place->twitter}}"><span class="icon-twitter"></span></a></li>
                                @endif

                                @if ($place->instagram)
                                    <li><a href="{{$place->instagram}}"><span class="icon-instagram"></span></a></li>
                                @endif
                            </ul>
                            @endauth
                            
                        </div>
                        <!--End Listings Details Page Sidebar Single-->

                        <!--Start Listings Details Page Sidebar Single-->
                        
                        <!--End Listings Details Page Sidebar Single-->

                        <!--Start Listings Details Page Sidebar Single-->
                        <div class="listings-details-page__sidebar-single sidebar__tags wow animated fadeInUp"
                            data-wow-delay="0.4s">
                            <div class="title">
                                <h2>Etiketler</h2>
                            </div>
                            <div class="sidebar__tags-list">

                                @php
                                $dataArray = explode(',', $place->tags);
                            @endphp

                            @foreach($dataArray as $item)
                            <a href="{{$system->site_url}}">{{$item}}</a>
                            @endforeach
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

@section('script')
    <script>
        function sendComment(user,place){
            var message = $("#message").val();

            axios.post('/comment',{
                user:user,
                place:place,
                message:message
            }).then(function (res) {
                toastr[res.data.type](res.data.message)
                if(res.data.status){
                    setInterval(() => {
                        window.location.reload();
                    }, 500);
                }
            })
        }
    </script>
@endsection