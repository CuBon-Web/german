<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8" />
    <meta name="theme-color" content="#d70018">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests" />
    <meta name='revisit-after' content='2 days' />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

    <title>@yield('title')</title>
    <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
    <meta http-equiv="Content-Language" content="vi" />
    <link rel="alternate" href="{{ url()->current() }}" hreflang="vi-vn" />
    <meta name="description" content="@yield('description')">
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow">
    <meta name="revisit-after" content="1 days" />
    <meta name="generator" content="@yield('title')" />
    <meta name="rating" content="General">
    <meta name="application-name" content="@yield('title')" />
    <meta name="theme-color" content="#ed3235" />
    <meta name="msapplication-TileColor" content="#ed3235" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-title" content="{{ url()->current() }}" />
    <link rel="apple-touch-icon-precomposed" href="@yield('image')" sizes="700x700">
    <meta property="og:url" content="">
    <meta property="og:title" content="@yield('title')">
    <meta property="og:description" content="@yield('description')">
    <meta property="og:image" content="@yield('image')">
    <meta property="og:site_name" content="{{ url()->current() }}">
    <meta property="og:image:alt" content="@yield('title')">
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="vi_VN" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@{{ url() - > current() }}" />
    <meta name="twitter:title" content="@yield('title')" />
    <meta name="twitter:description" content="@yield('description')" />
    <meta name="twitter:image" content="@yield('image')" />
    <meta name="twitter:url" content="" />
    <meta itemprop="name" content="@yield('title')">
    <meta itemprop="description" content="@yield('description')">
    <meta itemprop="image" content="@yield('image')">
    <meta itemprop="url" content="">
    <link rel="canonical" href="{{ \Request::url() }}">
    <!-- <link rel="amphtml" href="amp/" /> -->
    <link rel="image_src" href="@yield('image')" />
    <link rel="image_src" href="@yield('image')" />
    <link rel="shortcut icon" href="{{ url('' . $setting->favicon) }}" type="image/x-icon">
    <link rel="icon" href="{{ url('' . $setting->favicon) }}" type="image/x-icon">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="preload" as="script" href="{{ asset('frontend/js/jquery.js') }}" />
    <script src="{{ asset('frontend/js/jquery.js') }}" type="text/javascript"></script>
    <link rel="preload" as="script" href="{{ asset('frontend/js/swiper.js') }}" />
    <script src="{{ asset('frontend/js/swiper.js') }}" type="text/javascript"></script>
    <link rel="preload" as="script" href="{{ asset('frontend/js/lazy.js') }}" />
    <script src="{{ asset('frontend/js/lazy.js') }}" type="text/javascript"></script>
    <meta name="p:domain_verify" content="83c3f3fa3904fe295ae75c9e37e19338"/>
    {{-- <link rel="preload" as='style' type="text/css" href="{{asset('frontend/css/fonts.scss.css')}}"> --}}
    <link rel="preload" as='style' type="text/css" href="{{ asset('frontend/css/main.scss.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">

    <link rel="preload" as='style' type="text/css" href="{{ asset('frontend/css/bootstrap-4-3-min.css') }}">
    <!-- <link rel="preload" as='style'  type="text/css" href="https://bizweb.dktcdn.net/100/506/650/themes/944598/assets/quickviews_popup_cart.scss.css?1713594904727"> -->
    <style>
        :root {
            --mainColor: #565656;
            --subColor: #e91c23;
            --textColor: #333333;
            --hover: #ed1b24;
            --price: #e91c23;
        }
    </style>
    <link href="{{ asset('frontend/css/fonts.scss.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap-4-3-min.css') }}">
    <link href="{{ asset('frontend/css/main.scss.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('frontend/css/notify.css') }}" rel="stylesheet" type="text/css" media="all" />
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
    @yield('css')
    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'vi',
                includedLanguages: 'en,hi,vi,zh-CN',
            }, 'translate_select');
        }
    </script>
    <style>
        .VIpgJd-ZVi9od-aZ2wEe-wOHMyf-ti6hGc {
            display: none;
        }

        .skiptranslate {
            display: none;
            top: 0;
        }

        .goog-te-banner-frame {
            display: none !important;
        }

        .goog-text-highlight {
            background: none !important;
            box-shadow: none !important;
        }

        .goog-te-banner-frame.skiptranslate {
            display: none !important;
        }

        body {
            position: revert !important;
            top: 0px !important;
        }
    </style>
    <script>
        (function() {
            function asyncLoad() {
                var urls = [];
                for (var i = 0; i < urls.length; i++) {
                    var s = document.createElement('script');
                    s.type = 'text/javascript';
                    s.async = true;
                    s.src = urls[i];
                    var x = document.getElementsByTagName('script')[0];
                    x.parentNode.insertBefore(s, x);
                }
            };
            window.attachEvent ? window.attachEvent('onload', asyncLoad) : window.addEventListener('load', asyncLoad,
                false);
        })();
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            awe_lazyloadImage();
            /*Header promotion*/




        });

        function awe_lazyloadImage() {
            var ll = new LazyLoad({
                elements_selector: ".lazyload",
                load_delay: 100,
                threshold: 0
            });
        }
        window.awe_lazyloadImage = awe_lazyloadImage;
    </script>
    <!-- Google tag (gtag.js) -->
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-LF00L96RQX"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-LF00L96RQX');
    </script>
    <!-- Google Tag Manager -->
   <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
   new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
   j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
   'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
   })(window,document,'script','dataLayer','GTM-M6MKH8G9');</script>
   <!-- End Google Tag Manager -->
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-NNFKJJ9T');
    </script>
    <!-- End Google Tag Manager -->
    <meta name="google-site-verification" content="4FXMGTpqDlQOQ2nz-nsAM0pQ5U9UcOcipi3fXDEMxLc" />
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
   <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M6MKH8G9"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div id="translate_select"></div>
    <div class="opacity_menu"></div>
    @include('layouts.header.index')
    <div class="bodywrap">
        @yield('content')

        @include('layouts.footer.index')
    </div>
    <div class="backdrop__body-backdrop___1rvky"></div>
    @if (Session::has('success'))
        <div class="lobibox-notify-wrapper top right">
            <div class="lobibox-notify lobibox-notify-success animated-fast fadeInDown without-icon notify-mini"
                style="width: 368px;">
                <div class="lobibox-notify-icon-wrapper">
                    <div class="lobibox-notify-icon">
                        <div></div>
                    </div>
                </div>
                <div class="lobibox-notify-body">
                    <div class="lobibox-notify-msg" style="max-height: 32px;">{{ Session::get('success') }}</div>
                </div>
                <span class="lobibox-close" onclick="$('.lobibox-notify-wrapper').remove()">×</span>
            </div>
        </div>
    @endif
    @if (Session::has('error'))
        <div class="lobibox-notify-wrapper top right">
            <div class="lobibox-notify lobibox-notify-error animated-fast fadeInDown without-icon notify-mini"
                style="width: 368px;">
                <div class="lobibox-notify-icon-wrapper">
                    <div class="lobibox-notify-icon">
                        <div></div>
                    </div>
                </div>
                <div class="lobibox-notify-body">
                    <div class="lobibox-notify-msg" style="max-height: 32px;">{{ Session::get('error') }}</div>
                </div>
                <span class="lobibox-close" onclick="$('.lobibox-notify-wrapper').remove()">×</span>
            </div>
        </div>
    @endif
    <div class="notify bar-top do-show">
    </div>
    <link rel="preload" as="script" href="{{ asset('frontend/js/main.js') }}" />
    <script src="{{ asset('frontend/js/main.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/js/mew_search.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/js/cart.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/js/notify.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/js/notify.js') }}" type="text/javascript"></script>
    @yield('script')



    <div class="main-widget">
        <div class="def-content unsee element">
            <div class="def-header">
                Liên hệ với chúng tôi
                <div class="close-icon" title="Đóng">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-x" viewBox="0 0 16 16">
                        <path
                            d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                    </svg>
                </div>
            </div>
            <div class="item phone">
                <a href="tel:{{ $setting->phone1 }}">
                    <span class="img">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="currentColor"
                                d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z">
                            </path>
                        </svg>
                    </span>
                    <div class="detail">
                        <b class="arcu-item-title">
                            Hotline:
                        </b>
                        <span class="arcu-item-subtitle">
                            {{ $setting->phone1 }}
                        </span>
                    </div>
                </a>
            </div>
            <div class="item phone">
                <a href="tel:{{ $setting->phone2 }}">
                    <span class="img">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="currentColor"
                                d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z">
                            </path>
                        </svg>
                    </span>
                    <div class="detail">
                        <b class="arcu-item-title">
                            CSKH:
                        </b>
                        <span class="arcu-item-subtitle">
                            {{ $setting->phone2 }}
                        </span>
                    </div>
                </a>
            </div>
            <div class="item mess">
                <a target="_blank" href="{{ $setting->facebook }}">
                    <span class="img">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-messenger" viewBox="0 0 16 16">
                            <path
                                d="M0 7.76C0 3.301 3.493 0 8 0s8 3.301 8 7.76-3.493 7.76-8 7.76c-.81 0-1.586-.107-2.316-.307a.639.639 0 0 0-.427.03l-1.588.702a.64.64 0 0 1-.898-.566l-.044-1.423a.639.639 0 0 0-.215-.456C.956 12.108 0 10.092 0 7.76zm5.546-1.459-2.35 3.728c-.225.358.214.761.551.506l2.525-1.916a.48.48 0 0 1 .578-.002l1.869 1.402a1.2 1.2 0 0 0 1.735-.32l2.35-3.728c.226-.358-.214-.761-.551-.506L9.728 7.381a.48.48 0 0 1-.578.002L7.281 5.98a1.2 1.2 0 0 0-1.735.32z" />
                        </svg>
                    </span>
                    <div class="detail">
                        <b class="arcu-item-title">
                            Messenger:
                        </b>
                        <span class="arcu-item-subtitle">
                            {{ $setting->facebook }}
                        </span>
                    </div>
                </a>
            </div>

        </div>
        <div class="out-circle">
            <div class="pregan element"></div>
            <div class="pregan element"></div>
            <div class="main-icon">
                <svg width="20" height="20" viewBox="0 0 20 20" version="1.1"
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g transform="translate(-825 -308)">
                        <g>
                            <path transform="translate(825 308)" fill="#FFFFFF"
                                d="M 19 4L 17 4L 17 13L 4 13L 4 15C 4 15.55 4.45 16 5 16L 16 16L 20 20L 20 5C 20 4.45 19.55 4 19 4ZM 15 10L 15 1C 15 0.45 14.55 0 14 0L 1 0C 0.45 0 0 0.45 0 1L 0 15L 4 11L 14 11C 14.55 11 15 10.55 15 10Z">
                            </path>
                        </g>
                    </g>
                </svg>
                <p>
                    Liên hệ
                </p>
            </div>
            <div class="ser-icon unsee element">
                <div class="process">
                    <span class="img phone item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 512 512">
                            <path fill="#ee1b23"
                                d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z">
                            </path>
                        </svg>
                    </span>
                    <span class="img mess item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                            class="bi bi-messenger" viewBox="0 0 16 16">
                            <path fill="#ee1b23"
                                d="M0 7.76C0 3.301 3.493 0 8 0s8 3.301 8 7.76-3.493 7.76-8 7.76c-.81 0-1.586-.107-2.316-.307a.639.639 0 0 0-.427.03l-1.588.702a.64.64 0 0 1-.898-.566l-.044-1.423a.639.639 0 0 0-.215-.456C.956 12.108 0 10.092 0 7.76zm5.546-1.459-2.35 3.728c-.225.358.214.761.551.506l2.525-1.916a.48.48 0 0 1 .578-.002l1.869 1.402a1.2 1.2 0 0 0 1.735-.32l2.35-3.728c.226-.358-.214-.761-.551-.506L9.728 7.381a.48.48 0 0 1-.578.002L7.281 5.98a1.2 1.2 0 0 0-1.735.32z" />
                        </svg>
                    </span>

                </div>
            </div>
            <div class="close-icon unsee element">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                    class="bi bi-x" viewBox="0 0 16 16">
                    <path
                        d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                </svg>
            </div>
        </div>
    </div>
    <script>
        function translateheader(lang) {

            var languageSelect = document.querySelector("select.goog-te-combo");
            languageSelect.value = lang;
            languageSelect.dispatchEvent(new Event("change"));
        }
    </script>
    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>
    <script>
        $(function() {
            var i = 1;
            var n = $('.ser-icon .process .item').length;
            var len = $('.ser-icon .process').width() / n;
            var pos = new WebKitCSSMatrix($('.ser-icon .process').css('transform'));
            $('.ser-icon').removeClass('unsee');

            function nextFrame() {
                if (i < n) {
                    i++;
                    var pos2 = new WebKitCSSMatrix($('.ser-icon .process').css('transform'));
                    $('.ser-icon .process').css('transform', 'translateX(' + (pos2.m41 - len) + 'px)');
                    setTimeout(nextFrame, 800);
                } else {
                    $('.ser-icon').addClass('unsee');
                    i = 1;
                    $('.ser-icon .process').css('transform', 'translateX(' + (pos.m41) + 'px)');
                    setTimeout(beginFrame, 2000);
                }
            };

            function beginFrame() {
                $('.ser-icon').removeClass('unsee');
                setTimeout(nextFrame, 900);
            };
            setTimeout(beginFrame, 2000);
            $('.close-icon').click(function(event) {
                $('.element').toggleClass('unsee');
            });
        });
    </script>
</body>

</html>
