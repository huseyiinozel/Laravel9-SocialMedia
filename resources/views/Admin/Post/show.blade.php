@extends('layouts.adminbase')




@section('content')
    <div class="col-12">

        <div class="bg-secondary rounded h-100 p-4">

            <h6 class="mb-4"> </h6>
            <td><a href="{{route('admin.post_edit',['id'=>$data->id])}}" class="btn btn-primary btn-info">Düzenle</a> </td>
            <td><a href="{{route('admin.post_destroy',['id'=>$data->id])}}" class="btn btn-primary btn-danger"
                   onclick="return confirm ('Eminseniz Siliyorum')">Sil</a> </td>
            <div class="table-responsive">

                <table class="table">

                    <thead>

                    <tr>
                        <th scope="col">Numara</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Başlık</th>
                        <th scope="col">Detay</th>
                        <th scope="col">Resim</th>
                        <th scope="col">Durum</th>

                    </tr>
                    </thead>

                    <tbody>

                    <tr>

                            <th scope="row">{{$data->id}}</th>
                        <td> {{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($data, $data->title) }}</td>
                            <td>{{$data->title}}</td>
                            <td>{{ $data->detail }}</td>
                            <td>   @if($data->image)
                                    <img src="{{Storage::url($data->image)}}" style="height: 40px">
                                @endif
                            </td>
                            <td>{{$data->status}}</td>







                    </tr>


                    </tbody>

                </table>

            </div>
        </div>
    </div>


@endsection




