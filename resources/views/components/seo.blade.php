<title>{{ $title ?? 'Fortune Tech Services' }}</title>

<meta name="description" content="{{ $description ?? 'Default description' }}">
<meta name="keywords" content="{{ $keywords ?? '' }}">
<meta name="author" content="Fortune Tech Services">

{{-- Open Graph --}}
<meta property="og:title" content="{{ $title ?? '' }}">
<meta property="og:description" content="{{ $description ?? '' }}">
<meta property="og:type" content="article">
<meta property="og:url" content="{{ url()->current() }}">

{{-- Twitter --}}
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ $title ?? '' }}">
<meta name="twitter:description" content="{{ $description ?? '' }}">
