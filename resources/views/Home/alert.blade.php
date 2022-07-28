@if($message = Session::get('successcontact'))
<div class="alert">
    <span class="btn btn-success">Mesajınız Başarıyla İletildi</span>

</div>
@endif
@if($message = Session::get('errorcontact'))
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
