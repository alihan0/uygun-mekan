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
                                <span class="icon-call"></span>
                            </div>

                            <div class="content-box">
                                <h2>Call Now</h2>
                                <p class="number1"><a href="tel:123456789">+025461556695</a></p>
                                <p class="number2"><a href="tel:123456789">+826542556455</a></p>
                            </div>
                        </div>
                    </div>
                    @endif
                    @if($section->where('section', 'email-box')->where('status',1)->first())
                    <div class="contact-one__content-single">
                        <div class="contact-one__content-single-inner">
                            <div class="icon-box">
                                <span class="icon-email-1"></span>
                            </div>

                            <div class="content-box">
                                <h2>Message Us </h2>
                                <p class="email1"><a href="mailto:info@madina.com">rubel@example.com</a></p>
                                <p class="email2"><a href="mailto:info@madina.com">robi@example.com</a></p>
                            </div>
                        </div>
                    </div>
                    @endif
                    @if($section->where('section', 'address-box')->where('status',1)->first())
                    <div class="contact-one__content-single">
                        <div class="contact-one__content-single-inner">
                            <div class="icon-box">
                                <span class="icon-address"></span>
                            </div>

                            <div class="content-box">
                                <h2>Address Location </h2>
                                <p>Rangpur, Centrerl Road, <br> 2501,New City.</p>
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
<section class="google-map">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd"
        class="google-map__one" allowfullscreen></iframe>

</section>
<!--End Google Map-->



@endsection