<header class="top-0 p-3" style="box-shadow: 0px 4px 80px 0px rgba(228, 230, 235, 0.07); backdrop-filter: blur(20px); z-index:18; background: #ffffffe5">
    <div class="container d-flex align-items-center justify-content-between">
        <a href="{{'/'}}" class="d-block text-decoration-none">
            <img src="{{Voyager::image(setting('site.logo'))}}" alt="Logo {{env('APP_NAME')}}" class="d-block w-100" style="max-height:3em; object-fit:contain">
        </a>
        <div class="d-flex cursor-pointer d-md-none align-items-center justify-content-betwee btn-menu fs-1">
            <i class="iconify" data-icon="fluent:text-align-right-16-filled"></i>
        </div>
        <nav class="menu-box align-items-center gap-5">
            <div class="d-flex cursor-pointer d-md-none align-items-center justify-content-betwee btn-menu-close fs-1">
                <i class="iconify" data-icon="ion:close"></i>
            </div>
            <a href="{{!Route::is('home') ? url('/#why') : '#why'}}" class="menu-item">Mengapa GoEhajj</a>
            <a href="{{!Route::is('home') ? url('/#proses') : '#proses'}}" class="menu-item">Proses</a>
            <a href="{{!Route::is('home') ? url('/#harga') : '#harga'}}" class="menu-item">Harga</a>
            <a href="{{!Route::is('home') ? url('/#faq') : '#faq'}}" class="menu-item">FAQ</a>
            <a href="{{!Route::is('home') ? route('news') : '#article'}}" class="menu-item {{Route::is('news') || Route::is('news.show') ? 'active' : ''}}">Artikel</a>
            <a href="https://wa.me/{{setting('site.whatsapp')}}?text=Hallo Go Ehajj, saya ingin berkonsultasi mengenai haji / umroh / pelayanan Go Ehajj" target="_blank" class="btn btn-green">Konsultasi</a>
        </nav>
    </div>
</header>


