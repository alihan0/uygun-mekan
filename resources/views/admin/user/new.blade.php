@extends('admin.master')

@section('title', 'Yeni Kullanıcı')
    
@section('content')
    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Yeni Kullanıcı Oluştur</h4>

                    <form action="javascript:;" id="userForm">
                        <div class="row mb-4">
                            <label for="type" class="col-sm-3 col-form-label">Hesap Türü</label>
                            <div class="col-sm-9">
                              <select name="type" class="form-control" id="type">
                                <option value="0">Seçin</option>
                                <option value="USER">Kullanıcı</option>
                                <option value="COMPANY">Firma</option>
                                <option value="ADMIN">Admin</option>
                              </select>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="name" class="col-sm-3 col-form-label">İsim</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" id="name" name="name" placeholder="Ad ve soyad girin ">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="email" class="col-sm-3 col-form-label">E-posta</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="email" name="email" placeholder="E-posta adresi girin">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="password" class="col-sm-3 col-form-label">Password</label>
                            <div class="col-sm-9">
                              <input type="password" class="form-control" id="password" name="password" placeholder="Hesap şifresini girin">
                            </div>
                        </div>
                        
                        <div class="row mb-4">
                            <label for="phone" class="col-sm-3 col-form-label">Telefon</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" id="phone" name="phone" placeholder="Telefon numarası girin ">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="company" class="col-sm-3 col-form-label">Firma</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" id="company" name="company" placeholder="Firma adı girin ">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="web" class="col-sm-3 col-form-label">Website</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" id="web" name="web" placeholder="Firma web sitesi girin ">
                            </div>
                        </div>

                        <div class="row justify-content-end">
                            <div class="col-sm-9">
                                <div>
                                    <button type="submit" class="btn btn-primary w-md" onclick="createUser()">Oluştur</button>
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
        function createUser(){
            var data = $("#userForm").serialize();
            axios.post('/panel/user/create', data).then((res) => {
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