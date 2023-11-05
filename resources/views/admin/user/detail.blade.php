@extends('admin.master')

@section('title')
    {{$user->name}} Detayları
@endsection

@section('content')
    <div class="row">
        <div class="col-12">

            <div class="row">
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Profil Bilgileri</h4>

                            <ul class="list-group">
                                <li class="list-group-item d-flex justify-content-between">
                                    <span class="fw-bold">Hesap Türü</span>
                                    <span>{{$user->type}}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <span class="fw-bold">İsim</span>
                                    <span>{{$user->name}}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <span class="fw-bold">E-posta</span>
                                    <span>{{$user->email}}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <span class="fw-bold">Telefon</span>
                                    <span>{{$user->phone}}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <span class="fw-bold">Firma Adı</span>
                                    <span>{{$user->company}}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <span class="fw-bold">Web Sitesi</span>
                                    <span>{{$user->web}}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <span class="fw-bold">Hesap Açılış Tarihi</span>
                                    <span>{{$user->created_at}}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <span class="fw-bold">Son Güncelleme</span>
                                    <span>{{$user->updated_at}}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <span class="fw-bold">Hesap Durumu</span>
                                    <span class="badge p-2 {{$user->status == 1 ? 'bg-success' : 'bg-danger'}}">{{$user->status == 1 ? "Aktif" : "Pasif"}}</span>
                                </li>
                              </ul>
                        </div>
                    </div>
                </div>
                <div class="col-8">
                    <div class="row mb-4">
                        <div class="col-12">
                            <a href="javascript:;" class="btn btn-primary" data-bs-toggle="tooltip" title="Şifre değiştir" onclick="changePassword()"><i class="fas fa-key"></i> Şifre Değiştir</a>
                            <a href="/panel/user/edit/{{$user->id}}" class="btn btn-warning" data-bs-toggle="tooltip" title="Düzenle"><i class="fas fa-edit"></i> Bilgileri Düzenle</a>
                                    @if ($user->status == 1)
                                        <a href="javascript:;" class="btn btn-secondary" data-bs-toggle="tooltip" title="Pasifleştir" onclick="setPassive({{$user->id}})"><i class="fas fa-user-slash"></i> Pasifleştir</a>
                                    @else
                                    <a href="javascript:;" class="btn btn-success" data-bs-toggle="tooltip" title="Aktifleştir" onclick="setActive({{$user->id}})"><i class="fas fa-user-check"></i> Aktifleştir</a>
                                    @endif
                                    <a href="javascript:;" class="btn btn-danger" data-bs-toggle="tooltip" title="Sil" onclick="remove({{$user->id}})"><i class="fas fa-trash"></i> Kullanıcıyı Sil</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Mekanlar</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Faturalar</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Ödemeler</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <div id="changePasswordModal" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Şifre Değiştir</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <p>Şifresini değiştirdiğiniz kullanıcı artık bu şifre ile oturum açacaktır. Değiştirdikten sonra kullanıcıya bilgi vermeyi unutmayın.</p>
              <div class="mb-3">
                <label for="password" class="form-label">Yeni Şifre</label>
                <input type="password" class="form-control" id="password">
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Vazgeç</button>
              <button type="button" class="btn btn-primary" onclick="setPassword({{$user->id}})">Şifre Değiştir</button>
            </div>
          </div>
        </div>
      </div>
@endsection


@section('script')
    <script>
        function setPassive(id){
        axios.post('/panel/user/setPassive', {id:id}).then((res) => {
            toastr[res.data.type](res.data.message);
            if(res.data.status){
                setInterval(() => {
                    window.location.reload();
                },500)
            }
        })
    }

    function setActive(id){
        axios.post('/panel/user/setActive', {id:id}).then((res) => {
            toastr[res.data.type](res.data.message);
            if(res.data.status){
                setInterval(() => {
                    window.location.reload();
                },500)
            }
        })
    }

    function remove(id){
        axios.post('/panel/user/remove', {id:id}).then((res) => {
            toastr[res.data.type](res.data.message);
            if(res.data.status){
                setInterval(() => {
                    window.location.assign('/panel/user');
                },500)
            }
        })
    }

    function changePassword(){
        $("#changePasswordModal").modal('show');
    }

    function setPassword(id){
        axios.post('/panel/user/setPassword', {id:id, password: $("#password").val()}).then((res) => {
            toastr[res.data.type](res.data.message);
            if(res.data.status){
                $("#changePasswordModal").modal('hide');
                setInterval(() => {
                    window.location.reload();
                },500)
            }
        })
    }
    </script>
@endsection