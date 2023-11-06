@extends('admin.master')

@section('title', 'Ayarlar')
    
@section('content')
    <!-- Nav tabs -->
   
    <ul class="nav nav-tabs" role="tablist">
        @foreach ($section_menu as $menu) 
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#{{$menu->page}}" role="tab">
                <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                <span class="d-none d-sm-block">{{ucfirst($menu->page)}}</span>    
            </a>
        </li>
        @endforeach
    </ul>

    <!-- Tab panes -->
    <div class="tab-content p-3 text-muted">

        @foreach ($section_menu as $menu) 
        <div class="tab-pane " id="{{$menu->page}}" role="tabpanel">
            
            @foreach ($sections as $item)
                @if($item->page == $menu->page)
                    

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title pb-2 border-bottom d-flex">
                                    <div class="form-check form-switch form-switch-md mb-3" dir="rtl">
                                        <label class="form-check-label float-start" for="{{$item->section}}">{{strtoupper($item->section)}}</label>
                                        <input class="form-check-input float-end ms-4" type="checkbox" id="{{$item->page .'_'.$item->section}}_status" {{$item->status == 1 ? 'checked' : ''}} onchange="changeStatus('{{$item->page}}','{{$item->section}}')">
                                        
                                    </div>
                                </h4>


                                <div class="mb-3">
                                    <label for="{{$item->section}}_title" class="form-label">Başlık:</label>
                                    <input type="text" class="form-control" id="{{$item->section}}_title" name="{{$item->section}}_title" value="{{$item->title}}">

                                </div>


                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Alt Başlık:</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Açıklama:</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">İçerik:</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">1. Buton Yazısı:</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">1. Buton Stil:</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">1. Buton İkon:</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">1. Buton Hedef:</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">2. Buton Yazısı:</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">2. Buton Stil:</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">2. Buton İkon:</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">2. Buton Hedef:</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                </div>


                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Arkaplan:</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                </div>

                                <button class="btn btn-primary">Güncelle</button>
                            </div>
                        </div>
                    </div>
                </div>

                    
                @endif
            @endforeach
            
            <!-- end row -->
            


        </div>
        @endforeach
    </div>
@endsection

@section('script')
    <script>
    function changeStatus(page, section){
        if ($("#"+page+"_"+section+"_status").is(':checked')) {
            var status = 1
        }else{
            var status = 0
        }

        axios.post('/panel/settings/changeStatus', {page:page, section:section, status:status}).then((res) => {
            toastr[res.data.type](res.data.message);
        })
    }        
    </script>
@endsection