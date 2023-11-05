@extends('admin.master')

@section('title', 'Tüm Mekanlar')
    
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Tüm Mekanlar</h4>

                <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Kullanıcı</th>
                        <th>Kategori</th>
                        <th>Başlık</th>
                        <th>Vitrin</th>
                        <th>Durum</th>
                        <th>Kayıt Tarihi</th>
                        <th>İşlem</th>
                    </tr>
                    </thead>
                    <tbody>

                        @foreach ($places as $item)
                            <tr>
                                <td>
                                    {{$item->id}}
                                </td>
                                <td>
                                    <a href="{{$item->Owner ? '/panel/user/detail/'.$item->Owner->id : 'javascript:;'}}">{{$item->Owner->name ?? "-"}}</a>
                                </td>
                                <td>
                                    {{$item->MainCategory->name}}
                                </td>
                                <td>
                                    {{$item->title}}
                                </td>
                                <td>
                                    {{$item->showcase == 1 ? "EVET":"HAYIR"}}
                                </td>
                                <td>
                                    @if ($item->status == 1)
                                        <span class="badge bg-warning">Bekliyor</span>
                                    @elseif($item->status == 2)
                                        <span class="badge bg-success">Yayında</span>
                                    @else
                                        <span class="badge bg-danger">Yayında Değil</span>
                                    @endif
                                </td>
                                <td>
                                    {{$item->created_at}}
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                          <li><a class="dropdown-item" href="#">Görüntüle</a></li>
                                          @if ($item->status == 1)
                                          <li><a class="dropdown-item" href="#">Yayınla</a></li>
                                          <li><a class="dropdown-item" href="#">Yayınlama</a></li>
                                          @else
                                          <li><a class="dropdown-item" href="#">Yayından Kaldır</a></li>
                                          <li><a class="dropdown-item" href="#">Yayına Al</a></li>
                                              
                                          @endif
                                          <li><a class="dropdown-item" href="#">Sil</a></li>
                                        </ul>
                                      </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
    <script>
        $(document).ready(function(){$("#datatable").DataTable({
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.13.6/i18n/tr.json"
        }
    }),$("#datatable-buttons").DataTable({lengthChange:!1,buttons:["copy","excel","pdf","colvis"]}).buttons().container().appendTo("#datatable-buttons_wrapper .col-md-6:eq(0)"),$(".dataTables_length select").addClass("form-select form-select-sm")});

    </script>
@endsection