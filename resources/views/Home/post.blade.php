@extends('layouts.post')
@section('content')
    <div class="jumbotron jumbotron-single d-flex align-items-center" style="background-image: url('{{asset('assets')}}/home/img/blog-1.jpg')">
        <div class="container text-center">
            @include('home.commentalert')
            @if($post->image)
                <img class="my-5" src="{{Storage::url($post->image)}}" alt="">

            @else
                <img class="my-5" src="{{asset('assets')}}/home/img/new.png" alt="">
            @endif

        </div>
    	<!-- Contact Form Section -->


                <div class="row">
                    <!-- Single Content Holder -->
                    <div class="col-md-8 " >
                        <h1 class="display-2 mb-4">{{$post->title}}</h1>
                        <h4>{{$post->user->name}}</h4>
                        <img class="float-left" width="320px" src="" alt="">
                        <p>{{$post->detail}}</p>
                    </div>
                    <!-- End of Contact Form Holder -->
                </div>
            </div>

    <section id="cta" class="bg-fixed overlay" style="background-image: url('{{asset('assets')}}/home/img/bg.jpg');">
        <div class="container">
            <div class="section-content" data-aos="fade-up">
                @foreach($reviews as $rs)
                <div class="row">
                    <div class="col-md-4 ">

                    <div class="avatar">
                            <img width="50" height="50" class="avatar" src="{{asset('assets')}}/home/img/testi-1.png" alt="">
                        </div>

                        <div class="comment-content">

                            <div class="comment-info">
                                <cite>{{Auth::user()->username}}</cite>

                                <div class="comment-meta">
                                    <time class="comment-time" datetime="2014-07-12T23:05">{{$rs->created_at}}</time>

                                </div>
                            </div>

                            <div class="comment-text">
                                <p> {{$rs->review}} </p>
                            </div>

                        </div>


            </div> <!-- end col-full -->
        </div>
                    <br>
                    <br>
            @endforeach    <!-- end row comments -->
    </div> <!-- end comments-wrap -->
        </div>
    </section>

    <section id="cta" class="bg-fixed overlay" style="background-image: url('{{asset('assets')}}/home/img/bg.jpg');">
        <div class="container">
            <div class="section-content" data-aos="fade-up">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="title-wrap" data-aos="fade-up">
                            <h2 class="section-title">Yorum Yap</h2>

                        </div>

                        <!-- End of Section Title -->
                        <div class="row">
                            <!-- Contact Form Holder -->
                            <div class="col-md-8 offset-md-2 contact-form-holder mt-4" data-aos="fade-up">
                                <form method="post"  name="contact-us" action="{{route('storecomment')}}">
                                    @csrf
                                    <div class="row">
                                        <input type="hidden" name="post_id" value="{{$post->id}}">
                                        <div class="col-md-12 form-group">
                                            <textarea class="form-control" id="review" name="review" rows="6" placeholder="Yorum..."></textarea>
                                        </div>
                                        <div class="col-md-12 text-center">
                                            <button class="btn btn-primary btn-shadow btn-lg" type="submit" name="submit">Yorumu Gönder</button>
                                        </div>
                                        <div >
                                            <input name="user_id" type="hidden" value="{{Auth::user()->id}}">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- End of Contact Form Holder -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




@endsection
