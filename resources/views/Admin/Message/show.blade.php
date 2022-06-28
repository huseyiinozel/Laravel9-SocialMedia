@extends('layouts.popup')

@section('title', 'Show Message : ')


@section('content')


    <div class="col-12">
        <div class="bg-secondary rounded h-100 p-4">



            <div class="table-responsive">

            <table class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
                        <th style="width: 200px">Id</th>
                        <th>{{$data->id}}</th>
                    </tr>

                    <tr>
                        <th >Kullanıcı Adı</th>
                        <th>{{$data->name}}</th>
                    </tr>


                    <tr>
                        <th >Telefon</th>
                        <th>{{$data->phone}}</th>
                    </tr>
                    <tr>
                    <tr>
                        <th >Email</th>
                        <th>{{$data->email}}</th>
                    </tr>
                    <tr>
                        <th >Başlık</th>
                        <th>{{$data->subject}}</th>
                    </tr>
                    <tr>
                        <th >Mesaj</th>
                        <th>{{$data->message}}</th>
                    </tr>
                    <tr>
                        <th >Ip</th>
                        <th>{!! $data->ip !!}</th>
                    </tr>


                    <tr>
                        <th >Gönderilme Tarihi</th>
                        <th>{{$data->created_at}}</th>
                    </tr>

                    <form role="form" action="{{route('message_update',['id'=>$data->id])}}" method="post" >
                        @csrf
                    <tr>
                        <th >Durum</th>
                        <th>

                        <select name="status" class="form-select form-select-sm mb-3" aria-label=".form-select-sm example">
                            <option selected="">{{$data->status}}</option>
                            <option value="yeni">Yeni</option>
                            <option value="okndu">Okundu</option>


                        </select>


                        </th>



                    </tr>




                    <tr>

                        <th >Admin Cevabı :</th>
                        <th>


                                <textarea cols="100" id="note" name="note">{{$data->note}}</textarea>
                                <select name="status" class="form-select form-select-sm mb-3" aria-label=".form-select-sm example">


                                </select>



                            <button type="submit" class="btn btn-primary">Cevabı Güncelle</button>
                        </th>
                    </tr>

                    </form>


                    <td><a href="{{route('message_destroy',['id'=>$data->id])}}" class="btn btn-primary btn-danger"
                           onclick="return confirm ('Eminseniz Siliyorum')"  >Sil</a> </td>


                    </thead>
                    <tbody>

                </table>
            </div>
        </div>







@endsection

