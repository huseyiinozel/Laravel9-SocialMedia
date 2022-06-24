@extends('layouts.post')
@section('content')
    <div class="jumbotron jumbotron-single d-flex align-items-center" style="background-image: url('{{asset('assets')}}/home/img/blog-1.jpg')">
        <div class="container text-center">

            @if($post->image )
            <img src="{{Storage::url($post->image)}}">
                @endif

        </div>
    	<!-- Contact Form Section -->


                <div class="row">
                    <!-- Single Content Holder -->
                    <div class="col-md-8 offset-md-2 mt-4" >
                        <h1 class="display-2 mb-4">User ad</h1>
                        <h4>{{$post->title}}</h4>
                        <img class="float-left" width="320px" src="" alt="">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste harum, ut magni cupiditate. Nihil ipsum debitis voluptates voluptate illum consectetur sapiente dolorem facilis, eum nobis sequi eveniet assumenda vel voluptatem!</p>
                    </div>
                    <!-- End of Contact Form Holder -->
                </div>
            </div>

    <section id="cta" class="bg-fixed overlay" style="background-image: url('{{asset('assets')}}/home/img/bg.jpg');">
        <div class="container">
            <div class="section-content" data-aos="fade-up">
                <div class="row">
                    <div class="col-md-12 text-center">

                    <div class="avatar">
                            <img width="50" height="50" class="avatar" src="{{asset('assets')}}/home/img/testi-1.png" alt="">
                        </div>

                        <div class="comment-content">

                            <div class="comment-info">
                                <cite>Itachi Uchiha</cite>

                                <div class="comment-meta">
                                    <time class="comment-time" datetime="2014-07-12T23:05">Jul 12, 2014 @ 23:05</time>

                                </div>
                            </div>

                            <div class="comment-text">
                                <p> est, ne has voluptua praesent.</p>
                            </div>

                        </div>


            </div> <!-- end col-full -->
        </div> <!-- end row comments -->
    </div> <!-- end comments-wrap -->
        </div>
    </section>

    <section id="cta" class="bg-fixed overlay" style="background-image: url('{{asset('assets')}}/home/img/bg.jpg');">
        <div class="container">
            <div class="section-content" data-aos="fade-up">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="title-wrap" data-aos="fade-up">
                            <h2 class="section-title">Get In Touch</h2>
                            <p class="section-sub-title">Praesent commodo cursus magna, vel scelerisque nisl consectetur et. <br> pharetra augue. Donec id elit non mi.</p>
                        </div>
                        <!-- End of Section Title -->
                        <div class="row">
                            <!-- Contact Form Holder -->
                            <div class="col-md-8 offset-md-2 contact-form-holder mt-4" data-aos="fade-up">
                                <form method="post" name="contact-us" action="">
                                    <div class="row">
                                        <div class="col-md-12 form-group">
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <input type="number" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="Phone">
                                        </div>
                                        <div class="col-md-12 form-group">
                                            <input type="text" class="form-control" id="websiteUrl" name="websiteUrl" placeholder="Website">
                                        </div>
                                        <div class="col-md-12 form-group">
                                            <textarea class="form-control" id="message" name="message" rows="6" placeholder="Your Message ..."></textarea>
                                        </div>
                                        <div class="col-md-12 text-center">
                                            <button class="btn btn-primary btn-shadow btn-lg" type="submit" name="submit">Send Message</button>
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
