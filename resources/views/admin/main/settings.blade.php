@extends('admin.master')

@section('title', 'Ayarlar')
    
@section('content')
    <!-- Nav tabs -->
   
    <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" data-bs-toggle="tab" href="#system" role="tab">
                <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                <span class="d-none d-sm-block">Sistem</span>    
            </a>
        </li>
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



        <div class="tab-pane active" id="system" role="tabpanel">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title pb-2 border-bottom">Sistem Ayarları</h4>

                            <form action="javascript:;" id="systemForm">

                                <div class="mb-3">
                                    <label for="site_name" class="form-label">Site Adı:</label>
                                    <input type="text" class="form-control" id="site_name" name="site_name" value="{{$system->site_name}}">
                                </div>

                                <div class="mb-3">
                                    <label for="site_url" class="form-label">Site URL:</label>
                                    <input type="text" class="form-control" id="site_url" name="site_url" value="{{$system->site_url}}">
                                </div>

                                <div class="mb-3">
                                    <label for="about" class="form-label">Hakkımızda Yazısı:</label>
                                    <textarea class="form-control" id="about" name="about" rows="10">{{$system->about}}</textarea>
                                </div>

                                <div class="mb-3">
                                    <label for="address" class="form-label">Adres:</label>
                                    <input type="text" class="form-control" id="address" name="address" value="{{$system->address}}">
                                </div>

                                <div class="mb-3">
                                    <label for="email1" class="form-label">E-posta 1:</label>
                                    <input type="text" class="form-control" id="email1" name="email1" value="{{$system->email1}}">
                                </div>

                                <div class="mb-3">
                                    <label for="email2" class="form-label">E-posta 2:</label>
                                    <input type="text" class="form-control" id="email2" name="email2" value="{{$system->email2}}">
                                </div>

                                <div class="mb-3">
                                    <label for="phone1" class="form-label">Telefon 1:</label>
                                    <input type="text" class="form-control" id="phone1" name="phone1" value="{{$system->phone1}}">
                                </div>

                                <div class="mb-3">
                                    <label for="phone2" class="form-label">Telefon 2:</label>
                                    <input type="text" class="form-control" id="phone2" name="phone2" value="{{$system->phone2}}">
                                </div>

                                <div class="mb-3">
                                    <label for="facebook" class="form-label">Facebook URL:</label>
                                    <input type="text" class="form-control" id="facebook" name="facebook" value="{{$system->facebook}}">
                                </div>

                                <div class="mb-3">
                                    <label for="twitter" class="form-label">Twitter URL:</label>
                                    <input type="text" class="form-control" id="twitter" name="twitter" value="{{$system->twitter}}">
                                </div>

                                <div class="mb-3">
                                    <label for="instagram" class="form-label">İnstagram URL:</label>
                                    <input type="text" class="form-control" id="instagram" name="instagram" value="{{$system->instagram}}">
                                </div>


                                <div class="mb-3">
                                    <label for="welcomemodal_img" class="form-label">Karşılama Penceresi Resmi (URL):</label>
                                    <input type="text" class="form-control" id="welcomemodal_img" name="welcomemodal_img" value="{{$system->welcomemodal_img}}">
                                </div>

                                <div class="mb-3">
                                    <label for="welcomemodal_src" class="form-label">Karşılama Pencersi Hedefi (URL):</label>
                                    <input type="text" class="form-control" id="welcomemodal_src" name="welcomemodal_src" value="{{$system->welcomemodal_src}}">
                                </div>

                                <div class="mb-3">
                                    <label for="subs_price" class="form-label">Abonelik Fiyatı:</label>
                                    <input type="text" class="form-control" id="subs_price" name="subs_price" value="{{$system->subs_price}}">
                                </div>

                                <div class="mb-3">
                                    <label for="discounted_subs_day" class="form-label">İndirim Süresi (Gün):</label>
                                    <input type="text" class="form-control" id="discounted_subs_day" name="discounted_subs_day" value="{{$system->discounted_subs_day}}">
                                </div>

                                <div class="mb-3">
                                    <label for="discounted_subs_price" class="form-label">İndirimli Abonelik Fiyatı:</label>
                                    <input type="text" class="form-control" id="discounted_subs_price" name="discounted_subs_price" value="{{$system->discounted_subs_price}}">
                                </div>
                                

                                <button class="btn btn-primary" onclick="saveSystem()">Kaydet</button>
                                

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>







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

                                <form action="javascript:;" id="{{$item->page}}_{{$item->section}}_form">
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
                                    <input type="text" class="form-control" id="{{$item->page}}_{{$item->section}}_button1_src" name="{{$item->page}}_{{$item->section}}_button1_src" value="{{$item->button1_src}}">
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

                                <button class="btn btn-primary" onclick="saveSettings('{{$item->page}}', '{{$item->section}}', '{{$item->page}}_{{$item->section}}_form')">Güncelle</button>
                            </form>
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
    
    function saveSettings(page,section,form){
        var formdata = $("#"+form).serialize()+"&page="+page+"&section="+section;

        axios.post('/panel/settings/save', formdata).then((res) => {
            toastr[res.data.type](res.data.message);
            if(res.data.status){
                setInterval(() => {
                    window.location.reload();
                },500)
            }
        });
    }

    function saveSystem(){
        var formdata = $("#systemForm").serialize();

        axios.post('/panel/settings/system/save', formdata).then((res) => {
            toastr[res.data.type](res.data.message);
            if(res.data.status){
                setInterval(() => {
                    window.location.reload();
                },500)
            }
        });
    }
    </script>
@endsection