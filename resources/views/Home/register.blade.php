@extends('layouts.about')
@section('content')
    <div class="jumbotron jumbotron-single d-flex align-items-center" style="background-image: url('{{asset('assets')}}/home/img/bg.jpg')">
        <div class="container text-center">
            <form method="post"  action="{{route('registerstore')}}">
                @csrf

                <div class="row">
                    <div class="col-md-7 form-group">
                        <input type="text" class="form-control" id="username" name="username" placeholder="Kullanıcı Adı ">
                    </div>
                    <div class="col-md-7 form-group">
                        <input type="text" class="form-control" id="password" name="password" placeholder="Şifre ">
                    </div>
                    <div class="col-md-7 form-group">
                        <input type="email" class="form-control" id="email" name="email" placeholder="E-mail ">
                    </div>
                    <div class="col-md-7 form-group">

                        <input type="number" class="form-control" min="1968" max="2006" step="1" name="age" id="age" placeholder="Doğum Yılınız" />
                    </div>



                    <div class=" col-md-7 form-group">
                        <select name="gender" id="gender" class="form-control" >
                            <option selected="Gender">Cinsiyet</option>
                            <option  value="man">Erkek </option>
                            <option value="woman">Kadın</option>
                            <option value="none">Belirtmek İstemiyorum</option>

                        </select>
                    </div>


                    <div class="col-md-8 ">
                        <button class="btn btn-primary btn-shadow btn-lg" type="submit" name="submit">Üye Ol</button>
                        <br>
                        <br>


                    </div>
                </div>
            </form>



        </div>
    </div>		<!-- Contact Form Section -->




@endsection
