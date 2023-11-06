@extends('admin.master')

@section('title', 'Özellikler')
    
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Özelliker</h4>
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">İkon</th>
                            <th scope="col">İsim</th>
                            <th scope="col">İşlem</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($features as $item)
                                <tr>
                                    <td>
                                        {{$item->id}}
                                    </td>
                                    <td>
                                        <i class="{{$item->icon}}"></i>
                                    </td>
                                    <td>
                                        {{$item->name}}
                                    </td>
    
                                    <td>
                                        <a class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editFeaturesModal{{$item->id}}">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a class="btn btn-danger btn-sm" onclick="removeCategory({{$item->id}})">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>

                                <!-- Modal -->
                                <div class="modal fade" id="editFeaturesModal{{$item->id}}" tabindex="-1" aria-labelledby="editFeaturesModal" aria-hidden="true">
                                    <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="editFeaturesModal">Özelliği Düzenle</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="javascript:;" id="categoryEditForm{{$item->id}}">
                                                <input type="hidden" name="id" id="id" value="{{$item->id}}">
                                                <div class="row mb-4">
                                                    <label for="main_category" class="col-sm-3 col-form-label">Üst Kategori</label>
                                                    <div class="col-sm-6">
                                                      <select name="main_category" id="main_category" class="form-control">
                                                        <option value="0">Ana Kategori</option>
                                                        @foreach ($categories->where('main_category',0) as $cat)
                                                            <option {{$cat->id == $item->main_category ? "selected" : ""}} value="{{$cat->id}}">{{$cat->name}}</option>
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
                                                      <input type="text" class="form-control name" id="name" name="name" value="{{$item->name}}">
                                                      <div id="help" class="form-text">
                                                        Kategorinin sitede görünen adını girin. Kullanıcılar doğrudan bu ismi görüntüleyecek.
                                                      </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-4">
                                                    <label for="slug" class="col-sm-3 col-form-label">SEO Adı</label>
                                                    <div class="col-sm-6">
                                                      <input type="text" class="form-control slug" id="slug" name="slug" value="{{$item->slug}}">
                                                      <div id="help" class="form-text">
                                                        Kategorinin arama motorları tarafından indexlenecek olan adıdır. Buradaki isim taryıcınızın url kısmında görüntülenir. Otomatik olarak oluşturulur fakat elle değiştirmek isterseniz benzersiz olmasına, Türkçe karakter ve özel karakter kullanmamaya ve boşluk bırakmamaya dikkat edin.
                                                      </div>
                                                    </div>
                                                </div>
                        
                                                <div class="row mb-4">
                                                    <label for="short" class="col-sm-3 col-form-label">Kısa Adı</label>
                                                    <div class="col-sm-6">
                                                      <input type="text" class="form-control" id="short" name="short" value="{{$item->short_name}}">
                                                      <div id="help" class="form-text">
                                                        Sitenin bazı alanlarında göstermek için kısa isim.
                                                      </div>
                                                    </div>
                                                </div>
                        
                                                <div class="row mb-4">
                                                    <label for="icon" class="col-sm-3 col-form-label">İkon</label>
                                                    <div class="col-sm-6">
                                                      <input type="text" class="form-control" id="icon" name="icon" value="{{$item->icon}}">
                                                      <div id="help" class="form-text">
                                                        Sitenin bazı alanlarında göstermek için ikon seçin. İkon listesine <a target="_blank" href="https://fontawesome.com/v5/search?o=r&m=free">Buradan</a> ulaşabilirsiniz. Başka font servislerin de ikonlarını kullanabilirsiniz fakat önce kaynaklarını sisteme tanıtmak gerekir.
                                                      </div>
                                                    </div>
                                                </div>
                        
                                                <div class="row mb-4">
                                                    <label for="cover" class="col-sm-3 col-form-label">Kapak Fotoğrafı</label>
                                                    <div class="col-sm-6">
                                                      <input type="file" class="form-control" id="cover" name="cover" onchange="uploadCover()">
                                                      <input type="hidden" name="cover_data" id="cover_data" value="{{$item->cover}}">
                                                      <div id="help" class="form-text">
                                                        Sitenin bazı alanlarında kullanılacak olan kapak fotoğrafını girin.
                                                      </div>
                                                    </div>
                                                </div>
                                                
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Vazgeç</button>
                                        <button type="button" class="btn btn-primary" onclick="updateCategory({{$item->id}})">Kategoriyi Güncelle</button>
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
                    <h4 class="card-title mb-4">Yeni Özellik</h4>
                    <form action="javascript:;" id="featureForm">
                        

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
                            <label for="name" class="col-sm-3 col-form-label">Özellik</label>
                            <div class="col-sm-6">
                              <input type="text" class="form-control" id="name" name="name">
                              <div id="help" class="form-text">
                                Özelliğin görünen adı.
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

        function createCategory(){
            var data = $("#featureForm").serialize();
            axios.post('/panel/feature/create', data).then((res) => {
                toastr[res.data.type](res.data.message);
                if(res.data.status){
                    setInterval(() => {
                        window.location.reload();
                    },500)
                }
            })
        }

        function updateCategory(id){
            var data = $("#categoryEditForm"+id).serialize();
            axios.post('/panel/category/update', data).then((res) => {
                toastr[res.data.type](res.data.message);
                if(res.data.status){
                    setInterval(() => {
                        window.location.reload();
                    },500)
                }
            })
        }

        function removeCategory(id){
            axios.post('/panel/category/remove', {id:id}).then((res) => {
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