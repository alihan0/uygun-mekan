@extends('admin.master')

@section('title', 'Ödemeler')
    
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Ödemeler</h4>
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Kullanıcı</th>
                        <th scope="col">Fatura</th>
                        <th scope="col">Tutar</th>
                        <th scope="col">Ödeme Yöntemi</th>
                        <th scope="col">Kart Numarası</th>
                        <th scope="col">Durum</th>
                        <th scope="col">İşlem</th>
                      </tr>
                    </thead>
                    <tbody></tbody>
                  </table>
            </div>
        </div>
    </div>
</div>    

<div class="row">
    <div class="col-12">
        <div class="px-4 py-5 my-5 text-center">
    
    <h1 class="display-5 fw-bold text-body-emphasis">Pasif Durumda</h1>
    <div class="col-lg-6 mx-auto">
    <p class="lead mb-4">
        Şuanda hali hazırda bir ödeme yöntemi ekli olmadığından dolayı ödeme kayıtları henüz kullanılabilir değil. Ödeme yöntemi tercihi yapıldıktan sonra entegrasyon yapılmasının ardından ödeme kayıtları modülü kullanılabilir hale gelecektir.
    <p>
      
    </div>
  </div>
    </div>
</div>
@endsection
