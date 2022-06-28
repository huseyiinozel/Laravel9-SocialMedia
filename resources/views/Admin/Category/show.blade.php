@extends('layouts.adminbase')




@section('content')
    <div class="col-12">

        <div class="bg-secondary rounded h-100 p-4">

            <h6 class="mb-4">{{$data->title}} </h6>
            <td><a href="{{route('edit',['id'=>$data->id])}}" class="btn btn-primary btn-info">Düzenle</a> </td>
            <td><a href="{{route('destroy',['id'=>$data->id])}}" class="btn btn-primary btn-danger"
                   onclick="return confirm ('Eminseniz Siliyorum')">Sil</a> </td>
            <div class="table-responsive">

                <table class="table">

                    <thead>

                    <tr>
                        <th scope="col">Numara</th>
                        <th scope="col">Kullanıcı Adı</th>
                        <th scope="col">Başlık</th>
                        <th scope="col">Konu</th>
                        <th scope="col">Durum</th>

                    </tr>
                    </thead>

                    <tbody>

                    <tr>

                        <th scope="row">id</th>
                        <td> ad</td>
                        <td>başlık</td>
                        <td>   k0onu
                        </td>
                        <td>durum</td>







                    </tr>


                    </tbody>

                </table>

            </div>
        </div>
    </div>


@endsection




