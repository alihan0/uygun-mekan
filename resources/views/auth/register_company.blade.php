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
                                    <input type="text" placeholder="Ad Soyad" id="name">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-lg-6 col-md-6">
                                <div class="comment-form__input-box">
                                    <input type="text" placeholder="E-posta adresiniz" id="email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-lg-6 col-md-6">
                                <div class="comment-form__input-box">
                                    <input type="password" placeholder="Şifreniz" id="password" style="
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
                        <button class="thm-btn comment-form__btn" type="submit" onclick="registercompany()">Hesap Oluştur</button>
                        <a class="text-decoration-underline" href="/auth/login">Kullanım Şartları</a><span>mızı kabul etmiş sayılırsın.</span>
                        <br>
                        <br>
                        <span>Zaten bir hesabın var mı?</span><a class="ms-2 text-decoration-underline" href="/auth/login">Oturum aç</a>
                        
                    
                </div>
            </div>
            
            <div class="col-xl-6">
                <div class="contact-one__form">
                    
                    
                        <div class="row">
                            <div class="col-xl-12 col-lg-6 col-md-6">
                                <div class="comment-form__input-box">
                                    <input type="text" placeholder="Firma Adı" id="company">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-lg-6 col-md-6">
                                <div class="comment-form__input-box">
                                    <input type="text" placeholder="Telefon" id="phone">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-lg-6 col-md-6">
                                <div class="comment-form__input-box">
                                    <input type="text" placeholder="Web Sitesi" id="web">
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

@section('script')
    <script>
        function registercompany(){
            var name = $("#name").val();
            var email = $("#email").val();
            var password = $("#password").val();
            var company = $("#company").val();
            var phone = $("#phone").val();
            var web = $("#web").val();

            axios.post('/auth/save/company', {
                name: name,
                email: email,
                password: password,
                company: company,
                phone: phone,
                web: web
            }).then((res) => {
                toastr[res.data.type](res.data.message);
                if(res.data.status){
                    setInterval(() => {
                        window.location.assign('/auth/login');
                    }, 500);
                }
            })
        }
    </script>
@endsection