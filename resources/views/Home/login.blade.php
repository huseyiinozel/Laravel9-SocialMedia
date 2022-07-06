@extends('layouts.about')
@section('content')
    <div class="jumbotron jumbotron-single d-flex align-items-center" style="background-image: url('{{asset('assets')}}/home/img/bg.jpg')">
        <div class="container text-center">

            <form method="post" name="contact-us" action="{{route('loginusercheck')}}">
                @csrf
                <div class="row">
                    <div class="col-md-7 form-group">
                        <input type="text" class="form-control" id="username" name="username" placeholder="Kullanıcı Adı ">
                    </div>
                    <div class="col-md-6 form-group">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Şifre">
                    </div>

                    <div class="col-md-7 text-center">
                        <button class="btn btn-primary btn-shadow btn-lg" type="submit" name="submit">Giriş Yap</button>
                        <br>
                        <br>



                    </div>
                </div>
            </form>



        </div>
    </div>		<!-- Contact Form Section -->




@endsection
