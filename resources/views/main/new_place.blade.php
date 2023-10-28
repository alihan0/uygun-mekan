@extends('master')

@section('title', 'Yeni Mekan Ekle')
    
@section('content')
<!--Start Contact One-->
<section class="contact-one contact-page">
    <div class="container">
        <div class="row">
            <!--Start Contact One Form-->
            
            <div class="col-xl-12">
                <div class="contact-one__form">
                    <div class="container w-50">
                        <div class="contact-one__form-text">
                            <h2>Yeni Mekan Ekle</h2>
                            <p>Aşağıdaki Formu Doldurarak Hemen Mekanını <b>{{$system->site_name}}</b>'a ekleyebilirsin!<p>
                                @if ($system->discounted_subs_day > 0)
                                    <p><b>{{$system->discounted_subs_day}} Gün</b> boyunca sadece <b>{{ $system->discounted_subs_price }}₺ !</b></p>
                                @endif
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-6">
                                <div class="">
                                    <label for="category" class="form-label">Kategori:</label>
                                    <div class="select-box">
                                        <select class="selectmenu border wide mb-4 rounded" id="category">
                                            <option value="0" selected="selected">Kategori Seç</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-lg-6 col-md-6">
                                <label for="title" class="form-label">Başlık:</label>
                                <div class="comment-form__input-box">
                                    <input type="text" placeholder="Mekanınızın adı" id="title">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-lg-6 col-md-6">
                                <label for="detail" class="form-label">Detaylar:</label>
                                <div class="comment-form__input-box">
                                    <textarea id="detail" cols="30" rows="10" placeholder="Mekanınızdan kısaca bahsedin..."></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-lg-6 col-md-6">
                                <label for="cover" class="form-label">Kapak Fotoğrafı:</label>
                                <div class="comment-form__input-box">
                                    <input type="file" id="cover" style="position: relative;
                                    display: block;
                                    background: #ffffff;
                                    width: 100%;
                                    padding-top:15px;
                                    padding-bottom:15px;
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
                                    outline: none;">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-lg-6 col-md-6">
                                <label for="web" class="form-label">Web Siteniz:</label>
                                <div class="comment-form__input-box">
                                    <input type="text" placeholder="Mekanınıza ait web sitesi" id="web">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-lg-6 col-md-6">
                                <label for="phone" class="form-label">Telefon:</label>
                                <div class="comment-form__input-box">
                                    <input type="text" placeholder="Mekanınızın telefon numarası" id="phone">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-lg-6 col-md-6">
                                <label for="email" class="form-label">E-posta (opsiyonel):</label>
                                <div class="comment-form__input-box">
                                    <input type="text" placeholder="Mekanınızın e-posta adresi (varsa)" id="email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-lg-6 col-md-6">
                                <label for="address" class="form-label">Mekanın Adresi:</label>
                                <div class="comment-form__input-box">
                                    <input type="text" placeholder="Mekanınızın adresi" id="address">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-lg-6 col-md-6">
                                <label for="facebook" class="form-label">Facebook:</label>
                                <div class="comment-form__input-box">
                                    <input type="text" placeholder="Mekanınızın facebook sayfası" id="facebook">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-lg-6 col-md-6">
                                <label for="twitter" class="form-label">Twitter:</label>
                                <div class="comment-form__input-box">
                                    <input type="text" placeholder="Mekanınızın twitter sayfası" id="twitter">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-lg-6 col-md-6">
                                <label for="instagram" class="form-label">İnstagram:</label>
                                <div class="comment-form__input-box">
                                    <input type="text" placeholder="Mekanınızın instagram sayfası" id="instagram">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-lg-6 col-md-6">
                                <label for="capacity" class="form-label">Kapasite:</label>
                                <div class="comment-form__input-box">
                                    <input type="text" placeholder="Mekanınızın aynı anda kapasitesi" id="capacity">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-6">
                                <div class="">
                                    <label for="exampleInputEmail1" class="form-label">Mekanınızın Özellikleri:</label>
                                        <div class="d-flex flex-wrap">
                                            @foreach ($features as $feature)
                                                <div class="me-3 mb-3">
                                                    <input class="form-check-input" value="{{$feature->id}}" type="checkbox" value="" id="feature{{$feature->id}}">
                                                    <label class="form-check-label" for="feature{{$feature->id}}">
                                                    {{$feature->name}}
                                                    </label>
                                                </div>
                                            @endforeach
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-lg-6 col-md-6">
                                <label for="tags" class="form-label">Etiketler:</label>

                                <div class="comment-form__input-box">
                                    <input type="text" placeholder="Mekanınızı etiketleyin" id="tags">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-12 col-lg-6 col-md-6">
                                <label for="exampleInputEmail1" class="form-label">Çalışma Saatleri:</label>
                                <hr class="mb-4">
                                <div class="comment-form__input-box" style="margin-bottom:10px;">
                                    <span class="fw-bold">Pazartesi</span>
                                    <div class="row ps-4">
                                        <div class="col-4 d-flex align-items-center">
                                            <span class="pe-2">Açılış:</span>
                                            <input type="time" style="height:30px;padding:5px !important;"id="monday_open_time">
                                        </div>
                                        <div class="col-6 d-flex align-items-center">
                                            <span class="pe-2">Kapanış:</span>
                                            <input type="time" style="height:30px;padding:5px !important;" id="monday_close_time">
                                        </div>
                                    </div>
                                </div>
                                <div class="comment-form__input-box"style="margin-bottom:10px;">
                                    <span class="fw-bold">Salı</span>
                                    <div class="row ps-4">
                                        <div class="col-4 d-flex align-items-center">
                                            <span class="pe-2">Açılış:</span>
                                            <input type="time" style="height:30px;padding:5px !important;" id="tuesday_open_time">
                                        </div>
                                        <div class="col-6 d-flex align-items-center">
                                            <span class="pe-2">Kapanış:</span>
                                            <input type="time" style="height:30px;padding:5px !important;" id="tuesday_close_time">
                                        </div>
                                    </div>
                                </div>
                                <div class="comment-form__input-box"style="margin-bottom:10px;">
                                    <span class="fw-bold">Çarşamba</span>
                                    <div class="row ps-4">
                                        <div class="col-4 d-flex align-items-center">
                                            <span class="pe-2">Açılış:</span>
                                            <input type="time" style="height:30px;padding:5px !important;" id="wednesday_open_time">
                                        </div>
                                        <div class="col-6 d-flex align-items-center">
                                            <span class="pe-2">Kapanış:</span>
                                            <input type="time" style="height:30px;padding:5px !important;" id="wednesday_close_time">
                                        </div>
                                    </div>
                                </div>
                                <div class="comment-form__input-box"style="margin-bottom:10px;">
                                    <span class="fw-bold">Perşembe</span>
                                    <div class="row ps-4">
                                        <div class="col-4 d-flex align-items-center">
                                            <span class="pe-2">Açılış:</span>
                                            <input type="time" style="height:30px;padding:5px !important;" id="thursday_open_time">
                                        </div>
                                        <div class="col-6 d-flex align-items-center">
                                            <span class="pe-2">Kapanış:</span>
                                            <input type="time" style="height:30px;padding:5px !important;" id="thursday_close_time">
                                        </div>
                                    </div>
                                </div>
                                <div class="comment-form__input-box"style="margin-bottom:10px;">
                                    <span class="fw-bold">Cuma</span>
                                    <div class="row ps-4">
                                        <div class="col-4 d-flex align-items-center">
                                            <span class="pe-2">Açılış:</span>
                                            <input type="time" style="height:30px;padding:5px !important;" id="friday_open_time">
                                        </div>
                                        <div class="col-6 d-flex align-items-center">
                                            <span class="pe-2">Kapanış:</span>
                                            <input type="time" style="height:30px;padding:5px !important;" id="firday_close_time">
                                        </div>
                                    </div>
                                </div>
                                <div class="comment-form__input-box"style="margin-bottom:10px;">
                                    <span class="fw-bold">Cumartesi</span>
                                    <div class="row ps-4">
                                        <div class="col-4 d-flex align-items-center">
                                            <span class="pe-2">Açılış:</span>
                                            <input type="time" style="height:30px;padding:5px !important;" id="saturday_open_time">
                                        </div>
                                        <div class="col-6 d-flex align-items-center">
                                            <span class="pe-2">Kapanış:</span>
                                            <input type="time" style="height:30px;padding:5px !important;" id="saturday_close_time">
                                        </div>
                                    </div>
                                </div>
                                <div class="comment-form__input-box"style="margin-bottom:10px;">
                                    <span class="fw-bold">Pazar</span>
                                    <div class="row ps-4">
                                        <div class="col-4 d-flex align-items-center">
                                            <span class="pe-2">Açılış:</span>
                                            <input type="time" style="height:30px;padding:5px !important;" id="sunday_open_time">
                                        </div>
                                        <div class="col-6 d-flex align-items-center">
                                            <span class="pe-2">Kapanış:</span>
                                            <input type="time" style="height:30px;padding:5px !important;" id="sunday_open_time">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                        
                <input type="hidden" id="selected-features">
                        
                    
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
    document.addEventListener('DOMContentLoaded', function() {
        var checkboxes = document.querySelectorAll('.form-check-input');
        var selectedFeaturesInput = document.getElementById('selected-features');

        checkboxes.forEach(function(checkbox) {
            checkbox.addEventListener('change', function() {
                var selectedFeatures = [];

                checkboxes.forEach(function(checkbox) {
                    if (checkbox.checked) {
                        selectedFeatures.push(checkbox.value);
                    }
                });

                selectedFeaturesInput.value = selectedFeatures.join(',');
            });
        });
    });
</script>
@endsection