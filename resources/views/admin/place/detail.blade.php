@extends('admin.master')

@section('title')
    {{$place->title}} Detayları
@endsection

@section('content')
    <div class="row">
        <div class="col-4">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{$place->cover}}" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Mekan Bilgileri</h4>
                            <ul class="list-group">
                                <li class="list-group-item d-flex justify-content-between">
                                    <span class="fw-bold">Mekan Kategori</span>
                                    <span>{{$place->MainCategory->name ?? "-"}}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <span class="fw-bold">Mekan Sahibi</span>
                                    <span>{{$place->Owner->name ?? "-"}}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <span class="fw-bold">Mekan Başlığı</span>
                                    <span>{{$place->title}}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <span class="fw-bold">SEO Url</span>
                                    <span>{{$place->slug}}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <span class="fw-bold">Web Site</span>
                                    <span>{{$place->website}}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <span class="fw-bold">Telefon</span>
                                    <span>{{$place->phone}}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <span class="fw-bold">E-posta</span>
                                    <span>{{$place->email}}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <span class="fw-bold">Adres</span>
                                    <span>{{$place->address}}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <span class="fw-bold">Kapasite</span>
                                    <span>{{$place->capacity}}</span>
                                </li>
                              </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Sosyal Medya Bilgileri</h4>
                            <ul class="list-group">
                                <li class="list-group-item d-flex justify-content-between">
                                    <span class="fw-bold">Facebook</span>
                                    <span>{{$place->facebook ?? "-"}}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <span class="fw-bold">Twitter</span>
                                    <span>{{$place->twitter ?? "-"}}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <span class="fw-bold">İnstagram</span>
                                    <span>{{$place->instagram ?? "-"}}</span>
                                </li>
                              </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Etiketler</h4>
                            @php
                                $dataArray = explode(',', $place->tags);
                            @endphp

                            @foreach($dataArray as $item)
                                <button type="button" class="btn btn-outline-light m-1">{{$item}}</button>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-8">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Çalışma Saatleri</h4>
                            <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">Pazartesi</th>
                                    <th scope="col">Salı</th>
                                    <th scope="col">Çarşamba</th>
                                    <th scope="col">Perşembe</th>
                                    <th scope="col">Cuma</th>
                                    <th scope="col">Cumartesi</th>
                                    <th scope="col">Pazar</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th>
                                        {{ \Carbon\Carbon::parse($place->monday_open_time)->format('H:i') }} - {{ \Carbon\Carbon::parse($place->monday_close_time)->format('H:i') }}
                                    </th>
                                    <th>
                                        {{ \Carbon\Carbon::parse($place->tuesday_open_time)->format('H:i') }} - {{ \Carbon\Carbon::parse($place->tuesday_close_time)->format('H:i') }}
                                    </th>
                                    <th>
                                        {{ \Carbon\Carbon::parse($place->wednesday_open_time)->format('H:i') }} - {{ \Carbon\Carbon::parse($place->wednesday_close_time)->format('H:i') }}
                                    </th>
                                    <th>
                                        {{ \Carbon\Carbon::parse($place->thursday_open_time)->format('H:i') }} - {{ \Carbon\Carbon::parse($place->thursday_close_time)->format('H:i') }}
                                    </th>
                                    <th>
                                        {{ \Carbon\Carbon::parse($place->friday_open_time)->format('H:i') }} - {{ \Carbon\Carbon::parse($place->friday_close_time)->format('H:i') }}
                                    </th>
                                    <th>
                                        {{ \Carbon\Carbon::parse($place->saturday_open_time)->format('H:i') }} - {{ \Carbon\Carbon::parse($place->saturday_close_time)->format('H:i') }}
                                    </th>
                                    <th>
                                        {{ \Carbon\Carbon::parse($place->sunday_open_time)->format('H:i') }} - {{ \Carbon\Carbon::parse($place->sunday_close_time)->format('H:i') }}
                                    </th>
                                  </tr>
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
                            <h4 class="card-title mb-4">Özellikler</h4>
                            @foreach ($place->Features as $item)
                            <button type="button" class="btn btn-outline-light m-1">
                                <i class="{{$item->Feature->icon}}"></i>
                                {{$item->Feature->name}}</button>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Yıldız Oyu</h4>

                            <div class="bottom-content d-flex justify-content-between">
                                <ul class="review-box" style="list-style:none">
                                    @for ($i = 1; $i <= 5; $i++)
                                        @if ($place->Stars->count() > 0)
                                            @if ($i <= round($place->Stars->sum('star') / $place->Stars->count()))
                                                <li class="float-start"><span class="fas fa-star"></span></li>
                                            @else
                                            <li class="float-start"><span class="far fa-star"></span></li>
                                            @endif
                                        @else
                                            <li class="float-start"><span class="far fa-star"></span></li>
                                        @endif
                                       
                                    @endfor
                                    <li class="text-dark float-start ms-4">
                                        ({{$place->Stars->count() > 0 ?  round($place->Stars->sum('star') / $place->Stars->count()) : '0'}})
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Yorumlar</h4>
                            <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Yorum</th>
                                    <th scope="col">Yorum Sahibi</th>
                                    <th scope="col">Durumu</th>
                                    <th scope="col">Oluşturulma</th>
                                    <th scope="col">İşlem</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @foreach ($place->AllComments as $item)
                                        <tr>
                                            <td>
                                                {{$item->id}}
                                            </td>
                                            <td>
                                                {{$item->comment}}
                                            </td>
                                            <td>
                                                {{$item->User->name ?? "-"}}
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
                                                @if ($item->status == 1)
                                                    <a href="javascript:;" class="text-success" onclick="checkComment({{$item->id}})"><i class="fas fa-check"></i></a>
                                                    <a href="javascript:;" class="text-danger" onclick="removeComment({{$item->id}})"><i class="fas fa-times"></i></a> 
                                                @elseif($item->status == 2)
                                                    <a href="javascript:;" class="text-danger" onclick="removeComment({{$item->id}})"><i class="fas fa-times"></i></a>
                                                @else
                                                <a href="javascript:;" class="text-success" onclick="checkComment({{$item->id}})"><i class="fas fa-check"></i></a>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                              </table>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        function checkComment(id){
            alert("check:" +id)
        }
        function removeComment(id){
            alert("rempve:" +id)
        }
    </script>
@endsection