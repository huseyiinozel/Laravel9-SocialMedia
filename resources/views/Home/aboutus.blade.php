@extends('layouts.about')
@section('title','Hakkımızda')
@section('content')


    	<div class="jumbotron jumbotron-single d-flex align-items-center" style="background-image: url('{{asset('assets')}}/home/img/bg.jpg')">
        <div class="container text-center">
            <h1 class="display-2 mb-4">Hakkımızda</h1>
        </div>
    </div>	<section id="who-we-are" class="bg-white">
        <div class="container">
            <div class="section-content">
                <div class="title-wrap" data-aos="fade-up">
                    <h2 class="section-title">Senin için buradayız <br>Sen yeterki anlat<b> Biz dinleriz</b></h2>
                    <p class="section-sub-title">{{$settings->aboutus}}</p>
                </div>

                <div class="row text-center">
                    <div class="col-md-4 col-sm-6" data-aos="fade-up">
                        <img class="rounded-circle" src="{{asset('assets')}}/home/img/icons/animat-checkmark.gif" alt="Generic placeholder image" width="140" height="140">
                        <h5 class="mb-4">Hızlı İletişim</h5>
                        <p>Bize istediğin her zaman ulaşabilirsin</p>
                        <p><a class="btn btn-link" href="#" role="button">İletişim </a></p>
                    </div>
                    <!-- /.col-md-4 col-sm-6  -->
                    <div class="col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="200">
                        <img class="rounded-circle" src="{{asset('assets')}}/home/img/icons/animat-customize.gif" alt="Generic placeholder image" width="140" height="140">
                        <h5 class="mb-4">Hızlı Üyelik</h5>
                        <p>Hızlı bir şekilde üye olarak aramıza katılabilirsin.</p>
                        <p><a class="btn btn-link" href="#" role="button">Üye Ol</a></p>
                    </div>
                    <!-- /.col-md-4 col-sm-6  -->
                    <div class="col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="400">
                        <img class="rounded-circle" src="{{asset('assets')}}/home/img/icons/animat-responsive.gif" alt="Generic placeholder image" width="140" height="140">
                        <h5 class="mb-4">Veri Güvenliği</h5>
                        <p>Kimliğinin anonim kalmasına ve verilerin güvenli bir şekilde saklanamsına çok önem veriyoruz.Bize güvenebilirsin.</p>

                    </div>
                    <!-- /.col-md-4 col-sm-6  -->
                </div>
                <!-- /.row -->
            </div>
        </div>
    </section>	<section id="skills" class="bg-white">
        <div class="container">
            <div class="section-content pt-0">

                <div class="row">
                    <div class="col-md-6" data-aos="fade-right">
                        <!-- Skill Item -->
                        <div class="skill-item">
                            <div class="d-flex justify-content-between">
                                <p>Site trafiği</p>
                                <p class="text-muted">90%</p>
                            </div>
                            <div class="progress" data-percent="90%">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 0"></div>
                            </div>
                        </div>
                        <!-- End Skill Item -->
                        <!-- Skill Item -->
                        <div class="skill-item">
                            <div class="d-flex justify-content-between">
                                <p>Aktif üye oranı</p>
                                <p class="text-muted">85%</p>
                            </div>
                            <div class="progress" data-percent="85%">
                                <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 0"></div>
                            </div>
                        </div>
                        <!-- End Skill Item -->
                        <!-- Skill Item -->
                        <div class="skill-item">
                            <div class="d-flex justify-content-between">
                                <p>Paylaşılan post oranı</p>
                                <p class="text-muted">73%</p>
                            </div>
                            <div class="progress" data-percent="73%">
                                <div class="progress-bar" role="progressbar" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100" style="width: 0"></div>
                            </div>
                        </div>
                        <!-- End Skill Item -->
                    </div>

                </div>
            </div>
        </div>
    </section>	<!-- Features Section-->
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



@endsection
