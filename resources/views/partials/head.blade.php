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

<a href="https://wa.me/{{setting('site.whatsapp')}}?text=Hallo Go Ehajj, saya ingin konsultasi seputar haji dan umroh" target="_blank" class="float-wa text-decoration-none d-inline-flex align-items-center gap-3 justify-content-center position-fixed color-green shadow bottom-0 start-0 end-0 bg-light rounded-pill p-2 px-3 mx-auto mb-1" style="width: fit-content; z-index:40">
    <div>
        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 14 14">
            <path fill="currentColor" fill-rule="evenodd" d="M7 .38c3.614-.003 6.627 3.016 6.627 6.623c0 3.61-3.013 6.62-6.627 6.618a6.6 6.6 0 0 1-2.753-.596l-3.28.593a.5.5 0 0 1-.558-.668l.94-2.498a6.64 6.64 0 0 1-.97-3.45C.38 3.395 3.39.382 7 .38m3.325 9.436c-.737.596-1.878 1.198-2.969.498c-1.43-.919-2.696-2.126-3.614-3.557c-.539-.838-.032-2.18.726-2.998c.302-.327.8-.275 1.129.025l.692.632c.21.192.218.526.087.78c-.207.398-.329.933-.073 1.332c.322.5.718.993 1.664 1.28c.286.088.653.05.965-.076c.261-.106.592-.105.785.101l.644.685c.355.378.367.972-.036 1.298" clip-rule="evenodd" />
        </svg>
    </div>
    {{setting('site.float_text')}}
</a>
