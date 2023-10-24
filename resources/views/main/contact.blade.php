@extends('master')

@section('title', 'İletişim')
    
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
                        <h2>Bize Ulaşın</h2>
                        <div class="page-header__menu">
                            <ul>
                                <li><a href="/"><i class="fas fa-home"></i></a></li>
                                <li>İletişim</li>
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

<!--Start Contact One-->
<section class="contact-one contact-page">
    <div class="container">
        <div class="row">
            <!--Start Contact One Form-->
            @if($section->where('section', 'contact-form')->where('status',1)->first())
            <div class="col-xl-8">
                <div class="contact-one__form">
                    <div class="contact-one__form-text">
                        <h2>{{$section->where('section', 'contact-form')->where('status',1)->first()->title}}</h2>
                        <p>{!! $section->where('section', 'contact-form')->where('status',1)->first()->subtitle !!}</p>
                    </div>
                    <form action="javascript:;" class="comment-one__form"
                        novalidate="novalidate">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="comment-form__input-box">
                                    <input type="text" placeholder="Adınız" name="name">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="comment-form__input-box">
                                    <input type="text" placeholder="E-posta adresiniz" name="email">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="comment-form__input-box">
                                    <input type="text" placeholder="Telefonunuz" name="phone">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="comment-form__input-box">
                                    <input type="text" placeholder="Konu" name="Subject">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12">
                                <div class="comment-form__input-box">
                                    <textarea name="message" placeholder="Mesajınız"></textarea>
                                </div>
                                <button class="thm-btn comment-form__btn" type="submit"
                                    data-loading-text="Lütfen bekleyin...">Gönder</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!--End Contact One Form-->
            @endif

            <!--Start Contact One Content-->
            <div class="col-xl-4">
                <div class="contact-one__content">
                    @if($section->where('section', 'call-box')->where('status',1)->first())
                    <div class="contact-one__content-single">
                        <div class="contact-one__content-single-inner">
                            <div class="icon-box">
                                {!! $section->where('section', 'call-box')->where('status',1)->first()->subtitle !!}
                            </div>

                            <div class="content-box">
                                <h2>{{$section->where('section', 'call-box')->where('status',1)->first()->title}}</h2>
                                {!!$section->where('section', 'call-box')->where('status',1)->first()->content!!}
                            </div>
                        </div>
                    </div>
                    @endif
                    @if($section->where('section', 'email-box')->where('status',1)->first())
                    <div class="contact-one__content-single">
                        <div class="contact-one__content-single-inner">
                            <div class="icon-box">
                                {!! $section->where('section', 'email-box')->where('status',1)->first()->subtitle !!}
                            </div>

                            <div class="content-box">
                                <h2>{{$section->where('section', 'email-box')->where('status',1)->first()->title}}</h2>
                                {!!$section->where('section', 'email-box')->where('status',1)->first()->content!!}
                            </div>
                        </div>
                    </div>
                    @endif
                    @if($section->where('section', 'address-box')->where('status',1)->first())
                    <div class="contact-one__content-single">
                        <div class="contact-one__content-single-inner">
                            <div class="icon-box">
                                {!! $section->where('section', 'address-box')->where('status',1)->first()->subtitle !!}
                            </div>

                            <div class="content-box">
                                <h2>{{$section->where('section', 'address-box')->where('status',1)->first()->title}}</h2>
                                {!!$section->where('section', 'address-box')->where('status',1)->first()->content!!}
                            </div>
                            

                            
                        </div>
                    </div>
                    @endif
                </div>
            </div>
            <!--End Contact One Content-->
        </div>
    </div>
</section>
<!--End Contact One-->

<!--Start Google Map-->
@if($section->where('section', 'map')->where('status',1)->first())
<section class="google-map">
    {!!$section->where('section', 'map')->where('status',1)->first()->content!!}
</section>
@endif
<!--End Google Map-->



@endsection