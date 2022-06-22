@extends('layouts.adminbase')
@section('content')
    <div class="col-sm-12 col-xl-12">
        <div class="bg-secondary rounded h-100 p-4">
            <h6 class="mb-4">Kategori Ekle</h6>
            <form action="{{route('update',['id'=>$data->id] )}}"method="post" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Kategori</label>
                    <div class="col-sm-10">
                        <select name="category" class="form-select form-select-sm mb-3" aria-label=".form-select-sm example">
                            <option selected="">Kategori Seç</option>
                            <option value="1">Ana Kategori</option>
                            <option value="2">Two</option>

                        </select>
                    </div>
                </div>


                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">İsim</label>
                    <div class="col-sm-10">
                        <input type="text" value="{{$data->title}}" name="title" class="form-control" id="inputPassword3">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Resim Seç</label>
                    <div class="col-sm-10">
                        <input name="image" class="form-control bg-dark" type="file" >
                    </div>
                </div>




                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Durum</label>
                    <div class="col-sm-10">
                        <select name="status"  class="form-select form-select-sm mb-3" aria-label=".form-select-sm example">
                            <option selected>{{$data->status}}</option>
                            <option>Aktif</option>
                            <option>Pasif</option>


                        </select>
                    </div>
                </div>


                <button type="submit" class="btn btn-primary">Kaydet</button>
            </form>
        </div>
    </div>


@endsection
