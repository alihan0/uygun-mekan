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
        <div class="tab-pane" id="{{$menu->page}}" role="tabpanel">
            
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
                                    <label for="{{$item->page}}_{{$item->section}}_title" class="form-label">Başlık:</label>
                                    <input type="text" class="form-control" id="{{$item->page}}_{{$item->section}}_title" name="{{$item->page}}_{{$item->section}}_title" value="{{$item->title}}">
                                </div>


                                <div class="mb-3">
                                    <label for="{{$item->page}}_{{$item->section}}_subtitle" class="form-label">Alt Başlık:</label>
                                    <input type="text" class="form-control" id="{{$item->page}}_{{$item->section}}_subtitle" name="{{$item->page}}_{{$item->section}}_subtitle" value="{{$item->subtitle}}">
                                </div>

                                <div class="mb-3">
                                    <label for="{{$item->page}}_{{$item->section}}_detail" class="form-label">Açıklama:</label>
                                    <input type="text" class="form-control" id="{{$item->page}}_{{$item->section}}_detail" name="{{$item->page}}_{{$item->section}}_detail" value="{{$item->detail}}">
                                </div>
                                
                                <div class="mb-3">
                                    <label for="{{$item->page}}_{{$item->section}}_content" class="form-label">İçerik:</label>
                                    <textarea name="{{$item->page}}_{{$item->section}}_content" id="{{$item->page}}_{{$item->section}}_content" class="form-control" rows="5">{!! $item->content ?? "" !!}</textarea>
                                    
                                </div>

                                <div class="mb-3">
                                    <label for="{{$item->page}}_{{$item->section}}_button1_text" class="form-label">1. Buton Yazısı:</label>
                                    <input type="text" class="form-control" id="{{$item->page}}_{{$item->section}}_button1_text" name="{{$item->page}}_{{$item->section}}_button1_text" value="{{$item->button1_text}}">
                                </div>

                                <div class="mb-3">
                                    <label for="{{$item->page}}_{{$item->section}}_button1_style" class="form-label">1. Buton Stil:</label>
                                    <input type="text" class="form-control" id="{{$item->page}}_{{$item->section}}_button1_style" name="{{$item->page}}_{{$item->section}}_button1_style" value="{{$item->button1_style}}">
                                </div>

                                <div class="mb-3">
                                    <label for="{{$item->page}}_{{$item->section}}_button1_icon" class="form-label">1. Buton İkon:</label>
                                    <input type="text" class="form-control" id="{{$item->page}}_{{$item->section}}_button1_icon" name="{{$item->page}}_{{$item->section}}_button1_icon" value="{{$item->button1_icon}}">
                                </div>

                                <div class="mb-3">
                                    <label for="{{$item->page}}_{{$item->section}}_button1_src" class="form-label">1. Buton Hedef:</label>
                                    <input type="email" class="form-control" id="{{$item->page}}_{{$item->section}}_button1_src" name="{{$item->page}}_{{$item->section}}_button1_src" value="{{$item->button1_src}}">
                                </div>

                                <div class="mb-3">
                                    <label for="{{$item->page}}_{{$item->section}}_button2_text" class="form-label">2. Buton Yazısı:</label>
                                    <input type="text" class="form-control" id="{{$item->page}}_{{$item->section}}_button2_text" name="{{$item->page}}_{{$item->section}}_button2_text" value="{{$item->button2_text}}">
                                </div>

                                <div class="mb-3">
                                    <label for="{{$item->page}}_{{$item->section}}_button2_style" class="form-label">2. Buton Stil:</label>
                                    <input type="text" class="form-control" id="{{$item->page}}_{{$item->section}}_button2_style" name="{{$item->page}}_{{$item->section}}_button2_style" value="{{$item->button2_style}}">
                                </div>

                                <div class="mb-3">
                                    <label for="{{$item->page}}_{{$item->section}}_button2_icon" class="form-label">2. Buton İkon:</label>
                                    <input type="text" class="form-control" id="{{$item->page}}_{{$item->section}}_button2_icon" name="{{$item->page}}_{{$item->section}}_button2_icon" value="{{$item->button2_icon}}">
                                </div>

                                <div class="mb-3">
                                    <label for="{{$item->page}}_{{$item->section}}_button2_src" class="form-label">2. Buton Hedef:</label>
                                    <input type="text" class="form-control" id="{{$item->page}}_{{$item->section}}_button2_src" name="{{$item->page}}_{{$item->section}}_button2_src" value="{{$item->button2_src}}">
                                </div>


                                <div class="mb-3">
                                    <label for="{{$item->page}}_{{$item->section}}_cover" class="form-label">Arkaplan:</label>
                                    <input type="text" class="form-control" id="{{$item->page}}_{{$item->section}}_cover" name="{{$item->page}}_{{$item->section}}_cover" value="{{$item->cover}}">
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