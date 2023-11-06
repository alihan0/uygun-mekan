@extends('admin.master')

@section('title', 'Blog')
    

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4 d-flex justify-content-between">
                        <span>Blog Postları</span>
                        <a href="/panel/blog/new" class="btn btn-primary btn-sm"><i class="fas fa-plus fa-sm"></i> Yeni yazı</a>
                    </h4>

                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Kapak</th>
                            <th scope="col">Başlık</th>
                            <th scope="col">İşlem</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $item)
                                <tr>
                                    <td>
                                        {{$item->id}}
                                    </td>
                                    <td>
                                        
                                        <img src="{{$item->cover}}" alt="" width="75">
                                    </td>
                                    <td>
                                        {{$item->title}}
                                    </td>
                                    <td>
                                        <a href="javasctipt:;" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                        <a href="javasctipt:;" class="btn btn-danger btn-sm" onclick="remove({{$item->id}})"><i class="fas fa-trash"></i></a>
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
        function remove(id){
            axios.post('/panel/blog/remove', {id:id}).then((res) => {
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