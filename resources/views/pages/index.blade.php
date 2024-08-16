@extends('layouts.app')
@section('seo')
    @php
        $seo = \App\Models\Meta::all()->keyBy('page');
    @endphp
    @include('partials.seo', [
        'title' => $seo->get('home')->title ?? setting('seo.title'),
        'description' => $seo->get('home')->description ?? setting('seo.description'),
        'image' => strlen($seo->get('home')->image) > 2 ? Voyager::image($seo->get('home')->image) : Voyager::image(setting('seo.image')),
        'keywords' => $seo->get('home')->keywords ?? setting('seo.keywords'),
    ])
@endsection
@section('content')
<section>
    <div class="container pt-3">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1 class="mb-3 fw-semibold">{{$jumbo->title}}</h1>
                <p class="mb-3">{{$jumbo->desc}}</p>
                <a href="{{$jumbo->btn_link}}" class="btn btn-orange">{{$jumbo->btn_text}}</a>
            </div>
            <div class="col-md-6">
                <img src="{{Voyager::image($jumbo->image)}}" alt="Hero {{$jumbo->title}} Image" class="d-block w-100">
            </div>
        </div>
    </div>
</section>
<section class="color-green-bg" id="why">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-5 mb-3">
                <div class="d-flex align-items-center gap-3">
                    <h4 class="text-white text-capitalize">{{setting('web.promo_title')}}</h4>
                    <div class="fs-1 color-orange fw-semibold ff-nova">{{setting('web.promo_number')}}</div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="d-flex align-items-center gap-3 justify-content-between text-white flex-wrap">
                    <div class="" style="max-width: 10em">Promo Akan berakhir dalam</div>
                    <div class="d-flex align-items-center gap-2">
                        <div class="p-2 d-flex align-items-center rounded color-green bg-white"><span id="days">23</span> d</div>
                        <div class="p-2 d-flex align-items-center rounded color-green bg-white"><span id="hours">04</span> h</div>
                        <div class="p-2 d-flex align-items-center rounded color-green bg-white"><span id="minutes">50</span> m</div>
                        <div class="p-2 d-flex align-items-center rounded color-green bg-white"><span id="seconds">50</span> s</div>
                    </div>
                    <a href="https://wa.me/{{setting('site.whatsapp')}}?text=Hallo Go Ehajj, Saya ingin melakukan pendaftaran mohon berikan saya arahan" target="_blank" class="btn btn-orange promo-btn">Daftar Sekarang</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container py-5 border-bottom">
        <div class="row">
            <div class="col-lg-3 mb-5">
                <h3>{{setting('web.value_title')}}</h3>
                <hr class="divider">
                <p class="text-secondary">{{setting('web.value_desc')}}</p>
                <a href="https://wa.me/{{setting('site.whatsapp')}}?text=Hallo Go Ehajj, Saya ingin mengetahui / bertanya lebih lanjut tentang pelayanannya" target="_blank" class="btn btn-light d-inline-flex align-items-center gap-2 fw-semibold rounded p-2 px-3">
                    <i class="iconify" data-icon="logos:whatsapp-icon" data-inline="false"></i>
                    {{setting('site.whatsapp')}}
                </a>
            </div>
            <div class="col-lg-9">
                <div class="row">
                    @foreach ($values as $value)
                    <div class="col-md-4 mb-4">
                        <div class="py-5 px-4 rounded-4 d-flex flex-column gap-4 align-items-center" style="box-shadow: 3px 14px 50px 0px rgba(0, 0, 0, 0.09);">
                            <div class="position-relative">
                                <div class="p-3 rounded-3 d-inline-flex align-items-center justify-content-center bg-light color-green">
                                    <i class="iconify" data-icon="{{$value->iconify_id}}"></i>
                                </div>
                                <div class="d-inline-flex align-items-center jutify-content-center color-orange position-absolute top-0 end-0" style="margin-top: -0.3em; margin-right: -0.3em">
                                    <i class="iconify" data-icon="solar:verified-check-bold"></i>
                                </div>
                            </div>
                            <h6 class="color-green fw-semibold text-center">{{$value->title}}</h6>
                            <p class="text-secondary text-center">{{$value->desc}}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="container py-5">
        <div class="d-flex flex-column flex-lg-row align-items-center gap-4">
            <div class="embed-yt">
                <iframe link="{{setting('web.embed_link')}}" src="{{setting('web.embed_link')}}" allowfullscreen></iframe>
            </div>
            <div>
                <h4 class="fw-semibold">{{setting('web.embed_title')}}</h4>
                <hr class="divider">
                <p class="text-secondary">{{setting('web.embed_desc')}}</p>
                <a href="{{setting('web.embed_btn_link')}}" target="_blank" class="btn btn-light p-2 px-3">{{setting('web.embed_btn_text')}}</a>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container py-5" id="proses">
        <h2 class="mb-5 fw-semibold" style="max-width: 13em">{{setting('web.proses_title')}}</h2>
        <div class="steps-container">
            @foreach ($process as $proses)
            @if (!$loop->last)
            <div class="step">
                <div class="step-number">{{$loop->index+1}}</div>
                <div class="step-title">{{$proses->title}}</div>
                <div class="step-description">{{$proses->desc}}</div>
            </div>
            @else
            <div class="step">
                <div class="step-number color-orange-bg">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 54 54" fill="none">
                        <g clip-path="url(#clip0_40_70)">
                          <path d="M27 0L0 7.5V51L27 54L54 51V7.5L27 0Z" fill="black"/>
                          <path d="M27 54L54 51V7.5L27 0V54Z" fill="#292F33"/>
                          <path d="M33.681 21.7605V26.871L40.0245 27.789V22.83L33.681 21.7605ZM44.181 23.532V28.3905L49.1295 29.1075V24.366L44.181 23.532ZM27 20.634V25.9035L29.5245 26.2695V21.06L27 20.634ZM54 25.188L53.1915 25.0515V29.6955L54 29.8125V25.188Z" fill="#FFD983"/>
                          <path d="M0 25.188V29.8125L0.8085 29.6955V25.0515L0 25.188ZM24.4755 21.06V26.2695L27 25.9035V20.634L24.4755 21.06ZM4.8705 24.366V29.1075L9.819 28.3905V23.532L4.8705 24.366ZM13.9755 22.83V27.789L20.319 26.871V21.7605L13.9755 22.83Z" fill="#FFAC33"/>
                          <path d="M32.0834 22.6965V22.6335C32.0834 22.002 31.8689 21.489 31.6034 21.489C31.3379 21.489 31.1234 22.002 31.1234 22.6335V22.6965C30.8114 23.022 30.5909 23.628 30.5909 24.351C30.5909 25.1205 30.8339 25.7745 31.1804 26.079C31.2764 26.3715 31.4249 26.574 31.6034 26.574C31.7819 26.574 31.9304 26.3715 32.0264 26.079C32.3729 25.7745 32.6159 25.1205 32.6159 24.351C32.6144 23.628 32.3954 23.022 32.0834 22.6965ZM42.5819 24.3V24.237C42.5819 23.6055 42.3674 23.0925 42.1019 23.0925C41.8364 23.0925 41.6219 23.6055 41.6219 24.237V24.3C41.3099 24.6255 41.0894 25.2315 41.0894 25.9545C41.0894 26.724 41.3324 27.378 41.6789 27.6825C41.7749 27.975 41.9234 28.1775 42.1019 28.1775C42.2804 28.1775 42.4289 27.975 42.5249 27.6825C42.8714 27.378 43.1144 26.724 43.1144 25.9545C43.1144 25.233 42.8939 24.627 42.5819 24.3ZM51.6074 25.845V25.7865C51.6074 25.197 51.4064 24.7185 51.1589 24.7185C50.9114 24.7185 50.7104 25.197 50.7104 25.7865V25.845C50.4194 26.1495 50.2139 26.715 50.2139 27.39C50.2139 28.1085 50.4404 28.719 50.7644 29.004C50.8529 29.277 50.9924 29.466 51.1589 29.466C51.3254 29.466 51.4634 29.277 51.5534 29.004C51.8759 28.7205 52.1039 28.1085 52.1039 27.39C52.1039 26.715 51.8999 26.1495 51.6074 25.845Z" fill="#FFD983"/>
                          <path d="M21.9165 22.6964V22.6334C21.9165 22.0019 22.131 21.4889 22.3965 21.4889C22.662 21.4889 22.8765 22.0019 22.8765 22.6334V22.6964C23.1885 23.0219 23.409 23.6279 23.409 24.3509C23.409 25.1204 23.166 25.7744 22.8195 26.0789C22.7235 26.3714 22.575 26.5739 22.3965 26.5739C22.218 26.5739 22.0695 26.3714 21.9735 26.0789C21.627 25.7744 21.384 25.1204 21.384 24.3509C21.3855 23.6279 21.6045 23.0219 21.9165 22.6964ZM11.418 24.2999V24.2369C11.418 23.6054 11.6325 23.0924 11.898 23.0924C12.1635 23.0924 12.378 23.6054 12.378 24.2369V24.2999C12.69 24.6254 12.9105 25.2314 12.9105 25.9544C12.9105 26.7239 12.6675 27.3779 12.321 27.6824C12.225 27.9749 12.0765 28.1774 11.898 28.1774C11.7195 28.1774 11.571 27.9749 11.475 27.6824C11.1285 27.3779 10.8855 26.7239 10.8855 25.9544C10.8855 25.2329 11.106 24.6269 11.418 24.2999ZM2.3925 25.8449V25.7864C2.3925 25.1969 2.5935 24.7184 2.841 24.7184C3.0885 24.7184 3.2895 25.1969 3.2895 25.7864V25.8449C3.5805 26.1494 3.786 26.7149 3.786 27.3899C3.786 28.1084 3.5595 28.7189 3.2355 29.0039C3.147 29.2769 3.0075 29.4659 2.841 29.4659C2.6745 29.4659 2.535 29.2754 2.445 29.0039C2.1225 28.7204 1.8945 28.1084 1.8945 27.3899C1.896 26.7149 2.1 26.1494 2.3925 25.8449ZM0 16.7189V21.9689L27 17.0669V11.4209L0 16.7189Z" fill="#FFAC33"/>
                          <path d="M27 11.4209V17.0669L54 21.9689V16.7189L27 11.4209Z" fill="#FFD983"/>
                        </g>
                        <defs>
                          <clipPath id="clip0_40_70">
                            <rect width="54" height="54" fill="white"/>
                          </clipPath>
                        </defs>
                      </svg>
                </div>
                <div class="step-title">{{$proses->title}}</div>
                <div class="step-description">{{$proses->desc}}</div>
            </div>
            @endif
            @endforeach
        </div>
    </div>
