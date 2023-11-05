@extends('admin.master')

@section('title', 'Kategoriler')
    
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Kategoriler</h4>
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Üst Kategori</th>
                            <th scope="col">Kategori Adı</th>
                            <th scope="col">SEO Adı</th>
                            <th scope="col">Kısa İsim</th>
                            <th scope="col">İkon</th>
                            <th scope="col">Kapak</th>
                            <th scope="col">İşlem</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $item)
                                <tr>
                                    <td>
                                        {{$item->id}}
                                    </td>
                                    <td>
                                        {{$item->main_category}}
                                    </td>
                                    <td>
                                        {{$item->name}}
                                    </td>
                                    <td>
                                        {{$item->slug}}
                                    </td>
                                    <td>
                                        {{$item->short_name}}
                                    </td>
                                    <td>
                                        <i class="{!! $item->icon !!}"></i>
                                    </td>
                                    <td>
                                        <img src="/{{$item->cover}}" alt="" width="75">
                                    </td>
                                    <td>
                                        <a class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editCategoryModal{{$item->id}}">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a class="btn btn-danger btn-sm">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>

                                <!-- Modal -->
                                <div class="modal fade" id="editCategoryModal{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                        ...
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
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
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Yeni Kategori</h4>
                    <form action="javascript:;" id="categoryForm">
                        <div class="row mb-4">
                            <label for="main_category" class="col-sm-3 col-form-label">Üst Kategori</label>
                            <div class="col-sm-6">
                              <select name="main_category" id="main_category" class="form-control">
                                <option value="0">Ana Kategori</option>
                                @foreach ($categories as $cat)
                                    <option value="{{$cat->id}}">{{$cat->name}}</option>
                                @endforeach
                              </select>
                              <div id="help" class="form-text">
                                Eğer bir üst kategori seçmezseniz, bu otomatik olarak bir ana kategori olur ve menüde görüntülenmeye başlar. Ana kategori olmayan kategoriler menüde görüntülenmez.
                              </div>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="name" class="col-sm-3 col-form-label">Kategori Adı</label>
                            <div class="col-sm-6">
                              <input type="text" class="form-control" id="name" name="name">
                              <div id="help" class="form-text">
                                Kategorinin sitede görünen adını girin. Kullanıcılar doğrudan bu ismi görüntüleyecek.
                              </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="slug" class="col-sm-3 col-form-label">SEO Adı</label>
                            <div class="col-sm-6">
                              <input type="text" class="form-control" id="slug" name="slug">
                              <div id="help" class="form-text">
                                Kategorinin arama motorları tarafından indexlenecek olan adıdır. Buradaki isim taryıcınızın url kısmında görüntülenir. Otomatik olarak oluşturulur fakat elle değiştirmek isterseniz benzersiz olmasına, Türkçe karakter ve özel karakter kullanmamaya ve boşluk bırakmamaya dikkat edin.
                              </div>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="short" class="col-sm-3 col-form-label">Kısa Adı</label>
                            <div class="col-sm-6">
                              <input type="text" class="form-control" id="short" name="short">
                              <div id="help" class="form-text">
                                Sitenin bazı alanlarında göstermek için kısa isim.
                              </div>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="icon" class="col-sm-3 col-form-label">İkon</label>
                            <div class="col-sm-6">
                              <input type="text" class="form-control" id="icon" name="icon">
                              <div id="help" class="form-text">
                                Sitenin bazı alanlarında göstermek için ikon seçin. İkon listesine <a target="_blank" href="https://fontawesome.com/v5/search?o=r&m=free">Buradan</a> ulaşabilirsiniz. Başka font servislerin de ikonlarını kullanabilirsiniz fakat önce kaynaklarını sisteme tanıtmak gerekir.
                              </div>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="cover" class="col-sm-3 col-form-label">Kapak Fotoğrafı</label>
                            <div class="col-sm-6">
                              <input type="file" class="form-control" id="cover" name="cover" onchange="uploadCover()">
                              <input type="hidden" name="cover_data" id="cover_data">
                              <div id="help" class="form-text">
                                Sitenin bazı alanlarında kullanılacak olan kapak fotoğrafını girin.
                              </div>
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-sm-9">
                                <div>
                                    <button type="submit" class="btn btn-primary w-md" onclick="createCategory()">Kaydet</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        function formatSlug(value) {
            // Tüm karakterleri küçük harfe çevirme
            value = value.toLowerCase();

            // Türkçe karakterleri ingilizce karakterleri ile değiştirme
            value = value.replace(/ğ/g, 'g');
            value = value.replace(/ü/g, 'u');
            value = value.replace(/ş/g, 's');
            value = value.replace(/ı/g, 'i');
            value = value.replace(/ö/g, 'o');
            value = value.replace(/ç/g, 'c');

            // Boşluk karakterlerini "-" ile değiştirme
            value = value.replace(/\s+/g, '-');

            // Özel karakterleri kaldırma
            value = value.replace(/[^\w-]+/g, '');

            return value;
        }

        $(document).on("keyup", "#name", function(){
            var formattedValue = formatSlug($(this).val());
            $("#slug").val(formattedValue);
        });

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

        function createCategory(){
            var data = $("#categoryForm").serialize();
            axios.post('/panel/category/create', data).then((res) => {
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