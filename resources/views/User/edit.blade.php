@extends('layouts.popup')
@section('content')
    <div class="col-sm-12 col-xl-12">
        <div class="bg-secondary rounded h-100 p-4">
            <h6 class="mb-4">Kategori Ekle</h6>
            <form action="{{route('user_post_update',['id'=>$data->id] )}}"method="post" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Kategori</label>
                    <div class="col-sm-10">
                        <select name="category_id" class="form-select form-select-sm mb-3" aria-label=".form-select-sm example">

                            @foreach($datalist as $rs)
                                <option value="{{$rs->id}}" @if ($rs->id == $data->parent_id) selected="selected" @endif>
                                    {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title)}}
                                </option>
                            @endforeach

                        </select>
                    </div>
                </div>


                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">İsim</label>
                    <div class="col-sm-10">
                        <input type="text" value="{{$data->title}}" name="title" class="form-control" id="inputPassword3">
                    </div>
                </div>

                <label for="inputPassword3" class="col-sm-2 col-form-label">Detay</label>
                <div class="form-floating" >

                    <input class="form-control"  name="detail" value="{{$data->detail}}"
                              id="floatingTextarea"  style="height: 150px;"></input>

                </div>
                <br>

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
                <div >
                    <input name="user_id" type="hidden" value="{{Auth::user()->id}}">
                </div>


                <button type="submit" class="btn btn-primary">Kaydet</button>
            </form>
            <br>
            <a href="{{route('user_profile',['id'=>$data->id])}}" class="btn btn-primary btn-success"
               onclick="return !window.close(this.href,'','top=50 left=100 width=1100,height=700')">Kapat</a>
            </td>
        </div>

    </div>


@endsection
