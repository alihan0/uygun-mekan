@extends('admin.master')

@section('title', 'Tüm Kullanıcılar')
    
@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Tüm Kullanıcılar</h4>

            <div class="page-title-right">
                <a href="/panel/user/new" class="btn btn-primary"><i class="fas fa-plus"></i> Yeni Kullanıcı</a>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title">Tüm Kullanıcılar</h4>
                <p class="card-title-desc">
                    Aşağıdaki tabloda tüm kullanıcılarınızın listesini görüntüleyebilirsiniz. Bir kullanıcının detaylarını görmek isterseniz ID numarasına tıklayın. Bir kullanıcıyı silebilir ya da pasif hale getirebilirsiniz. Bir kullanıcıyı silmek tehlikelidir, sistemin çalışmasını engelleyebilir ve tavsiye edilmez. Lütfen sadece yanlışlıkla oluşturduğunuz yeni kullanıcıları silin. Kullanıcıları pasif hale getirdiğinizde oturum açamazlar fakat ekledikleri mekan kaldırılmaz. Yeni bir kullanıcı eklemek için sağ üstteki menüyü kullanın.
                </p>

                <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Rol</th>
                        <th>İsim</th>
                        <th>E-posta</th>
                        <th>Telefon</th>
                        <th>Firma</th>
                        <th>Durum</th>
                        <th>Kayıt Tarihi</th>
                        <th>İşlem</th>
                    </tr>
                    </thead>


                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>
                                    <a href="/panel/user/detail/{{$user->id}}">{{$user->id}}</a>
                                </td>
                                <td>
                                    {{$user->type}}
                                </td>
                                <td>
                                    {{$user->name}}
                                </td>
                                <td>
                                    {{$user->email}}
                                </td>
                                <td>
                                    {{$user->phone}}
                                </td>
                                <td>
                                    {{$user->company}}
                                </td>
                                <td>
                                    @if ($user->status == 1)
                                        <span class="badge bg-success">Aktif</span>
                                    @else
                                    <span class="badge bg-warning">Pasif</span>
                                        
                                    @endif
                                </td>
                                <td>
                                    {{$user->created_at}}
                                </td>
                                <td>
                                    <a href="/panel/user/detail/{{$user->id}}" class="btn btn-primary btn-sm" data-bs-toggle="tooltip" title="Görüntüle"><i class="fas fa-eye"></i></a>
                                    <a href="/panel/user/edit/{{$user->id}}" class="btn btn-warning btn-sm" data-bs-toggle="tooltip" title="Düzenle"><i class="fas fa-edit"></i></a>
                                    @if ($user->status == 1)
                                        <a href="javascript:;" class="btn btn-secondary btn-sm" data-bs-toggle="tooltip" title="Pasifleştir" onclick="setPassive({{$user->id}})"><i class="fas fa-user-slash"></i></a>
                                    @else
                                    <a href="javascript:;" class="btn btn-success btn-sm" data-bs-toggle="tooltip" title="Aktifleştir" onclick="setActive({{$user->id}})"><i class="fas fa-user-check"></i></a>
                                    @endif
                                    <a href="javascript:;" class="btn btn-danger btn-sm" data-bs-toggle="tooltip" title="Sil" onclick="remove({{$user->id}})"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->
@endsection

@section('script')
    <script>
        $(document).ready(function(){$("#datatable").DataTable({
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.13.6/i18n/tr.json"
        }
    }),$("#datatable-buttons").DataTable({lengthChange:!1,buttons:["copy","excel","pdf","colvis"]}).buttons().container().appendTo("#datatable-buttons_wrapper .col-md-6:eq(0)"),$(".dataTables_length select").addClass("form-select form-select-sm")});

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
                    window.location.reload();
                },500)
            }
        })
    }
    </script>
@endsection