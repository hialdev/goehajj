<footer class="color-green-bg">
    <div class="container py-5">
        <div class="row text-white">
            <div class="col-6 col-lg-5 mb-4">
                <img src="{{Voyager::image(setting('site.white_logo'))}}" alt="Logo Footer" class="d-block mb-4" style="filter: brightness(100)">
                <p>Go Ehajj adalah agen penyedia layanan travel ibadah haji yang terkenal dengan pelayanan unggul dan pengalaman yang mendalam. Mereka menawarkan paket-paket haji yang komprehensif, termasuk akomodasi, transportasi, dan pendampingan selama perjalanan.</p>
            </div>
            <div class="col-6 col-lg-2 mb-4">
                <h6>Pages</h6>
                <div class="d-flex flex-column gap-3 mt-4">
                    <a href="{{url('/')}}" class="text-decoration-none text-white">Home</a>
                    <a href="{{url('/#why')}}" class="text-decoration-none text-white">Mengapa Go-Ehajj</a>
                    <a href="{{url('/#process')}}" class="text-decoration-none text-white">Proses</a>
                    <a href="{{url('/#harga')}}" class="text-decoration-none text-white">Harga</a>
                    <a href="{{url('/#faq')}}" class="text-decoration-none text-white">FAQ</a>
                    <a href="{{route('news')}}" class="text-decoration-none text-white">Artikel</a>
                </div>
            </div>
            <div class="col-6 col-lg-2 mb-4">
                <h6>Paket Penawaran</h6>
                <div class="d-flex flex-column gap-3 mt-4">
                    @php
                        $pkgs = \App\Models\Package::all();
                    @endphp
                    @foreach ($pkgs as $pck)
                    <a href="https://wa.me/{{setting('site.whatsapp')}}?text=Hallo, Go Ehajj... Saya ingin mengetahui paket {{$pck->title}} lebih lanjut" class="text-decoration-none text-white">{{$pck->title}}</a>
                    @endforeach
                </div>
            </div>
            <div class="col-6 col-lg-3 mb-4">
                <h6>Kantor Pusat</h6>
                <div class="d-flex flex-column gap-3 mt-4">
                    <a href="{{setting('site.loc_gmap')}}" target="_blank" class="text-decoration-none text-white">{{setting('site.loc_address')}}</a>
                    <div class="d-flex align-items-center gap-2">
                        <a href="{{setting('site.sc_facebook')}}" target="_blank" class="{{setting('site.sc_facebook') ? 'd-flex' : 'd-none'}} rounded-2 align-items-center justify-content-center text-white p-2 rounded-md" style="background: #00160f73">
                            <i class="iconify" data-icon="bi:facebook" data-inline="false"></i>
                        </a>
                        <a href="{{setting('site.sc_tiktok')}}" target="_blank" class="{{setting('site.sc_tiktok') ? 'd-flex' : 'd-none'}} rounded-2 align-items-center justify-content-center text-white p-2 rounded-md" style="background: #00160f73">
                            <i class="iconify" data-icon="bi:tiktok" data-inline="false"></i>
                        </a>
                        <a href="{{setting('site.sc_x')}}" target="_blank" class="{{setting('site.sc_x') ? 'd-flex' : 'd-none'}} rounded-2 align-items-center justify-content-center text-white p-2 rounded-md" style="background: #00160f73">
                            <i class="iconify" data-icon="bi:twitter" data-inline="false"></i>
                        </a>
                        <a href="{{setting('site.sc_instagram')}}" target="_blank" class="{{setting('site.sc_instagram') ? 'd-flex' : 'd-none'}} rounded-2 align-items-center justify-content-center text-white p-2 rounded-md" style="background: #00160f73">
                            <i class="iconify" data-icon="bi:instagram" data-inline="false"></i>
                        </a>
                        <a href="{{setting('site.sc_youtobe')}}" target="_blank" class="{{setting('site.sc_youtobe') ? 'd-flex' : 'd-none'}} rounded-2 align-items-center justify-content-center text-white p-2 rounded-md" style="background: #00160f73">
                            <i class="iconify" data-icon="bi:youtube" data-inline="false"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid p-4 text-white" style="background: #00160f73">
        <div class="d-flex align-items-center justify-content-end">
            Copyright &copy; 2019 - {{date('Y')}} Go Ehajj
        </div>
    </div>
</footer>