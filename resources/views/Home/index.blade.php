@extends('layouts.frontbase')
@section('title','Blackest')
@section('content')
    <section id="testimonial" class="section-padding bg-fixed bg-white overlay" style="background-image: url('{{asset('assets')}}/home/img/bg-white.jpg');">
        <div class="container">
            <div class="section-content" data-aos="fade-up">
                <div class="heading-section text-center">
                    <h2>
                        Göz Atmakta Fayda Var
                    </h2>
                </div>
                <div class="row">
                    <!-- Testimonial -->

                    <div class="testi-content testi-carousel owl-carousel">
                        @foreach($sliderdata as $rs)
                        <div class="testi-item text-center">
                            <i class="testi-icon fa fa-3x fa-quote-left"></i>
                            <h4 class="testi-text"><a href="{{route('post_index',['id'=>$rs->id])}}"></a> <br>{{$rs->title}} </h4>
                            <div class="testi-meta-inner d-flex justify-content-center align-items-center">
                                <div class="testi-img mr-2">
                                    <img src="{{asset('assets')}}/home/img/testi-1.png" alt="" href="{{route('post_index',['id'=>$rs->id])}}">
                                </div>
                                <div class="testi-details">
                                    <p class="testi-author mb-0 font-weight-bolder">Kullanıcı Adı</p>
                                    <p class="testi-desc mb-0">Üyelik adı</p>

                                </div>
                            </div>

                        </div>


                        @endforeach
                    </div>

                    <!-- End of Testimonial -->
                </div>
            </div>
        </div>
    </section>
    <!-- End of Features Section-->
    @foreach($postlist1 as $rs)
    <section id="section-featurettes" class="featurettes overlay bg-fixed" style="background-image: url('{{asset('assets')}}/home/img/bg.jpg');">

        <div class="container">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row align-items-center text-white">

                            <div class="col-md-4 offset-md-2 col-sm-6" data-aos="fade-right">
                                <h4 class="mb-4">{{$rs->title}}</h4>
                                <p>{{$rs->detail}}</p>
                                <a href="{{route('post_index',['id'=>$rs->id])}}" type="button"  class="btn btn-outline-primary">Devamını Oku</a>
                            </div><!--/ .col-md-4.col-md-offset-2.col-sm-6 -->

                            <div class="col-md-4 offset-md-right-2 col-sm-6" data-aos="flip-right">
                                @if($rs->image)
                                <img class="my-5" src="{{Storage::url($rs->image)}}" alt="">

                                @else
                                    <img class="my-5" src="{{asset('assets')}}/home/img/new.png" alt="">
                                @endif
                            </div><!--/ .col-md-4.col-md-offset-right-2.col-sm-6 -->

                        </div><!--/ .featurettes-item -->

                    </div><!--/ .col-md-12 -->

                </div><!--/ .row -->
            </div>
        </div><!--/ .container -->
    </section>
    @endforeach
    	<!-- Testimonial Section-->

    <!-- End of Testimonial Section-->	<!-- Portfolio Section -->

    <!-- End of Portfolio Section -->	<!-- Client Section -->

    <!-- End of Reservation Section -->	<!-- Features Section-->
    <section id="cta" class="bg-fixed overlay" style="background-image: url('{{asset('assets')}}/home/img/bg.jpg');">
        <div class="container">
            <div class="section-content" data-aos="fade-up">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="mb-2">Make a beautiful website, or million of them</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, veritatis qui eligendi delectus quia fuga!</p>
                        <a class="btn btn-outline-primary btn-lg">FEATURES</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>


@endsection
