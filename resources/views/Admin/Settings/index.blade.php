@extends('layouts.adminbase')
@section('content')

    <input type="hidden" value="{{$data->id}}" name="id" >
    <form role="form" action="{{route('settings_update')}}" method="post" enctype="multipart/form-data" >
        @csrf

    <div class="col-sm-12 col-xl-12">
        <div class="bg-secondary rounded h-100 p-4">
            <h6 class="mb-4">Genel Ayarlar</h6>
            <div class="form-floating mb-3">
                <input type="text" name="title" value="{{$data->title}}" class="form-control" id="title"
                       placeholder="Site Adı">
                <label for="floatingInput">Site Adı</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="keywords" value="{{$data->keywords}}" class="form-control" id="floatingPassword"
                       placeholder="Anahtar Kelimeler">
                <label for="floatingPassword">Anahtar Kelimeler</label>
            </div>
            <div class="form-floating">
                                <textarea name="description"  class="form-control" placeholder="Tanım"
                                          id="floatingTextarea" style="height: 150px;">{{$data->description}}</textarea>
                <label for="floatingTextarea">Sitenin Tanımı</label>
            </div>




        <br>
            <div class="form-floating mb-3">
            <select class="form-select" name="status"  id="floatingSelect"
                    aria-label="Floating label select example">
                <option>{{$data->status}}</option>
                <option value="Aktif">Aktif</option>
                <option value="Pasif">Pasif</option>

            </select>
            <label for="floatingSelect">Durum Seçiniz</label>
        </div>

    </div>
    </div>





    <div class="col-sm-12 col-xl-12">
        <div class="bg-secondary rounded h-100 p-4">
            <h6 class="mb-4">Şirket Bilgileri</h6>
            <div class="form-floating mb-3">
                <input type="text" name="company" value="{{$data->company}}" class="form-control" id="floatingInput"
                       placeholder="Şirket Adı">
                <label for="floatingInput">Şirket Adı</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="adress" value="{{$data->adress}}" class="form-control" id="floatingPassword"
                       placeholder="Adres">
                <label for="floatingPassword">Adres</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="phone" value="{{$data->phone}}" class="form-control" id="floatingPassword"
                       placeholder="Telefon">
                <label for="floatingPassword">Telefon</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="email" value="{{$data->email}}" class="form-control" id="floatingPassword"
                       placeholder="E-mail">
                <label for="floatingPassword">E-mail</label>
            </div>

        </div>
    </div>


    <div class="col-sm-12 col-xl-12">
        <div class="bg-secondary rounded h-100 p-4">
            <h6 class="mb-4">Server Bilgileri</h6>
            <div class="form-floating mb-3">
                <input type="text" name="smptpserver" value="{{$data->smptpserver}}" class="form-control" id="floatingInput"
                       placeholder="Smtpserver">
                <label for="floatingInput">Smtpserver</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="smtpemail" value="{{$data->smtpemail}}" class="form-control" id="floatingPassword"
                       placeholder="Smtpemail">
                <label for="floatingPassword">Smtpemail</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="smtppassword" value="{{$data->smtppassword}}" class="form-control" id="floatingPassword"
                       placeholder="Smtppassword">
                <label for="floatingPassword">Smtppassword</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="smtpport" value="{{$data->smtpport}}" class="form-control" id="floatingPassword"
                       placeholder="Smtpport">
                <label for="floatingPassword">Smtpport</label>
            </div>

        </div>
    </div>


    <div class="col-sm-12 col-xl-12">
        <div class="bg-secondary rounded h-100 p-4">
            <h6 class="mb-4">Sosyal Medya</h6>
            <div class="form-floating mb-3">
                <input type="text" name="facebook" value="{{$data->facebook}}" class="form-control" id="floatingInput"
                       placeholder="Facebook">
                <label for="floatingInput">Facebook</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="instagram" value="{{$data->instagram}}" class="form-control" id="floatingPassword"
                       placeholder="İnstagram">
                <label for="floatingPassword">İnstagram</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="twitter" value="{{$data->twitter}}" class="form-control" id="floatingPassword"
                       placeholder="Twitter">
                <label for="floatingPassword">Twitter</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="youtube" value="{{$data->youtube}}" class="form-control" id="floatingPassword"
                       placeholder="Youtube">
                <label for="floatingPassword">Youtube</label>
            </div>

        </div>
    </div>




    <div class="col-sm-12 col-xl-12">
        <div class="bg-secondary rounded h-100 p-4">
            <h6 class="mb-4">Hakkımızda</h6>
            <div class="form-floating">
                                <textarea name="aboutus"  class="form-control" placeholder="Hakkımızda"
                                          id="floatingTextarea" style="height: 150px;">{{$data->aboutus}}</textarea>
                <label for="floatingTextarea">Hakkımızda</label>
            </div>
        </div>
    </div>


    <div class="col-sm-12 col-xl-12">
        <div class="bg-secondary rounded h-100 p-4">
            <h6 class="mb-4">İletişim</h6>
            <div class="form-floating">
                                <textarea name="contact" value="{{$data->contact}}" class="form-control" placeholder="İletişim"
                                          id="floatingTextarea" style="height: 150px;">{{$data->contact}}</textarea>
                <label for="floatingTextarea">İletişim</label>
            </div>
        </div>
    </div>


    <div class="col-sm-12 col-xl-12">
        <div class="bg-secondary rounded h-100 p-4">
            <h6 class="mb-4">Referanslar</h6>
            <div class="form-floating">
                                <textarea name="references"  class="form-control" placeholder="Referanslar"
                                          id="floatingTextarea" style="height: 150px;">{{$data->references}}</textarea>
                <label for="floatingTextarea">Referanslar</label>
            </div>
        </div>
    </div>

        <button type="submit" class="btn btn-primary">Değişiklikleri Kaydet</button>

    </form>










@endsection
