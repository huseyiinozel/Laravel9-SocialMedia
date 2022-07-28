@extends('layouts.adminbase')

@section('content')
    <div class="col-12">
        <div class="bg-secondary rounded h-100 p-4">
            <h6 class="mb-4">Kullanıcılar </h6>


            <div class="table-responsive">

                <table class="table">

                    <thead>

                    <tr>
                        <th scope="col">Numara</th>
                        <th scope="col">Rol</th>
                        <th scope="col">Kullanıcı Adı</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Durum</th>
                        <th scope="col">Göster</th>

                        <th scope="col">Sil</th>
                    </tr>
                    </thead>

                    <tbody>

                    <tr>
                        @foreach( $data as $rs )
                            <th scope="row">{{$rs->id}}</th>
                            <th>
                                @foreach($rs->roles as $role)
                                    {{$role->name}}
                                @endforeach
                            </th>
                            <td>{{$rs->username}}</td>
                            <td>{{$rs->email}}</td>

                            <td>{{$rs->status}}</td>
                            <td>
                                <a href="{{route('admin.user_show',['id'=>$rs->id])}}" class="btn btn-primary btn-success"
                                onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">Göster</a>


                            </td>

                            <td><a href="{{route('admin.user_destroy',['id'=>$rs->id])}}" class="btn btn-primary btn-danger"
                                   onclick="return confirm ('Eminseniz Siliyorum')">Sil</a> </td>



                    </tr>
                    @endforeach

                    </tbody>

                </table>

            </div>
        </div>
    </div>


@endsection
