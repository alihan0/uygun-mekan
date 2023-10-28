@extends('master')

@section('title', 'Hesabım')
    
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
                        <h2>Hesabım</h2>
                        <div class="page-header__menu">
                            <ul>
                                <li><a href="/"><i class="fas fa-home"></i></a></li>
                                <li>Hesabım</li>
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

<div class="container">
    <div class="row py-4">
        <div class="col-4">
            <div class="card">
                <div class="cadr-body">
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between">Hesap Türü: <b>{{$user->type}}</b></li>
                        <li class="list-group-item d-flex justify-content-between">İsim: <b>{{$user->name}}</b></li>
                        <li class="list-group-item d-flex justify-content-between">E-posta: <b>{{$user->email}}</b></li>
                        <li class="list-group-item d-flex justify-content-between">Telefon: <b>{{$user->phone ?? "-"}}</b></li>
                        @if ($user->type == "COMPANY")
                            <li class="list-group-item d-flex justify-content-between">Firma Adı: <b>{{$user->company ?? "-"}}</b></li>
                            <li class="list-group-item d-flex justify-content-between">Web Site: <b>{{$user->web ?? "-"}}</b></li>
                        @endif
                      </ul>
                </div>
            </div>
        </div>
        <div class="col-8">
            <div class="row">
                <div class="col-12">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Profil</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="edit-profile-tab" data-bs-toggle="tab" data-bs-target="#edit-profile-tab-pane" type="button" role="tab" aria-controls="edit-profile-tab-pane" aria-selected="true">Profili Düzenle</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Şifre Değiştir</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Faturalarım</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Ödemelerim</button>
                        </li>
                        
                        </ul>
                        <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                            <div class="row pt-4">
                                <div class="col-8">
                                    <div class="card">
                                        <div class="card-body">
                                            <h6 class="card-title">Mekanım</h6>
                                            <hr>
                                            <div class="d-flex justify-content-between">
                                                <span>Eklenmiş Mekan Yok. </span><a href="/new-place" class="text-decoration-underline">Hemen Mekan Ekle.</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row pt-4">
                                <div class="col-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <h6 class="card-title">Bekleyen Ödemeler</h6>
                                            <h2 class="card-title">0</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <h6 class="card-title">Faturalarım</h6>
                                            <h2 class="card-title">0</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <h6 class="card-title">Ödemelerim</h6>
                                            <h2 class="card-title">0</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="edit-profile-tab-pane" role="tabpanel" aria-labelledby="edit-profile-tab" tabindex="0">
                            <div class="row pt-4">
                                <div class="col-8">
                                    <div class="card">
                                        <div class="card-body">
                                            <form action="javascript:;" class="comment-one__form" id="profileForm">
                                                <div class="mb-3">
                                                  <label for="name" class="form-label">İsim:</label>
                                                  <input type="text" class="form-control" id="name" name="name" value="{{$user->name}}">
                                                </div>
                                                <div class="mb-3">
                                                  <label for="email" class="form-label">E-posta:</label>
                                                  <input type="text" class="form-control" id="email" name="email" value="{{$user->email}}">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="phone" class="form-label">Telefon:</label>
                                                    <input type="text" class="form-control" id="phone" name="phone" value="{{$user->phone}}">
                                                  </div>
                                                  @if ($user->type == "COMPANY")
                                                  <div class="mb-3">
                                                    <label for="company" class="form-label">Firma Adı:</label>
                                                    <input type="text" class="form-control" id="company" name="company" value="{{$user->company}}">
                                                  </div>
                                                  <div class="mb-3">
                                                    <label for="web" class="form-label">Web Site:</label>
                                                    <input type="text" class="form-control" id="web" name="web" value="{{$user->web}}">
                                                  </div>
                                                  @endif
                                                <button type="submit" class="btn btn-primary" onclick="editProfile()">Kaydet</button>
                                              </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">...</div>
                        <div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">...</div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
    <script>
        function editProfile(){
            axios.post('/auth/edit/profile', $("#profileForm").serialize()).then((res)=>{
                toastr[res.data.type](res.data.message);
                if(res.data.status){
                    setInterval(() => {
                        window.location.reload();
                    }, 500);
                }
            });
        }
    </script>
@endsection