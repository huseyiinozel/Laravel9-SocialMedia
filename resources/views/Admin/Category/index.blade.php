@extends('layouts.adminbase')

@section('content')
    <div class="col-12">
        <div class="bg-secondary rounded h-100 p-4">
            <h6 class="mb-4">Katagoriler </h6>

            <td><a href="{{route('admin.create')}}" class="btn btn-info">Kategori Ekle</a> </td>
            <div class="table-responsive">

                <table class="table">

                    <thead>

                    <tr>
                        <th scope="col">Numara</th>
                        <th scope="col">Üst Kategori</th>
                        <th scope="col">İsim</th>
                        <th scope="col">Resim</th>
                        <th scope="col">Durum</th>
                        <th scope="col">Göster</th>
                        <th scope="col">Düzenle</th>
                        <th scope="col">Sil</th>
                    </tr>
                    </thead>

                    <tbody>

                    <tr>
                        @foreach( $data as $rs )
                        <th scope="row">{{$rs->id}}</th>
                        @if($rs->title)
                        <td> {{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs, $rs->title) }}</td>
                            @endif
                        <td>{{$rs->title}}</td>
                         <td>   @if($rs->image)
                                 <img class="rounded-circle" src="{{Storage::url($rs->image)}}" alt="" style="width: 40px; height: 40px;">
                            @endif
                         </td>
                        <td>{{$rs->status}}</td>
                            <td><a href="{{route('admin.show',['id'=>$rs->id])}}" class="btn btn-primary btn-success ">Göster</a> </td>
                            <td><a href="{{route('admin.edit',['id'=>$rs->id])}}" class="btn btn-primary btn-info">Düzenle</a> </td>
                            <td><a href="{{route('admin.destroy',['id'=>$rs->id])}}" class="btn btn-primary btn-danger"
                                   onclick="return confirm ('Eminseniz Siliyorum')">Sil</a> </td>



                    </tr>
                    @endforeach

                    </tbody>

                </table>

            </div>
        </div>
    </div>


@endsection
