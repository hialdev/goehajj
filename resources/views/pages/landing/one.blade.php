@extends('layouts.land')
@section('seo')
    @php
        $seo = \App\Models\Meta::all()->keyBy('page');
    @endphp
    @include('partials.seo', [
        'title' => $lp->title ?? setting('seo.title'),
        'description' => $lp->desc ?? setting('seo.description'),
        'image' => strlen($lp->image) > 2 ? Voyager::image($lp->image) : Voyager::image(setting('seo.image')),
        'keywords' => $lp->key ?? setting('seo.keywords'),
    ])
@endsection
@section('content')
<header class="py-3" style="">
    <div class="container">
        <a href="{{route('home')}}" class="d-block">
            <img src="{{Voyager::image(setting('site.logo'))}}" alt="Logo GO Ehajj" class="d-block mx-auto p-2 px-5 rounded-pill " style="height: 4em;background:#e3f1ecc7;">
        </a>
    </div>
</header>
<main>
    <section>
        <div class="container pt-3">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1 class="mb-3 fw-semibold">{{$jumbo->title}}</h1>
                    <p class="mb-3">{{$jumbo->desc}}</p>
                    <a href="{{url($jumbo->btn_link)}}" class="btn btn-orange">{{$jumbo->btn_text}}</a>
                    <div class="my-3">
                        <img src="{{Voyager::image(setting('landing-page.image_certificate'))}}" alt="Certificate Go Ehajj" class="d-block w-100">
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="{{Voyager::image($jumbo->image)}}" alt="Hero {{$jumbo->title}} Image" class="d-block w-100">
                </div>
            </div>
        </div>
    </section>
    <section class="color-green-bg promo" id="why">
        <div class="container py-3">
            <div class="row">
                <div class="col-lg-5 mb-3 mb-lg-0">
                    <div class="d-flex align-items-center gap-3">
                        <h4 class="promo-title text-white text-capitalize mb-0">{{setting('landing-page.promo_title')}}</h4>
                        <div class="promo-disc fs-1 color-orange fw-semibold ff-nova">{{setting('landing-page.promo_number')}}</div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="promo-box landing d-flex align-items-center gap-3 justify-content-between text-white flex-wrap">
                        <div class="promo-desc">Promo berakhir dalam</div>
                        <div class="promo-countdown d-flex align-items-center gap-2">
                            <div class="p-2 d-flex align-items-center rounded color-green bg-white"><span id="days">23</span> d</div>
                            <div class="p-2 d-flex align-items-center rounded color-green bg-white"><span id="hours">04</span> h</div>
                            <div class="p-2 d-flex align-items-center rounded color-green bg-white"><span id="minutes">50</span> m</div>
                            <div class="p-2 d-flex align-items-center rounded color-green bg-white"><span id="seconds">50</span> s</div>
                        </div>
                        <a href="" class="btn btn-orange promo-btn fw-bold">Daftar</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container py-5">
            <div class="d-flex flex-column-reverse align-items-center gap-4">
                <div class="embed-yt landing" style="max-width: 50em;">
                    <iframe src="{{setting('landing-page.embed_link')}}" allowfullscreen></iframe>
                </div>
                <div class="text-center">
                    <h4 class="fw-semibold">{{setting('landing-page.embed_title')}}</h4>
                    <p class="text-secondary">{{setting('landing-page.embed_desc')}}</p>
                </div>
            </div>
        </div>
    </section>
    <section class="color-green-bg text-white pb-5" id="harga">
        <div class="container py-5 text-center">
            <div class="d-inline-block mx-auto mb-3 fw-bold text-white p-2 px-3 rounded-3" style="background: #F44721">
                {{setting('landing-page.pbm_title')}}
            </div>
            <h2 class="fw-semibold mb-3">{{setting('landing-page.pkg_title')}}</h2>
            <p>{{setting('landing-page.pkg_desc')}}</p>
        </div>
        
    </section>
    <section>
        <div class="container" style="margin-top: -4em">
            @foreach ($packages as $pkg)
            <div class="package-land-item p-4 rounded-3 bg-light border mb-4">
                <div class="d-flex flex-column flex-md-row align-items-center gap-4">
                    <div class="">
                        <img src="{{strlen($pkg->image) ? Voyager::image($pkg->image) : 'https://placehold.co/720x480'}}" alt="Image Package Item" class="d-block w-100 rounded-2 mb-3" style="aspect-ratio:16/9; max-width:40em;object-fit:cover;">
                        <div class="d-flex align-items-center gap-3 fw-bold color-green">
                            <i class="iconify" data-icon="fluent:person-48-filled"></i>
                            Available Seat {{$pkg->available_seat}} Pax
                        </div>
                    </div>
                    <div class="">
                        <div class="p-3 px-4 fw-bold mb-4 {{$pkg->badge_bgcolor ?? 'color-orange-bg'}} text-white text-uppercase rounded-pill d-inline-block" style="background: {{$pkg->badge_bgcolor}} !important;">{{$pkg->badge}}</div>
                        <div class="row mt-3 pb-4">
                            @foreach ($pkg->values as $val)
                            <div class="mb-2 col-6">
                                <div class="d-flex align-items-center gap-2 text-secondary">
                                    <div>
                                        <i class="iconify" data-icon="{{$val->iconify_id}}"></i>
                                    </div>
                                    {{$val->title}}
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="d-flex align-items-center justify-content-between gap-3 pt-4 border-top">
                            <div class="fs-3 whitespace-nowrap fw-bold text-dark">
                                Rp {{$pkg->price_show}}
                                <div class="fs-6 text-secondary"><del>Rp {{$pkg->price_coret}}</del></div>
                            </div>
                            <a href="" class="color-orange-bg text-dark fw-bold p-3 px-4 rounded-3 text-decoration-none">Daftar Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
    <section>
        <div class="container py-5">
            <h3 class="fw-semibold text-center mb-5">{{setting('landing-page.partner_title')}}</h3>
            <img src="{{Voyager::image(setting('landing-page.partner_img'))}}" alt="Partner Image" class="d-block mx-auto w-100" style="max-width: 40em">
        </div>
    </section>
    <section>
        <div class="container py-5 mt-5">
            <div class="d-flex align-items-center gap-4 color-green-bg rounded-4 text-white pt-3 pe-4 position-relative">
                <img src="{{Voyager::image(setting('landing-page.ust_img'))}}" alt="{{setting('landing-page.ust_name')}} Pembimbing Foto" class="d-block rounded-4 position-relative" style="z-index:10;margin-top:-6em;max-width: 15em">
                <div class="position-relative" style="z-index: 2">
                    <div>{{setting('landing-page.ust_text')}}</div>
                    <div class="fs-4 fw-bold">{{setting('landing-page.ust_name')}}</div>
                </div>
                <div class="position-absolute top-0 end-0 overflow-hidden" style="z-index: 0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="255" height="157" viewBox="0 0 255 157" fill="none">
                        <path d="M201.489 59.0591C202.58 59.8329 203.794 60.4688 204.731 61.3957C211.286 67.8309 217.763 74.3504 224.325 80.7857C226.115 82.54 226.768 84.394 226.392 86.9451C225.024 96.2991 223.864 105.676 222.619 115.053C222.073 119.159 220.936 120.301 216.849 120.845C207.259 122.124 197.67 123.365 188.096 124.714C185.661 125.058 183.878 124.223 182.203 122.538C175.457 115.75 168.641 109.032 161.841 102.298C161.188 101.646 160.497 101.041 159.475 100.091C159.398 101.432 159.298 102.328 159.298 103.232C159.29 112.119 159.237 121.006 159.321 129.893C159.344 132.497 158.507 134.435 156.463 136.09C148.664 142.434 140.965 148.884 133.197 155.266C130.362 157.595 128.633 157.572 125.798 155.235C118.045 148.846 110.338 142.395 102.531 136.06C100.48 134.397 99.6732 132.459 99.6962 129.862C99.7807 120.125 99.727 110.388 99.727 100.091C98.7511 100.919 98.1134 101.394 97.5525 101.945C91.0906 108.342 84.5979 114.708 78.2205 121.182C76.2996 123.136 74.248 123.756 71.5203 123.473C61.9004 122.469 52.2575 121.649 42.6145 120.837C38.2349 120.47 36.8672 119.297 36.4599 114.908C35.5379 104.918 34.5467 94.9355 33.8936 84.9303C33.7784 83.2142 34.7695 80.9848 35.9989 79.6978C42.2227 73.209 48.6923 66.9499 55.0697 60.6066C55.7382 59.9478 56.3605 59.243 57.5285 57.9866C55.8842 57.9866 54.8853 57.9866 53.8864 57.9866C44.9734 57.9866 36.0604 57.933 27.1474 58.0172C24.5273 58.0402 22.6448 57.1592 20.9774 55.1214C14.7844 47.583 8.46079 40.1518 2.19095 32.6747C-0.751878 29.166 -0.736511 27.8023 2.27547 24.217C8.54531 16.7399 14.8689 9.30874 21.0619 1.77033C22.6678 -0.183212 24.4735 -1.0489 26.986 -1.02592C35.899 -0.949303 44.812 -0.995277 53.7251 -0.995277C54.747 -0.995277 55.7689 -0.995277 57.4286 -0.995277C56.4527 -2.09846 55.9533 -2.72665 55.3847 -3.29356C48.9382 -9.7058 42.5223 -16.1487 36.0143 -22.4996C34.2163 -24.254 33.5632 -26.1156 33.8168 -28.6437C34.7849 -38.2429 35.5686 -47.8575 36.4138 -57.4643C36.8441 -62.3903 38.0658 -63.4552 43.0218 -63.8613C52.3804 -64.6274 61.7391 -65.3781 71.067 -66.4353C74.2711 -66.7954 76.5301 -65.9757 78.7199 -63.7004C85.3509 -56.8055 92.1355 -50.0638 99.5425 -42.5637C99.6347 -44.4177 99.7193 -45.3677 99.7193 -46.3253C99.727 -55.3116 99.8653 -64.2903 99.6578 -73.2689C99.5733 -76.9845 100.71 -79.4973 103.792 -81.7037C111.252 -87.0587 118.475 -92.7508 125.805 -98.2897C128.817 -100.565 130.185 -100.58 133.243 -98.2744C140.888 -92.5133 148.48 -86.691 156.163 -80.9835C158.361 -79.3518 159.344 -77.4135 159.321 -74.6632C159.229 -65.3015 159.283 -55.9321 159.283 -46.5704C159.283 -45.5668 159.283 -44.5633 159.283 -42.9238C160.458 -44.0117 161.142 -44.6169 161.795 -45.2604C168.657 -52.071 175.534 -58.8586 182.357 -65.7076C183.97 -67.324 185.714 -68.0441 188.027 -67.7224C197.701 -66.3817 207.382 -65.1177 217.064 -63.8229C220.829 -63.3173 222.035 -62.1758 222.55 -58.399C223.879 -48.6542 225.301 -38.9171 226.345 -29.1417C226.522 -27.4716 225.485 -25.1963 224.256 -23.9246C217.617 -17.0297 210.748 -10.3646 203.963 -3.62299C203.295 -2.96414 202.672 -2.25934 201.474 -0.995277C203.126 -0.995277 204.117 -0.995277 205.108 -0.995277C214.597 -0.995277 224.087 -0.933983 233.576 -1.03357C236.327 -1.06422 238.232 -0.106598 239.892 2.10742C245.57 9.68413 251.417 17.1306 257.172 24.646C259.6 27.81 259.608 29.1583 257.203 32.2917C251.386 39.8837 245.493 47.4144 239.746 55.0601C238.14 57.1975 236.25 58.0325 233.63 58.0172C224.14 57.9406 214.651 57.9866 205.162 57.9866C204.147 57.9866 203.141 57.9866 202.127 57.9866C201.935 58.3313 201.712 58.6991 201.489 59.0591ZM178.899 48.8087C173.029 42.9328 167.819 37.731 162.625 32.5062C159.698 29.5644 159.713 27.381 162.664 24.4162C165.23 21.8421 167.789 19.2604 170.409 16.7399C173.121 14.1275 175.91 11.5917 178.669 9.01762C178.492 8.72651 178.307 8.44305 178.131 8.15193C177.116 8.15193 176.102 8.15193 175.088 8.15193C168.672 8.15193 162.249 8.19023 155.833 8.1366C151.63 8.0983 150.162 6.57377 150.124 2.39088C150.101 -0.282806 150.116 -2.95648 150.116 -5.63017C150.116 -10.3646 150.116 -15.0991 150.116 -20.4925C148.941 -19.4276 148.249 -18.853 147.604 -18.2171C142.978 -13.6435 138.376 -9.04696 133.735 -4.48868C130.661 -1.46259 128.433 -1.45493 125.398 -4.44271C120.626 -9.14655 115.893 -13.8734 111.122 -18.5772C110.576 -19.1135 109.938 -19.5578 108.955 -20.3546C108.955 -12.4025 108.97 -5.05559 108.947 2.29129C108.932 6.61974 107.441 8.12128 103.054 8.15193C96.6381 8.1979 90.2146 8.15959 83.7988 8.17491C82.8153 8.17491 81.8318 8.26685 80.3027 8.3358C85.9656 13.9896 91.1674 19.1608 96.3462 24.3626C99.4042 27.4346 99.3966 29.572 96.3001 32.6671C91.6361 37.3326 86.9337 41.9675 82.2621 46.633C81.7165 47.1769 81.2478 47.8051 80.3873 48.8164C86.7647 48.8164 92.5043 48.8164 98.244 48.8164C108.963 48.8164 108.963 48.8164 108.963 59.3349C108.963 64.3988 108.955 69.4627 108.97 74.519C108.97 75.3157 109.086 76.1201 109.216 77.9281C115.033 71.9909 120.212 66.6512 125.452 61.3727C128.356 58.4462 130.669 58.4463 133.581 61.2961C138.36 65.9846 143.093 70.7191 147.857 75.423C148.426 75.9822 149.071 76.4572 150.116 77.3459C150.116 69.4398 150.101 62.1159 150.124 54.792C150.139 50.2796 151.584 48.8547 156.179 48.8164C160.105 48.7858 164.031 48.8087 167.965 48.8087C171.354 48.8087 174.758 48.8087 178.899 48.8087ZM129.539 -89.6251C122.962 -84.6302 116.6 -79.8804 110.353 -74.9697C109.562 -74.3491 109.016 -72.9242 109.009 -71.867C108.917 -59.8239 108.901 -47.7809 109.024 -35.7455C109.04 -34.5044 109.769 -33.0105 110.645 -32.0912C114.679 -27.87 118.928 -23.8633 123.001 -19.6804C125.114 -17.5123 127.019 -15.1451 129.301 -12.5404C136.332 -19.6881 142.671 -26.0696 148.91 -32.5432C149.601 -33.2633 150.055 -34.5274 150.062 -35.5463C150.139 -47.6813 150.139 -59.8239 150.062 -71.9589C150.055 -72.9548 149.609 -74.3032 148.879 -74.8701C142.556 -79.8191 136.124 -84.6302 129.539 -89.6251ZM159.306 -1.38599C159.913 -1.20978 160.182 -1.05656 160.451 -1.05656C169.256 -1.03358 178.062 -0.98761 186.867 -1.07188C187.774 -1.07954 188.872 -1.69242 189.549 -2.35892C198.346 -10.9928 207.106 -19.6727 215.796 -28.4216C216.48 -29.1111 216.964 -30.4364 216.856 -31.394C215.996 -38.6873 215.012 -45.9652 213.929 -53.2202C213.813 -53.9709 212.822 -55.0588 212.108 -55.166C204.824 -56.2539 197.524 -57.2498 190.209 -58.0542C189.018 -58.1845 187.382 -57.5793 186.514 -56.7289C177.885 -48.3325 169.333 -39.8441 160.873 -31.2791C159.997 -30.3904 159.421 -28.8429 159.375 -27.5789C159.206 -22.5226 159.306 -17.4664 159.306 -12.4025C159.306 -8.70222 159.306 -5.00963 159.306 -1.38599ZM159.314 57.9713C159.314 67.5015 159.267 76.5568 159.39 85.6121C159.406 86.562 160.266 87.6652 161.019 88.416C169.394 96.8048 177.854 105.102 186.199 113.513C187.566 114.892 188.88 115.344 190.74 115.076C197.647 114.08 204.562 113.107 211.501 112.303C213.329 112.088 213.883 111.376 214.09 109.675C214.928 102.865 215.857 96.0616 216.856 89.2664C217.125 87.4124 216.733 86.0871 215.327 84.7234C207.79 77.3918 200.19 70.1139 192.975 62.4759C189.764 59.0744 186.491 57.5882 181.765 57.8564C174.427 58.2777 167.059 57.9713 159.314 57.9713ZM129.555 146.379C136.217 140.863 142.717 135.539 149.117 130.099C149.763 129.548 150.07 128.276 150.078 127.341C150.139 115.781 150.162 104.228 150.055 92.6678C150.047 91.5034 149.432 90.0631 148.618 89.2204C143.9 84.3404 138.99 79.6365 134.234 74.7948C132.72 73.2549 131.468 71.4546 129.831 69.4397C122.732 76.6564 116.4 83.0303 110.169 89.5115C109.477 90.2316 109.016 91.4957 109.009 92.507C108.932 104.159 108.924 115.812 109.016 127.464C109.024 128.452 109.539 129.755 110.269 130.375C116.531 135.692 122.908 140.894 129.555 146.379ZM248.582 28.4765C243.541 21.934 238.685 15.5448 233.676 9.2781C233.107 8.56563 231.701 8.20557 230.679 8.20557C218.6 8.13661 206.529 8.10597 194.451 8.22855C193.106 8.24387 191.462 8.92569 190.486 9.85267C184.877 15.2 179.422 20.7083 173.92 26.1706C173.198 26.8907 172.522 27.6568 171.907 28.3156C178.523 35.0266 184.931 41.5844 191.439 48.0426C192.007 48.6019 193.175 48.7628 194.067 48.7628C206.337 48.8087 218.6 48.8317 230.871 48.7321C231.931 48.7245 233.338 48.1116 233.975 47.2995C238.87 41.1861 243.603 34.9347 248.582 28.4765ZM99.7423 -1.02592C99.7423 -10.6175 99.7807 -19.7723 99.6809 -28.9349C99.6732 -29.7239 98.9202 -30.6356 98.2901 -31.2715C90.1685 -39.3844 82.0469 -47.4974 73.8024 -55.4878C72.865 -56.3918 71.1592 -57.043 69.8607 -56.9587C62.5075 -56.4991 55.1696 -55.7253 47.8163 -55.1814C46.0184 -55.0435 45.3883 -54.3233 45.2423 -52.5843C44.6353 -45.1608 43.8593 -37.7526 43.3214 -30.3292C43.2446 -29.2873 43.8209 -27.893 44.5815 -27.1345C52.7953 -18.8454 61.1013 -10.6404 69.4227 -2.45852C70.0605 -1.83032 70.9902 -1.11019 71.7893 -1.10253C80.9635 -0.987617 90.1455 -1.02592 99.7423 -1.02592ZM99.7577 58.2241C98.9586 58.1092 98.4976 57.9866 98.0366 57.9866C89.5077 57.9713 80.9789 57.91 72.4578 58.0479C71.3129 58.0632 69.9606 58.8983 69.0923 59.7486C62.5766 66.0842 56.4451 72.8489 49.6066 78.8015C44.5969 83.1606 42.3379 87.6269 43.744 94.3456C44.9273 99.9994 44.9734 105.883 45.542 111.843C54.2475 112.609 62.7226 113.391 71.213 114.027C71.9737 114.08 72.9495 113.36 73.5796 112.74C81.8318 104.619 90.0763 96.4907 98.2056 88.2551C99.0815 87.3664 99.6655 85.8113 99.7039 84.5472C99.8653 79.1079 99.7731 73.6609 99.7731 68.214C99.7577 64.9045 99.7577 61.5949 99.7577 58.2241ZM10.7044 28.4765C16.2366 35.0726 21.5383 41.4619 26.963 47.7592C27.5239 48.4104 28.784 48.7551 29.7291 48.7628C41.5158 48.8317 53.2948 48.8394 65.0815 48.7475C66.1725 48.7398 67.5172 48.1652 68.3086 47.3991C74.2941 41.6151 80.1721 35.7238 86.0655 29.8478C86.5034 29.4111 86.8261 28.8442 87.1488 28.4152C80.6639 21.8957 74.3402 15.5065 67.9475 9.18616C67.3481 8.59628 66.2801 8.20557 65.4195 8.20557C53.4408 8.14428 41.4697 8.14428 29.4909 8.20557C28.638 8.21323 27.5085 8.55797 26.9937 9.16319C21.5844 15.4682 16.2674 21.8574 10.7044 28.4765Z" fill="#0F5F38"/>
                    </svg>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container py-5">
            <div class="p-4 p-md-5 rounded-4 text-dark mx-auto" style="background: #F4A121; width:fit-content">
                <div class="d-inline-flex align-items-center justify-content-between gap-3">
                    <div class="" style="">
                        <div class="fw-bold fs-3 mb-2">{{setting('landing-page.recall_title')}}</div>
                        <div class="p-2 px-3 text-white rounded-2" style="background:#8E611C; max-width:17em">
                            {!! setting('landing-page.recall_content1') !!}
                        </div>
                    </div>
                    <div>
                        <div class="h-100" style="width: 2px; background:#212121;"></div>
                    </div>
                    <div class="">
                        {!! setting('landing-page.recall_content2') !!}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container py-5">
            <div class="text-center">
                <div class="fs-4 text-danger mb-3 text-uppercase fw-bold">{{setting('landing-page.pay_title')}}</div>
                <div class="text-secondary">
                    Melalui Transfer a/n {{setting('landing-page.rek_name')}}<br />
                    <div class="d-inline-flex align-items-center gap-3 justify-content-between border p-3 rounded-2 my-2">
                        <img src="{{Voyager::image(setting('landing-page.rek_logo'))}}" alt="BCA Bank Logo" class="d-block" style="height: 2em;">
                        <div class="fs-4 fw-bold text-dark">{{setting('landing-page.rek_no')}}</div>
                    </div><br />
                    
                    Note: Harga Sewaktu-waktu dapat berubah dan menyesuaikan dengan perubahan kurs dolar dan riyal terhadap rupiah
                </div>
            </div>
        </div>
    </section>
</main>
<footer class="color-green-bg">
    <div class="container py-5">
        <div class="row text-white">
            <div class="col-12 col-lg-8 mb-4">
                <img src="{{Voyager::image(setting('site.white_logo'))}}" alt="Logo Footer" class="d-block mb-4" style="filter: brightness(100)">
                <p>{{setting('site.desc_footer')}}</p>
                <img src="/src/images/mabrur.png" alt="Mabrur" class="d-block p-2 px-4 rounded-3 bg-white" style="max-height: 5em">
            </div>
            <div class="col-lg-4 mb-4">
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

@endsection

@section('script')
<script>
    // Fungsi untuk mengupdate hitungan mundur
    function updateCountdown() {
        // Tanggal target dalam format DD-MM-YYYY
        let dateString = "{{setting('landing-page.promo_end_date')}}"; // Biarkan kosong untuk menguji default

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
</script>
@endsection

