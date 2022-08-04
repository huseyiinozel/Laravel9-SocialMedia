<nav id="header-navbar" class="navbar navbar-expand-lg py-4">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center text-white" href="/">
            <h3 class="font-weight-bolder mb-0">ROXY</h3>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-nav-header" aria-controls="navbar-nav-header" aria-expanded="false" aria-label="Toggle navigation">
            <span class="lnr lnr-menu"></span>
        </button>
        @php
            $mainCategories = \App\Http\Controllers\HomeController::maincategorylist()
        @endphp
        <div class="collapse navbar-collapse" id="navbar-nav-header">
            <ul class="navbar-nav ml-auto">
                @include('home.loginalert')
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>


                @foreach($mainCategories as $rs)
                <li class="nav-item">
                    <a class="nav-link" href="{{route('categorypost',['id'=>$rs->id])}}">{{$rs->title}}</a>
                </li>
                @endforeach


                    <li class="nav-item">
                    <a class="nav-link" href="{{route('home_contact')}}">İletişim</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{route('about')}}">Site Hakkında</a>
                </li>
                <li class="nav-item">
                    @auth
                    <div class="dropdown">
                    <span>
                        <i class="fa fa-user fa-2x"></i>
                    </span>

                        <div class="dropdown-content">
                            <a href="#"><i class="fa fa-user"></i> {{Auth::user()->username}}</a>
                            <br>
                            <a href="/loginuser"><i class="fa fa-user"></i> Profilim</a>
                            <br>
                            <a href="/loginuser"><i class="fa fa-user"></i> Gönderilerim</a>
                            <br>
                            <a href="/loginuser"><i class="fa fa-user"></i> Mesajlarım</a>
                            <br>
                            <a href="{{route('logoutuser')}}"><i class="fa fa-times"></i> Çıkış Yap</a>

                        </div>
                        @endauth
                        @guest
                    <div class="dropdown">
                    <span>
                        <i class="fa fa-user fa-2x"></i>
                    </span>

                    <div class="dropdown-content">
                    <a href="{{route('loginuser')}}"><i class="fa fa-user"></i> Giriş Yap</a>
                        <br>
                    <a href="{{route('registeruser')}}"><i class="fa fa-users"></i> Üye Ol</a>

                    </div>
                </div>
                    @endguest
                </li>



            </ul>


        </div>
    </div>
</nav>



