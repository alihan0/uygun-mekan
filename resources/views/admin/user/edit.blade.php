@extends('admin.master')

@section('title', 'Yeni Kullanıcı')
    
@section('content')
    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Yeni Kullanıcı Oluştur</h4>

                    <form action="javascript:;" id="userForm">
                        <input type="hidden" name="id" id="id" value="{{$user->id}}">
                        <div class="row mb-4">
                            <label for="type" class="col-sm-3 col-form-label">Hesap Türü</label>
                            <div class="col-sm-9">
                              <select name="type" class="form-control" id="type">
                                <option value="0">Seçin</option>
                                <option {{$user->type == "USER" ? "selected" : ""}} value="USER">Kullanıcı</option>
                                <option {{$user->type == "COMPANY" ? "selected" : ""}} value="COMPANY">Firma</option>
                                <option {{$user->type == "ADMIN" ? "selected" : ""}} value="ADMIN">Admin</option>
                              </select>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="name" class="col-sm-3 col-form-label">İsim</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" id="name" name="name" value="{{$user->name}}">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="email" class="col-sm-3 col-form-label">E-posta</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="email" name="email" value="{{$user->email}}">
                            </div>
                        </div>
                        
                        <div class="row mb-4">
                            <label for="phone" class="col-sm-3 col-form-label">Telefon</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" id="phone" name="phone" value="{{$user->phone}}">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="company" class="col-sm-3 col-form-label">Firma</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" id="company" name="company" value="{{$user->company}}">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="web" class="col-sm-3 col-form-label">Website</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" id="web" name="web" value="{{$user->web}}">
                            </div>
                        </div>

                        <div class="row justify-content-end">
                            <div class="col-sm-9">
                                <div>
                                    <button type="submit" class="btn btn-primary w-md" onclick="updateUser()">Güncelle</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div>
@endsection

@section('script')
    <script>
        function updateUser(){
            var data = $("#userForm").serialize();
            axios.post('/panel/user/update', data).then((res) => {
                toastr[res.data.type](res.data.message);
                if(res.data.status){
                    setInterval(() => {
                        window.location.assign('/panel/user/detail/'+res.data.id);
                    },500)
                }
            })
        }
    </script>
@endsection