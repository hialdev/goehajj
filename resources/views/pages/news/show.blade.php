@extends('layouts.app')
@section('seo')
    @php
        $seo = \App\Models\Meta::all()->keyBy('page');
    @endphp
    @include('partials.seo', [
        'title' => $article->title ?? setting('seo.title'),
        'description' => $article->description ?? setting('seo.description'),
        'image' => strlen($article->image) > 2 ? Voyager::image($article->image) : Voyager::image(setting('seo.image')),
        'keywords' => $article->keywords ?? setting('seo.keywords'),
    ])
@endsection
@section('content')
<section>
    <div class="container py-5">
        <div class="row">
            <div class="col-12 mb-4">
                <div class="mb-3 d-inline-flex gap-3 align-items-center p-2 px-4 rounded-pill whitespace-nowrap bg-light">
                    <a href="{{route('news')}}" class="text-decoration-none color-orange">News</a>
                    <div>/</div>
                    <div>{{$article->title}}</div>
                </div>
                <div class="d-flex align-items-center gap-4 my-3 text-secondary" style="font-size: 14px !important">
                    <div class="d-flex align-items-center gap-2">
                        <i class="iconify" data-icon="fluent:person-48-filled"></i>
                        Go Ehajj
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <i class="iconify" data-icon="mingcute:time-fill"></i>
                        {{ \Carbon\Carbon::parse($article->created_at)->format('d M y') }}
                    </div>
                </div>
                <div>
                    <img src="{{ strlen($article->image) > 3 ? Voyager::image($article->image) : 'https://placehold.co/720x480'}}" alt="{{$article->title}} Image Thumbnail" class="d-block w-100 rounded-4">
                </div>
            </div>
            <div class="col-lg-8 mb-4">
                <div class="content">
                    {!! $article->content !!}
                </div>
            </div>
            <div class="col-lg-4">
                <div class="fs-5 fw-semibold mb-3 d-flex align-items-center gap-3"><span class="color-green fs-1">#</span> Lainnya Untukmu</div>
                <div class="p-3 rounded-4 bg-light">
                    <div class="d-flex flex-column flex-wrap gap-3">
                        @foreach ($article_suggests as $atc)
                        <a href="{{route('news.show', $atc->slug)}}" class="d-block text-decoration-none text-dark" style="max-width: 50em">
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
                        <a href="{{route('news')}}" class="btn btn-warning color-orange-bg fw-semibold">Lihat Semua</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection