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
                                                    <label for="icon" class="col-sm-3 col-form-label">İkon</label>
                                                    <div class="col-sm-6">
                                                      <input type="text" class="form-control" id="icon" name="icon" value="{{$item->icon}}">
                                                      <div id="help" class="form-text">
                                                        Sitenin bazı alanlarında göstermek için ikon seçin. İkon listesine <a target="_blank" href="https://fontawesome.com/v5/search?o=r&m=free">Buradan</a> ulaşabilirsiniz. Başka font servislerin de ikonlarını kullanabilirsiniz fakat önce kaynaklarını sisteme tanıtmak gerekir.
                                                      </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-4">
                                                    <label for="name" class="col-sm-3 col-form-label">İsim</label>
                                                    <div class="col-sm-6">
                                                      <input type="text" class="form-control slug" id="name" name="name" value="{{$item->name}}">
                                                      <div id="help" class="form-text">
                                                        Özelliğin görünen adı.
                                                      </div>
                                                    </div>
                                                </div>
                        
                                                
                        
                                                
                        
                                                
                                                
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Vazgeç</button>
                                        <button type="button" class="btn btn-primary" onclick="updateCategory({{$item->id}})">Özelliği Güncelle</button>
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
            axios.post('/panel/feature/update', data).then((res) => {
                toastr[res.data.type](res.data.message);
                if(res.data.status){
                    setInterval(() => {
                        window.location.reload();
                    },500)
                }
            })
        }

        function removeCategory(id){
            axios.post('/panel/feature/remove', {id:id}).then((res) => {
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