</section>

<section class="color-green-bg text-white pb-5" id="harga">
    <div class="container py-5 mb-5 text-center">
        <h2 class="fw-semibold mb-3">{{setting('web.pkg_title')}}</h2>
        <p>{{setting('web.pkg_desc')}}</p>
    </div>
</section>

<section>
    <div class="container pb-5">
        {{-- <div class="owl-carousel owl-theme package-carousel" style="margin-top: -7em"> --}}
        <div class="package-box">
            @foreach ($packages as $pkg)
            <div class="bg-light border rounded-3 p-3" style="max-width: 40em; margin-top:2em;">
                <div class="" style="margin-top: -30%">
                    <div class="position-relative rounded-3 overflow-hidden mb-3">
                        <img src="{{strlen($pkg->image) > 3 ? Voyager::image($pkg->image) : 'https://placehold.co/720x480'}}" alt="Image Package" class="d-block w-100" style="aspect-ratio:16/9; object-fit:cover;">
                        <div class="p-2 px-3 fw-semibold d-inline-block position-absolute top-0 end-0 text-white {{$pkg->badge_bgcolor ?? 'color-orange-bg'}} text-uppercase" style="border-bottom-left-radius: 20px; background: {{$pkg->badge_bgcolor}} !important;">{{$pkg->badge}}</div>
                    </div>
                    <h5>{{$pkg->title}}</h5>
                    <div class="row mt-3 pb-3 border-bottom mb-3">
                        @foreach ($pkg->values as $pv)
                        <div class="mb-2 col-6">
                            <div class="d-flex align-items-center gap-2 text-secondary">
                                <div>
                                    <i class="iconify" data-icon="{{$pv->iconify_id}}"></i>
                                </div>
                                {{$pv->title}}
                            </div>
                        </div>
                        @endforeach
                    </div>
                    {{-- <div class="d-flex align-items-center gap-3 pt-3 border-top mt-3">
                        <div class="text-secondary">Jadwal Keberangkatan</div>
                        <div class="fw-semibold">01 July 2025</div>
                    </div> --}}
                    <div class="d-flex align-items-center gap-3 color-green fw-semibold">
                        <i class="iconify" data-icon="ph:seat-fill"></i>
                        {{$pkg->available_seat}} Pax / seat tersedia
                    </div>
                    <div class="d-flex align-items-center justify-content-between gap-3 mt-4">
                        <div>
                            <div class="fs-5 fw-semibold whitespace-nowrap">Rp {{$pkg->price_show}}</div>
                            <div class="text-secondary whitespace-nowrap"><del>Rp {{$pkg->price_coret}}</del></div>
                        </div>
                        <a href="https://wa.me/{{setting('site.whatsapp')}}?text=Hallo Go Ehajj, Saya tertarik dengan {{$pkg->title}} mohon arahannya" target="_blank" class="p-3 px-4 rounded-2 color-orange-bg color-dark text-decoration-none fw-semibold text-center">Daftar Sekarang</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="bg-light mt-4" id="faq">
    <div class="container py-5">
        <div class="row">
            <div class="col-md-4">
                <h2>{{setting('web.faq_title')}}</h2>
                <p>{{setting('web.faq_desc')}}</p>
            </div>
            <div class="col-md-8">
                <div class="faq-box">
                    @foreach ($faqs as $faq)
                    <div class="faq-item">
                        <div class="faq-header">
                            {{$faq->ask}}
                            <div>
                                <i class="iconify" data-icon="ph:plus-bold"></i>
                            </div>
                        </div>
                        <div class="faq-content">
                            <p>{{$faq->answer}}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<section id="article">
    <div class="container py-5">
        <div class="row">
            <div class="col-12 mb-4">
                <div class="d-flex align-items-center justify-content-between">
                    <h2 class="m-0">{{setting('web.article_title')}}</h2>
                    <a href="{{route('news')}}" class="btn btn-light p-3 px-4">Lihat Semua</a>
                </div>
            </div>
            <div class="col-12">
                <div class="news-carousel owl-carousel owl-theme">
                    @foreach ($articles as $atc)
                    <a href="{{route('news.show', $atc->slug)}}" class="d-block text-decoration-none text-dark" style="max-width: 23em">
                        <img src="{{strlen($atc->image) > 3 ? Voyager::image($atc->image) : 'https://placehold.co/720x480'}}" alt="Image News Thumbnail" class="d-block w-100 rounded-3 mb-3" style="aspect-ratio:16/9; object-fit:cover;">
                        <h6 class="fw-semibold text-capitalize">{{$atc->title}}</h6>
                        <div class="d-flex align-items-center gap-4 my-3 text-secondary" style="font-size: 14px !important">
                            <div class="d-flex align-items-center gap-2">
                                <i class="iconify" data-icon="fluent:person-48-filled"></i>
                                Go Ehajj
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <i class="iconify" data-icon="mingcute:time-fill"></i>
                                {{ \Carbon\Carbon::parse($atc->created_at)->format('d M y') }}
                            </div>
                        </div>
                        <p class="text-black-50" style="font-size: 14px">{{$atc->desc}}</p>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container py-5 border-top">
        <div class="col-12">
            <h2 class="text-center mb-4">{{setting('web.partner_title')}}</h2>
            <div class="d-flex align-items-center justify-content-center gap-2 flex-wrap mx-auto" style="max-width: 40em;">
                @foreach ($partners as $ptn)
                <div class="d-flex align-items-center justify-content-center p-2 border rounded-2">
                    <img src="{{strlen($ptn->image) ? Voyager::image($ptn->image) : 'https://placehold.co/300x150'}}" alt="Logo {{$ptn->title}}" title="{{$ptn->title}} Logo" class="d-block" style="max-height: 3em; object-fit:contain">
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection

