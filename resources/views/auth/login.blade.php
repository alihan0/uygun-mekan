@extends('master')

@section('title', 'Oturum Aç')
    
@section('content')
<!--Start Contact One-->
<section class="contact-one contact-page">
    <div class="container">
        <div class="row">
            <!--Start Contact One Form-->
            <div class="col-xl-6">
                <div class="contact-one__form">
                    <div class="contact-one__form-text">
                        <h2>Giriş Yap</h2>
                        <p>Devam edebilmek için lütfen oturum açın.<p>
                    </div>
                    <form action="javascript:;" class="comment-one__form" id="loginForm">
                        <div class="row">
                            <div class="col-xl-12 col-lg-6 col-md-6">
                                <div class="comment-form__input-box">
                                    <input type="text" placeholder="E-posta adresiniz" name="email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-lg-6 col-md-6">
                                <div class="comment-form__input-box">
                                    <input type="password" placeholder="Şifreniz" name="password" style="
                                    position: relative;
                                    display: block;
                                    background: #ffffff;
                                    width: 100%;
                                    height: 50px;
                                    border: 1px solid #dddddd;
                                    color: var(--thm-gray);
                                    font-size: 17px;
                                    font-weight: 400;
                                    text-transform: none;
                                    font-style: normal;
                                    padding-left: 20px;
                                    padding-right: 20px;
                                    border-radius: 5px;
                                    transition: all 500ms ease;
                                    font-family: var(--thm-font);
                                    outline: none;
                                ">
                                </div>
                            </div>
                        </div>
                        <button class="thm-btn comment-form__btn" type="submit" onclick="login()">Giriş</button>
                        <button class="btn btn-outline-danger comment-form__btn" type="submit" style=" position: relative;
                        display: inline-block;
                        vertical-align: middle;
                        -webkit-appearance: none;
                        font-size: 17px;
                        font-weight: 500;
                        text-transform: capitalize;
                        padding: 17px 40px 17px;
                        border-radius: 5px;
                        font-family: var(--thm-font-3);
                        letter-spacing: 0.015em;
                        transition: transform 0.3s ease;
                        overflow: hidden;
                        z-index: 1;"><i class="fab fa-google-plus-g me-4"></i> Google ile Oturum Aç</button>
                    </form>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="contact-one__form">
                    <div class="contact-one__form-text">
                        <h2>Hesap Oluştur</h2>
                        <p>Hemen ücretsiz hesap oluştur.<p>
                    </div>
                    <form action="javascript:;" class="comment-one__form" id="registerForm">
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
                                    <input type="text" placeholder="E-posta adresiniz" name="email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-lg-6 col-md-6">
                                <div class="comment-form__input-box">
                                    <input type="password" placeholder="Şifreniz" name="password" style="
                                    position: relative;
                                    display: block;
                                    background: #ffffff;
                                    width: 100%;
                                    height: 50px;
                                    border: 1px solid #dddddd;
                                    color: var(--thm-gray);
                                    font-size: 17px;
                                    font-weight: 400;
                                    text-transform: none;
                                    font-style: normal;
                                    padding-left: 20px;
                                    padding-right: 20px;
                                    border-radius: 5px;
                                    transition: all 500ms ease;
                                    font-family: var(--thm-font);
                                    outline: none;
                                ">
                                </div>
                            </div>
                        </div>
                        <button class="thm-btn comment-form__btn" type="submit" onclick="register()">Kaydol</button>
                        <span class="mx-2 text-muted">ya da </span>
                        <a href="/auth/register/company" class="btn-primary btn comment-form__btn" type="submit" style=" position: relative;
                        display: inline-block;
                        vertical-align: middle;
                        -webkit-appearance: none;
                        border: none;
                        outline: none !important;
                        color: #ffffff;
                        font-size: 17px;
                        font-weight: 500;
                        text-transform: capitalize;
                        padding: 17px 40px 17px;
                        border-radius: 5px;
                        font-family: var(--thm-font-3);
                        letter-spacing: 0.015em;
                        transition: transform 0.3s ease;
                        overflow: hidden;
                        z-index: 1;">Firma Hesabı Oluştur</a>
                    </form>
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

@section('script')
    <script>
        function register(){
            var data = $("#registerForm").serialize();
            axios.post('/auth/save', data).then((res) => {
                toastr[res.data.type](res.data.message);
                if(res.data.status){
                    setInterval(() => {
                        window.location.reload();
                    }, 500);
                }
            })
        }
        function login(){
            var data = $("#loginForm").serialize();
            axios.post('/auth/logincontrol', data).then((res) => {
                toastr[res.data.type](res.data.message);
                if(res.data.status){
                    setInterval(() => {
                        window.location.assign('/account');
                    },500);
                }
            });
        }
    </script>
@endsection