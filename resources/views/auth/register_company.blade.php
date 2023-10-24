@extends('master')

@section('title', 'Oturum Aç')
    
@section('content')
<!--Start Contact One-->
<section class="contact-one contact-page">
    <div class="container">
        <div class="row">
            <!--Start Contact One Form-->
            <div class="contact-one__form-text">
                <h2>Firma Hesabı Oluştur</h2>
                <p>Firma hesabı oluşturarak mekanını kolayca ekleyebilirsin.<p>
            </div>
            <div class="col-xl-6">
                <div class="contact-one__form">
                    
                    
                        <div class="row">
                            <div class="col-xl-12 col-lg-6 col-md-6">
                                <div class="comment-form__input-box">
                                    <input type="text" placeholder="Ad Soyad" name="name">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-lg-6 col-md-6">
                                <div class="comment-form__input-box">
                                    <input type="text" placeholder="E-posta adresiniz" name="name">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-lg-6 col-md-6">
                                <div class="comment-form__input-box">
                                    <input type="text" placeholder="Şifreniz" name="name">
                                </div>
                            </div>
                        </div>
                        <button class="thm-btn comment-form__btn" type="submit">Hesap Oluştur</button>
                        <span>Zaten bir hesabın var mı?</span><a class="ms-2" href="/auth/login">Oturum aç</a>
                        
                    
                </div>
            </div>
            
            <div class="col-xl-6">
                <div class="contact-one__form">
                    
                    
                        <div class="row">
                            <div class="col-xl-12 col-lg-6 col-md-6">
                                <div class="comment-form__input-box">
                                    <input type="text" placeholder="Firma Adı" name="name">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-lg-6 col-md-6">
                                <div class="comment-form__input-box">
                                    <input type="text" placeholder="Telefon" name="name">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-lg-6 col-md-6">
                                <div class="comment-form__input-box">
                                    <input type="text" placeholder="Web Sitesi" name="name">
                                </div>
                            </div>
                        </div>
                        
                    
                </div>
            </div>
        
            <!--End Contact One Form-->

            <!--Start Contact One Content-->
            
            <!--End Contact One Content-->
        </div>
    </div>
</section>
<!--End Contact One-->


@endsection