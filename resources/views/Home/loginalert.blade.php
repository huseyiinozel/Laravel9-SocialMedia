@if($message = Session::get('success'))
    <div class="alert">
        <span class="btn btn-success">Başarılı Bir Şekilde Giriş Yaptınız. Hoşgeldiniz</span>

    </div>
@endif
@if($message = Session::get('error'))
    <div class="alert">
        <span class="btn btn-danger">Kullanıcı Adınızı veya Şifrenizi Yanlış Girdiniz.Lütfen Tekrar Deneyiniz</span>

    </div>
@endif
@if($message = Session::get('logout'))
    <div class="alert">
        <span class="btn btn-success">Başarılı Bir Şekilde Çıkış Yaptınız.Tekrar Bekleriz</span>

    </div>
@endif

@if($message = Session::get('register'))
    <div class="alert">
        <span class="btn btn-success">Aramıza hoşgeldiniz.Umarım güzel vakit geçirirsiniz.</span>

    </div>
@endif

@if($message = Session::get('errorregister'))
    <div class="alert">
        <span class="btn btn-danger">Bu Kullanıcı Adı Alınmıştır.Lütfen Başka bir kullanıcı adı seçiniz.</span>

    </div>
    @endif

@if($message = Session::get('erroremail'))
    <div class="alert">
        <span class="btn btn-danger">Bu E-mail.Sisteme kayıtlıdır.Lütfen Giriş Yapınız.</span>

    </div>
@endif
@if($message = Session::get('errornull'))
    <div class="alert">
        <span class="btn btn-danger">Lütfen gerekli yerleri doldurduğunuzdan emin olun ve tekrar üye olmayı deneyiniz.</span>

    </div>
@endif




@if($errors->any())

    <div class="alert-box ss-error hideit">
        <p>Malesef mesajınız gönderilemedi.Lütfen tekrar deneyiniz.</p>
        <i class="btn btn-danger"></i>
    </div>


@endif
