@if($message = Session::get('success'))
<div class="alert">
    <span class="btn btn-success">Mesajınız Başarıyla İletildi</span>

</div>
@endif
@if($message = Session::get('error'))
    <div class="alert">
        <span class="btn btn-danger">Malesef mesajınız gönderilemedi.Lütfen gerekli bölümleri doldurduğunuzdan emin olun</span>

    </div>
@endif

@if($errors->any())

    <div class="alert-box ss-error hideit">
        <p>Malesef mesajınız gönderilemedi.Lütfen tekrar deneyiniz.</p>
        <i class="btn btn-danger"></i>
    </div>


@endif