@section('script')
<script>
    // Fungsi untuk mengupdate hitungan mundur
    function updateCountdown() {
        // Tanggal target dalam format DD-MM-YYYY
        let dateString = "{{setting('web.promo_end_date')}}"; // Biarkan kosong untuk menguji default

        let targetDate;
        const now = new Date();

        if (dateString) {
            // Pisahkan string tanggal untuk mendapatkan hari, bulan, dan tahun
            const [day, month, year] = dateString.split('-');

            // Buat objek Date dengan urutan tahun, bulan, dan hari
            // Perhatikan bahwa bulan dalam objek Date dimulai dari 0 (Januari = 0, Desember = 11)
            targetDate = new Date(year, month - 1, day, 23, 59, 59);
        } else {
            // Jika dateString kosong, tetapkan targetDate ke jam 18:00 pada hari ini
            targetDate = new Date(now.getFullYear(), now.getMonth(), now.getDate(), 22, 0, 0);

            // Jika sekarang sudah melewati target jam 18:00, tambahkan satu hari
            if (now >= targetDate) {
                targetDate.setDate(targetDate.getDate() + 1);
            }
        }

        // Hitung selisih waktu dalam milidetik
        const difference = targetDate - now;

        // Hitung hari, jam, menit, dan detik
        const days = Math.floor(difference / (1000 * 60 * 60 * 24));
        const hours = Math.floor((difference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((difference % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((difference % (1000 * 60)) / 1000);

        // Update elemen HTML
        document.getElementById('days').textContent = days.toString().padStart(2, '0');
        document.getElementById('hours').textContent = hours.toString().padStart(2, '0');
        document.getElementById('minutes').textContent = minutes.toString().padStart(2, '0');
        document.getElementById('seconds').textContent = seconds.toString().padStart(2, '0');
    }

    // Update hitungan mundur setiap detik
    setInterval(updateCountdown, 1000);

    // Panggil fungsi untuk inisialisasi tampilan
    updateCountdown();

    // Fungsi untuk memperbarui kelas active berdasarkan scroll
    function updateActiveMenu() {
        var scrollPos = $(document).scrollTop() + 100; // Offset untuk memastikan section terlihat
        $('.menu-box .menu-item').each(function () {
            var currLink = $(this);
            var href = currLink.attr("href");
            if (href.startsWith("#") && $(href).length) {
                var refElement = $(href);
                if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
                    $('.menu-box .menu-item').removeClass("active");
                    currLink.addClass("active");
                } else {
                    currLink.removeClass("active");
                }
            }
        });
    }

    // Panggil fungsi ketika halaman di-scroll
    $(document).on("scroll", updateActiveMenu);

    // Panggil fungsi ketika menu diklik untuk smooth scroll
    $('.menu-box .menu-item').on('click', function (event) {
        if (this.hash !== "") {
            event.preventDefault();
            var target = this.hash;
            var $target = $(target);
            $('html, body').stop().animate({
                'scrollTop': $target.offset().top - 50 // Offset untuk menghindari header yang tetap
            }, 500, 'swing', function () {
                window.location.hash = target;
            });
        }
    });

    // Memanggil fungsi pada halaman pertama kali dimuat
    updateActiveMenu();
</script>
@endsection