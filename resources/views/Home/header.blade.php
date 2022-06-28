<nav id="header-navbar" class="navbar navbar-expand-lg py-4">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center text-white" href="/home">
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

                <li class="nav-item">
                    <a class="nav-link" href="/home">Home</a>
                </li>
                @foreach($mainCategories as $rs)
                <li class="nav-item">
                    <a class="nav-link" href="{{route('categorypost',['id'=>$rs->id])}}">{{$rs->title}}</a>
                </li>
                @endforeach


                    <li class="nav-item">
                    <a class="nav-link" href="{{route('contact')}}">İletişim</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('about')}}">Site Hakkında</a>
                </li>
                <li class="nav-item">
                    <a id="side-search-open" class="nav-link" href="#">
                        <span class="lnr lnr-magnifier"></span>
                    </a>
                </li>
                <li class="nav-item only-desktop">
                    <a class="nav-link" id="side-nav-open" href="#">
                        <span class="lnr lnr-menu"></span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>



