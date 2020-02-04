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

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-156748060-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-156748060-1');
    </script>

    <!-- Smartsupp Live Chat script -->
    <script type="text/javascript">
        var _smartsupp = _smartsupp || {};
        _smartsupp.key = '61777d13efe36fa9151368e98452223bff944dbc';
        window.smartsupp||(function(d) {
        var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
        s=d.getElementsByTagName('script')[0];c=d.createElement('script');
        c.type='text/javascript';c.charset='utf-8';c.async=true;
        c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
        })(document);
        </script>
</head>
<body id="top">
    @include('flash::message')

    @yield('content')

    <script type="text/javascript" src="{{ mix('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ mix('js/setedco.js') }}"></script>
    <script>
        $('#flash-overlay-modal').modal();

        /*
         * Lazy Load - jQuery plugin for lazy loading images
         *
         * Copyright (c) 2007-2012 Mika Tuupola
         *
         * Licensed under the MIT license:
         *   http://www.opensource.org/licenses/mit-license.php
         *
         * Project home:
         *   http://www.appelsiini.net/projects/lazyload
         *
         * Version:  1.8.0
         *
         */
        (function($, window) {
            var $window = $(window);

            $.fn.lazyload = function(options) {
                var elements = this;
                var $container;
                var settings = {
                    threshold       : 0,
                    failure_limit   : 0,
                    event           : "scroll",
                    effect          : "show",
                    container       : window,
                    data_attribute  : "original",
                    skip_invisible  : true,
                    appear          : null,
                    load            : null
                };

                function update() {
                    var counter = 0;

                    elements.each(function() {
                        var $this = $(this);
                        if (settings.skip_invisible && !$this.is(":visible")) {
                            return;
                        }
                        if ($.abovethetop(this, settings) ||
                            $.leftofbegin(this, settings)) {
                                /* Nothing. */
                        } else if (!$.belowthefold(this, settings) &&
                            !$.rightoffold(this, settings)) {
                                $this.trigger("appear");
                        } else {
                            if (++counter > settings.failure_limit) {
                                return false;
                            }
                        }
                    });

                }

                if(options) {
                    /* Maintain BC for a couple of versions. */
                    if (undefined !== options.failurelimit) {
                        options.failure_limit = options.failurelimit;
                        delete options.failurelimit;
                    }
                    if (undefined !== options.effectspeed) {
                        options.effect_speed = options.effectspeed;
                        delete options.effectspeed;
                    }

                    $.extend(settings, options);
                }

                /* Cache container as jQuery as object. */
                $container = (settings.container === undefined ||
                              settings.container === window) ? $window : $(settings.container);

                /* Fire one scroll event per scroll. Not one scroll event per image. */
                if (0 === settings.event.indexOf("scroll")) {
                    $container.bind(settings.event, function(event) {
                        return update();
                    });
                }

                this.each(function() {
                    var self = this;
                    var $self = $(self);

                    self.loaded = false;

                    /* When appear is triggered load original image. */
                    $self.one("appear", function() {
                        if (!this.loaded) {
                            if (settings.appear) {
                                var elements_left = elements.length;
                                settings.appear.call(self, elements_left, settings);
                            }
                            var loadImgUri;
                            if($self.data("background"))
                                loadImgUri = $self.data("background");
                            else
                                loadImgUri  = $self.data(settings.data_attribute);

                            $("<img />")
                                .bind("load", function() {
                                    $self
                                        .hide();
                                    if($self.data("background")){
                                        $self.css('backgroundImage', 'url('+$self.data("background")+')');
                                    }else
                                        $self.attr("src", $self.data(settings.data_attribute))

                                    $self[settings.effect](settings.effect_speed);

                                    self.loaded = true;

                                    /* Remove image from array so it is not looped next time. */
                                    var temp = $.grep(elements, function(element) {
                                        return !element.loaded;
                                    });
                                    elements = $(temp);

                                    if (settings.load) {
                                        var elements_left = elements.length;
                                        settings.load.call(self, elements_left, settings);
                                    }
                                })
                                .attr("src", loadImgUri );
                        }

                    });

                    /* When wanted event is triggered load original image */
                    /* by triggering appear.                              */
                    if (0 !== settings.event.indexOf("scroll")) {
                        $self.bind(settings.event, function(event) {
                            if (!self.loaded) {
                                $self.trigger("appear");
                            }
                        });
                    }
                });

                /* Check if something appears when window is resized. */
                $window.bind("resize", function(event) {
                    update();
                });

                /* Force initial check if images should appear. */
                update();

                return this;
            };

            /* Convenience methods in jQuery namespace.           */
            /* Use as  $.belowthefold(element, {threshold : 100, container : window}) */

            $.belowthefold = function(element, settings) {
                var fold;

                if (settings.container === undefined || settings.container === window) {
                    fold = $window.height() + $window.scrollTop();
                } else {
                    fold = $(settings.container).offset().top + $(settings.container).height();
                }

                return fold <= $(element).offset().top - settings.threshold;
            };

            $.rightoffold = function(element, settings) {
                var fold;

                if (settings.container === undefined || settings.container === window) {
                    fold = $window.width() + $window.scrollLeft();
                } else {
                    fold = $(settings.container).offset().left + $(settings.container).width();
                }

                return fold <= $(element).offset().left - settings.threshold;
            };

            $.abovethetop = function(element, settings) {
                var fold;

                if (settings.container === undefined || settings.container === window) {
                    fold = $window.scrollTop();
                } else {
                    fold = $(settings.container).offset().top;
                }

                return fold >= $(element).offset().top + settings.threshold  + $(element).height();
            };

            $.leftofbegin = function(element, settings) {
                var fold;

                if (settings.container === undefined || settings.container === window) {
                    fold = $window.scrollLeft();
                } else {
                    fold = $(settings.container).offset().left;
                }

                return fold >= $(element).offset().left + settings.threshold + $(element).width();
            };

            $.inviewport = function(element, settings) {
                 return !$.rightofscreen(element, settings) && !$.leftofscreen(element, settings) &&
                        !$.belowthefold(element, settings) && !$.abovethetop(element, settings);
             };

            /* Custom selectors for your convenience.   */
            /* Use as $("img:below-the-fold").something() */

            $.extend($.expr[':'], {
                "below-the-fold" : function(a) { return $.belowthefold(a, {threshold : 0}); },
                "above-the-top"  : function(a) { return !$.belowthefold(a, {threshold : 0}); },
                "right-of-screen": function(a) { return $.rightoffold(a, {threshold : 0}); },
                "left-of-screen" : function(a) { return !$.rightoffold(a, {threshold : 0}); },
                "in-viewport"    : function(a) { return !$.inviewport(a, {threshold : 0}); },
                /* Maintain BC for couple of versions. */
                "above-the-fold" : function(a) { return !$.belowthefold(a, {threshold : 0}); },
                "right-of-fold"  : function(a) { return $.rightoffold(a, {threshold : 0}); },
                "left-of-fold"   : function(a) { return !$.rightoffold(a, {threshold : 0}); }
            });

        })(jQuery, window);

        $("#contact").lazyload();
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
</body>
</html>
