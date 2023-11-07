@extends('admin.master')

@section('title', 'İletişim Formları')
    
@section('content')
    <div class="row col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">İletişim Formları</h4>
                <p class="card-title-desc">
                    Aşağıdaki tabloda, websitesindeki iletişim formu üzerinden bırakılan mesajların listesini görüntüleyebilirsiniz. Bu mesajlara e-posta ya da telefon ile dönüş yaptıntan sonra silmeniz tavsiye edilir.
                </p>

                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">İsim</th>
                        <th scope="col">E-posta</th>
                        <th scope="col">Telefon</th>
                        <th scope="col">Konu</th>
                        <th scope="col">Mesaj</th>
                        <th scope="col">İşlem</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($contact as $item)
                          <tr>
                            <td>
                                {{$item->id}}
                            </td>
                            <td>
                                {{$item->name}}
                            </td>
                            <td>
                                {{$item->email}}
                            </td>
                            <td>
                                {{$item->phone}}
                            </td>
                            <td>
                                {{$item->subject}}
                            </td>
                            <td>
                                {{$item->message}}
                            </td>
                            <td>
                                <a href="javascript:;" class="text-danger" onclick="removeContacnt({{$item->id}})"><i class="fas fa-times"></i></a>
                            </td>
                          </tr>
                      @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        function removeContacnt(id){
            axios.post('/panel/contact/remove', {id:id}).then((res) => {
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