@extends('layouts.frontbase')

@section('content')
    @foreach($post as $rs)
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


@endsection
