@extends('layouts.adminbase')

@section('content')
    <div class="col-sm-12 col-xl-12">
        <div class="bg-secondary rounded h-100 p-4">
            <h6 class="mb-4">Gönderi Ekle</h6>

            <form action="{{route('admin.post_store')}}"method="post" enctype="multipart/form-data">
            @csrf

                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Kategori</label>
                    <div class="col-sm-10">
                        <select name="category_id" class="form-select form-select-sm mb-3" aria-label=".form-select-sm example">
                            <option>Kategori Seç</option>
                            @foreach($data as $rs)
                                <option value="{{$rs->id}}">{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title)}}</option>

                            @endforeach

                        </select>
                    </div>
                </div>


                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Başlık</label>
                    <div class="col-sm-10">
                        <input type="text" name="title" class="form-control" id="inputPassword3">
                    </div>
                </div>
                <label for="inputPassword3" class="col-sm-2 col-form-label">Detay</label>
                <div class="form-floating" >

                    <textarea class="form-control" name="detail" placeholder="Leave a comment here"
                              id="floatingTextarea" style="height: 150px;"></textarea>

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
                        <select name="status" class="form-select form-select-sm mb-3" aria-label=".form-select-sm example">
                            <option selected="">Aktif</option>
                            <option value="">Pasif</option>


                        </select>
                    </div>
                </div>
                <div >
                    <input name="user_id" type="hidden" value="{{Auth::user()->id}}">
                </div>



                <button type="submit" class="btn btn-primary">Kaydet</button>
            </form>
        </div>
    </div>


@endsection
