@extends('layouts.app')
@section('seo')
    @php
        $seo = \App\Models\Meta::all()->keyBy('page');
    @endphp
    @include('partials.seo', [
        'title' => $seo->get('news')->title ?? setting('seo.title'),
        'description' => $seo->get('news')->description ?? setting('seo.description'),
        'image' => strlen($seo->get('news')->image) > 2 ? Voyager::image($seo->get('news')->image) : Voyager::image(setting('seo.image')),
        'keywords' => $seo->get('news')->keywords ?? setting('seo.keywords'),
    ])
@endsection
@section('content')
<section class="bg-light">
    <div class="container py-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1>{{setting('web.article_title')}}</h1>
                <p>Artikel dari Go Ehajj yang berguna untuk menambah wawasan islami terutama dalam berhaji dan umroh</p>
                <form action="{{route('news')}}">
                    <div class="d-flex align-items-center justify-content-center mx-auto" style="max-width: 35em">
                        <input type="text" name="q" class="form-control rounded-0" value="{{$q}}">
                        <button class="btn btn-dark rounded-0">Cari</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container py-5">
        <div class="row">
            @foreach ($articles as $atc)
            <div class="col-lg-3 col-md-4 col-sm-6">
                <a href="{{route('news.show', $atc->slug)}}" class="d-block text-decoration-none text-dark" style="max-width: 35em">
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
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection