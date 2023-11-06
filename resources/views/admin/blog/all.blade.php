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
                                        <a href="javasctipt:;" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editBlogModal{{$item->id}}"><i class="fas fa-edit"></i></a>
                                        <a href="javasctipt:;" class="btn btn-danger btn-sm" onclick="remove({{$item->id}})"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>

                                <div class="modal fade" id="editBlogModal{{$item->id}}" tabindex="-1" aria-labelledby="editBlogModal" aria-hidden="true">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h1 class="modal-title fs-5" id="editModalTitle">Yazıyı Düzenle</h1>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label for="title" class="form-label">Başlık:</label>
                                                <input type="text" class="form-control" id="title" value="{{$item->title}}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="detail" class="form-label">Yazı:</label>
                                                <textarea class="form-control" id="detail" rows="10">{{$item->detail}}</textarea>
                                                
                                              </div>
                                              <div class="mb-3">
                                                <label for="cover" class="form-label">Kapak:</label>
                                                <input type="file" class="form-control" id="cover" onchange="uploadCover()">
                                                <input type="hidden" id="cover_data" value="{{$item->cover}}">
                                              </div>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Vazgeç</button>
                                          <button type="button" class="btn btn-primary" onclick="updateBlog({{$item->id}})">Güncelle</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
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

        function updateBlog(id){
            var title = $("#title").val();
            var detail = $("#detail").val();
            var cover = $("#cover_data").val();

            axios.post('/panel/blog/update', {
                title:title,
                detail:detail,
                cover:cover,
                id:id
            }).then((res) => {
                toastr[res.data.type](res.data.message);
                if(res.data.status){
                    setInterval(() => {
                        window.location.reload();
                    },500)
                }
            })
        }

        function uploadCover() {
            var formData = new FormData();
            var fileInput = document.getElementById('cover');
            formData.append('cover', fileInput.files[0]);

            axios.post('/upload/cover', formData, {
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            })
            .then(function (res) {
                toastr[res.data.type](res.data.message)
                if(res.data.status){
                    $("#cover_data").val(res.data.url)
                }
            });
        }
    </script>
@endsection