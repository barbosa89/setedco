<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }} - {{ config('app.fullname') }}</title>
    <link href="{{ asset('theme/images/icon.png') }}" rel="shortcut icon" type="image/x-icon">
    <link rel="canonical" href="{{ config('app.url') }}">

    <meta name="description" content="CCTV, sistemas electrónicos de seguridad, telecomunicaciones, redes eléctricas, generadores de energía, automatización y control, energía solar fotovoltaica.">
    <meta name="keywords" content="CCTV, sistemas de seguridad, redes, telecomunicaciones, mantenimiento a computador, mantenimiento a impresoras, redes eléctricas, generadores de energía, energía solar fotovoltaica, instalaciones eléctricas,  tableros de distribución, sistemas puestas a tierra, transformadores eléctricos, variadores de velocidad,  motores eléctricos, plantas eléctricas, bombas, aires acondicionados, energía solar, tecnología, aliados, empresas, soluciones, eléctricas, clientes, red, resultados, seguridad, hogares, servicios, montaje, control, experiencia, proyectos, contacto, equipo">
    <meta name="author" content="{{ config('app.name') }} - {{ config('app.fullname') }}">

    <meta property="og:title" content="{{ config('app.name') }} - {{ config('app.fullname') }}">
    <meta property="og:description" content="CCTV, sistemas electrónicos de seguridad, telecomunicaciones, redes eléctricas, generadores de energía, automatización y control, energía solar fotovoltaica.">
    <meta property="og:image" content="{{ asset('theme/images/icons/icon-384x384.png') }}">
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
            "image": "{{ asset('theme/images/icon.png') }}",
            "description": "CCTV, sistemas electrónicos de seguridad, telecomunicaciones, redes eléctricas, generadores de energía, automatización y control, energía solar fotovoltaica."
        }
    </script>
    <script type="application/ld+json">
        {
          "@context" : "http://schema.org",
          "@type" : "Organization",
          "name" : "{{ config('app.name') }}",
         "url" : "{{ config('app.url') }}",
         "sameAs" : [
           "https://www.facebook.com/SETEDCO-INGENIERIA-557599321285008/",
           "https://www.instagram.com/setedco_ingenieria/"
           ],
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "Bucaramanga",
            "addressRegion": "BGA",
            "postalCode": "680001",
            "addressCountry": "CO"
          }
        }
        </script>
    <!-- Smartsupp Live Chat script -->
    <script type="text/javascript" async>
        var _smartsupp = _smartsupp || {};
        _smartsupp.key = 'b6c8cbd0463a1ce3dd8eb090848092ffc042f103';
        window.smartsupp||(function(d) {
        var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
        s=d.getElementsByTagName('script')[0];c=d.createElement('script');
        c.type='text/javascript';c.charset='utf-8';c.async=true;
        c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
        })(document);
    </script>
</body>
</html>
