@extends('layouts.popup')

@section('title', 'Show Message : ')


@section('content')


    <div class="col-12">
        <div class="bg-secondary rounded h-100 p-4">



            <div class="table-responsive">

            <table class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
                        <th style="width: 200px">Numara</th>
                        <th>{{$data->id}}</th>
                    </tr>

                    <tr>
                        <th >Ad</th>
                        <th>{{$data->name}}</th>
                    </tr>

                    <tr>
                        <th >Kullanıcı Adı</th>
                        <th>{{$data->username}}</th>
                    </tr>
                    <tr>
                        <th >Şifre</th>
                        <th>{{$data->password}}</th>
                    </tr>


                    <tr>
                        <th >Cinsiyet</th>
                        <th>{{$data->gender}}</th>
                    </tr>
                    <tr>
                    <tr>
                        <th >Email</th>
                        <th>{{$data->email}}</th>
                    </tr>

                    <tr>
                        <th >Doğum Tarihi</th>
                        <th>{{$data->age}}</th>
                    </tr>
                    <tr>
                        <th >Ip</th>
                        <th>{!! $data->ip !!}</th>
                    </tr>


                    <tr>
                        <th >Mac Adresi</th>
                        <th>{{$data->mac}}</th>
                    </tr>

                    <tr>
                        <th >Üyelik Tarihi</th>
                        <th>{{$data->created_at}}</th>
                    </tr>
                    <tr>
                        <th >Rolü</th>
                        <th> @foreach($data->roles as $role)


                                {{$role->name}}



                        </th>
                    </tr>


                    <form role="form" action="{{route('admin.user_update',['id'=>$data->id,'rid'=>$role->id])}}" method="post" >
                        @csrf

                        <tr>

                            <th >Rol Değiştir</th>


                            <th>
                                <select name="role" class="form-select form-select-sm mb-3" aria-label=".form-select-sm example">

                                            <option value=1>Admin</option>
                                            <option value=2>Moderatör</option>
                                            <option value=3>Kullanıcı</option>

                                    </select>

                            </th>


                        </tr>
   <tr>
                        <th >Durum</th>
                        <th>

                        <select name="status" class="form-select form-select-sm mb-3" aria-label=".form-select-sm example">
                            <option selected="">{{$data->status}}</option>
                            <option value="yeni">Yeni</option>
                            <option value="eski">Eski</option>
                        </select>
                        </th>
                    </tr>




                    <tr>

                        <th >Admin İşlemi :</th>
                        <th>


                            <button type="submit" class="btn btn-primary"> Güncelle</button>
                        </th>
                    </tr>

                    </form>
                    @endforeach


                    <td><a href="{{route('admin.user_destroy',['id'=>$data->id])}}" class="btn btn-primary btn-danger"
                           onclick="return confirm ('Eminseniz Siliyorum')"  >Sil</a> </td>


                    </thead>
                    <tbody>

                </table>
            </div>
        </div>







@endsection

