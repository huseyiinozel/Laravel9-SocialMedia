@extends("layouts.about")
@section('content')
    <div class="jumbotron jumbotron-single d-flex align-items-center" style="background-image: url('{{asset('assets')}}/home/img/bg.jpg')">
        <div class="container text-center">
            <h1 class="display-2 mb-4">Profil</h1>


                <div class="col-sm-12 ">
                    <div class="bg-secondary rounded h-100 p-4">
                        <h6 class="mb-4">Profil Ayarları</h6>
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                        aria-selected="true">Bilgiler</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-profile" type="button" role="tab"
                                        aria-controls="pills-profile" aria-selected="false">Gönderilerim</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-contact" type="button" role="tab"
                                        aria-controls="pills-contact" aria-selected="false">Mesajlarım</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-comment" type="button" role="tab"
                                        aria-controls="pills-comment" aria-selected="false">Yorumlarım</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">

                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                <div class="col-sm-12 col-xl-6">
                                    <div class="bg-secondary rounded h-100 p-4">
                                        <h6 class="mb-4">Kullanıcı Bilgileri</h6>
                                        <div class="accordion accordion-flush" id="accordionFlushExample">
                                            <div class="accordion-item bg-transparent">
                                                <h2 class="accordion-header" id="flush-headingOne">
                                                    <button class="accordion-button" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                                            aria-expanded="true" aria-controls="flush-collapseOne">
                                                        Kullanıcı Adı
                                                    </button>
                                                </h2>
                                                <div id="flush-collapseOne" class="accordion-collapse collapse show"
                                                     aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                                    <div class="accordion-body">
                                                        {{$data->username}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item bg-transparent">
                                                <h2 class="accordion-header" id="flush-headingTwo">
                                                    <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                                            aria-expanded="false" aria-controls="flush-collapseTwo">
                                                        Email
                                                    </button>
                                                </h2>
                                                <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                                     aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                                    <div class="accordion-body">
                                                        {{$data->email}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item bg-transparent">
                                                <h2 class="accordion-header" id="flush-headingThree">
                                                    <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                                            aria-expanded="false" aria-controls="flush-collapseThree">
                                                        cinsiyet
                                                    </button>
                                                </h2>
                                                <div id="flush-collapseThree" class="accordion-collapse collapse"
                                                     aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                                    <div class="accordion-body">
                                                        {{$data->gender}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item bg-transparent">
                                                <h2 class="accordion-header" id="flush-headingFour">
                                                    <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseFour"
                                                            aria-expanded="false" aria-controls="flush-collapseFour">
                                                        Şifre
                                                    </button>
                                                </h2>
                                                <div id="flush-collapseFour" class="accordion-collapse collapse"
                                                     aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                                    <div class="accordion-body">
                                                        {{$data->password}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item bg-transparent">
                                                <h2 class="accordion-header" id="flush-headingFive">
                                                    <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseFive"
                                                            aria-expanded="false" aria-controls="flush-collapseFive">
                                                       Doğum tarihi
                                                    </button>
                                                </h2>
                                                <div id="flush-collapseFive" class="accordion-collapse collapse"
                                                     aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                                    <div class="accordion-body">
                                                        {{$data->age}}
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item bg-transparent">
                                                <h2 class="accordion-header" id="flush-headingSix">
                                                    <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseSix"
                                                            aria-expanded="false" aria-controls="flush-collapseSix">
                                                        Yetki
                                                    </button>
                                                </h2>
                                                <div id="flush-collapseSix" class="accordion-collapse collapse"
                                                     aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                                                    <div class="accordion-body">
                                                        @foreach($data->roles as $role)
                                                            {{$role->name}}
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item bg-transparent">
                                                <h2 class="accordion-header" id="flush-headingSeven">
                                                    <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven"
                                                            aria-expanded="false" aria-controls="flush-collapseSeven">
                                                        Hesap oluşturma
                                                    </button>
                                                </h2>
                                                <div id="flush-collapseSeven" class="accordion-collapse collapse"
                                                     aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                                                    <div class="accordion-body">
                                                        {{$data->created_at}}
                                                    </div>
                                                </div>
                                            </div>



                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                <div class="col-12">
                                    <div class="bg-secondary rounded h-100 p-4">
                                        <h6 class="mb-4">Gönderiler </h6>


                                        <br>
                                        <br>
                                        <div class="table-responsive">

                                            <table class="table">

                                                <thead>

                                                <tr>
                                                    <th scope="col">Numara</th>
                                                    <th scope="col">Kategori</th>
                                                    <th scope="col">İsim</th>
                                                    <th scope="col">Resim</th>
                                                    <th scope="col">Durum</th>
                                                    <th scope="col">Göster</th>
                                                    <th scope="col">Düzenle</th>
                                                    <th scope="col">Sil</th>
                                                </tr>
                                                </thead>

                                                <tbody>

                                                <tr>
                                                    @foreach( $post as $rs )
                                                        <th scope="row">{{$rs->id}}</th>
                                                        <td> {{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs->category, $rs->category->title) }}</td>
                                                        <td>{{$rs->title}}</td>
                                                        <td>   @if($rs->image)
                                                                <img class="rounded-circle" src="{{Storage::url($rs->image)}}" alt="" style="width: 40px; height: 40px;">
                                                            @endif
                                                        </td>
                                                        <td>{{$rs->status}}</td>
                                                        <td> <a href="{{route('admin.comment_show',['id'=>$rs->id])}}" class="btn btn-primary btn-success"
                                                                onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">Göster</a> </td>
                                                        <td> <a href="{{route('user_post_edit',['id'=>$rs->id])}}" class="btn btn-primary btn-success"
                                                                onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">Düzenle</a> </td>
                                                        <td><a href="{{route('user_post_destroy',['id'=>$rs->id])}}" class="btn btn-primary btn-danger"
                                                               onclick="return confirm ('Eminseniz Siliyorum')">Sil</a> </td>




                                                </tr>
                                                @endforeach


                                                </tbody>

                                            </table>

                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <div class="col-sm-12 col-xl-6">
                                        <div class="bg-secondary rounded h-100 p-4">

                                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                                <div class="accordion-item bg-transparent">
                                                    <h2 class="accordion-header" id="flush-headingOne">
                                                        <button class="btn btn-info" type="button"
                                                                data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                                                aria-expanded="true" aria-controls="flush-collapseOne">
                                                            Gönderi Paylaş

                                                        </button>
                                                    </h2>

                                                    <div id="flush-collapseOne" class="accordion-collapse collapse show"
                                                         aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                                        <div class="accordion-body">
                                                            <div class="col-sm-12 col-xl-12">
                                                                <div class="bg-secondary rounded h-100 p-4">
                                                                    <h6 class="mb-4">Gönderi Ekle</h6>

                                                                    <form action="{{route('user_post_store',['id'=>Auth::user()->id])}}"method="post" enctype="multipart/form-data">
                                                                        @csrf

                                                                        <div class="row mb-3">
                                                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Kategori</label>
                                                                            <div class="col-sm-10">
                                                                                <select name="category_id" class="form-select form-select-sm mb-3" aria-label=".form-select-sm example">
                                                                                    <option>Kategori Seç</option>
                                                                                    @foreach($category as $rs)
                                                                                        <option value="{{$rs->id}}">{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title)}}</option>

                                                                                    @endforeach

                                                                                </select>
                                                                            </div>
                                                                        </div>


                                                                        <div class="row mb-3">
                                                                            <label for="inputPassword3" class="col-sm-2 col-form-label">Başlık</label>
                                                                            <div class="col-sm-10">
                                                                                <input type="text" name="title" class="form-control" id="inputPassword3">
                                                                            </div>
                                                                        </div>
                                                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Detay</label>
                                                                        <div class="form-floating" >

                                                                         <textarea class="form-control" name="detail" placeholder="Leave a comment here"
                                                                             id="floatingTextarea" style="height: 150px;"></textarea>

                                                                        </div>
                                                                        <br>


                                                                        <div class="row mb-3">
                                                                            <label for="inputPassword3" class="col-sm-2 col-form-label">Resim Seç</label>
                                                                            <div class="col-sm-10">
                                                                                <input name="image" class="form-control bg-dark" type="file" >
                                                                            </div>
                                                                        </div>

                                                                        <div class="row mb-3">
                                                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Durum</label>
                                                                            <div class="col-sm-10">
                                                                                <select name="status" class="form-select form-select-sm mb-3" aria-label=".form-select-sm example">
                                                                                    <option selected="">Aktif</option>
                                                                                    <option value="">Pasif</option>


                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div >
                                                                            <input name="user_id" type="hidden" value="{{Auth::user()->id}}">
                                                                        </div>



                                                                        <button type="submit" class="btn btn-primary">Paylaş</button>
                                                                    </form>
                                                                </div>
                                                            </div>




                                                        </div>
                                                    </div>
                                                </div>





                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>



                            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                 Yapım Aşamasında
                            </div>
                            <div class="tab-pane fade" id="pills-comment" role="tabpanel" aria-labelledby="pills-contact-tab">

                                <div class="col-12">
                                    <div class="bg-secondary rounded h-100 p-4">
                                        <h6 class="mb-4">Yorumlarım </h6>


                                        <div class="table-responsive">

                                            <table class="table">

                                                <thead>

                                                <tr>
                                                    <th scope="col">Numara</th>
                                                    <th scope="col">Kullanıcı Adı</th>
                                                    <th scope="col">Post</th>
                                                    <th scope="col">Yorum</th>
                                                    <th scope="col">Durum</th>
                                                    <th scope="col">Göster</th>
                                                    <th scope="col">Sil</th>
                                                </tr>
                                                </thead>

                                                <tbody>

                                                <tr>
                                                    @foreach( $comment as $rs  )
                                                        <th scope="row">{{$rs->id}}</th>
                                                        <th>{{Auth::user()->username}}</th>
                                                        <th scope="row">{{$rs->post_id}}</th>
                                                        <th scope="row">{{$rs->review}}</th>
                                                        <td>{{$rs->status}}</td>
                                                        <td> <a href="{{route('post_index',['id'=>$rs->post_id])}}" class="btn btn-primary btn-success">Show</a> </td>
                                                        <td><a href="{{route('user_comment_destroy',['id'=>$rs->id])}}" class="btn btn-primary btn-danger"
                                                               onclick="return confirm ('Eminseniz Siliyorum')">Sil</a> </td>
                                                </tr>
                                                @endforeach
                                                <tr>




                                                </tr>

                                                </tbody>

                                            </table>

                                        </div>
                                    </div>
                                </div>




                            </div>



                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>














@endsection
