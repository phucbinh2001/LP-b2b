<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--     <meta name="apple-itunes-app" content="app-id=1083804886">
    <meta name="google-play-app" content="app-id=us.nobarriers.elsa"> -->
    <!-- FAVICON AND TOUCH ICONS  -->
    <link rel="shortcut icon"
        href="https://elsaspeak.com/wp-content/themes/elsatheme/sub_theme/theme_b2b/images/ico.ico/favicon-32x32.png"
        type="image/x-icon" />
    <link rel="icon"
        href="https://elsaspeak.com/wp-content/themes/elsatheme/sub_theme/theme_b2b/images/ico.ico/favicon-32x32.png"
        type="image/x-icon" />
    <link rel="apple-touch-icon" sizes="152x152"
        href="https://elsaspeak.com/wp-content/themes/elsatheme/sub_theme/theme_b2b/images/ico.ico/apple-icon-152x152.png" />
    <link rel="apple-touch-icon" sizes="120x120"
        href="https://elsaspeak.com/wp-content/themes/elsatheme/sub_theme/theme_b2b/images/ico.ico/apple-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="76x76"
        href="https://elsaspeak.com/wp-content/themes/elsatheme/sub_theme/theme_b2b/images/ico.ico/apple-icon-76x76.png" />
    <link rel="apple-touch-icon"
        href="https://elsaspeak.com/wp-content/themes/elsatheme/sub_theme/theme_b2b/images/ico.ico/favicon-32x32.png" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script
        src="https://vn.elsaspeak.com/wp-content/themes/theme-b2b-package-promotion/assets/jquery.i18n/CLDRPluralRuleParser.js">
    </script>
    <script
        src="https://vn.elsaspeak.com/wp-content/themes/theme-b2b-package-promotion/assets/jquery.i18n/jquery.i18n.js">
    </script>
    <script
        src="https://vn.elsaspeak.com/wp-content/themes/theme-b2b-package-promotion/assets/jquery.i18n/jquery.i18n.messagestore.js">
    </script>
    <script
        src="https://vn.elsaspeak.com/wp-content/themes/theme-b2b-package-promotion/assets/jquery.i18n/jquery.i18n.fallbacks.js">
    </script>
    <script
        src="https://vn.elsaspeak.com/wp-content/themes/theme-b2b-package-promotion/assets/jquery.i18n/jquery.i18n.language.js">
    </script>
    <script
        src="https://vn.elsaspeak.com/wp-content/themes/theme-b2b-package-promotion/assets/jquery.i18n/jquery.i18n.parser.js">
    </script>
    <script
        src="https://vn.elsaspeak.com/wp-content/themes/theme-b2b-package-promotion/assets/jquery.i18n/jquery.i18n.emitter.js">
    </script>
    <script
        src="https://vn.elsaspeak.com/wp-content/themes/theme-b2b-package-promotion/assets/jquery.i18n/jquery.i18n.emitter.bidi.js">
    </script>

    <script>
    function initI18nWithoutFooter() {
        var default_lang = _lang || 'en';
        var version = '1.0.5';
        $.i18n({
            locale: localStorage.getItem('locale') || default_lang,
        }).load({
            'en': 'https://vn.elsaspeak.com/wp-content/themes/theme-b2b-package-promotion/assets/i18n/en.json?v=' +
                version,
            'vi': 'https://vn.elsaspeak.com/wp-content/themes/theme-b2b-package-promotion/assets/i18n/vi.json?v=' +
                version,
            'ja': 'https://vn.elsaspeak.com/wp-content/themes/theme-b2b-package-promotion/assets/i18n/ja.json?v=' +
                version,
            'es': 'https://vn.elsaspeak.com/wp-content/themes/theme-b2b-package-promotion/assets/i18n/es.json?v=' +
                version,
            'pt': 'https://vn.elsaspeak.com/wp-content/themes/theme-b2b-package-promotion/assets/i18n/pt.json?v=' +
                version,
        }).done(() => {
            $("#locallize_i18n").i18n();
        });
    }
    </script>
    <script>
    var country = "VN";
    var _lang = "en-US";
    var _paypal_currency = "USD";
    var DEFAULT_COUNTRY_LANG = {
        'VN': 'vi',
        'JP': 'ja',
        'BR': 'pt',
        'ES': 'es',
    };
    var PAYPAL_COUNTRY_CURRENCIES = {
        "VN": "USD",
        "JP": "JPY",
        "BR": "BRL",
        "ES": "USD"
    };
    const WEB_BASE_URL = 'https://elsaspeak.com/b2b';
    const API_BASE_URL = 'https://b2b-server.elsanow.io';

    if (DEFAULT_COUNTRY_LANG[country]) {
        _lang = DEFAULT_COUNTRY_LANG[country];
    } else {
        _lang = 'en';
    }
    if (PAYPAL_COUNTRY_CURRENCIES[country]) {
        _paypal_currency = PAYPAL_COUNTRY_CURRENCIES[country];
    }
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Product Sans:wght@400;500;700&display=swap" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <script src="https://vn.elsaspeak.com/wp-content/themes/theme-b2b-package-promotion/assets/js/jquery.lazy.min.js">
    </script>
    <title>ELSA - G??i doanh nghi???p</title>
    <link rel="stylesheet"
        href="https://vn.elsaspeak.com/wp-content/themes/theme-b2b-package-promotion/assets/css/homepage.css?ver=8.1"
        type="text/css" media="all">

    <!-- FB Pixel 754267458487273 -->
    <script>
    ! function(f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function() {
            n.callMethod ?
                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
        'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '754267458487273');
    fbq('track', 'PageView');
    </script>
    <!-- FB Pixel -->
</head>

<body id="locallize_i18n">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WQNZLV3" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async defer src="https://www.googletagmanager.com/gtag/js?id=UA-123524315-1"></script>
    <script defer>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-123524315-1');
    </script>

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
    })(window, document, 'script', 'dataLayer', 'GTM-WQNZLV3');
    </script>
    <!-- End Google Tag Manager -->

    <style>
    label.error {
        color: red;
    }

    .content-header .logo {
        padding-left: 0px;
    }

    .content-header .menu-header {
        padding-top: 0px;
    }

    .menu-header img {
        width: 143px;
    }

    .menu-header {
        font-weight: 500;
        font-size: 16px;
        line-height: 24px;
        padding-top: 37px;
    }

    .content-header .menu-header {
        padding-top: 0px;
    }

    .nav-link {
        padding: 0px 35px;
    }

    .content-header a {
        color: #121131 !important;
    }

    .content-header a.book-demo {
        color: #478DFF !important;
    }

    .book-demo {
        border: 2px solid #478DFF;
        box-sizing: border-box;
        border-radius: 123px;
        padding: 4px 26px !important;
        margin: -2px 30px;
    }

    .language-icon {
        padding: 0px;
    }

    .content-header .d-lg-flex {
        height: 90px;
        justify-content: center;
        align-items: center;
    }

    .booking-form {
        margin: auto;
        width: 100%;
        padding: 30px;
        background-color: white;
        /*height: 1020px;*/
        filter: drop-shadow(0 0 0.75rem rgba(0, 0, 0, 0.1));
        background: #FFFFFF;
        box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
        border-radius: 24px;
    }

    .booking-form input,
    .booking-form select {
        height: 54px;
        border: 1px solid #E6E6E6;
        box-sizing: border-box;
        border-radius: 16px;
    }

    .booking-form textarea {
        height: 134px;
        border: 1px solid #E6E6E6;
        box-sizing: border-box;
        border-radius: 16px;
    }

    .booking-form .form-group {
        margin-bottom: 16px;
    }

    .booking-title {
        margin-bottom: 56px;
    }

    /* 	.content-header .d-xs-inline-flex {
		height: 90px;
	} */
    .nav-item.dropdown {
        border: 1px solid #E6E6E6;
        border-radius: 123px;
        padding: 8px 20px;
    }

    @media (max-width: 992px) {
        .nav-item.dropdown {
            border: none;
            border-radius: 123px;
            padding: unset;
        }

        .nav-link {
            padding: 10px 20px;
        }

        .content-header .logo {
            padding-left: 1%;
        }

        .content-header .navbar {
            padding: 4px 1rem 3px;
        }
    }

    @media (max-width: 767px) {
        .menu-header {
            padding-top: 25px;
        }

        .menu-header img {
            width: 112px;
        }

        .nav-link {
            padding: 10px 0px;
        }
    }
    </style>

    <div class="nav-top-fixed content-header shadow">
        <div class="row d-none d-lg-flex">
            <div class="col-lg-3 col-md-12 logo">
                <a class="keep-param" href="#" id="nav-home">
                    <img src="https://vn.elsaspeak.com/wp-content/themes/theme-b2b-package-promotion/assets/img/head_logo.svg"
                        alt="logo" class="black-logo">
                </a>
            </div>
            <div class="col-lg-9 col-md-12 m-auto header-menu">
                <ul class="nav menu-header" style="float: right; align-items: center;">
                    <li class="nav-item">
                        <a class="nav-link active keep-param" data-i18n="Plans" href="#goi-san-pham"
                            id="nav-plans">Plans</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-i18n="About Business package" href="#ve-goi-doanh-nghiep"
                            id="nav-login">About
                            Business package</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link book-demo keep-param" data-i18n="Register Now" href="#"
                            id="nav-booking">Register Now</a>
                    </li> -->
                    <li class="nav-item">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarLanguage" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img class="lang-flag"
                                        src="https://vn.elsaspeak.com/wp-content/themes/theme-b2b-package-promotion/assets/img/lang.svg"
                                        style="width: 24px;" />
                                    <span class="text-body lang-code font-weight-bold">
                                        English
                                    </span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarLanguage">
                                    <a class="dropdown-item" href="javascript:;"
                                        onclick="if (!window.__cfRLUnblockHandlers) return false; changeLanguage('vi')"
                                        data-cf-modified-b2c9fa69bf21bf5a311ec2b5-="">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAALCAIAAAD5gJpuAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAFsSURBVHjaYvzPgAD/UNlYEUAAmuTYAAAQhAEYqF/zFbe50RZ1cMmS9TLi0pJLRjZohAMTGFUN9HdnHgEE1sDw//+Tp0ClINW/f4NI9d////3+f+b3/1+////+9f/XL6A4o6ws0AaAAGIBm/0fRTVQ2v3Pf97f/4/9Aqv+DdHA8Ps3UANAALEAMSNQNdDGP3+ALvnf8vv/t9//9X/////7f+uv/4K//iciNABNBwggsJP+/IW4kuH3n//1v/8v+wVSDURmv/57//7/CeokoKFA0wECiAnkpL9/wH4CO+DNr/+VQA1A9PN/w6//j36CVIMRxEkAAQR20m+QpSBXgU0CuSTj9/93v/8v//V/xW+48UBD/zAwAAQQSAMzOMiABoBUswCd8ev/M7A669//OX7///Lr/x+gBlCoAJ0DEEAgDUy//zBISoKNAfoepJNRFmQkyJecfxj4/kDCEIiAigECiPErakTiiWMIAAgwAB4ZUlqMMhQQAAAAAElFTkSuQmCC"
                                            title="Ti???ng Vi???t" alt="Ti???ng Vi???t" width="16" height="11"
                                            style="width: 16px; height: 11px;">
                                        Ti???ng vi???t
                                    </a>
                                    <a class="dropdown-item" href="javascript:;"
                                        onclick="if (!window.__cfRLUnblockHandlers) return false; changeLanguage('en')"
                                        data-cf-modified-b2c9fa69bf21bf5a311ec2b5-="">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAALCAIAAAD5gJpuAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAHzSURBVHjaYkxOP8IAB//+Mfz7w8Dwi4HhP5CcJb/n/7evb16/APL/gRFQDiAAw3JuAgAIBEDQ/iswEERjGzBQLEru97ll0g0+3HvqMn1SpqlqGsZMsZsIe0SICA5gt5a/AGIEarCPtFh+6N/ffwxA9OvP/7//QYwff/6fZahmePeB4dNHhi+fGb59Y4zyvHHmCEAAAW3YDzQYaJJ93a+vX79aVf58//69fvEPlpIfnz59+vDhw7t37968efP3b/SXL59OnjwIEEAsDP+YgY53b2b89++/awvLn98MDi2cVxl+/vl6mituCtBghi9f/v/48e/XL86krj9XzwEEEENy8g6gu22rfn78+NGs5Ofr16+ZC58+fvyYwX8rxOxXr169fPny+fPn1//93bJlBUAAsQADZMEBxj9/GBxb2P/9+S/R8u3vzxuyaX8ZHv3j8/YGms3w8ycQARmi2eE37t4ACCDGR4/uSkrKAS35B3TT////wADOgLOBIaXIyjBlwxKAAGKRXjCB0SOEaeu+/y9fMnz4AHQxCP348R/o+l+//sMZQBNLEvif3AcIIMZbty7Ly6t9ZmXl+fXj/38GoHH/UcGfP79//BBiYHjy9+8/oUkNAAHEwt1V/vI/KBY/QSISFqM/GBg+MzB8A6PfYC5EFiDAABqgW776MP0rAAAAAElFTkSuQmCC"
                                            title="English" alt="English" width="16" height="11"
                                            style="width: 16px; height: 11px;">
                                        English
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row d-lg-none d-xs-inline-flex">
            <!-- Collapse button -->
            <div class="col-8 text-left">
                <span>
                    <a class="keep-param" href="#" id="nav-m-home"><img
                            src="https://vn.elsaspeak.com/wp-content/themes/theme-b2b-package-promotion/assets/img/head_logo.svg"
                            style="margin: 24px 0; height: 35px;" alt="logo" class="black-logo"></a>
                </span>
                <!-- Collapsible content -->
                <nav class="navbar">
                    <div class="collapse" id="navbarSupportedContent1">
                        <!-- Links -->
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link keep-param" data-i18n="Plans" href="#goi-san-pham"
                                    id="nav-m-plans">Plans <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-i18n="About Business package" href="#ve-goi-doanh-nghiep"
                                    id="nav-m-login">About Business package</a>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link keep-param" data-i18n="Register Now" href="#"
                                    id="nav-m-booking">Register Now</a>
                            </li> -->
                            <li class="nav-item">
                                <ul class="navbar-nav">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarLanguage" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <img class="lang-flag"
                                                src="https://web-stag.elsanow.co/wp-content/uploads/2021/03/b2b/lang.svg"
                                                style="width: 24px;" />
                                            <span class="text-body lang-code font-weight-bold">
                                                English
                                            </span>

                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarLanguage">
                                            <a class="dropdown-item" href="javascript:;"
                                                onclick="if (!window.__cfRLUnblockHandlers) return false; changeLanguage('vi')"
                                                data-cf-modified-b2c9fa69bf21bf5a311ec2b5-="">
                                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAALCAIAAAD5gJpuAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAFsSURBVHjaYvzPgAD/UNlYEUAAmuTYAAAQhAEYqF/zFbe50RZ1cMmS9TLi0pJLRjZohAMTGFUN9HdnHgEE1sDw//+Tp0ClINW/f4NI9d////3+f+b3/1+////+9f/XL6A4o6ws0AaAAGIBm/0fRTVQ2v3Pf97f/4/9Aqv+DdHA8Ps3UANAALEAMSNQNdDGP3+ALvnf8vv/t9//9X/////7f+uv/4K//iciNABNBwggsJP+/IW4kuH3n//1v/8v+wVSDURmv/57//7/CeokoKFA0wECiAnkpL9/wH4CO+DNr/+VQA1A9PN/w6//j36CVIMRxEkAAQR20m+QpSBXgU0CuSTj9/93v/8v//V/xW+48UBD/zAwAAQQSAMzOMiABoBUswCd8ev/M7A669//OX7///Lr/x+gBlCoAJ0DEEAgDUy//zBISoKNAfoepJNRFmQkyJecfxj4/kDCEIiAigECiPErakTiiWMIAAgwAB4ZUlqMMhQQAAAAAElFTkSuQmCC"
                                                    title="Ti???ng Vi???t" alt="Ti???ng Vi???t" width="16" height="11"
                                                    style="width: 16px; height: 11px;">
                                                Ti???ng vi???t
                                            </a>
                                            <a class="dropdown-item" href="javascript:;"
                                                onclick="if (!window.__cfRLUnblockHandlers) return false; changeLanguage('en')"
                                                data-cf-modified-b2c9fa69bf21bf5a311ec2b5-="">
                                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAALCAIAAAD5gJpuAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAHzSURBVHjaYkxOP8IAB//+Mfz7w8Dwi4HhP5CcJb/n/7evb16/APL/gRFQDiAAw3JuAgAIBEDQ/iswEERjGzBQLEru97ll0g0+3HvqMn1SpqlqGsZMsZsIe0SICA5gt5a/AGIEarCPtFh+6N/ffwxA9OvP/7//QYwff/6fZahmePeB4dNHhi+fGb59Y4zyvHHmCEAAAW3YDzQYaJJ93a+vX79aVf58//69fvEPlpIfnz59+vDhw7t37968efP3b/SXL59OnjwIEEAsDP+YgY53b2b89++/awvLn98MDi2cVxl+/vl6mituCtBghi9f/v/48e/XL86krj9XzwEEEENy8g6gu22rfn78+NGs5Ofr16+ZC58+fvyYwX8rxOxXr169fPny+fPn1//93bJlBUAAsQADZMEBxj9/GBxb2P/9+S/R8u3vzxuyaX8ZHv3j8/YGms3w8ycQARmi2eE37t4ACCDGR4/uSkrKAS35B3TT////wADOgLOBIaXIyjBlwxKAAGKRXjCB0SOEaeu+/y9fMnz4AHQxCP348R/o+l+//sMZQBNLEvif3AcIIMZbty7Ly6t9ZmXl+fXj/38GoHH/UcGfP79//BBiYHjy9+8/oUkNAAHEwt1V/vI/KBY/QSISFqM/GBg+MzB8A6PfYC5EFiDAABqgW776MP0rAAAAAElFTkSuQmCC"
                                                    title="English" alt="English" width="16" height="11"
                                                    style="width: 16px; height: 11px;">
                                                English
                                            </a>
                                            <!-- <a class="dropdown-item" href="javascript:;"
                                                onclick="if (!window.__cfRLUnblockHandlers) return false; changeLanguage('ja')"
                                                data-cf-modified-b2c9fa69bf21bf5a311ec2b5-="">
                                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAALCAIAAAD5gJpuAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAE2SURBVHjaYvz69SsDEvj37x+ERGbAwZ9//wACiAUoysXFBST///8P0QOm//+HU0jgxYsXAAHEAlP0H8HYt+//4SP/f//6b2b238sLrpqRkRFoCUAAsaCrXrv2/8KF///8+f/r9//Dh/8/ffI/OQWiAeJCgABigrseJPT27f/Vq////v3/1y8oWrzk/+PHcEv+/PkDEEBMEM/B3fj/40eo0t9g8suX/w8f/odZAVQMEEAsQAzj/2cQFf3PxARWCrYEaBXQLCkpqB/+/wcqBgggJrjxQPX/hYX/+/v///kLqhpIBgf/l5ODhxiQBAggFriToDoTEv5zcf3ftQuk2s7uf0wM3MdAAPQDQAAxvn37lo+PDy4KZUDcycj4/z9CBojv3r0LEEAgG969eweLSBDEBSCWAAQYACaTbJ/kuok9AAAAAElFTkSuQmCC"
                                                    title="?????????" alt="?????????" width="16" height="11"
                                                    style="width: 16px; height: 11px;">
                                                ?????????
                                            </a>
                                            <a class="dropdown-item" href="javascript:;"
                                                onclick="if (!window.__cfRLUnblockHandlers) return false; changeLanguage('pt')"
                                                data-cf-modified-b2c9fa69bf21bf5a311ec2b5-="">
                                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAALCAIAAAD5gJpuAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAHjSURBVHjaYmRIZkCAfwwMf2DkLzCCMyDoBwNAALEAlTVGN/5nYPj//x8Q/P3/9++/vzZa31gY/mw5z/Tn3x8g98+f37///fn99/eq2lUAAQTS8J/h/7NPz/9C5P79WRj89f9/zv//fztLvPVezPzrz+8/f3//+vtLhl8GaANAAIE1/P8PVA1U6qn7NVTqb1XVpAv/JH7/+a/848XmtpBlj39PO8gM1PP7z2+gqwACiAnoYpC9TF9nB34NVf5z4XpoZJbEjJKfWaEfL7KLlbaURKj8Opj08RfIVb+BNgAEEBPQW1L8P+b6/mb6//s/w+/+nc4F0/9P2cj65xdHc+p/QR39//9/AdHJ9A/60l8YvjIABBAT0JYH75jStv75zwCSMBY8BXTMxXv/21ezfHj9X5/3BESDy5JfBy7/ZuBnAAggkA1//vx594kpaCnLloe/smLaVT9/ff3y/+/P/w+u/+JuW7fhwS/tSayPXrOycrEyfGQACCAWoA1//oOCDIgm72fu4vy6b4LD/9/S/3///s9+S28yy+9/LEAf//kLChVgCAEEEEjD7z9/JHgkQeHwD8gUjV79O9r6CzPLv6lr1OUFwWH9Fxjcv//9BcYoA0AAMTI4ImIROUYRMf2XARkABBgA8kMvQf3q+24AAAAASUVORK5CYII="
                                                    title="Portugu??s" alt="Portugu??s" width="16" height="11"
                                                    style="width: 16px; height: 11px;">
                                                Portugu??s
                                            </a>
                                            <a class="dropdown-item" href="javascript:;"
                                                onclick="if (!window.__cfRLUnblockHandlers) return false; changeLanguage('es')"
                                                data-cf-modified-b2c9fa69bf21bf5a311ec2b5-="">
                                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAALCAIAAAD5gJpuAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAFnSURBVHjaYvzPgAD/UNlYEUAAmuTYAAAQhAEYqF/zFbe50RZ1cMmS9TLi0pJLRjZohAMTGFUN9HdnHgEE1sDw//+Tp0ClINW/f0NIKPoFJH/9//ULyGaUlQXaABBALAx/Gf4zAt31F4i+ffj3/cN/XrFfzOx//v///f//LzACM/79ZmD8/e8TA0AAMYHdDVT958vXP38nMDB0s3x94/Tj5y+YahhiAKLfQKUAAcQEdtJfoDHMF2L+vPzDmFXLelf551tGFOOhev4A/QgQQExgHwAd8IdFT/Wz6j+GhlpmXSOW/2z///8Eq/sJ18Dw/zdQA0AAMQExxJjjdy9x2/76EfLz4MXdP/i+wsyGkkA3Aw3984cBIIAYfzIwMKel/bt3jwEaLNAwgZIQxp/fDH/+MqqovL14ESCAWICeZvr9h0FSEhSgwBgAygFDEMT+wwAhgQgc4kAEVAwQQIxfUSMSTxxDAECAAQAJWke8v4u1tAAAAABJRU5ErkJggg=="
                                                    title="Espa??ol" alt="Espa??ol" width="16" height="11"
                                                    style="width: 16px; height: 11px;">
                                                Espa??ol
                                            </a> -->
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <!-- Links -->
                    </div>
                    <!-- Collapsible content -->
                </nav>
            </div>
            <div class="col-4 text-right">
                <button class="navbar-toggler toggler-example" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false"
                    aria-label="Toggle navigation"
                    style="background: url(https://vn.elsaspeak.com/wp-content/themes/theme-b2b-package-promotion/assets/img/burger_black.svg) no-repeat; height: 24px; margin-top: 27px;">
                </button>
            </div>
        </div>
    </div>
    <script>
    var flags = {
        "vi": "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAALCAIAAAD5gJpuAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAFsSURBVHjaYvzPgAD/UNlYEUAAmuTYAAAQhAEYqF/zFbe50RZ1cMmS9TLi0pJLRjZohAMTGFUN9HdnHgEE1sDw//+Tp0ClINW/f4NI9d////3+f+b3/1+////+9f/XL6A4o6ws0AaAAGIBm/0fRTVQ2v3Pf97f/4/9Aqv+DdHA8Ps3UANAALEAMSNQNdDGP3+ALvnf8vv/t9//9X/////7f+uv/4K//iciNABNBwggsJP+/IW4kuH3n//1v/8v+wVSDURmv/57//7/CeokoKFA0wECiAnkpL9/wH4CO+DNr/+VQA1A9PN/w6//j36CVIMRxEkAAQR20m+QpSBXgU0CuSTj9/93v/8v//V/xW+48UBD/zAwAAQQSAMzOMiABoBUswCd8ev/M7A669//OX7///Lr/x+gBlCoAJ0DEEAgDUy//zBISoKNAfoepJNRFmQkyJecfxj4/kDCEIiAigECiPErakTiiWMIAAgwAB4ZUlqMMhQQAAAAAElFTkSuQmCC",
        "en": "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAALCAIAAAD5gJpuAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAHzSURBVHjaYkxOP8IAB//+Mfz7w8Dwi4HhP5CcJb/n/7evb16/APL/gRFQDiAAw3JuAgAIBEDQ/iswEERjGzBQLEru97ll0g0+3HvqMn1SpqlqGsZMsZsIe0SICA5gt5a/AGIEarCPtFh+6N/ffwxA9OvP/7//QYwff/6fZahmePeB4dNHhi+fGb59Y4zyvHHmCEAAAW3YDzQYaJJ93a+vX79aVf58//69fvEPlpIfnz59+vDhw7t37968efP3b/SXL59OnjwIEEAsDP+YgY53b2b89++/awvLn98MDi2cVxl+/vl6mituCtBghi9f/v/48e/XL86krj9XzwEEEENy8g6gu22rfn78+NGs5Ofr16+ZC58+fvyYwX8rxOxXr169fPny+fPn1//93bJlBUAAsQADZMEBxj9/GBxb2P/9+S/R8u3vzxuyaX8ZHv3j8/YGms3w8ycQARmi2eE37t4ACCDGR4/uSkrKAS35B3TT////wADOgLOBIaXIyjBlwxKAAGKRXjCB0SOEaeu+/y9fMnz4AHQxCP348R/o+l+//sMZQBNLEvif3AcIIMZbty7Ly6t9ZmXl+fXj/38GoHH/UcGfP79//BBiYHjy9+8/oUkNAAHEwt1V/vI/KBY/QSISFqM/GBg+MzB8A6PfYC5EFiDAABqgW776MP0rAAAAAElFTkSuQmCC",
        "ja": "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAALCAIAAAD5gJpuAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAE2SURBVHjaYvz69SsDEvj37x+ERGbAwZ9//wACiAUoysXFBST///8P0QOm//+HU0jgxYsXAAHEAlP0H8HYt+//4SP/f//6b2b238sLrpqRkRFoCUAAsaCrXrv2/8KF///8+f/r9//Dh/8/ffI/OQWiAeJCgABigrseJPT27f/Vq////v3/1y8oWrzk/+PHcEv+/PkDEEBMEM/B3fj/40eo0t9g8suX/w8f/odZAVQMEEAsQAzj/2cQFf3PxARWCrYEaBXQLCkpqB/+/wcqBgggJrjxQPX/hYX/+/v///kLqhpIBgf/l5ODhxiQBAggFriToDoTEv5zcf3ftQuk2s7uf0wM3MdAAPQDQAAxvn37lo+PDy4KZUDcycj4/z9CBojv3r0LEEAgG969eweLSBDEBSCWAAQYACaTbJ/kuok9AAAAAElFTkSuQmCC",
        "pt": "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAALCAIAAAD5gJpuAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAHjSURBVHjaYmRIZkCAfwwMf2DkLzCCMyDoBwNAALEAlTVGN/5nYPj//x8Q/P3/9++/vzZa31gY/mw5z/Tn3x8g98+f37///fn99/eq2lUAAQTS8J/h/7NPz/9C5P79WRj89f9/zv//fztLvPVezPzrz+8/f3//+vtLhl8GaANAAIE1/P8PVA1U6qn7NVTqb1XVpAv/JH7/+a/848XmtpBlj39PO8gM1PP7z2+gqwACiAnoYpC9TF9nB34NVf5z4XpoZJbEjJKfWaEfL7KLlbaURKj8Opj08RfIVb+BNgAEEBPQW1L8P+b6/mb6//s/w+/+nc4F0/9P2cj65xdHc+p/QR39//9/AdHJ9A/60l8YvjIABBAT0JYH75jStv75zwCSMBY8BXTMxXv/21ezfHj9X5/3BESDy5JfBy7/ZuBnAAggkA1//vx594kpaCnLloe/smLaVT9/ff3y/+/P/w+u/+JuW7fhwS/tSayPXrOycrEyfGQACCAWoA1//oOCDIgm72fu4vy6b4LD/9/S/3///s9+S28yy+9/LEAf//kLChVgCAEEEEjD7z9/JHgkQeHwD8gUjV79O9r6CzPLv6lr1OUFwWH9Fxjcv//9BcYoA0AAMTI4ImIROUYRMf2XARkABBgA8kMvQf3q+24AAAAASUVORK5CYII=",
        "es": "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAALCAIAAAD5gJpuAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAFnSURBVHjaYvzPgAD/UNlYEUAAmuTYAAAQhAEYqF/zFbe50RZ1cMmS9TLi0pJLRjZohAMTGFUN9HdnHgEE1sDw//+Tp0ClINW/f0NIKPoFJH/9//ULyGaUlQXaABBALAx/Gf4zAt31F4i+ffj3/cN/XrFfzOx//v///f//LzACM/79ZmD8/e8TA0AAMYHdDVT958vXP38nMDB0s3x94/Tj5y+YahhiAKLfQKUAAcQEdtJfoDHMF2L+vPzDmFXLelf551tGFOOhev4A/QgQQExgHwAd8IdFT/Wz6j+GhlpmXSOW/2z///8Eq/sJ18Dw/zdQA0AAMQExxJjjdy9x2/76EfLz4MXdP/i+wsyGkkA3Aw3984cBIIAYfzIwMKel/bt3jwEaLNAwgZIQxp/fDH/+MqqovL14ESCAWICeZvr9h0FSEhSgwBgAygFDEMT+wwAhgQgc4kAEVAwQQIxfUSMSTxxDAECAAQAJWke8v4u1tAAAAABJRU5ErkJggg=="
    }
    var languages = {
        "en": "English",
        "vi": "Ti???ng vi???t",
        "ja": "?????????",
        "pt": "Portugu??s",
        "es": "Espa??ol"
    }
    $(document).ready(function() {
        var lang;
        if (localStorage.getItem('locale') === null) {
            lang = _lang || 'vi';
        } else {
            lang = localStorage.getItem('locale');
        }
        $('.lang-code').text(languages[lang])
        $('img.lang-flag').attr('src', flags[lang])
    });

    function changeLanguage(lang) {
        $.i18n().locale = lang;
        $("#locallize_i18n").i18n();
        $('.lang-code').text(languages[lang])
        $('img.lang-flag').attr('src', flags[lang])
        localStorage.setItem("locale", lang);
        if (window.location.pathname.includes('plans')) {
            initPrice();
        }
        //ChangeIdForm
        $('.register-form').attr('id', 'register_' + lang);
        $('#register_vi').validate().resetForm();
        $('#register_en').validate().resetForm();
    }

    function formatPrice(price, currency = 'usd') {
        return Intl.NumberFormat(_lang, {
            style: 'currency',
            currency: currency.toUpperCase()
        }).format(price)
    }
    </script>
    <script>
    var link_class = 'keep-param';
    $(document).ready(function() {
        var query_string = location.search;
        $('a.keep-param').each(function(index) {
            this.href = this.href + query_string;
        });
    })
    </script>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <!-- <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div> -->
                <div class="modal-body">
                    <div class="booking-form">
                        <button type="button" class="close modal-close-btn" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <form method="POST" class="elsa-form">
                            <div class="form-row">
                                <div class="form-group col-xl-6">
                                    <label for="firstNameInput" data-i18n="First Name (*)">T??n</label>
                                    <input type="text" class="form-control" name="firstname" id="firstNameInput"
                                        placeholder="">
                                </div>
                                <div class="form-group col-xl-6">
                                    <label for="lastNameInput" data-i18n="Last Name (*)">H???</label>
                                    <input type="text" class="form-control" name="lastname" id="lastNameInput"
                                        placeholder="">
                                </div>
                                <div class="form-group col-12">
                                    <label for="emailInput" data-i18n="Work Email (*)">Email</label>
                                    <input type="email" class="form-control" name="email" id="emailInput"
                                        placeholder="">
                                </div>
                                <div class="form-group col-xl-6">
                                    <label for="countryInput" data-i18n="Your Country (*)">Qu???c gia</label>
                                    <input id="countryInput" placeholder="" class="form-control" name="country"
                                        type="text">
                                </div>

                                <div class="form-group col-xl-6">
                                    <div>
                                        <label for="phoneInput" data-i18n="Phone Number (*)">S??? ??i???n tho???i</label>
                                        <input id="phoneInput" class="form-control" name="phone" type="tel"
                                            autocomplete="off" data-intl-tel-input-id="0"
                                            placeholder="VD: 0969 888 999">
                                    </div>
                                </div>
                                <div class="form-group col-xl-6">
                                    <label for="jobInput" data-i18n="Job Title (*)">Ch???c danh</label>
                                    <input type="text" class="form-control" name="job_title" id="jobInput"
                                        placeholder="">
                                </div>
                                <div class="form-group col-xl-6">
                                    <label for="companyNameInput" data-i18n="Company Name (*)">T??n c??ng ty</label>
                                    <input type="text" class="form-control" name="organization_name"
                                        id="companyNameInput" placeholder="">
                                    <div id="duplicate_company_name"></div>
                                </div>
                                <div class="form-group col-12">
                                    <label for="companySizeInput" data-i18n="Company size (*)">Quy m?? c??ng ty</label>
                                    <input type="number" class="form-control" name="organization_size"
                                        id="companySizeInput" placeholder="">
                                </div>
                                <div class="form-group col-12">
                                    <label for="learnerNumberInput" data-i18n="Expected number of learners (*)">?????c
                                        l?????ng s??? h???c vi??n</label>
                                    <input type="number" class="form-control" name="expected_number_of_learner"
                                        id="learnerNumberInput" placeholder="">
                                </div>
                                <div class="form-group col-12">
                                    <label for="goidangky" data-i18n="Package (*)">G??i ????ng k??</label>
                                    <select class="form-control" id="promotion_package">
                                        <option data-i18n="Combo 6 months free testing platform"
                                            value="six_months_free_testing_platform">Combo 6 th??ng t???ng
                                            testing
                                            platform</option>
                                        <option data-i18n="Combo 1 year free testing platform"
                                            value="one_year_free_testing_platform">Combo 1 n??m t???ng testing platform
                                        </option>
                                        <option data-i18n="Combo 6 months free 3 months"
                                            value="six_months_free_three_months">Combo 6 th??ng t???ng 3 th??ng</option>
                                        <option data-i18n="Combo 1 year free 6 months" value="one_year_free_six_months">
                                            Combo 1 n??m t???ng 6 th??ng</option>
                                    </select>
                                    <input type="hidden" id="utm_term" name="utm_term" value="chuachongoi">
                                </div>
                                <div class="form-group col-12">
                                    <label for="inquiryInput" data-i18n="Your inquiry">Y??u c???u</label>
                                    <textarea class="form-control" id="inquiryInput" rows="3"
                                        data-i18n="[placeholder]Detail of your inquiry"></textarea>
                                </div>
                                <input type="hidden" name="search" id="elsa-search" value="">
                            </div>
                            <div class="row">
                                <div id="msg-err" class="col-md-12"></div>
                            </div>
                            <button id="b2b_register" type="submit" class="btn rounded-pill" style="background:
                                                        #001042;border-radius: 123px; height: 62px;
                                                        margin-top: 12px;width: 100%; border: none;
                                                        color: white;">????ng k?? Demo</button>
                        </form>
                    </div>
                </div>
                <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div> -->
            </div>
        </div>
    </div>
    <div class="header-bg" style="color: #fff;margin-top:60px;">
        <div class="container">
            <div class="row mx-auto">
                <div class="label-header text-center text-lg-left" style="">
                    <p class="text-size-36 title-space text-size-m-24 font-weight-600 grow-business"
                        data-i18n="Grow your business globally with effective communication">
                        Grow your business globally with effective communication
                    </p>
                    <div class="col-md-12 pl-md-1 pr-md-1 text-header pr-lg-5">
                        <p class="text-size-20 mb-sm-4 text-size-m-16 drive-business mx-auto"
                            data-i18n="Drive business outcomes and hold a competitive edge on the market by upskiling your organization???s English proficiency">
                            Drive business outcomes and hold a competitive edge on the market by upskiling your
                            organization???s English proficiency
                        </p>
                    </div>
                    <!-- Button trigger modal -->
                    <a class="btn btn-primary button-blue ml-lg-0 m-auto keep-param" style="padding: 13px 88px;"
                        data-toggle="modal" data-target="#exampleModal" role="button" data-i18n="Register Now">Register
                        Now</a>
                </div>
            </div>
        </div>
    </div>
    <section id="body-section" class="container-fluid text-center pl-0 pr-0" style="overflow: hidden;">
        <div class="row">
            <div class="col-md-12">
                <img src="https://vn.elsaspeak.com/wp-content/themes/theme-b2b-package-promotion/assets/img/yellow_bg.svg"
                    class="d-none d-sm-block" style="width: 213px; position: absolute; right: 2px; top: -230px;" />
                <p class="trust-label" data-i18n="Trusted by hundreds of organizations and institutions">Trusted by
                    hundreds of organizations and institutions</p>
                <img src="https://vn.elsaspeak.com/wp-content/themes/theme-b2b-package-promotion/assets/img/company_trust4.svg"
                    class="d-none d-lg-inline" style="width: 1112px;" />
                <img src="https://vn.elsaspeak.com/wp-content/themes/theme-b2b-package-promotion/assets/img/company_trust4_m.svg"
                    class="d-lg-none" style="width: 344px;" />
                <img src="https://vn.elsaspeak.com/wp-content/themes/theme-b2b-package-promotion/assets/img/blue_bg.svg"
                    class="d-none d-sm-block" style="width: 309px; position: absolute; left: 2px; top: -35px;" />
            </div>
        </div>
        <div class="row text-left meet-elsa-sec" id="ve-goi-doanh-nghiep">
            <div class="col-lg-6 col-md-12 order-lg-first order-last">
                <div class="row margin-left mt-lg-5 pt-lg-5">
                    <p class="text-size-36 text-size-m-24 pl-1 title-space font-weight-600" style="color: #478DFF;"
                        data-i18n="Meet ELSA">
                        Meet ELSA
                    </p>
                    <div class="col-md-12 pl-1 pr-1 pr-lg-5 description-text" style="">
                        <p class="text-size-20 text-size-m-16" style="padding-bottom: 15px;"
                            data-i18n="ELSA (English Language Speech Assistant) is an English pronunciation app that uses artificially intelligent speech-recognition technology to teach English pronunciation skills.">
                            ELSA (English Language Speech Assistant) is an English pronunciation app that uses
                            artificially intelligent speech-recognition technology to teach English pronunciation
                            skills.
                        </p>
                        <p class="text-size-20 text-size-m-16" style="padding-bottom: 15px;"
                            data-i18n="Our award winning speech-recognition AI will be able to give you specific remediation instructions within seconds. From audio to video support showing tongue and mouth movement, you???ll sound like a native speaker with daily practice.">
                            Our award winning speech recognition AI will be able to give you specific remediation
                            instructions within seconds. From audio to video support showing tongue and mouth movement,
                            you???ll sound like a native speaker with daily practice.
                        </p>
                    </div>
                    <a class="btn btn-primary button-blue d-none d-lg-block keep-param"
                        style="padding: 13px 65px; margin-top: -4px;" href="#goi-san-pham" data-i18n="Register Now"
                        role="button">Register Now</a>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 text-md-left text-xs-center">
                <img data-src="https://vn.elsaspeak.com/wp-content/themes/theme-b2b-package-promotion/assets/img/meet_elsa.png"
                    class="meet-elsa-img lazy" />
            </div>
        </div>
        <div class="row text-center elsa-org-sec">
            <div class="col-md-12">
                <p class="text-size-36 text-size-m-24 font-weight-600 title-space" data-i18n="ELSA for Organizations">
                    ELSA for Organizations
                </p>
                <div class="col-md-12 pl-1 pr-1 pr-lg-5 description-text m-auto" style="max-width: 620px;">
                    <p class="text-size-20 text-size-m-16" style="padding-bottom: 15px;"
                        data-i18n="ELSA???s world class training program is proven to improve employee English speaking proficiency and drive business outcomes.">
                        ELSA???s world class training program is proven to improve employee English speaking proficiency
                        and drive business outcomes.
                    </p>
                </div>
                <img src="https://vn.elsaspeak.com/wp-content/themes/theme-b2b-package-promotion/assets/img/red_bg.svg"
                    class="d-none d-sm-block" style="width: 371px; position: absolute; right: 2px; top: -170px;" />
            </div>
        </div>
        <img src="https://vn.elsaspeak.com/wp-content/themes/theme-b2b-package-promotion/assets/img/line_m.svg"
            class="d-lg-none d-xs-inline-flex" />
        <img src="https://vn.elsaspeak.com/wp-content/themes/theme-b2b-package-promotion/assets/img/line1.svg"
            class="line-1 d-none d-lg-inline-flex" />
        <div class="row text-left">
            <div class="col-lg-6 col-md-12 order-lg-first order-last text-xs-center text-right line-mar-b">
                <img data-src="https://vn.elsaspeak.com/wp-content/themes/theme-b2b-package-promotion/assets/img/access_lesson.png"
                    class="access_lesson_img lazy" />
            </div>
            <div class="col-lg-6 col-md-12 text-xs-center line-mar-t mt-md-access" style="max-width: 620px;">
                <p class="text-size-36 text-size-m-24 font-weight-600 title-space"
                    data-i18n="Give your team access to over 14,000 speaking lessons">
                    Give your team access to over 14,000 speaking lessons
                </p>
                <div class="pl-0 pr-1 pr-lg-5 description-text">
                    <p class="text-size-20 text-size-m-16" style="margin-bottom: 40px;"
                        data-i18n="We cover all of the important speaking skills such as pronunciation, word stress, intonation, and feature over 60 topics from business English to casual conversations. Our content is easily accessible from any mobile device so your team can practice with ease.">
                        We cover all of the important speaking skills such as pronunciation, word stress, intonation,
                        and feature over 60 topics from business English to casual conversations. Our content is easily
                        accessible from any mobile device so your team can practice with ease.
                    </p>
                </div>
            </div>
            <img src="https://vn.elsaspeak.com/wp-content/themes/theme-b2b-package-promotion/assets/img/yellow_bg_2.svg"
                class="d-none d-sm-block" style="width: 243px; position: absolute; left: 2px; margin-top: 200px;" />
        </div>
        <img src="https://vn.elsaspeak.com/wp-content/themes/theme-b2b-package-promotion/assets/img/line_m.svg"
            class="d-lg-none d-xs-inline-flex" />
        <img src="https://vn.elsaspeak.com/wp-content/themes/theme-b2b-package-promotion/assets/img/line2.svg"
            class="line-2 d-none d-lg-inline-flex" />
        <div class="row text-left line-mar-t mt-md-5">
            <div class="col-lg-6 col-md-12 text-xs-center">
                <div class="pt-md-personalize" style="max-width: 608px;">
                    <p class="text-size-36 text-size-m-24 font-weight-600 title-space"
                        data-i18n="Create personalized learning paths for your business units">
                        Create personalized learning paths for your business units
                    </p>
                    <div class="col-md-12 pl-0 pr-1 pr-lg-5 description-text" style="">
                        <p class="text-size-20 text-size-m-16" style="margin-bottom: 30px;"
                            data-i18n="Our world class linguists will tailor the content to your business needs to give your employees that extra advantage by learning the vocabulary and expressions that are applicable to their daily work context.">
                            Our world class linguists will tailor the content to your business needs to give your
                            employees that extra advantage by learning the vocabulary and expressions that are
                            applicable to their daily work context.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 text-xs-center p-0 line-mar-b mb-md-0">
                <img src="https://vn.elsaspeak.com/wp-content/themes/theme-b2b-package-promotion/assets/img/personnalize_learning.png"
                    class="personnalize_learning_img d-none d-lg-block" />
                <img src="https://vn.elsaspeak.com/wp-content/themes/theme-b2b-package-promotion/assets/img/personnalize_learning_m.png"
                    class="personnalize_learning_img d-lg-none" />
            </div>
        </div>
        <img src="https://vn.elsaspeak.com/wp-content/themes/theme-b2b-package-promotion/assets/img/line_m.svg"
            class="d-lg-none d-xs-inline-flex" />
        <img src="https://vn.elsaspeak.com/wp-content/themes/theme-b2b-package-promotion/assets/img/line3.svg"
            class="line-3 d-none d-lg-inline-flex" />
        <div class="row text-left">
            <div
                class="col-lg-6 col-md-12 order-lg-first mt-md-dashboard order-last text-xs-center text-right p-0 line-mar-b">
                <img src="https://vn.elsaspeak.com/wp-content/themes/theme-b2b-package-promotion/assets/img/dash_board.png"
                    class="dash_board d-none d-lg-block" />
                <img src="https://vn.elsaspeak.com/wp-content/themes/theme-b2b-package-promotion/assets/img/dash_board_m.png?t=13"
                    class="dash_board d-lg-none" />
            </div>
            <div class="col-lg-6 col-md-12 text-xs-center ">
                <div class="pt-md-measure line-mar-t" style="max-width: 620px;">
                    <p class="text-size-36 text-size-m-24 font-weight-600 title-space"
                        data-i18n="Measure and assess engagement with real time analytics">
                        Measure and assess engagement with real time analytics
                    </p>
                    <div class="col-md-12 pl-1 pr-1 pr-lg-5 description-text">
                        <p class="text-size-20 text-size-m-16" style="margin-bottom: 30px;"
                            data-i18n="Access the status of your learning programs and stay up-to-date with your team through detailed reporting. With a suite of management tools available on our platform, you???ll be able to get insights that will drive your organization towards long-term growth.">
                            Access the status of your learning programs and stay up-to-date with your team through
                            detailed reporting. With a suite of management tools available on our platform, you???ll be
                            able to get insights that will drive your organization towards long-term growth.
                        </p>
                    </div>
                    <a class="btn btn-primary button-blue d-none d-lg-block keep-param"
                        style="padding: 13px 65px; margin-top: -4px; max-width: 378px;" href="#goi-san-pham"
                        role="button" data-i18n="Register Now">Register Now</a>
                </div>
                <img src="https://vn.elsaspeak.com/wp-content/themes/theme-b2b-package-promotion/assets/img/blue_bg_2.svg"
                    class="d-none d-sm-block" style="width: 309px; position: absolute; right: 2px; top: -250px;" />
            </div>
        </div>
        <section class="deal pt-5 pb-5" id="goi-san-pham">
            <p class="text-size-36 text-size-m-24 font-weight-600 m-auto mb-0"
                data-i18n="DISCOUNT FOR THE BUSINESS PACKAGE">GI?? GI???M B???T NG??? KHI ????NG K?? G??I
                DOANH NGHI???P</p>
            <p class="text-size-16 mt-2 mb-4"><span
                    data-i18n="Promotion offer is sold as package, cannot be replaced / exchanged with any other items or additional discounts.">??u
                    ????i ???????c ??p d???ng theo g??i, kh??ng thay th??? hay trao ?????i v???i b???t k???
                    g??i
                    h???c n??o
                    kh??c ho???c gi???m gi?? th??m. </span><br>
                <b data-i18n=" ">H??nh th???c tri???n khai:</b> <span
                    data-i18n="ELSA???s account management team will activate accounts, set up the Dashboard and Testing system, no self-activation required.">ELSA
                    s??? tr???c ti???p k??ch ho???t m?? t??i kho???n v?? c??i ?????t cho kh??ch
                    h??ng
                    ????ng k?? </span><br>
                <b data-i18n="Validity: July 31, 2021">Ch????ng tr??nh ??p d???ng ?????n: 31/07/2021</b>
            </p>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 mb-3">
                        <div class="card p-3 pb-5">
                            <div class="card-title m-0">
                                <p class="text-left m-0 text-white font-weight-bold text-size-36 pb-2"
                                    data-i18n="COMBO 6 MONTHS">
                                    COMBO 6 TH??NG
                                </p>
                            </div>
                            <div class="card-content p-4">
                                <div class="card-content-bg p-3 pb-5 text-size-18">
                                    <div class="row mb-2 pl-3 pr-3">
                                        <div class="p-0 col-4 d-flex align-items-center text-left font-weight-600">
                                            <p>ELSA Pro</p>
                                        </div>
                                        <div class="card-right col-8 pl-4 pr-0 m-0 d-flex justify-content-between">
                                            <p class="text-size-18 m-0 translate-custom"><del>589.000 ??</del></p>
                                            <p class="color-blue font-weight-600">441.750 ??/<span class="text-size-12"
                                                    data-i18n="user">h???c vi??n</span></p>
                                        </div>
                                    </div>
                                    <div class="row mb-2 pl-3 pr-3">
                                        <div class="p-0 col-5 d-flex align-items-center text-left font-weight-600">
                                            <p>ELSA Dashboard</p>
                                        </div>
                                        <div class="card-right col-7 pl-0 pr-0 m-0 d-flex justify-content-between">
                                            <p class="text-size-18 m-0"><del>139.800 ??</del></p>
                                            <p class="color-blue font-weight-600">69.900 ??/<span class="text-size-12"
                                                    data-i18n="user">h???c vi??n</span></p>
                                        </div>
                                    </div>
                                    <div class="row mb-2 pl-3 pr-3">
                                        <div class="p-0 col-5 d-flex align-items-center text-left font-weight-600">
                                            <p>Testing Platform</p>
                                        </div>
                                        <div class="card-right col-7 pl-0 pr-0 m-0 d-flex justify-content-between">
                                            <p class="text-size-18 m-0"><del>80.000 ??/</del><span class="text-size-12"
                                                    data-i18n="test">b??i
                                                    test</span></p>
                                            <p class="color-blue font-weight-600" data-i18n="Free">Mi???n ph??</p>
                                        </div>
                                    </div>
                                    <!-- <div class="row mb-2 pl-3 pr-3">
                                        <div class="p-0 col-6 text-left font-weight-600">
                                            <p>Testing Platform</p>
                                        </div>
                                        <div class="p-0 col-6 text-right d-flex align-items-center justify-content-end">
                                            <p class="color-blue font-weight-600">80.000 ??</p>
                                        </div>
                                    </div> -->
                                    <div class="border-top border-bottom pt-2 pb-2">
                                        <div class="row mb-2 pl-3 pr-3">
                                            <div class="p-0 col-9 text-left font-weight-600">
                                                <p class="font-weight-600" data-i18n="Number of user">S??? l?????ng h???c
                                                    vi??n</p>
                                            </div>
                                            <div class="p-0 col-3 text-right">
                                                <p class="color-blue font-weight-600">20</p>
                                            </div>
                                        </div>
                                        <div class="row mb-2 pl-3 pr-3">
                                            <div class="p-0 col-9 text-left font-weight-600">
                                                <p class="font-weight-600" data-i18n="Number of test">S??? l?????ng b??i test
                                                </p>
                                            </div>
                                            <div class="p-0 col-3 text-right">
                                                <p class="color-blue font-weight-600">20</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="total mt-3 pt-3">
                                        <p class="font-weight-bold text-size-24 m-0" data-i18n="TOTAL">GI?? T???NG</p>
                                        <p class="price color-blue m-0 font-weight-bold text-size-36">10.233.000 ??</p>
                                        <p class="text-size-16 m-0  "><del>16.176.000 ??</del></p>
                                        <p class="tietkiem"><span class="text-size-16" data-i18n="Save">Ti???t ki???m
                                            </span><span class="text-size-20 font-weight-600"> 37%</span></p>
                                    </div>
                                </div>
                            </div>
                            <div style="margin: 0 auto;">
                                <a class="btn btn-primary button-blue d-lg-block keep-param"
                                    style="width: 378px; padding: 13px 65px; margin-top: -4px; max-width: 378px;"
                                    data-i18n="Register Now" onclick="selectPackage('six_months_free_testing_platform')"
                                    data-toggle="modal" data-target="#exampleModal">????ng
                                    k?? ngay</a>
                            </div>

                        </div>
                    </div>
                    <div class="col-12 col-md-6 mb-3">
                        <div class="card p-3 pb-5">
                            <div class="card-title m-0">
                                <p class="text-left m-0 text-white font-weight-bold text-size-36 pb-2"
                                    data-i18n="COMBO 1 YEAR">
                                    COMBO 1 N??M
                                </p>
                            </div>
                            <div class="card-content p-4">
                                <div class="card-content-bg p-3 pb-5 text-size-18">
                                    <div class="row mb-2 pl-3 pr-3">
                                        <div class="p-0 col-4 d-flex align-items-center text-left font-weight-600">
                                            <p>ELSA Pro</p>
                                        </div>
                                        <div class="card-right col-8 pl-4 pr-0 m-0 d-flex justify-content-between">
                                            <p class="text-size-18 m-0 translate-custom"><del>989.000 ??</del></p>
                                            <p class="color-blue font-weight-600">672.300 ??/<span class="text-size-12"
                                                    data-i18n="user">h???c vi??n</span></p>
                                        </div>
                                    </div>
                                    <div class="row mb-2 pl-3 pr-3">
                                        <div class="p-0 col-5 d-flex align-items-center text-left font-weight-600">
                                            <p>ELSA Dashboard</p>
                                        </div>
                                        <div class="card-right col-7 pl-0 pr-0 m-0 d-flex justify-content-between">
                                            <p class="text-size-18 m-0"><del>279.600 ??</del></p>
                                            <p class="color-blue font-weight-600">139.800 ??/<span class="text-size-12"
                                                    data-i18n="user">h???c vi??n</span></p>
                                        </div>
                                    </div>
                                    <div class="row mb-2 pl-3 pr-3">
                                        <div class="p-0 col-5 d-flex align-items-center text-left font-weight-600">
                                            <p>Testing Platform</p>
                                        </div>
                                        <div class="card-right col-7 pl-0 pr-0 m-0 d-flex justify-content-between">
                                            <p class="text-size-18 m-0"><del>80.000 ??/</del><span class="text-size-12"
                                                    data-i18n="test">b??i
                                                    test</span></p>
                                            <p class="color-blue font-weight-600" data-i18n="Free">Mi???n ph??</p>
                                        </div>
                                    </div>
                                    <!-- <div class="row mb-2 pl-3 pr-3">
                                        <div class="p-0 col-6 text-left font-weight-600">
                                            <p>Testing Platform</p>
                                        </div>
                                        <div class="p-0 col-6 text-right d-flex align-items-center justify-content-end">
                                            <p class="color-blue font-weight-600">80.000 ??</p>
                                        </div>
                                    </div> -->
                                    <div class="border-top border-bottom pt-2 pb-2">
                                        <div class="row mb-2 pl-3 pr-3">
                                            <div class="p-0 col-9 text-left font-weight-600">
                                                <p class="font-weight-600" data-i18n="Number of user">S??? l?????ng h???c
                                                    vi??n</p>
                                            </div>
                                            <div class="p-0 col-3 text-right">
                                                <p class="color-blue font-weight-600">20</p>
                                            </div>
                                        </div>
                                        <div class="row mb-2 pl-3 pr-3">
                                            <div class="p-0 col-9 text-left font-weight-600">
                                                <p class="font-weight-600" data-i18n="Number of test">S??? l?????ng b??i test
                                                </p>
                                            </div>
                                            <div class="p-0 col-3 text-right">
                                                <p class="color-blue font-weight-600">20</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="total mt-3 pt-3">
                                        <p class="font-weight-bold text-size-24 m-0" data-i18n="TOTAL">GI?? T???NG</p>
                                        <p class="price color-blue m-0 font-weight-bold text-size-36">16.642.000 ??</p>
                                        <p class="text-size-16 m-0  "><del>26.972.000 ??</del></p>
                                        <p class="tietkiem"><span class="text-size-16" data-i18n="Save">Ti???t ki???m
                                            </span><span class="text-size-20 font-weight-600"> 40%</span></p>
                                    </div>
                                </div>
                            </div>
                            <div style="margin: 0 auto;">
                                <a class="btn btn-primary button-blue d-lg-block keep-param"
                                    style="width: 378px; padding: 13px 65px; margin-top: -4px; max-width: 378px;"
                                    data-i18n="Register Now" onclick="selectPackage('one_year_free_testing_platform')"
                                    data-toggle="modal" data-target="#exampleModal">????ng
                                    k?? ngay</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="gift pt-5 pb-5">
            <p class="text-size-36 text-size-m-24 font-weight-600 m-auto mb-0"
                data-i18n="SPECIAL GIFT FOR THE BUSINESS PACKAGE">QU?? T???NG H???P D???N KHI ????NG K?? G??I DOANH NGHI???P</p>
            <p class="text-size-16 mt-2 mb-4"><span
                    data-i18n="Promotion offer is sold as package, cannot be replaced / exchanged with any other items or additional discounts.">??u
                    ????i ???????c ??p d???ng theo g??i, kh??ng thay th??? hay trao ?????i v???i b???t k???
                    g??i
                    h???c n??o
                    kh??c ho???c gi???m gi?? th??m. </span><br>
                <b data-i18n=" ">H??nh th???c tri???n khai:</b> <span
                    data-i18n="ELSA???s account management team will activate accounts, set up the Dashboard and Testing system, no self-activation required.">ELSA
                    s??? tr???c ti???p k??ch ho???t m?? t??i kho???n v?? c??i ?????t cho kh??ch
                    h??ng
                    ????ng k?? </span><br>
                <b data-i18n="Validity: July 31, 2021">Ch????ng tr??nh ??p d???ng ?????n: 31/07/2021</b>
            </p>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 mb-3">
                        <div class="card p-3 pb-5">
                            <div class="card-title m-0">
                                <p class="text-left m-0 text-white font-weight-bold text-size-36 pb-2"
                                    data-i18n="COMBO 6 MONTHS">
                                    COMBO 6 TH??NG
                                </p>
                                <div class="gift-info background-white">
                                    <img
                                        src="https://vn.elsaspeak.com/wp-content/themes/theme-b2b-package-promotion/assets/img/gift-icon.svg">
                                    <p class="m-0 ml-1 font-weight-bold text-size-24" data-i18n="Free 3 months">T???ng
                                        ngay 3 th??ng</p>
                                </div>
                            </div>
                            <div class="card-content p-4">
                                <div class="card-content-bg p-3 pb-5 text-size-18">
                                    <div class="row mb-2 pl-3 pr-3">
                                        <div class="p-0 col-4 d-flex align-items-center text-left font-weight-600">
                                            <p>ELSA Pro <br>(9 th??ng)</p>
                                        </div>
                                        <div class="card-right col-8 pl-4 pr-0 m-0 d-flex justify-content-between">
                                            <p class="text-size-18 m-0 translate-custom"><del>918.000 ??</del></p>
                                            <p class="color-blue font-weight-600">589.000 ??/<span class="text-size-12"
                                                    data-i18n="user">h???c vi??n</span></p>
                                        </div>
                                    </div>
                                    <div class="row mb-2 pl-3 pr-3">
                                        <div class="p-0 col-5 d-flex align-items-center text-left font-weight-600">
                                            <p>ELSA Dashboard <br>(9 th??ng)</p>
                                        </div>
                                        <div class="card-right col-7 pl-0 pr-0 m-0 d-flex justify-content-between">
                                            <p class="text-size-18 m-0"><del>209.700 ??</del></p>
                                            <p class="color-blue font-weight-600">139.800 ??/<span class="text-size-12"
                                                    data-i18n="user">h???c vi??n</span></p>
                                        </div>
                                    </div>
                                    <div class="row mb-2 pl-3 pr-3">
                                        <div class="p-0 col-5 d-flex align-items-center text-left font-weight-600">
                                            <p>Testing Platform</p>
                                        </div>
                                        <div class="card-right col-7 pl-0 pr-0 m-0 d-flex justify-content-between">
                                            <p class="text-size-18 m-0"><del>80.000 ??/</del><span class="text-size-12"
                                                    data-i18n="test">b??i
                                                    test</span></p>
                                            <p class="color-blue font-weight-600" data-i18n="Free">Mi???n ph??</p>
                                        </div>
                                    </div>
                                    <!-- <div class="row mb-2 pl-3 pr-3">
                                        <div class="p-0 col-6 text-left font-weight-600">
                                            <p>Testing Platform</p>
                                        </div>
                                        <div class="p-0 col-6 text-right d-flex align-items-center justify-content-end">
                                            <p class="color-blue font-weight-600">80.000 ??</p>
                                        </div>
                                    </div> -->
                                    <div class="border-top border-bottom pt-2 pb-2">
                                        <div class="row mb-2 pl-3 pr-3">
                                            <div class="p-0 col-9 text-left font-weight-600">
                                                <p class="font-weight-600" data-i18n="Number of user">S??? l?????ng h???c
                                                    vi??n</p>
                                            </div>
                                            <div class="p-0 col-3 text-right">
                                                <p class="color-blue font-weight-600">20</p>
                                            </div>
                                        </div>
                                        <div class="row mb-2 pl-3 pr-3">
                                            <div class="p-0 col-9 text-left font-weight-600">
                                                <p class="font-weight-600" data-i18n="Number of test">S??? l?????ng b??i test
                                                </p>
                                            </div>
                                            <div class="p-0 col-3 text-right">
                                                <p class="color-blue font-weight-600">20</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="total mt-3 pt-3">
                                        <p class="font-weight-bold text-size-24 m-0" data-i18n="TOTAL">GI?? T???NG</p>
                                        <p class="price color-blue m-0 font-weight-bold text-size-36">14.576.000 ??</p>
                                        <p class="text-size-16 m-0  "><del>24,154,000 ??</del></p>
                                        <p class="tietkiem"><span class="text-size-16" data-i18n="Save">Ti???t ki???m
                                            </span><span class="text-size-20 font-weight-600"> 40%</span></p>
                                    </div>
                                </div>
                            </div>
                            <div style="margin: 0 auto;">
                                <a class="btn btn-primary button-blue d-lg-block keep-param"
                                    style="width: 378px; padding: 13px 65px; margin-top: -4px; max-width: 378px;"
                                    data-i18n="Register Now" onclick="selectPackage('six_months_free_three_months')"
                                    data-toggle="modal" data-target="#exampleModal">????ng
                                    k?? ngay</a>
                            </div>

                        </div>
                    </div>
                    <div class="col-12 col-md-6 mb-3">
                        <div class="card p-3 pb-5">
                            <div class="card-title m-0">
                                <p class="text-left m-0 text-white font-weight-bold text-size-36 pb-2"
                                    data-i18n="COMBO 1 YEAR">
                                    COMBO 1 N??M
                                </p>
                                <div class="gift-info background-white">
                                    <img
                                        src="https://vn.elsaspeak.com/wp-content/themes/theme-b2b-package-promotion/assets/img/gift-icon.svg">
                                    <p class="m-0 ml-1 font-weight-bold text-size-24" data-i18n="Free 6 months">T???ng
                                        ngay 6 th??ng</p>
                                </div>
                            </div>
                            <div class="card-content p-4">
                                <div class="card-content-bg p-3 pb-5 text-size-18">
                                    <div class="row mb-2 pl-3 pr-3">
                                        <div class="p-0 col-4 d-flex align-items-center text-left font-weight-600">
                                            <p>ELSA Pro <br>(1,5 n??m)</p>
                                        </div>
                                        <div class="card-right col-8 pl-4 pr-0 m-0 d-flex justify-content-between">
                                            <p class="text-size-18 m-0 translate-custom2"><del>1.978.000 ??</del></p>
                                            <p class="color-blue font-weight-600">989.000 ??/<span class="text-size-12"
                                                    data-i18n="user">h???c vi??n</span></p>
                                        </div>
                                    </div>
                                    <div class="row mb-2 pl-3 pr-3">
                                        <div class="p-0 col-5 d-flex align-items-center text-left font-weight-600">
                                            <p>ELSA Dashboard <br>(1,5 n??m)</p>
                                        </div>
                                        <div class="card-right col-7 pl-0 pr-0 m-0 d-flex justify-content-between">
                                            <p class="text-size-18 m-0"><del>419.400 ??</del></p>
                                            <p class="color-blue font-weight-600">279.600 ??/<span class="text-size-12"
                                                    data-i18n="user">h???c vi??n</span></p>
                                        </div>
                                    </div>
                                    <div class="row mb-2 pl-3 pr-3">
                                        <div class="p-0 col-5 d-flex align-items-center text-left font-weight-600">
                                            <p>Testing Platform</p>
                                        </div>
                                        <div class="card-right col-7 pl-0 pr-0 m-0 d-flex justify-content-between">
                                            <p class="text-size-18 m-0"><del>80.000 ??/</del><span class="text-size-12"
                                                    data-i18n="test">b??i
                                                    test</span></p>
                                            <p class="color-blue font-weight-600" data-i18n="Free">Mi???n ph??</p>
                                        </div>
                                    </div>

                                    <div class="border-top border-bottom pt-2 pb-2">
                                        <div class="row mb-2 pl-3 pr-3">
                                            <div class="p-0 col-9 text-left font-weight-600">
                                                <p class="font-weight-600" data-i18n="Number of user">S??? l?????ng h???c
                                                    vi??n</p>
                                            </div>
                                            <div class="p-0 col-3 text-right">
                                                <p class="color-blue font-weight-600">20</p>
                                            </div>
                                        </div>
                                        <div class="row mb-2 pl-3 pr-3">
                                            <div class="p-0 col-9 text-left font-weight-600">
                                                <p class="font-weight-600" data-i18n="Number of test">S??? l?????ng b??i test
                                                </p>
                                            </div>
                                            <div class="p-0 col-3 text-right">
                                                <p class="color-blue font-weight-600">50</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="total mt-3 pt-3">
                                        <p class="font-weight-bold text-size-24 m-0" data-i18n="TOTAL">GI?? T???NG</p>
                                        <p class="price color-blue m-0 font-weight-bold text-size-36">25.372.000 ??</p>
                                        <p class="text-size-16 m-0  "><del>43,948,000 ??</del></p>
                                        <p class="tietkiem"><span class="text-size-16" data-i18n="Save">Ti???t ki???m
                                            </span><span class="text-size-20 font-weight-600"> 42%</span></p>
                                    </div>
                                </div>
                            </div>
                            <div style="margin: 0 auto;">
                                <a class="btn btn-primary button-blue d-lg-block keep-param"
                                    style="width: 378px; padding: 13px 65px; margin-top: -4px; max-width: 378px;"
                                    data-i18n="Register Now" onclick="selectPackage('one_year_free_six_months')"
                                    data-toggle="modal" data-target="#exampleModal">????ng
                                    k?? ngay</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="elsa-by-number">
            <div class="row text-center elsa-with-number">
                <div class="col-12">
                    <p class="text-size-36 text-size-m-24 font-weight-600 title-number" data-i18n="ELSA by the numbers">
                        ELSA by the numbers
                    </p>
                    <div class="col-md-12 mx-auto" style="max-width: 478px;">
                        <p class="text-size-20 font-weight-400 text-size-m-16 mb-2 mb-md-3"
                            style="opacity: 0.8; mix-blend-mode: normal;"
                            data-i18n="Learners that use ELSA regularly reported significant improvement in their communication and productivity.*">
                            Learners that use ELSA regularly reported significant improvement in their communication and
                            productivity.*
                        </p>
                    </div>
                </div>
            </div>
            <div class="row text-center text-white group-image-num container">
                <div class="col-lg-4 col-md-12 mt-auto ">
                    <div class="number-box">
                        <img src="https://vn.elsaspeak.com/wp-content/themes/theme-b2b-package-promotion/assets/img/spaceship.png"
                            class="icon" />
                        <p class="font-weight-600 mb-2 mt-3 percentage" style="color: #0099FF;">
                            90%
                        </p>
                        <p class="text-size-20 text-size-m-16 mb-1 mb-lg-3"
                            data-i18n="Saw an improvement in pronunciation">
                            Saw an improvement in pronunciation
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 mt-auto ">
                    <div class="number-box">
                        <img src="https://vn.elsaspeak.com/wp-content/themes/theme-b2b-package-promotion/assets/img/smile.png"
                            class="icon" />
                        <p class="font-weight-600 mb-2 mt-3 percentage" style="color: #00BB13;">
                            68%
                        </p>
                        <p class="text-size-20 text-size-m-16 mb-1 mb-lg-3" data-i18n="Felt they spoke more clearly">
                            Felt they spoke more clearly
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 mt-auto ">
                    <div class="number-box">
                        <img src="https://vn.elsaspeak.com/wp-content/themes/theme-b2b-package-promotion/assets/img/trend-up.png"
                            class="icon" />
                        <p class="font-weight-600 mb-2 mt-3 percentage" style="color: #FF9518;">
                            95%
                        </p>
                        <p class="text-size-20 text-size-m-16 mb-1 mb-lg-3"
                            data-i18n="Expressed higher confidence in speaking english">
                            Expressed higher confidence in speaking english
                        </p>
                    </div>
                </div>
            </div>
            <p class="text-size-14 text-white font-weight-400 pt-4 text-center text-size-m-12 d-none d-lg-block"
                style="opacity: 0.7; mix-blend-mode: normal;"
                data-i18n="(*Based on learners who use ELSA for 10 minutes a day for three months.)">
                (*Based on learners who use ELSA for 10 minutes a day for three months.)
            </p>
            <div class="row text-center text-white elsa_number_text">
                <div class="col-lg-3 col-md-12 mt-auto">
                    <p class="text-size-22 text-size-m-16 mb-1 mb-lg-3" style="opacity: 0.8;"
                        data-i18n="Proudly serves">
                        Proudly serves
                    </p>
                    <p class="text-size-24 text-size-m-20 font-weight-600 font-weight-m-500 mb-1 mb-lg-3"
                        data-i18n="13 million users">
                        13 million users
                    </p>
                </div>
                <div class="col-lg-1 d-none d-lg-block">
                    <hr style="background: #C4C4C4; opacity: 0.2; width: 1px; height: 60px;" />
                </div>
                <hr class="d-lg-none" style="background: #C4C4C4; opacity: 0.2; height: 1px; width: 60px;" />
                <div class="col-lg-4 col-md-12 mt-auto">
                    <p class="text-size-24 text-size-m-20 font-weight-600 font-weight-m-500 mb-1 mb-lg-3"
                        data-i18n="#1 recommended">
                        #1 recommended
                    </p>
                    <p class="text-size-22 text-size-m-16 mb-1 mb-lg-3" style="opacity: 0.8;"
                        data-i18n="by ESL teachers world wide">
                        by ESL teachers world wide
                    </p>
                </div>
                <div class="col-lg-1 d-none d-lg-block">
                    <hr style="background: #C4C4C4; opacity: 0.2; width: 1px; height: 60px;" />
                </div>
                <hr class="d-lg-none" style="background: #C4C4C4; opacity: 0.2; height: 1px; width: 60px;" />
                <div class="col-lg-3 col-md-12 mt-auto ">
                    <p class="text-size-24 text-size-m-20 font-weight-600 font-weight-m-500 mb-1 mb-lg-3"
                        data-i18n="300M exercises">
                        300M exercises
                    </p>
                    <p class="text-size-22 text-size-m-16" style="opacity: 0.8;" data-i18n="practiced">
                        practiced
                    </p>
                </div>
            </div>
        </div>
        <div class="row text-center improve-communica">
            <div class="col-md-12">
                <p class="text-size-36 text-size-m-24 font-weight-600 title-space m-auto"
                    data-i18n="How ELSA helps improve communication effectiveness and business results">
                    How ELSA helps improve communication effectiveness and business results
                </p>
                <div class="col-md-12 pl-1 pr-1 pr-lg-5 description-text m-auto">
                    <p class="text-size-20 text-size-m-16" style="padding-bottom: 15px; opacity: 0.8;"
                        data-i18n="ELSA offers a diverse and updated content and resources to improve people's English pronunciation in a short period of time">
                        ELSA offers a diverse and updated content and resources to improve people's English
                        pronunciation in a short period of time
                    </p>
                </div>
                <img src="https://vn.elsaspeak.com/wp-content/themes/theme-b2b-package-promotion/assets/img/yellow_bg_2.svg"
                    class="d-none d-sm-block"
                    style="width: 243px; position: absolute; left: 2px; margin-top: -200px;" />
            </div>
        </div>
        <div class="row text-left bulllet-slice-sec desktop">
            <div class="col-lg-6 col-md-12">
                <div class="row margin-left-30">
                    <div class="row pt-4 pb-4 item-slide-width ml-0 mr-0 item-0 back-ground-active"
                        data-target="#slider" data-slide-to="0">
                        <div class="icon col-md-2 text-xs-left text-md-center mb-3 mt-md-3">
                            <img src="https://vn.elsaspeak.com/wp-content/themes/theme-b2b-package-promotion/assets/img/instant_icon.svg"
                                class="icon-inactive" style="width: 34px; display: none;" />
                            <img src="https://vn.elsaspeak.com/wp-content/themes/theme-b2b-package-promotion/assets/img/instant_icon_active.svg"
                                class="icon-active" style="width: 34px;" />
                        </div>
                        <div class="col-md-10 pl-md-0">
                            <p class="text-size-20 text-size-m-18 font-weight-600 mb-2 title-item title-active"
                                data-i18n="Instant and precise pronunciation feedback">
                                Instant and precise pronunciation feedback
                            </p>
                            <p class="text-size-20 text-size-m-16 mb-0" style="opacity: 0.8;"
                                data-i18n="ELSA's proprietary voice recognition technology, ranked among the top 5 artificial intelligence apps, pinpoint exactly what learners need to improve from individual sounds to intonation and fluency.">
                                ELSA's proprietary voice recognition technology, ranked among the top 5 artificial
                                intelligence apps, pinpoint exactly what learners need to improve from individual sounds
                                to intonation and fluency.
                            </p>
                        </div>
                    </div>
                    <div class="row pt-4 pb-4 item-slide-width ml-0 mr-0 item-1" data-target="#slider"
                        data-slide-to="1">
                        <div class="icon col-md-2 text-xs-left text-md-center mb-3 mt-md-3">
                            <img src="https://vn.elsaspeak.com/wp-content/themes/theme-b2b-package-promotion/assets/img/rec_icon.svg"
                                class="icon-inactive" style="width: 34px;" />
                            <img src="https://vn.elsaspeak.com/wp-content/themes/theme-b2b-package-promotion/assets/img/rec_icon_active.svg"
                                class="icon-active" style="width: 34px; display: none;" />
                        </div>
                        <div class="col-md-10 pl-md-0">
                            <p class="text-size-20 text-size-m-18 font-weight-600 mb-2 title-item"
                                data-i18n="Recommended lessons and features">
                                Recommended lessons and features
                            </p>
                            <p class="text-size-20 text-size-m-16 mb-0" style="opacity: 0.8;"
                                data-i18n="Relevant, updated content and features can help you find interesting lessons and improve quickly">
                                Relevant, updated content and features can help you find interesting lessons and improve
                                quickly
                            </p>
                        </div>
                    </div>
                    <div class="row pt-4 pb-4 item-slide-width item-2 ml-0 mr-0" data-target="#slider"
                        data-slide-to="2">
                        <div class="icon col-md-2 text-xs-left text-md-center mb-3 mt-md-3">
                            <img src="https://vn.elsaspeak.com/wp-content/themes/theme-b2b-package-promotion/assets/img/explore_icon.svg"
                                class="icon-inactive" style="width: 34px;" />
                            <img src="https://vn.elsaspeak.com/wp-content/themes/theme-b2b-package-promotion/assets/img/explore_icon_active.svg"
                                class="icon-active" style="width: 34px; display: none;" />
                        </div>
                        <div class="col-md-10 pl-md-0">
                            <p class="text-size-20 text-size-m-18 font-weight-600 mb-2 title-item"
                                data-i18n="Explore more than 60 topics">
                                Explore more than 60 topics
                            </p>
                            <p class="text-size-20 text-size-m-16 mb-0" style="opacity: 0.8;"
                                data-i18n="Variety of topics ranging from Daily Conversation to Work and Career have help millions of users improve daily life and industry vocabulary">
                                Variety of topics ranging from Daily Conversation to Work and Career have help millions
                                of users improve daily life and industry vocabulary
                            </p>
                        </div>
                    </div>
                    <div class="row pt-4 pb-4 item-slide-width item-3 ml-0 mr-0" data-target="#slider"
                        data-slide-to="3">
                        <div class="icon col-md-2 text-xs-left text-md-center mb-3 mt-md-3">
                            <img src="https://vn.elsaspeak.com/wp-content/themes/theme-b2b-package-promotion/assets/img/pronu_icon.svg"
                                class="icon-inactive" style="width: 34px;" />
                            <img src="https://vn.elsaspeak.com/wp-content/themes/theme-b2b-package-promotion/assets/img/pronu_icon_active.svg"
                                class="icon-active" style="width: 34px; display: none;" />
                        </div>
                        <div class="col-md-10 pl-md-0">
                            <p class="text-size-20 text-size-m-18 font-weight-600 mb-2 title-item"
                                data-i18n="Different pronunciation practice types">
                                Different pronunciation practice types
                            </p>
                            <p class="text-size-20 text-size-m-16 mb-0" style="opacity: 0.8;"
                                data-i18n="Multiple game types to help you focus on a specific skill, resulting in faster improvement">
                                Multiple game types to help you focus on a specific skill, resulting in faster
                                improvement
                            </p>
                        </div>
                    </div>
                    <div class="row pt-4 pb-4 item-slide-width item-4 ml-0 mr-0" data-target="#slider"
                        data-slide-to="4">
                        <div class="icon col-md-2 text-xs-left text-md-center mb-3 mt-md-3">
                            <img src="https://vn.elsaspeak.com/wp-content/themes/theme-b2b-package-promotion/assets/img/dic_icon.svg"
                                class="icon-inactive" style="width: 34px;" />
                            <img src="https://vn.elsaspeak.com/wp-content/themes/theme-b2b-package-promotion/assets/img/dic_icon_active.svg"
                                class="icon-active" style="width: 34px; display: none;" />
                        </div>
                        <div class="col-md-10 pl-md-0">
                            <p class="text-size-20 text-size-m-18 font-weight-600 mb-2 title-item"
                                data-i18n="Dictionary Function">
                                Dictionary Function
                            </p>
                            <p class="text-size-20 text-size-m-16 mb-0" style="opacity: 0.8;"
                                data-i18n="Speak any word and get instant feedback to improve your pronunciation and speaking skill">
                                Speak any word and get instant feedback to improve your pronunciation and speaking skill
                            </p>
                        </div>
                    </div>
                    <div class="row pt-4 pb-4 item-slide-width item-5 ml-0 mr-0" data-target="#slider"
                        data-slide-to="5">
                        <div class="icon col-md-2 text-xs-left text-md-center mb-3 mt-md-3">
                            <img src="https://vn.elsaspeak.com/wp-content/themes/theme-b2b-package-promotion/assets/img/daily_icon.svg"
                                class="icon-inactive" style="width: 34px;" />
                            <img src="https://vn.elsaspeak.com/wp-content/themes/theme-b2b-package-promotion/assets/img/daily_icon_active.svg"
                                class="icon-active" style="width: 34px; display: none;" />
                        </div>
                        <div class="col-md-10 pl-md-0">
                            <p class="text-size-20 text-size-m-18 font-weight-600 mb-2 title-item"
                                data-i18n="Daily personalized lessons with Coach">
                                Daily personalized lessons with Coach
                            </p>
                            <p class="text-size-20 text-size-m-16 mb-0" style="opacity: 0.8;"
                                data-i18n="Recommended daily lessons based on your level of proficiency and interest to accelerate your improvement">
                                Recommended daily lessons based on your level of proficiency and interest to accelerate
                                your improvement
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 pt-5 mb-5 pb-4 slider-block">
                <div id="slider" class="carousel slide carousel-fade" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#slider" data-slide-to="0" class="active"></li>
                        <li data-target="#slider" data-slide-to="1"></li>
                        <li data-target="#slider" data-slide-to="2"></li>
                        <li data-target="#slider" data-slide-to="3"></li>
                        <li data-target="#slider" data-slide-to="4"></li>
                        <li data-target="#slider" data-slide-to="5"></li>
                    </ol>

                    <div class="carousel-inner m-auto">
                        <div class="carousel-item active">
                            <img class="d-block w-image lazy"
                                data-src="https://vn.elsaspeak.com/wp-content/themes/theme-b2b-package-promotion/assets/img/instant_slide.png?t=12">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-image lazy"
                                data-src="https://vn.elsaspeak.com/wp-content/themes/theme-b2b-package-promotion/assets/img/rec_slide.png">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-image lazy"
                                data-src="https://vn.elsaspeak.com/wp-content/themes/theme-b2b-package-promotion/assets/img/explore_slide.png">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-image lazy"
                                data-src="https://vn.elsaspeak.com/wp-content/themes/theme-b2b-package-promotion/assets/img/pronu_slide.png">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-image lazy"
                                data-src="https://vn.elsaspeak.com/wp-content/themes/theme-b2b-package-promotion/assets/img/dic_slide.png">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-image lazy"
                                data-src="https://vn.elsaspeak.com/wp-content/themes/theme-b2b-package-promotion/assets/img/daily_slide.png">
                        </div>
                    </div>
                </div>
                <img src="https://vn.elsaspeak.com/wp-content/themes/theme-b2b-package-promotion/assets/img/blue_bg_2.svg"
                    class="d-none d-sm-block" style="width: 309px; position: absolute; right: 2px; top: 350px;" />
            </div>
        </div>
        <div id="carouselBulletImage" class="carousel slide text-center m-auto mobile carousel-fade"
            data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselBulletImage" data-slide-to="0" class="active"></li>
                <li data-target="#carouselBulletImage" data-slide-to="1"></li>
                <li data-target="#carouselBulletImage" data-slide-to="2"></li>
                <li data-target="#carouselBulletImage" data-slide-to="3"></li>
                <li data-target="#carouselBulletImage" data-slide-to="4"></li>
                <li data-target="#carouselBulletImage" data-slide-to="5"></li>
            </ol>
            <div class="carousel-inner text-center m-auto">
                <div class="carousel-item active">
                    <div class="row pt-4 pb-4 item-slide-width ml-0 mr-0 item-0">
                        <div class="icon col-md-2 text-center mb-3 mt-md-3 mx-auto">
                            <img src="https://vn.elsaspeak.com/wp-content/themes/theme-b2b-package-promotion/assets/img/instant_icon.svg"
                                class="icon-inactive" style="width: 34px;" />
                        </div>
                        <div class="col-md-10 pl-md-0 mb-4">
                            <p class="text-size-20 text-size-m-18 font-weight-600 mb-2 title-item"
                                data-i18n="Instant and precise pronunciation feedback">
                                Instant and precise pronunciation feedback
                            </p>
                            <p class="text-size-20 text-size-m-16 mb-0" style="opacity: 0.8;"
                                data-i18n="ELSA's proprietary voice recognition technology, ranked among the top 5 artificial intelligence apps, pinpoint exactly what learners need to improve from individual sounds to intonation and fluency.">
                                ELSA's proprietary voice recognition technology, ranked among the top 5 artificial
                                intelligence apps, pinpoint exactly what learners need to improve from individual sounds
                                to intonation and fluency.
                            </p>
                        </div>
                        <div class="m-auto">
                            <img class="d-block w-image lazy"
                                data-src="https://vn.elsaspeak.com/wp-content/themes/theme-b2b-package-promotion/assets/img/instant_slide.png?t=12">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row pt-4 pb-4 item-slide-width ml-0 mr-0 item-0 mx-auto">
                        <div class="icon col-12 text-center mb-3 mt-md-3 mx-auto">
                            <img src="https://vn.elsaspeak.com/wp-content/themes/theme-b2b-package-promotion/assets/img/rec_icon.svg"
                                class="icon-inactive" style="width: 34px;" />
                        </div>
                        <div class="col-12 pl-md-0 mb-4">
                            <p class="text-size-20 text-size-m-18 font-weight-600 mb-2 title-item"
                                data-i18n="Recommended lessons and features">
                                Recommended lessons and features
                            </p>
                            <p class="text-size-20 text-size-m-16 mb-0" style="opacity: 0.8;"
                                data-i18n="Relevant, updated content and features can help you find interesting lessons and improve quickly">
                                Relevant, updated content and features can help you find interesting lessons and improve
                                quickly
                            </p>
                        </div>
                        <div class="m-auto">
                            <img class="d-block w-image lazy"
                                data-src="https://vn.elsaspeak.com/wp-content/themes/theme-b2b-package-promotion/assets/img/rec_slide.png">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row pt-4 pb-4 item-slide-width ml-0 mr-0 item-0 mx-auto">
                        <div class="icon col-12 text-center mb-3 mt-md-3">
                            <img src="https://vn.elsaspeak.com/wp-content/themes/theme-b2b-package-promotion/assets/img/explore_icon.svg"
                                class="icon-inactive" style="width: 34px;" />
                        </div>
                        <div class="col-12 pl-md-0 mb-4">
                            <p class="text-size-20 text-size-m-18 font-weight-600 mb-2 title-item"
                                data-i18n="Explore more than 60 topics">
                                Explore more than 60 topics
                            </p>
                            <p class="text-size-20 text-size-m-16 mb-0" style="opacity: 0.8;"
                                data-i18n="Variety of topics ranging from Daily Conversation to Work and Career have help millions of users improve daily life and industry vocabulary">
                                Variety of topics ranging from Daily Conversation to Work and Career have help millions
                                of users improve daily life and industry vocabulary
                            </p>
                        </div>
                        <div class="m-auto">
                            <img class="d-block w-image lazy"
                                data-src="https://vn.elsaspeak.com/wp-content/themes/theme-b2b-package-promotion/assets/img/explore_slide.png">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row pt-4 pb-4 item-slide-width ml-0 mr-0 item-0 mx-auto">
                        <div class="icon col-12 text-center mb-3 mt-md-3 mx-auto">
                            <img src="https://vn.elsaspeak.com/wp-content/themes/theme-b2b-package-promotion/assets/img/pronu_icon.svg"
                                class="icon-inactive" style="width: 34px;" />
                        </div>
                        <div class="col-12 pl-md-0 mb-4">
                            <p class="text-size-20 text-size-m-18 font-weight-600 mb-2 title-item"
                                data-i18n="Different pronunciation practice types">
                                Different pronunciation practice types
                            </p>
                            <p class="text-size-20 text-size-m-16 mb-0" style="opacity: 0.8;"
                                data-i18n="Multiple game types to help you focus on a specific skill, resulting in faster improvement">
                                Multiple game types to help you focus on a specific skill, resulting in faster
                                improvement
                            </p>
                        </div>
                        <div class="m-auto">
                            <img class="d-block w-image lazy"
                                data-src="https://vn.elsaspeak.com/wp-content/themes/theme-b2b-package-promotion/assets/img/pronu_slide.png">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row pt-4 pb-4 item-slide-width ml-0 mr-0 item-0 mx-auto">
                        <div class="icon col-12 text-center mb-3 mt-md-3 mx-auto">
                            <img src="https://vn.elsaspeak.com/wp-content/themes/theme-b2b-package-promotion/assets/img/dic_icon.svg"
                                class="icon-inactive" style="width: 34px;" />
                        </div>
                        <div class="col-12 pl-md-0 mb-4">
                            <p class="text-size-20 text-size-m-18 font-weight-600 mb-2 title-item"
                                data-i18n="Dictionary Function">
                                Dictionary Function
                            </p>
                            <p class="text-size-20 text-size-m-16 mb-0" style="opacity: 0.8;"
                                data-i18n="Speak any word and get instant feedback to improve your pronunciation and speaking skill">
                                Speak any word and get instant feedback to improve your pronunciation and speaking skill
                            </p>
                        </div>
                        <div class="m-auto">
                            <img class="d-block w-image lazy"
                                data-src="https://vn.elsaspeak.com/wp-content/themes/theme-b2b-package-promotion/assets/img/dic_slide.png">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row pt-4 pb-4 item-slide-width ml-0 mr-0 item-0 mx-auto">
                        <div class="icon col-12 text-center mb-3 mt-md-3 mx-auto">
                            <img src="https://vn.elsaspeak.com/wp-content/themes/theme-b2b-package-promotion/assets/img/daily_icon.svg"
                                class="icon-inactive" style="width: 34px;" />
                        </div>
                        <div class="col-12 pl-md-0 mb-4">
                            <p class="text-size-20 text-size-m-18 font-weight-600 mb-2 title-item"
                                data-i18n="Daily personalized lessons with Coach">
                                Daily personalized lessons with Coach
                            </p>
                            <p class="text-size-20 text-size-m-16 mb-0" style="opacity: 0.8;"
                                data-i18n="Recommended daily lessons based on your level of proficiency and interest to accelerate your improvement">
                                Recommended daily lessons based on your level of proficiency and interest to accelerate
                                your improvement
                            </p>
                        </div>
                        <div class="m-auto">
                            <img class="d-block w-image lazy"
                                data-src="https://vn.elsaspeak.com/wp-content/themes/theme-b2b-package-promotion/assets/img/daily_slide.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row see-plan-sec">
            <div class="col-md-12 pl-0 pr-0">
                <div class="see-plan">
                    <p class="text-size-36 text-size-m-24 font-weight-600 text-white" data-i18n="Ready to learn more?">
                        Ready to learn more?</p>
                    <a class="btn btn-primary button-white keep-param" href="#goi-san-pham" role="button"
                        data-i18n="See Plans">See Plans</a>
                </div>
            </div>
        </div>
        <p class="text-size-36 text-size-m-24 font-weight-600 m-auto title-partner" style="padding-top: 40px;"
            data-i18n="What our partners say">
            What our partners say
        </p>
        <div id="carouselPartner" class="carousel slide m-auto" data-ride="carousel">
            <ol class="carousel-indicators d-sm-none d-xs-inline-flex">
                <li data-target="#carouselPartner" data-slide-to="0" class="active"></li>
                <li data-target="#carouselPartner" data-slide-to="1"></li>
                <li data-target="#carouselPartner" data-slide-to="2"></li>
                <li data-target="#carouselPartner" data-slide-to="3"></li>
                <li data-target="#carouselPartner" data-slide-to="4"></li>
                <li data-target="#carouselPartner" data-slide-to="5"></li>
            </ol>
            <div class="carousel-inner m-auto text-left">
                <div class="carousel-item active">
                    <p class="text-size-20 text-size-m-18 line-height-partner text-justify" data-i18n="FPT Testimonial">
                        One of the best applications I???ve ever used! It's user friendly and has great features. Our
                        staff can practice their pronunciation skills with ELSA every day and everywhere, and that is
                        extremely helpful for us. Most of our staff said that their pronunciation skills have improved
                        since starting with ELSA Speak.
                    </p>
                    <p class="text-size-20 text-size-m-18 pt-3 mb-md-3" data-i18n="[html]FPT Testimonial By">
                        <b>Dinh Khanh Ly</b><br>Training Manager, FPT Software
                    </p>
                    <img src="https://vn.elsaspeak.com/wp-content/themes/theme-b2b-package-promotion/assets/img/fpt.png"
                        alt="" style="max-width: 185px; max-height: 50px;" />
                </div>
                <div class="carousel-item">
                    <p class="text-size-20 text-size-m-18 line-height-partner text-justify"
                        data-i18n="LINKBYNET Testimonial">
                        Probably the most useful English application that uses machine learning. People can now practice
                        their pronunciation at home and receive detailed feedback on what they need to improve.
                    </p>
                    <p class="text-size-20 text-size-m-18 pt-3 mb-md-3" data-i18n="[html]LINKBYNET Testimonial By">
                        <b>Didier Joomun</b><br>Training & Development Manager, LINKBYNET
                    </p>
                    <img src="https://vn.elsaspeak.com/wp-content/themes/theme-b2b-package-promotion/assets/img/LinkbyNet.png"
                        class="" style="max-width: 185px; max-height: 50px;" />
                </div>
                <div class="carousel-item">
                    <p class="text-size-20 text-size-m-18 line-height-partner text-justify"
                        data-i18n="RICE Testimonial">
                        As an administrator, if I am paying for this out of my own budget, I want to make sure students
                        and instructors are using it and that it???s generating results. ELSA???s dashboard allows me to do
                        this easily. I definitely feel that ELSA has been worth the money my program is spending on it.
                    </p>
                    <p class="text-size-20 text-size-m-18 pt-3 mb-md-3" data-i18n="[html]RICE Testimonial By">
                        <b>Jennifer Wilson</b><br>Director, Program in Writing & Communication
                    </p>
                    <img src="https://vn.elsaspeak.com/wp-content/themes/theme-b2b-package-promotion/assets/img/rice_university.png"
                        alt="" style="max-width: 185px; max-height: 50px;" />
                </div>
                <div class="carousel-item">
                    <p class="text-size-20 text-size-m-18 line-height-partner text-justify"
                        data-i18n="CHABOT Testimonial">
                        This is my second semester using the ELSA app instead of a textbook to teach my college ESL
                        pronunciation class, and I am so glad I made the switch! ELSA provides individualized learning
                        and practice, and I can see the difference in my students' speaking skills and confidence.
                        Students tell me they love the way it gives them personalized feedback. And since it is on their
                        phone, it is convenient for them to fit in practice between daily tasks or on breaks at work.
                        You can monitor student usage and progress on the teacher dashboard, and I found many students
                        were practicing with ELSA far more than I had assigned for homework. The team at ELSA is great
                        to work with and are quick to respond to any questions or issues. I encourage others to take the
                        leap and ditch the textbook for ESLA.
                    </p>
                    <p class="text-size-20 text-size-m-18 pt-3 mb-md-3" data-i18n="[html]CHABOT Testimonial By">
                        <b>Erika Lachenmeier</b><br>Lecturer, Chabot College (U.S.)
                    </p>
                    <img src="https://vn.elsaspeak.com/wp-content/themes/theme-b2b-package-promotion/assets/img/Chabot.png"
                        alt="" style="max-width: 185px; max-height: 50px;" />
                </div>
                <div class="carousel-item">
                    <p class="text-size-20 text-size-m-18 line-height-partner text-justify"
                        data-i18n="[html]YOLA Testimonial">
                        Thanks to ELSA, students will be exposed to new sounds and the right intonation patterns,
                        stresses and rhythms. The great thing about ELSA is you have a native speaker to listen to,
                        speak to and practice with any time of the day. <br />
                        ELSA adds incredible value to our product, hence our decision to partner with them. Their team
                        worked with us closely to test the product with key stakeholders and the stellar results of the
                        pilot gave us all the certainty we needed to partner with ELSA.
                    </p>
                    <p class="text-size-20 text-size-m-18 pt-3 mb-md-3" data-i18n="[html]YOLA Testimonial By">
                        <b>Nam Nguyen</b><br>Managing Director, Yola (English Center), Vietnam
                    </p>
                    <img src="https://vn.elsaspeak.com/wp-content/themes/theme-b2b-package-promotion/assets/img/YOLA.png"
                        alt="" style="max-width: 185px; max-height: 50px;" />
                </div>
                <div class="carousel-item">
                    <p class="text-size-20 text-size-m-18 line-height-partner text-justify"
                        data-i18n="IMAP Testimonial">
                        Since we've partnered with ELSA, the feedback has been very positive. Teachers have reported
                        improved pronunciation and they are loving how easy it is to follow and track the students'
                        progress.
                    </p>
                    <p class="text-size-20 text-size-m-18 pt-3 mb-md-3" data-i18n="[html]IMAP Testimonial By">
                        <b>Ms. Hoa Nguyen</b><br>Founder & CEO, IMAP, Vietnam
                    </p>
                    <img src="https://vn.elsaspeak.com/wp-content/themes/theme-b2b-package-promotion/assets/img/logo_IMAP.jpg"
                        alt="" style="max-width: 185px; max-height: 50px;" />
                </div>
            </div>
            <a class="carousel-control-prev desktop" href="#carouselPartner" role="button" data-slide="prev">
                <img src="https://vn.elsaspeak.com/wp-content/themes/theme-b2b-package-promotion/assets/img/prev.svg"
                    style="width: 90px;" />
            </a>
            <a class="carousel-control-next desktop" href="#carouselPartner" role="button" data-slide="next">
                <img src="https://vn.elsaspeak.com/wp-content/themes/theme-b2b-package-promotion/assets/img/next.svg"
                    style="width: 90px;" />
            </a>
        </div>
    </section>
    <style>
    .text-size-12 {
        font-size: 12px;
    }

    .footer .contact-info {
        font-size: 16px;
        line-height: 32px;
        color: #FFFFFF;
        opacity: 0.8;
        padding-left: 150px;
    }

    .desktop {
        display: flex;
    }

    .menu-header {
        font-weight: 500;
        font-size: 16px;
        line-height: 24px;
        padding-top: 37px;
    }

    .content-header .menu-header {
        padding-top: 0px;
    }

    .menu-header img {
        width: 143px;
    }

    .footer .nav-link {
        padding: 8px 0px !important;
    }

    .footer-bg {
        background-image: url(https://vn.elsaspeak.com/wp-content/themes/theme-b2b-package-promotion/assets/img/footer_bg.png);
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        height: 340px;
    }

    .appstore,
    .googleplay {
        height: 64px;
    }

    .text-size-16 {
        font-size: 16px;
        line-height: 28px;
    }

    .footer .text-size-18 {
        font-size: 18px;
        line-height: 28px;
    }

    .footer .text-size-20 {
        font-size: 20px;
        line-height: 32px;
    }

    .footer .text-size-22 {
        font-size: 22px;
        line-height: 32px;
    }

    .footer .text-size-24 {
        font-size: 24px;
        line-height: 36px;
    }

    .text-size-32 {
        font-size: 32px;
        line-height: 48px;
    }

    .text-size-36 {
        font-size: 36px;
        line-height: 48px;
    }

    a {
        color: #ffffff;
    }

    .align-left {
        padding-left: 150px;
    }

    .align-right {
        padding-right: 150px;
    }

    .tietkiem {
        background: #FF4B2B;
        display: inline-block;
        padding: 2px 28px;
        margin-top: 10px !important;
        border-radius: 20px;
        color: #fff;
    }

    @media (max-width: 992px) {
        .nav-link {
            padding: 0px 20px;
        }
    }

    @media (max-width: 991px) {
        .button-white {
            padding: 7px 13px;
        }

        .menu-header {
            padding-top: 25px;
        }

        .menu-header img {
            width: 112px;
        }

        .desktop {
            display: none;
        }

        .nav-link {
            padding: 10px 0px;
        }

        .footer .contact-info {
            padding-left: 15px;
        }

        .footer-bg {
            background: #121131;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: fit-content;
        }

        .appstore,
        .googleplay {
            height: 45px;
        }

        .text-xs-left {
            text-align: left !important;
        }

        .text-xs-center {
            text-align: center !important;
        }

        .text-size-m-16 {
            font-size: 16px;
            line-height: 24px;
        }

        .text-size-m-18 {
            font-size: 18px;
            line-height: 28px;
        }

        .text-size-m-24 {
            font-size: 24px;
            line-height: 36px;
        }

        .text-size-m-28 {
            font-size: 28px;
            line-height: 40px;
        }

        .align-left {
            padding-left: 15px;
        }

        .align-right {
            padding-right: 15px;
        }
    }
    </style>
    <!-- Footer -->
    <footer class="footer mt-auto" style="padding-top: 70px;">
        <div class="container-fluid text-center footer-bg">
            <div class="row menu-header">
                <div class="col-lg-5 col-md-12 mb-4 pb-2 mb-md-0 mt-md-2 text-left align-left">
                    <a class="keep-param" href="#" id="footer-nav-home">
                        <img src="https://vn.elsaspeak.com/wp-content/themes/theme-b2b-package-promotion/assets/img/logo_elsa_2.svg"
                            alt="logo" />
                    </a>
                </div>
                <div class="col-lg-7 col-md-12 align-right">
                    <div class="row row d-none d-lg-flex">
                        <div class="col-4 text-left font-weight-600">
                            <a class="nav-link pb-3 active keep-param" data-i18n="ELSA for Schools" href="/en/schools"
                                id="footer-nav-teams">ELSA for Schools</a>
                            <a class="nav-link active keep-param" href="#goi-san-pham" data-i18n="Plans"
                                id="footer-nav-plans">Plans</a>
                        </div>
                        <div class="col-4 text-left font-weight-600">
                            <a class="nav-link pb-3 active keep-param" href="#" data-i18n="ELSA for Enterprises"
                                id="footer-nav-enterprise">ELSA for Enterprises</a>
                            <a class="nav-link active keep-param" data-toggle="modal" data-target="#exampleModal"
                                data-i18n="Register Now" id="footer-nav-booking">Register Now</a>
                        </div>
                        <div class="col-4 text-left font-weight-600">
                            <a class="nav-link pb-3 active" href="https://elsaspeak.com/"
                                data-i18n="ELSA for Individuals" id="footer-nav-individual">ELSA for Individuals</a>
                            <a class="nav-link active" href="https://elsaspeak.biz/login" data-i18n="Partner login"
                                id="footer-nav-login">Partner login</a>
                        </div>
                    </div>
                    <div class="row d-lg-none d-xs-inline-flex">
                        <div class="col-6 text-left font-weight-600">
                            <a class="nav-link pb-3 active keep-param" href="/en/schools" data-i18n="ELSA for Schools"
                                id="footer-nav-m-teams">ELSA for Schools</a>
                            <a class="nav-link pb-3" href="https://elsaspeak.com/" data-i18n="ELSA for Individuals"
                                id="footer-nav-n-individual">ELSA for Individuals</a>
                            <a class="nav-link pb-4" href="https://blog.elsaspeak.com/en/" data-i18n="Blog"
                                id="footer-nav-m-blog">Blog</a>
                        </div>
                        <div class="col-6 text-left font-weight-600">
                            <a class="nav-link pb-3 active keep-param" href="/b2b/booking-demo"
                                data-i18n="ELSA for Enterprises" id="footer-nav-m-enterprise">ELSA for Enterprises</a>
                            <a class="nav-link pb-3 keep-param" data-toggle="modal" data-target="#exampleModal"
                                data-i18n="Register Now" id="footer-nav-m-booking">Register Now</a>
                            <a class="nav-link pb-4" href="https://elsaspeak.biz/login" data-i18n="Partner login"
                                id="footer-nav-m-login">Partner login</a>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="mt-md-4" style="background: #FFFFFF; opacity: 0.1;">
            <div class="row justify-content-center pt-md-3">
                <div class="col-lg-6 col-md-12 contact-info text-left order-md-first order-last align-left pt-lg-5">
                    <div class="contact pb-2 pb-md-0">
                        <p class="mb-1">b2bsupport@elsanow.io</p>
                        <p>Copyright ??2021 ELSA, All rights reserved</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 pb-4 text-white align-right">
                    <p class="text-size-24 text-size-m-18 text-left mb-2 font-weight-600" data-i18n="Download the app">
                        Download the app</p>
                    <ul class="list-group list-group-horizontal">
                        <li class="list-group-item pr-2 pl-0">
                            <a href="https://apps.apple.com/vn/app/elsa-learn-and-speak-english/id1083804886"
                                id="download-ios">
                                <img src="https://elsaspeak.com/wp-content/uploads/2020/12/Appstore.svg"
                                    class="appstore" />
                            </a>
                        </li>
                        <li class="list-group-item pl-2 pr-0">
                            <a href="https://play.google.com/store/apps/details?id=us.nobarriers.elsa"
                                id="download-android">
                                <img src="https://elsaspeak.com/wp-content/uploads/2020/12/GooglePlay.svg"
                                    class="googleplay" />
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script>
    $(window).scroll(function() {
        if ($(this).scrollTop() > 50) {
            $('.nav-top-fixed').addClass('shadow');
        } else {
            $('.nav-top-fixed').removeClass('shadow');
        }
    });
    </script>
    <script>
    var default_lang = _lang || 'vi';
    var version = '1.0.9';
    $(document).ready(function() {
        $.i18n({
            locale: localStorage.getItem('locale') || default_lang,
        }).load({
            'en': 'https://vn.elsaspeak.com/wp-content/themes/theme-b2b-package-promotion/assets/i18n/en.json?v=' +
                version,
            'vi': 'https://vn.elsaspeak.com/wp-content/themes/theme-b2b-package-promotion/assets/i18n/vi.json?v=' +
                version,
            'ja': 'https://vn.elsaspeak.com/wp-content/themes/theme-b2b-package-promotion/assets/i18n/ja.json?v=' +
                version,
            'es': 'https://vn.elsaspeak.com/wp-content/themes/theme-b2b-package-promotion/assets/i18n/es.json?v=' +
                version,
            'pt': 'https://vn.elsaspeak.com/wp-content/themes/theme-b2b-package-promotion/assets/i18n/pt.json?v=' +
                version,
        }).done(() => {
            $("#locallize_i18n").i18n();
            if (window.location.pathname.includes('plans')) {
                initPrice();
            }
        });
    })
    </script>
    <script>
    $(document).on('click', function() {
        $('.collapse').collapse('hide');
    })
    $('#slider').on('slide.bs.carousel', function() {
        toIndex = $('div.active').index();
        $('.item-' + toIndex).removeClass("back-ground-active")
        $('.item-' + toIndex).find('.title-item').removeClass("title-active")
        $('.item-' + toIndex).find('.icon-active').hide()
        $('.item-' + toIndex).find('.icon-inactive').show()
    })
    $('#slider').on('slid.bs.carousel', function() {
        fromIndex = $('div.active').index();
        $('.item-' + fromIndex).addClass("back-ground-active")
        $('.item-' + fromIndex).find('.title-item').addClass('title-active')
        $('.item-' + fromIndex).find('.icon-active').show()
        $('.item-' + fromIndex).find('.icon-inactive').hide()
    })
    $(function() {
        $('.lazy').Lazy();
    });
    </script>
    <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
        data-cf-settings="b2c9fa69bf21bf5a311ec2b5-|49" defer=""></script>
    <script>
    //handle selectPackage
    function selectPackage(package) {
        $('#promotion_package').val(package);
    }
    $(document).ready(function() {
        let lang = (localStorage.getItem("locale")) ? localStorage.getItem("locale") : 'vi';
        $('.elsa-form').attr('id', 'register_' + lang);
        $('#companyNameInput').keyup(function(e) {
            $('#duplicate_company_name').empty();
        });

        //Submit form
        function hanleSubmit() {
            data_post = {
                type: 'Business',
                email: $('#emailInput').val(),
                phone: $('#phoneInput').val(),
                name: $('#firstNameInput').val() + ' ' + $('#lastNameInput').val(),
                organization_name: $('#companyNameInput').val(),
                organization_size: $('#companySizeInput').val(),
                expected_number_of_learner: $('#learnerNumberInput').val(),
                phone_number: $('#phoneInput').val(),
                job_title: $('#jobInput').val(),
                note: $('#inquiryInput').val(),
                country: $('#countryInput').val(),
                utm_term: $('#utm_term').val(),
                // search: document.getElementById("elsa-search").value = window.location.search,
                promotion_package: $('#promotion_package').val(),
                //'g-recaptcha-response': v,
            }
            console.log(data_post);
            $.ajax({
                type: "POST",
                url: 'https://elsaspeak.com/api/elsab2bsolution',
                data: JSON.stringify(data_post),
                dataType: 'json',
                success: function(resp) {
                    if (resp) {
                        if (resp.success) {
                            window.location.href = 'https://vn.elsaspeak.com/thank-you/';
                        }
                        console.log(data_post);
                    }
                },
                error: function(resp) {
                    if (resp.responseJSON) {
                        let lang = (localStorage.getItem('locale')) ? localStorage.getItem(
                            'locale') : 'vi';
                        const message = (lang === 'vi') ?
                            "T??n c??ng ty ???? t???n t???i" : "Duplicate company name";
                        $('#duplicate_company_name').append(
                            `<label class="error">${message}</label>`);
                        $('#companyNameInput').focus();
                        console.log(resp.responseJSON.msg);
                    }
                }
            });
        }
        //Check number phone VN format
        $.validator.addMethod(
            "VnNumberPhone",
            function(value, element, arg) {
                const regex = /(84|0[3|5|7|8|9|2])+([0-9]{8})\b/;
                return regex.test(value);
            },
            "S??? kh??ng h???p l???"
        );

        $("#register_vi").validate({
            rules: {
                firstNameInput: {
                    required: true,
                    maxlength: 20
                },
                lastNameInput: {
                    required: true,
                    maxlength: 20
                },
                countryInput: "required",
                companyNameInput: "required",
                jobInput: "required",
                companySizeInput: {
                    required: true,
                    min: 1
                },
                learnerNumberInput: {
                    required: true,
                    min: 1
                },
                phoneInput: {
                    required: true,
                    digits: true,
                    VnNumberPhone: true,
                },
                emailInput: {
                    required: true,
                    email: true,
                }
            },

            messages: {
                firstNameInput: {
                    required: "Vui l??ng nh???p t??n",
                    maxlength: "Vui l??ng nh???p t??n ??t h??n 20 k?? t???"
                },
                lastNameInput: {
                    required: "Vui l??ng nh???p h???",
                    maxlength: "Vui l??ng nh???p h??? ??t h??n 20 k?? t???"
                },
                countryInput: "Vui l??ng nh???p qu???c gia",
                companyNameInput: "Vui l??ng nh???p t??n c??ng ty",
                jobInput: "Vui l??ng nh???p ch???c danh c???a b???n",
                companySizeInput: {
                    required: "Vui l??ng nh???p s??? nh??n vi??n c???a c??ng ty",
                    min: "Vui l??ng nh???p s??? nh??n vi??n c???a c??ng ty",
                    number: "Vui l??ng nh???p s???"
                },
                learnerNumberInput: {
                    required: "Vui l??ng nh???p s??? h???c vi??n",
                    min: "Vui l??ng nh???p s??? h???c vi??n",
                    number: "Vui l??ng nh???p s???"
                },
                phoneInput: {
                    required: "Vui l??ng nh???p s??? ??i???n tho???i",
                    digits: "Sai ?????nh d???ng",
                    VnNumberPhone: "Sai ?????nh d???ng"
                },
                emailInput: {
                    required: "Vui l??ng nh???p email",
                    email: "Sai ?????nh d???ng",
                }
            },

            submitHandler: function(form) {
                hanleSubmit();
            },
        });

        //validate form en
        $("#register_en").validate({
            rules: {
                firstNameInput: {
                    required: true,
                    maxlength: 20
                },
                lastNameInput: {
                    required: true,
                    maxlength: 20
                },
                countryInput: "required",
                companyNameInput: "required",
                jobInput: "required",
                companySizeInput: {
                    required: true,
                    min: 1
                },
                learnerNumberInput: {
                    required: true,
                    min: 1
                },
                phoneInput: {
                    required: true,
                    digits: true,
                    VnNumberPhone: true,
                },
                emailInput: {
                    required: true,
                    email: true,
                }
            },

            messages: {
                firstNameInput: {
                    required: "Please enter your first name",
                    maxlength: "Please enter your first name less than 20 characters"
                },
                lastNameInput: {
                    required: "Please enter your first name",
                    maxlength: "Please enter your last name less than 20 characters"
                },
                countryInput: "Please enter your country",
                companyNameInput: "Please enter organization name",
                jobInput: "Please enter your job title",
                companySizeInput: {
                    required: "Please enter organization size",
                    min: "Please enter organization size",
                    number: "Please enter number"
                },
                learnerNumberInput: {
                    required: "Please enter number of learners",
                    min: "Please enter number of learners",
                    number: "Please enter number"
                },
                phoneInput: {
                    required: "Please enter your phone",
                    digits: "Please enter your phone, like: +84 1234567890",
                    VnNumberPhone: "Please enter your phone, like: +84 1234567890"
                },
                emailInput: {
                    required: "Please enter email",
                    email: "Please enter right format email",
                }
            },

            submitHandler: function(form) {
                hanleSubmit();
            },
        });
    });
    </script>
</body>

</html>
