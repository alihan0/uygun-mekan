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
                            <button class="nav-link" id="change-password-tab" data-bs-toggle="tab" data-bs-target="#change-password-tab-pane" type="button" role="tab" aria-controls="change-password-tab-pane" aria-selected="false">Şifre Değiştir</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="invoices-tab" data-bs-toggle="tab" data-bs-target="#invoices-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Faturalarım</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="payments-tab" data-bs-toggle="tab" data-bs-target="#payments-tab-pane" type="button" role="tab" aria-controls="payments-tab-pane" aria-selected="false">Ödemelerim</button>
                        </li>
                        
                        </ul>
                        <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                            <div class="row pt-4">
                                
                                
                                @foreach ($user->Place as $place)
                                <div class="col-6 mb-4">
                                    <div class="card {{$place->status == 0 ? 'bg-light' : ''}}">
                                        <div class="card-body">
                                            <a href="/place/{{ $place->slug }}"><h6 class="card-title">{{$place->title}}</h6></a>
                                            <hr>
                                            <div class="row">
                                                <div class="col-10">
                                                    <span>{{$place->MainCategory->name}}<br>{{$place->address}} </span>
                                                </div>
                                                <div class="col-2">
                                                    @if ($place->status == 0)
                                                        <span class="badge bg-danger float-end">Reddedildi</span>
                                                    @elseif($place->status == 1)
                                                        <span class="badge bg-warning float-end">Beklemede</span>
                                                    @elseif($place->status == 2)
                                                        <span class="badge bg-success float-end">Yayında</span>
                                                    @endif
                                                    
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                
                            </div>
                            <div class="row pt-4">
                                <div class="col-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <h6 class="card-title">Bekleyen Ödemeler</h6>
                                            <h2 class="card-title">{{$user->Invoices->where('status',1)->count()}}</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <h6 class="card-title">Faturalarım</h6>
                                            <h2 class="card-title">{{$user->Invoices->count()}}</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <h6 class="card-title">Ödemelerim</h6>
                                            <h2 class="card-title">{{$user->Payments->where('status',2)->count()}}</h2>
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
                        <div class="tab-pane fade" id="change-password-tab-pane" role="tabpanel" aria-labelledby="change-password-tab" tabindex="0">
                            <div class="row pt-4">
                                <div class="col-8">
                                    <div class="card">
                                        <div class="card-body">
                                            <form action="javascript:;" class="comment-one__form" id="profileForm">
                                                <div class="mb-3">
                                                  <label for="password" class="form-label">Mevcut Şifre:</label>
                                                  <input type="password" class="form-control" id="password" name="password">
                                                </div>
                                                <div class="mb-3">
                                                  <label for="newpass" class="form-label">Yeni Şifre:</label>
                                                  <input type="password" class="form-control" id="newpass" name="newpass">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="repass" class="form-label">Şifre Tekrar:</label>
                                                    <input type="password" class="form-control" id="repass" name="repass">
                                                  </div>
                                               
                                                <button type="submit" class="btn btn-primary" onclick="changePassword()">Güncelle</button>
                                              </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="invoices-tab-pane" role="tabpanel" aria-labelledby="invoices-tab" tabindex="0">
                            <div class="row mt-4">
                                <div class="col-12">
                                    <div class="card-">
                                        <div class="card-body">
                                            <table class="table">
                                                <thead>
                                                  <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Oluşturulma Tarihi</th>
                                                    <th scope="col">Ödeme Tarihi</th>
                                                    <th scope="col">Son Ödeme Tarihi</th>
                                                    <th scope="col">Tutar</th>
                                                    <th scope="col">Durum</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  @foreach ($user->Invoices as $inv)
                                                      <tr>
                                                        <td>
                                                            {{$inv->id}}
                                                        </td>
                                                        <td>
                                                            {{$inv->created_at}}
                                                        </td>
                                                        <td>
                                                            {{$inv->payment_date ?? "-"}}
                                                        </td>
                                                        <td>
                                                            {{$inv->last_payment_date}}
                                                        </td>
                                                        <td>
                                                            {{$inv->amount}}₺
                                                        </td>
                                                        <td>
                                                            {!! $inv->status == 1 ? '<span class="badge bg-warning">Bekliyor</span>' : ($inv->status == 2 ? '<span class="badge bg-success">Ödendi</span>' : '<span class="badge bg-danger">İptal Edildi</span>') !!}
                                                            @if ($inv->status == 1)
                                                                <a href="#" class="btn btn-primary btn-sm ms-4">Öde</a>
                                                            @endif

                                                        </td>
                                                      </tr>
                                                  @endforeach
                                                </tbody>
                                              </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="payments-tab-pane" role="tabpanel" aria-labelledby="payments-tab" tabindex="0">
                            <div class="row mt-4">
                                <div class="col-12">
                                    <div class="card-">
                                        <div class="card-body">
                                            <table class="table">
                                                <thead>
                                                  <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Fatura</th>
                                                    <th scope="col">Tutar</th>
                                                    <th scope="col">Ödeme Yöntemi</th>
                                                    <th scope="col">Ödeme Tarihi</th>
                                                    <th scope="col">Kart</th>
                                                    <th scope="col">Durum</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  @foreach ($user->Payments as $payment)
                                                      <tr>
                                                        <td>
                                                            {{$payment->id}}
                                                        </td>
                                                        <td>
                                                            {{$payment->invoice}}
                                                        </td>
                                                        <td>
                                                            {{$payment->amount}}₺
                                                        </td>
                                                        <td>
                                                            {{$payment->payment_way == "1" ? "Kredi Kartı" : "-"}}
                                                        </td>
                                                        <td>
                                                            {{$payment->created_at}}
                                                        </td>
                                                        <td>
                                                            {{$payment->card_number}}
                                                        </td>
                                                        <td>
                                                            {!! $payment->status == 1 ? '<span class="badge bg-warning">Bekliyor</span>' : ($inv->status == 2 ? '<span class="badge bg-success">Onaylandı</span>' : '<span class="badge bg-danger">Reddedildi</span>') !!}

                                                        </td>
                                                      </tr>
                                                  @endforeach
                                                </tbody>
                                              </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
        function changePassword(){
            var password = $("#password").val();
            var newpass = $("#newpass").val();
            var repass = $("#repass").val();

            axios.post('/auth/edit/password', {password: password, newpass: newpass, repass: repass}).then((res)=>{
                toastr[res.data.type](res.data.message);
                if(res.data.status){
                    setInterval(() => {
                        window.location.reload();
                    },500);
                }
            });
        }
    </script>
@endsection