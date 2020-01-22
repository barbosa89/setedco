<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }} - {{ config('app.fullname') }}</title>
    <link href="{{ asset('theme/images/icon.png') }}" rel="shortcut icon" type="image/x-icon">
    <link rel="canonical" href="{{ config('app.url') }}">

    <meta name="description" content="Description">
    <meta name="keywords" content="Keywords">
    <meta name="author" content="{{ config('app.name') }} - {{ config('app.fullname') }}">

    <meta property="og:title" content="{{ config('app.name') }} - {{ config('app.fullname') }}">
    <meta property="og:description" content="Description">
    <meta property="og:image" content="{{ asset('theme/images/logo.png') }}">
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ config('app.url') }}">
    <meta property="og:site_name" content="{{ config('app.name') }}">

    <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ mix('css/setedco.css') }}">
    @laravelPWA

    {!! htmlScriptTagJsApi() !!}
</head>
<body id="top">
    @include('flash::message')

    @yield('content')

    <script type="text/javascript" src="{{ mix('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ mix('js/setedco.js') }}"></script>
    <script>
        $('#flash-overlay-modal').modal();
    </script>
    <script type="application/ld+json" async>
        {
            "@context": "http://schema.org/",
            "@type": "WebSite",
            "name": "{{ config('app.name') }}",
            "alternateName": "{{ config('app.fullname') }}",
            "url": "{{ config('app.url') }}",
            "image": "{{ asset('theme/images/logo.png') }}",
            "description": "Description"
        }
    </script>
</body>
</html>
