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
                        <th >Kullanıcı Adı</th>
                        <th>{{$data->user->name}}</th>
                    </tr>


                    <tr>
                        <th >Post</th>
                        <th>{{$data->post_id}}</th>
                    </tr>

                    <tr>
                        <th >Yorum</th>
                        <th>{{$data->review}}</th>
                    </tr>
                    <tr>

                        <th >Ip</th>
                        <th>{{ $data->IP }}</th>
                    </tr>


                    <tr>
                        <th >Gönderilme Tarihi</th>
                        <th>{{$data->created_at}}</th>
                    </tr>

                    <form role="form" action="{{route('admin.comment_update',['id'=>$data->id])}}" method="post" >
                        @csrf
                        <tr>
                            <th >Durum</th>
                            <th>

                                <select name="status" class="form-select form-select-sm mb-3" aria-label=".form-select-sm example">
                                    <option selected="">{{$data->status}}</option>
                                    <option value="yeni">Yeni</option>
                                    <option value="Yayınlandı">Yayınla</option>


                                </select>



                            </th>
                            <tr>
                            <th> <button type="submit" class="btn btn-primary">Durumu Güncelle</button> </th>
                        </tr>
                        </tr>


                    </form>





                    </thead>
                    <tbody>

                </table>
            </div>
        </div>







@endsection


