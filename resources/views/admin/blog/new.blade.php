@extends('admin.master')

@section('title', 'Yeni Blog Yazı')
    

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4 d-flex justify-content-between">
                        <span>Yeni Blog Yazısı</span>
                        <a href="/panel/blog" class="btn btn-primary btn-sm"><i class="fas fa-list fa-sm"></i> Tüm yazılar</a>
                    </h4>

                    <div class="mb-3">
                        <label for="title" class="form-label">Başlık:</label>
                        <input type="text" class="form-control" id="title">
                    </div>
                    <div class="mb-3">
                        <label for="detail" class="form-label">Yazı:</label>
                        <textarea class="form-control" id="detail" rows="10"></textarea>
                        
                      </div>
                      <div class="mb-3">
                        <label for="cover" class="form-label">Kapak:</label>
                        <input type="file" class="form-control" id="cover" onchange="uploadCover()">
                        <input type="hidden" id="cover_data">
                      </div>

                      <button class="btn btn-primary" onclick="saveBlog()"><i class="fas fa-save"></i> Oluştur</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
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

        function saveBlog(){
            var title = $("#title").val();
            var detail = $("#detail").val();
            var cover = $("#cover_data").val();

            axios.post('/panel/blog/save', {
                title:title,
                detail:detail,
                cover:cover
            }).then((res) => {
                toastr[res.data.type](res.data.message);
                if(res.data.status){
                    setInterval(() => {
                        window.location.assign('/panel/blog');
                    },500)
                }
            })
        }
    </script>
@endsection