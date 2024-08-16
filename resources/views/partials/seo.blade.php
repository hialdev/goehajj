{{-- Default SEO Meta Tags --}}
<title>{{ $title ?? config('app.name') }}</title>
<meta name="description" content="{{ $description ?? 'Partner haji dan umroh terpercaya langsung berangkat' }}">
<meta name="keywords" content="{{ $keywords ?? 'haji, umroh, haji langsung berangkat' }}">
<meta name="author" content="{{ 'Tanur Mutmainnah' }}">
<meta name="robots" content="index">
<meta name="image" content="{{ $image ?? asset('/src/images/logo_green.png') }}">

{{-- Open Graph Meta Tags --}}
<meta property="og:title" content="{{ $title ?? config('app.name') }}">
<meta property="og:description" content="{{ $description ?? 'Partner haji dan umroh terpercaya langsung berangkat' }}">
<meta property="og:type" content="website">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:image" content="{{ $image ?? asset('/src/images/logo_green.png') }}">
<meta property="og:site_name" content="{{ config('app.name') }}">
<meta property="og:locale" content="{{ app()->getLocale() }}">

{{-- Twitter Card Meta Tags --}}
<meta name="twitter:card" content="{{ 'summary_large_image' }}">
<meta name="twitter:title" content="{{ $title ?? config('app.name') }}">
<meta name="twitter:description" content="{{ $description ?? 'Partner haji dan umroh terpercaya langsung berangkat' }}">
<meta name="twitter:image" content="{{ $image ?? asset('/src/images/logo_green.png') }}">

{{-- Additional Meta Tags --}}
<link rel="canonical" href="{{ url()->current() }}">
