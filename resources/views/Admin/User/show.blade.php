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
                        <th>  @foreach($data->roles as $role)

                                {{$role->name}}
                                <a href="{{route('admin.user_destroyrole',['uid'=>$data->id,'rid'=>$role->id])}}" class="btn btn-primary btn-danger"
                                   onclick="return confirm ('Deleting !! Are you sure ?')">[X]</a>
                            @endforeach

                        </th>
                    </tr>
                    </form>






                    <form role="form" action="{{route('admin.user_update',['id'=>$data->id])}}" method="post" >
                        @csrf




                        <tr>

                            <th >Rol Değiştir</th>

                            <th>
                                <select name="role_id" class="form-select form-select-sm mb-3" aria-label=".form-select-sm example">
                                    <option selected>Rol Seç</option>
                                    <option value="2">Moderatör</option>
                                    <option value="1">Admin</option>
                                </select>
                            </th>




                        </tr>

                        <th>










                    <td>
                            <button type="submit" class="btn btn-primary"> Rel Ekle  </button>
                            <a href="{{route('admin.user_destroy',['id'=>$data->id])}}" class="btn btn-primary btn-danger"
                           onclick="return confirm ('Eminseniz Siliyorum')"  >Sil</a>

                        <a href="{{route('admin.user_show',['id'=>$data->id])}}" class="btn btn-primary btn-success"
                           onclick="return !window.close(this.href,'','top=50 left=100 width=1100,height=700')">Kapat</a>
                    </td>
                    </th>

                    </form>

                    </thead>
                    <tbody>

                </table>
            </div>
        </div>







@endsection

