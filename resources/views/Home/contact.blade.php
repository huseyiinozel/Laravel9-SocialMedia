@extends('layouts.about')
@section('content')
    <div class="jumbotron jumbotron-single d-flex align-items-center" style="background-image: url('{{asset('assets')}}/home/img/bg.jpg')">
    <div class="container text-center">
        <h1 class="display-2 mb-4">İletişim</h1>
    </div>
    </div>		<!-- Contact Form Section -->
    <section id="contact-form" class="bg-white">
        <div class="container">
            <div class="section-content">
                <!-- Section Title -->
                <div class="title-wrap" data-aos="fade-up">
                    <h2 class="section-title">Bize Ulaşın</h2>
                    <p class="section-sub-title">Bize istediğiniz zaman gönül rahatlığıyla ulaşabilirsiniz. <br> </p>
                </div>
                <!-- End of Section Title -->
                <div class="row">
                    <!-- Contact Form Holder -->
                    <div class="col-md-8 offset-md-2 contact-form-holder mt-4" data-aos="fade-up">
                        <form method="post" name="contact-us" action="{{route('storecontact')}}">
                            @csrf
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="İsim(kullanıcı adı)">
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Telefon numarası(isteğe bağlı)">
                                </div>
                                <div class="col-md-12 form-group">
                                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Konu">
                                </div>
                                <div class="col-md-12 form-group">
                                    <textarea class="form-control" id="message" name="message" rows="6" placeholder="Mesajınız ..."></textarea>
                                </div>
                                <div class="col-md-12 text-center">
                                    <button class="btn btn-primary btn-shadow btn-lg" type="submit" name="submit">Mesajı Gönder</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- End of Contact Form Holder -->
                </div>
            </div>
            <div class="section-content pt-0">
                <div class="title-wrap" data-aos="fade-up">
                    <h2 class="section-title">Where To Find Us?</h2>
                </div>
                <div class="row text-center mt-4">
                    <div class="col-md-3" data-aos="fade-up">
                        <span class="lnr lnr-location fs-40 py-4 d-block"></span>
                        <h5>LOCATION</h5>
                        <p>Yogyakarta</p>
                    </div>
                    <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
                        <span class="lnr lnr-clock fs-40 py-4 d-block"></span>
                        <h5>WORKING TIME</h5>
                        <p>Monday - Saturday</p>
                    </div>
                    <div class="col-md-3" data-aos="fade-up" data-aos-delay="400">
                        <span class="lnr lnr-phone fs-40 py-4 d-block"></span>
                        <h5>CALL US</h5>
                        <p>123-45678</p>
                    </div>
                    <div class="col-md-3" data-aos="fade-up" data-aos-delay="600">
                        <span class="lnr lnr-phone fs-40 py-4 d-block"></span>
                        <h5>EMAIL</h5>
                        <p>company@gmail.com</p>
                    </div>

                </div>
            </div>
        </div>
    </section>


@endsection
