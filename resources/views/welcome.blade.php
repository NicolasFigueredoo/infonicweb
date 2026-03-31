<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Google Search Console Verification --}}
    <meta name="google-site-verification" content="CE_kdtCiDi4z1mE3zX02Y5Hu6NP2XWu0mAoFMTKOR6s">

    {{-- Google Analytics 4 --}}
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-XXXXXXXXXX"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-XXXXXXXXXX');
    </script>

    {{-- SEO --}}
    <title>{{ __('messages.seo_title') }}</title>
    <meta name="description" content="{{ __('messages.hero_subtitle') }}">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="{{ __('messages.seo_title') }}">
    <meta property="og:description" content="{{ __('messages.hero_subtitle') }}">
    <meta property="og:type" content="website">

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    {{-- Tailwind CDN --}}
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- AOS --}}
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        * {
            font-family: 'Inter', sans-serif;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            overflow-x: hidden;
        }

        #navbar {
            transition: background 0.4s ease, box-shadow 0.4s ease;
        }

        #navbar.scrolled {
            background: rgba(255, 255, 255, 0.97) !important;
            backdrop-filter: blur(12px);
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.08);
        }

        #hero {
            position: relative;
            min-height: 100svh;
            background: #0d9488;
            overflow: hidden;
            isolation: isolate;
            padding-top: 64px;
        }

        #vanta-bg {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            min-height: calc(100svh - 64px);
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 80px 24px 80px;
        }

        .hero-inner {
            width: 100%;
            max-width: 1100px;
            margin: 0 auto;
        }

        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 10px 18px;
            border-radius: 9999px;
            margin-bottom: 28px;
            font-size: 14px;
            font-weight: 600;
            color: white;
            background: rgba(255, 255, 255, 0.14);
            border: 1px solid rgba(255, 255, 255, 0.26);
            backdrop-filter: blur(8px);
        }

        .hero-title {
            font-size: clamp(2.4rem, 3vw, 5.4rem);
            line-height: 1.05;
            font-weight: 800;
            color: white;
            max-width: 980px;
            margin: 0 auto 20px;
            text-shadow: 0 2px 40px rgba(0, 0, 0, 0.18);
        }

        .hero-subtitle {
            color: rgba(255, 255, 255, 0.88);
            font-size: clamp(1rem, 2vw, 1.25rem);
            max-width: 760px;
            margin: 0 auto 34px;
            line-height: 1.7;
            font-weight: 300;
        }

        .btn-cta {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 14px 36px;
            border: 2px solid rgba(255, 255, 255, 0.8);
            border-radius: 9999px;
            color: white;
            font-weight: 600;
            font-size: 1rem;
            letter-spacing: 0.02em;
            transition: all 0.3s ease;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(8px);
            text-decoration: none;
        }

        .btn-cta:hover {
            background: white;
            color: #0d9488;
            transform: scale(1.04);
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.12);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.25);
            border-radius: 20px;
            transition: transform 0.3s ease, background 0.3s ease;
        }

        .glass-card:hover {
            transform: translateY(-6px);
            background: rgba(255, 255, 255, 0.22);
        }

        .icon-circle {
            width: 56px;
            height: 56px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.35);
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 16px;
            font-size: 1.4rem;
            color: white;
            transition: background 0.3s;
        }

        .glass-card:hover .icon-circle {
            background: rgba(255, 255, 255, 0.35);
        }

        .nav-link {
            color: #374151;
            font-weight: 500;
            font-size: 0.9rem;
            padding: 6px 2px;
            position: relative;
            transition: color 0.2s;
            text-decoration: none;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 0;
            height: 2px;
            background: #0d9488;
            transition: width 0.3s ease;
            border-radius: 2px;
        }

        .nav-link:hover {
            color: #0d9488;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .lang-dropdown {
            position: relative;
            display: flex;
            align-items: center;
        }

        .lang-dropdown-menu {
            position: absolute;
            right: 0;
            top: calc(100% + 2px);
            min-width: 150px;
            background: rgba(255, 255, 255, 0.98);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(15, 23, 42, 0.08);
            border-radius: 14px;
            box-shadow: 0 14px 38px rgba(15, 23, 42, 0.14);
            padding: 8px 0;
            z-index: 300;
            opacity: 0;
            visibility: hidden;
            transform: translateY(6px);
            pointer-events: none;
            transition: opacity .2s ease, transform .2s ease, visibility .2s ease;
        }

        .lang-dropdown:hover .lang-dropdown-menu,
        .lang-dropdown:focus-within .lang-dropdown-menu {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
            pointer-events: auto;
        }

        .lang-dropdown-menu::before {
            content: "";
            position: absolute;
            top: -10px;
            left: 0;
            right: 0;
            height: 12px;
        }

        .lang-dropdown-menu a {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 11px 16px;
            font-size: 0.92rem;
            color: #374151;
            text-decoration: none;
            transition: background .2s ease, color .2s ease;
        }

        .lang-dropdown-menu a:hover {
            background: #f0fdfa;
            color: #0d9488;
        }

        .wsp-float {
            position: fixed;
            bottom: 28px;
            right: 28px;
            width: 56px;
            height: 56px;
            background: #25D366;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 20px rgba(37, 211, 102, 0.5);
            z-index: 999;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            text-decoration: none;
        }

        .wsp-float:hover {
            transform: scale(1.1);
            box-shadow: 0 6px 28px rgba(37, 211, 102, 0.7);
        }

        #servicios {
            position: relative;
        }

        #servicios::before {
            content: "";
            position: absolute;
            inset: 0;
            background: radial-gradient(circle at top right, rgba(13, 148, 136, 0.06), transparent 28%);
            pointer-events: none;
        }

        .client-card {
            display: block;
            text-decoration: none;
        }

        .client-logo-wrap {
            height: 150px;
            border-radius: 28px;
            background: rgba(255, 255, 255, 0.72);
            border: 1px solid rgba(15, 23, 42, 0.06);
            box-shadow: 0 12px 30px rgba(15, 23, 42, 0.06);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 28px;
            transition: transform .28s ease, box-shadow .28s ease, background .28s ease;
        }

        .client-card:hover .client-logo-wrap {
            transform: translateY(-4px);
            background: rgba(255, 255, 255, 0.95);
            box-shadow: 0 18px 38px rgba(15, 23, 42, 0.10);
        }

        .client-logo {
            max-width: 180px;
            max-height: 72px;
            width: auto;
            height: auto;
            object-fit: contain;
            filter: grayscale(100%);
            opacity: 0.78;
            transition: filter .25s ease, opacity .25s ease, transform .25s ease;
        }

        .client-card:hover .client-logo {
            filter: grayscale(0%);
            opacity: 1;
            transform: scale(1.03);
        }

        #servicios article img {
            will-change: transform;
        }

        #servicios article h3 {
            letter-spacing: -0.02em;
        }


        .service-card {
            background: rgba(255, 255, 255, 0.72);
            border: 1px solid rgba(15, 23, 42, 0.06);
            border-radius: 28px;
            padding: 32px 28px;
            box-shadow: 0 12px 30px rgba(15, 23, 42, 0.06);
            transition: transform .28s ease, box-shadow .28s ease, background .28s ease;
        }

        .service-card:hover {
            transform: translateY(-6px);
            background: rgba(255, 255, 255, 0.95);
            box-shadow: 0 18px 38px rgba(15, 23, 42, 0.10);
        }

        .service-icon-wrap {
            width: 82px;
            height: 82px;
            border-radius: 22px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, rgba(13, 148, 136, 0.12), rgba(13, 148, 136, 0.22));
            border: 1px solid rgba(13, 148, 136, 0.15);
            transition: transform .28s ease, background .28s ease;
        }

        .service-card:hover .service-icon-wrap {
            transform: scale(1.04);
            background: linear-gradient(135deg, rgba(13, 148, 136, 0.16), rgba(13, 148, 136, 0.28));
        }

        .service-icon {
            font-size: 2rem;
            color: #0d9488;
        }


        .about-visual {
            background: linear-gradient(135deg, #0f172a 0%, #0d9488 55%, #14b8a6 100%);
            isolation: isolate;
        }

        .about-visual-bg {
            position: absolute;
            inset: 0;
            background:
                radial-gradient(circle at 20% 20%, rgba(255, 255, 255, 0.12), transparent 22%),
                radial-gradient(circle at 80% 30%, rgba(255, 255, 255, 0.10), transparent 18%),
                radial-gradient(circle at 70% 80%, rgba(255, 255, 255, 0.08), transparent 20%);
            z-index: 0;
        }

        .about-grid {
            position: absolute;
            inset: 0;
            background-image:
                linear-gradient(rgba(255, 255, 255, 0.07) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255, 255, 255, 0.07) 1px, transparent 1px);
            background-size: 34px 34px;
            mask-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.35));
            z-index: 0;
            opacity: .35;
        }

        .about-glow {
            position: absolute;
            border-radius: 9999px;
            filter: blur(40px);
            opacity: .55;
            animation: floatGlow 7s ease-in-out infinite;
            z-index: 0;
        }

        .about-glow-1 {
            width: 180px;
            height: 180px;
            background: rgba(255, 255, 255, 0.18);
            top: 12%;
            left: 10%;
        }

        .about-glow-2 {
            width: 220px;
            height: 220px;
            background: rgba(255, 255, 255, 0.14);
            right: 8%;
            bottom: 8%;
            animation-delay: 1.5s;
        }

        .about-node {
            position: absolute;
            width: 12px;
            height: 12px;
            background: white;
            border-radius: 9999px;
            box-shadow: 0 0 0 8px rgba(255, 255, 255, 0.08);
            z-index: 1;
            animation: pulseNode 3s ease-in-out infinite;
        }

        .about-node-1 {
            top: 20%;
            left: 18%;
        }

        .about-node-2 {
            top: 28%;
            right: 24%;
            animation-delay: .5s;
        }

        .about-node-3 {
            bottom: 26%;
            left: 28%;
            animation-delay: 1s;
        }

        .about-node-4 {
            bottom: 18%;
            right: 18%;
            animation-delay: 1.5s;
        }

        .about-node-5 {
            top: 50%;
            left: 52%;
            animation-delay: .8s;
        }

        .about-line {
            position: absolute;
            height: 2px;
            background: linear-gradient(90deg, rgba(255, 255, 255, 0.08), rgba(255, 255, 255, 0.55), rgba(255, 255, 255, 0.08));
            transform-origin: left center;
            z-index: 1;
            opacity: .8;
        }

        .about-line-1 {
            width: 220px;
            top: 22%;
            left: 18%;
            transform: rotate(18deg);
        }

        .about-line-2 {
            width: 260px;
            top: 50%;
            left: 28%;
            transform: rotate(-10deg);
        }

        .about-line-3 {
            width: 220px;
            bottom: 22%;
            left: 52%;
            transform: rotate(-18deg);
        }

        .about-line-4 {
            width: 160px;
            top: 32%;
            right: 24%;
            transform: rotate(62deg);
        }

        .about-card {
            position: absolute;
            z-index: 2;
            backdrop-filter: blur(14px);
            -webkit-backdrop-filter: blur(14px);
            background: rgba(255, 255, 255, 0.14);
            border: 1px solid rgba(255, 255, 255, 0.22);
            box-shadow: 0 18px 40px rgba(0, 0, 0, 0.18);
        }

        .about-card-main {
            left: 8%;
            bottom: 12%;
            width: min(380px, 74%);
            border-radius: 28px;
            padding: 24px;
            animation: floatCard 6s ease-in-out infinite;
        }

        .about-chip {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            font-size: .85rem;
            font-weight: 600;
            color: white;
            padding: 8px 14px;
            border-radius: 9999px;
            background: rgba(255, 255, 255, 0.10);
            border: 1px solid rgba(255, 255, 255, 0.20);
            margin-bottom: 16px;
        }

        .about-chip-dot {
            width: 8px;
            height: 8px;
            background: #4ade80;
            border-radius: 9999px;
            box-shadow: 0 0 12px rgba(74, 222, 128, 0.9);
        }

        .about-card-title {
            color: white;
            font-size: clamp(1.25rem, 2vw, 1.9rem);
            line-height: 1.15;
            font-weight: 800;
            margin-bottom: 18px;
            max-width: 280px;
        }

        .about-stats {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 12px;
        }

        .about-stat {
            padding: 14px 12px;
            border-radius: 18px;
            background: rgba(255, 255, 255, 0.10);
            border: 1px solid rgba(255, 255, 255, 0.16);
            text-align: center;
        }

        .about-stat-number {
            display: block;
            color: white;
            font-size: 1rem;
            font-weight: 800;
            letter-spacing: .02em;
        }

        .about-stat-label {
            display: block;
            color: rgba(255, 255, 255, 0.78);
            font-size: .78rem;
            margin-top: 4px;
        }

        .about-card-mini {
            display: flex;
            align-items: center;
            gap: 10px;
            color: white;
            font-weight: 600;
            padding: 14px 18px;
            border-radius: 18px;
            animation: floatCard 6s ease-in-out infinite;
        }

        .about-card-mini i {
            font-size: 1rem;
            color: #ccfbf1;
        }

        .about-card-mini-1 {
            top: 14%;
            right: 11%;
            animation-delay: .4s;
        }

        .about-card-mini-2 {
            top: 34%;
            right: 8%;
            animation-delay: 1.1s;
        }

        .about-card-mini-3 {
            bottom: 12%;
            right: 14%;
            animation-delay: 1.8s;
        }

        .section-rail {
            position: fixed;
            right: 18px;
            top: 50%;
            transform: translateY(-50%);
            z-index: 998;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 12px;
            padding: 14px 10px;
            border-radius: 9999px;
            background: rgba(255, 255, 255, 0.72);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(15, 23, 42, 0.08);
            box-shadow: 0 10px 28px rgba(15, 23, 42, 0.10);
        }

        .section-dot {
            width: 11px;
            height: 11px;
            border-radius: 9999px;
            background: rgba(15, 23, 42, 0.18);
            transition: transform .25s ease, background .25s ease, box-shadow .25s ease;
        }

        .section-dot:hover {
            transform: scale(1.15);
            background: rgba(13, 148, 136, 0.70);
        }

        .section-dot.active {
            background: #0d9488;
            box-shadow: 0 0 0 5px rgba(13, 148, 136, 0.14);
        }

        .section-top-btn {
            margin-top: 8px;
            width: 38px;
            height: 38px;
            border-radius: 9999px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #0d9488;
            color: white;
            text-decoration: none;
            box-shadow: 0 8px 20px rgba(13, 148, 136, 0.24);
            transition: transform .25s ease, background .25s ease;
        }

        .section-top-btn:hover {
            transform: translateY(-2px);
            background: #0f766e;
        }

        .nav-link.active {
            color: #0d9488;
        }

        .nav-link.active::after {
            width: 100%;
        }





        @keyframes floatGlow {

            0%,
            100% {
                transform: translateY(0) scale(1);
            }

            50% {
                transform: translateY(-12px) scale(1.04);
            }
        }

        @keyframes floatCard {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        @keyframes pulseNode {

            0%,
            100% {
                transform: scale(1);
                opacity: 1;
            }

            50% {
                transform: scale(1.2);
                opacity: .9;
            }
        }

        @media (max-width: 768px) {
            .about-card-main {
                left: 6%;
                right: 6%;
                width: auto;
                bottom: 8%;
                padding: 18px;
                border-radius: 22px;
            }

            .about-card-mini {
                display: none;
            }

            .about-line-1,
            .about-line-2,
            .about-line-3,
            .about-line-4 {
                opacity: .45;
            }

            .about-stats {
                gap: 8px;
            }

            .about-stat {
                padding: 10px 8px;
                border-radius: 14px;
            }

            .about-stat-number {
                font-size: .9rem;
            }

            .about-stat-label {
                font-size: .7rem;
            }
        }

        @media (max-width: 768px) {
            .service-card {
                padding: 26px 22px;
                border-radius: 22px;
            }

            .service-icon-wrap {
                width: 72px;
                height: 72px;
                border-radius: 18px;
            }

            .service-icon {
                font-size: 1.75rem;
            }
        }

        @media (max-width: 768px) {
            .client-logo-wrap {
                height: 120px;
                padding: 20px;
                border-radius: 22px;
            }

            .client-logo {
                max-width: 140px;
                max-height: 56px;
            }

            .hero-content {
                padding: 32px 18px 56px;
            }

            .hero-subtitle {
                line-height: 1.55;
            }
        }
    </style>
</head>

<body>

    {{-- NAVBAR --}}
    <nav id="navbar" class="fixed top-0 left-0 right-0 z-50 bg-white/95 backdrop-blur-sm"
        style="box-shadow: 0 1px 0 rgba(0,0,0,0.06);">
        <div class="max-w-7xl mx-auto px-6 h-[90px] flex items-center justify-between">

            <a href="/" class="flex items-center gap-2.5 group">
                <img src="{{ asset('images/logoInfonic.png') }}" alt="Logo Infonic" width="518" height="106"
                    class="block h-9 md:h-10 w-auto object-contain"> </a>

            <div class="hidden md:flex items-center gap-8">
                <a href="#inicio" class="nav-link" data-target="inicio">{{ __('messages.nav_home') }}</a>
                <a href="#servicios" class="nav-link" data-target="servicios">{{ __('messages.nav_services') }}</a>
                <a href="#clientes" class="nav-link" data-target="clientes">{{ __('messages.nav_clients') }}</a>
                <a href="#contacto" class="nav-link" data-target="contacto">{{ __('messages.nav_contact') }}</a>

            </div>

            <div class="flex items-center gap-4">
                <div class="lang-dropdown" aria-label="{{ __('messages.language_aria') }}">
                    @php
                        $flags = ['es' => '🇪🇸', 'en' => '🇺🇸', 'pt' => '🇧🇷'];
                        $names = ['es' => 'ES', 'en' => 'EN', 'pt' => 'PT'];
                        $cur = app()->getLocale();
                    @endphp

                    <button type="button"
                        class="flex items-center gap-1.5 text-sm font-medium text-gray-700 hover:text-teal-600 transition-colors px-2 py-1"
                        aria-haspopup="true">
                        <span>{{ $flags[$cur] ?? '🇪🇸' }}</span>
                        <span>{{ $names[$cur] ?? 'ES' }}</span>
                        <i class="fa-solid fa-chevron-down text-xs opacity-60" aria-hidden="true"></i>
                    </button>

                    <div class="lang-dropdown-menu" role="menu">
                        <a href="{{ route('lang.switch', 'es') }}" role="menuitem">🇪🇸 <span>Español</span></a>
                        <a href="{{ route('lang.switch', 'en') }}" role="menuitem">🇺🇸 <span>English</span></a>
                        <a href="{{ route('lang.switch', 'pt') }}" role="menuitem">🇧🇷 <span>Português</span></a>
                    </div>
                </div>

                <a href="https://wa.me/541150483561" target="_blank" rel="noopener noreferrer"
                    aria-label="{{ __('messages.whatsapp_aria') }}"
                    class="w-9 h-9 rounded-full bg-green-50 flex items-center justify-center text-green-500 hover:bg-green-500 hover:text-white transition-all">
                    <i class="fa-brands fa-whatsapp text-lg" aria-hidden="true"></i>
                </a>

                <button id="mobile-menu-btn" type="button" class="md:hidden text-gray-600 hover:text-teal-600"
                    aria-label="{{ __('messages.menu_aria') }}" aria-expanded="false">
                    <i class="fa-solid fa-bars text-xl" aria-hidden="true"></i>
                </button>
            </div>
        </div>

        <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-100 px-6 py-4 flex flex-col gap-4">
            <a href="#inicio" class="nav-link" data-target="inicio">{{ __('messages.nav_home') }}</a>
            <a href="#servicios" class="nav-link" data-target="servicios">{{ __('messages.nav_services') }}</a>
            <a href="#clientes" class="nav-link" data-target="clientes">{{ __('messages.nav_clients') }}</a>

            <a href="#contacto" class="nav-link" data-target="contacto">{{ __('messages.nav_contact') }}</a>
        </div>
    </nav>

    {{-- HERO --}}
    <section id="inicio" aria-label="{{ __('messages.nav_home') }}">
        <div id="hero">
            <div id="vanta-bg" aria-hidden="true"></div>

            <div class="hero-content">
                <div class="hero-inner">

                    <div class="hero-badge" data-aos="fade-up" data-aos-duration="700">
                        <span class="w-2 h-2 rounded-full bg-green-400 animate-pulse" aria-hidden="true"></span>
                        {{ __('messages.hero_badge') }}
                    </div>

                    <h1 class="hero-title" data-aos="fade-up" data-aos-duration="700" data-aos-delay="100">
                        {{ __('messages.hero_title') }}
                    </h1>

                    <p class="hero-subtitle" data-aos="fade-up" data-aos-duration="700" data-aos-delay="180">
                        {{ __('messages.hero_subtitle') }}
                    </p>

                    <div data-aos="fade-up" data-aos-duration="700" data-aos-delay="260">
                        <a href="https://wa.me/541150483561" target="_blank" rel="noopener noreferrer"
                            class="btn-cta">
                            <i class="fa-brands fa-whatsapp text-xl" aria-hidden="true"></i>
                            {{ __('messages.hero_cta') }}
                        </a>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-14 w-full max-w-4xl mx-auto">
                        <article class="glass-card p-8 text-center" data-aos="fade-up" data-aos-duration="600"
                            data-aos-delay="100">
                            <div class="icon-circle" aria-hidden="true">
                                <i class="fa-solid fa-server"></i>
                            </div>
                            <h2 class="text-white font-bold text-lg mb-2">{{ __('messages.card1_title') }}</h2>
                            <p class="text-white/70 text-sm leading-relaxed">{{ __('messages.card1_desc') }}</p>
                        </article>

                        <article class="glass-card p-8 text-center" data-aos="fade-up" data-aos-duration="600"
                            data-aos-delay="180">
                            <div class="icon-circle" aria-hidden="true">
                                <i class="fa-solid fa-code"></i>
                            </div>
                            <h2 class="text-white font-bold text-lg mb-2">{{ __('messages.card2_title') }}</h2>
                            <p class="text-white/70 text-sm leading-relaxed">{{ __('messages.card2_desc') }}</p>
                        </article>

                        <article class="glass-card p-8 text-center" data-aos="fade-up" data-aos-duration="600"
                            data-aos-delay="260">
                            <div class="icon-circle" aria-hidden="true">
                                <i class="fa-solid fa-gears"></i>
                            </div>
                            <h2 class="text-white font-bold text-lg mb-2">{{ __('messages.card3_title') }}</h2>
                            <p class="text-white/70 text-sm leading-relaxed">{{ __('messages.card3_desc') }}</p>
                        </article>
                    </div>

                </div>
            </div>
        </div>
    </section>

    {{-- ABOUT --}}
    <section id="nosotros" class="bg-[#f5f5f5] py-20 md:py-22 scroll-mt-24">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid lg:grid-cols-12 gap-12 items-start">

                <div class="lg:col-span-7">
                    <span class="inline-block text-sm font-semibold tracking-[0.18em] uppercase text-teal-600 mb-5">
                        {{ __('messages.about_badge') }}
                    </span>

                    <h2 class="text-[2.4rem] md:text-[3.5rem] leading-[1.05] font-extrabold text-slate-900 mb-8">
                        {{ __('messages.about_title') }}<span class="text-teal-500">.</span>
                    </h2>

                    <h3 class="text-[1.35rem] md:text-[1.55rem] font-semibold text-slate-900 mb-5">
                        {{ __('messages.about_question') }}
                    </h3>

                    <p class="text-slate-600 text-[1.08rem] leading-8 max-w-3xl">
                        {{ __('messages.about_text') }}
                    </p>
                </div>

                <div class="lg:col-span-5">
                    <div class="grid grid-cols-2 gap-8 md:gap-10 lg:pt-24">
                        {{-- <div>
                            <div class="text-teal-500 text-5xl md:text-6xl font-extrabold leading-none">30+</div>
                            <div class="mt-2 text-slate-800 text-xl font-medium">{{ __('messages.about_clients') }}</div>
                        </div> --}}
                        <div>
                            <div class="text-teal-500 text-5xl md:text-6xl font-extrabold leading-none">25+</div>
                            <div class="mt-2 text-slate-800 text-xl font-medium">{{ __('messages.about_projects') }}
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="mt-16 md:mt-20">
                <div
                    class="about-visual relative overflow-hidden rounded-[3.5rem] rounded-tr-[8rem] rounded-bl-[8rem] shadow-[0_20px_60px_rgba(0,0,0,0.10)] h-[320px] md:h-[480px]">

                    {{-- fondo --}}
                    <div class="about-visual-bg"></div>
                    <div class="about-grid"></div>

                    {{-- glow --}}
                    <div class="about-glow about-glow-1"></div>
                    <div class="about-glow about-glow-2"></div>

                    {{-- líneas / nodos --}}
                    <div class="about-node about-node-1"></div>
                    <div class="about-node about-node-2"></div>
                    <div class="about-node about-node-3"></div>
                    <div class="about-node about-node-4"></div>
                    <div class="about-node about-node-5"></div>

                    <div class="about-line about-line-1"></div>
                    <div class="about-line about-line-2"></div>
                    <div class="about-line about-line-3"></div>
                    <div class="about-line about-line-4"></div>

                    {{-- tarjetas flotantes --}}
                    <div class="about-card about-card-main">
                        <div class="about-chip">
                            <span class="about-chip-dot"></span>
                            {{ __('messages.about_chip_1') }}
                        </div>

                        <h4 class="about-card-title">{{ __('messages.about_visual_title') }}</h4>

                        <div class="about-stats">
                            <div class="about-stat">
                                <span class="about-stat-number">24/7</span>
                                <span class="about-stat-label">{{ __('messages.about_stat_1') }}</span>
                            </div>
                            <div class="about-stat">
                                <span class="about-stat-number">SEO</span>
                                <span class="about-stat-label">{{ __('messages.about_stat_2') }}</span>
                            </div>
                            <div class="about-stat">
                                <span class="about-stat-number">ADS</span>
                                <span class="about-stat-label">{{ __('messages.about_stat_3') }}</span>
                            </div>
                        </div>
                    </div>

                    <div class="about-card about-card-mini about-card-mini-1">
                        <i class="fa-solid fa-code"></i>
                        <span>{{ __('messages.about_mini_1') }}</span>
                    </div>

                    <div class="about-card about-card-mini about-card-mini-2">
                        <i class="fa-solid fa-chart-line"></i>
                        <span>{{ __('messages.about_mini_2') }}</span>
                    </div>

                    <div class="about-card about-card-mini about-card-mini-3">
                        <i class="fa-solid fa-server"></i>
                        <span>{{ __('messages.about_mini_3') }}</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- SERVICES --}}
    <section id="servicios" class="bg-[#f5f5f5] py-20 md:py-22 scroll-mt-24">
        <div class="max-w-7xl mx-auto px-6">

            <div class="text-center max-w-3xl mx-auto mb-14 md:mb-16">
                <span class="inline-block text-sm font-semibold tracking-[0.18em] uppercase text-teal-600 mb-4">
                    {{ __('messages.services_badge') }}
                </span>

                <h2 class="text-[2.4rem] md:text-[3.5rem] leading-[1.05] font-extrabold text-slate-900">
                    {{ __('messages.services_title_prefix') }}
                    <span class="text-teal-500">{{ __('messages.services_title_highlight') }}</span>
                </h2>

                <p class="mt-4 text-slate-600 text-lg leading-8">
                    {{ __('messages.services_subtitle') }}
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-x-8 gap-y-10">

                <article class="service-card group" data-aos="fade-up" data-aos-duration="600">
                    <div class="service-icon-wrap">
                        <i class="fa-solid fa-laptop-code service-icon" aria-hidden="true"></i>
                    </div>
                    <div class="pt-6">
                        <h3 class="text-[1.65rem] md:text-[1.8rem] font-bold text-slate-900 mb-3">
                            {{ __('messages.service_1_title') }}
                        </h3>
                        <p class="text-slate-600 text-[1.02rem] leading-8">
                            {{ __('messages.service_1_text') }}
                        </p>
                    </div>
                </article>

                <article class="service-card group" data-aos="fade-up" data-aos-duration="600" data-aos-delay="80">
                    <div class="service-icon-wrap">
                        <i class="fa-solid fa-cart-shopping service-icon" aria-hidden="true"></i>
                    </div>
                    <div class="pt-6">
                        <h3 class="text-[1.65rem] md:text-[1.8rem] font-bold text-slate-900 mb-3">
                            {{ __('messages.service_2_title') }}
                        </h3>
                        <p class="text-slate-600 text-[1.02rem] leading-8">
                            {{ __('messages.service_2_text') }}
                        </p>
                    </div>
                </article>

                <article class="service-card group" data-aos="fade-up" data-aos-duration="600" data-aos-delay="160">
                    <div class="service-icon-wrap">
                        <i class="fa-brands fa-google service-icon" aria-hidden="true"></i>
                    </div>
                    <div class="pt-6">
                        <h3 class="text-[1.65rem] md:text-[1.8rem] font-bold text-slate-900 mb-3">
                            {{ __('messages.service_3_title') }}
                        </h3>
                        <p class="text-slate-600 text-[1.02rem] leading-8">
                            {{ __('messages.service_3_text') }}
                        </p>
                    </div>
                </article>

                <article class="service-card group" data-aos="fade-up" data-aos-duration="600">
                    <div class="service-icon-wrap">
                        <i class="fa-solid fa-headset service-icon" aria-hidden="true"></i>
                    </div>
                    <div class="pt-6">
                        <h3 class="text-[1.65rem] md:text-[1.8rem] font-bold text-slate-900 mb-3">
                            {{ __('messages.service_4_title') }}
                        </h3>
                        <p class="text-slate-600 text-[1.02rem] leading-8">
                            {{ __('messages.service_4_text') }}
                        </p>
                    </div>
                </article>

                <article class="service-card group" data-aos="fade-up" data-aos-duration="600" data-aos-delay="80">
                    <div class="service-icon-wrap">
                        <i class="fa-solid fa-mobile-screen-button service-icon" aria-hidden="true"></i>
                    </div>
                    <div class="pt-6">
                        <h3 class="text-[1.65rem] md:text-[1.8rem] font-bold text-slate-900 mb-3">
                            {{ __('messages.service_5_title') }}
                        </h3>
                        <p class="text-slate-600 text-[1.02rem] leading-8">
                            {{ __('messages.service_5_text') }}
                        </p>
                    </div>
                </article>

                <article class="service-card group" data-aos="fade-up" data-aos-duration="600" data-aos-delay="160">
                    <div class="service-icon-wrap">
                        <i class="fa-solid fa-building service-icon" aria-hidden="true"></i>
                    </div>
                    <div class="pt-6">
                        <h3 class="text-[1.65rem] md:text-[1.8rem] font-bold text-slate-900 mb-3">
                            {{ __('messages.service_6_title') }}
                        </h3>
                        <p class="text-slate-600 text-[1.02rem] leading-8">
                            {{ __('messages.service_6_text') }}
                        </p>
                    </div>
                </article>

            </div>
        </div>
    </section>

    {{-- CLIENTS --}}
    <section id="clientes" class="bg-[#f5f5f5] py-20 md:py-22 scroll-mt-24">
        <div class="max-w-7xl mx-auto px-6">

            <div class="text-center max-w-3xl mx-auto mb-14 md:mb-16">
                <span class="inline-block text-sm font-semibold tracking-[0.18em] uppercase text-teal-600 mb-4">
                    {{ __('messages.clients_badge') }}
                </span>

                <h2 class="text-[2.4rem] md:text-[3.5rem] leading-[1.05] font-extrabold text-slate-900">
                    {{ __('messages.clients_title') }}<span class="text-teal-500">.</span>
                </h2>

                <p class="mt-4 text-slate-600 text-lg leading-8">
                    {{ __('messages.clients_subtitle') }}
                </p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 md:gap-8 items-stretch">

                <a href="https://www.tytsa.com.ar" target="_blank" rel="noopener noreferrer"
                    class="client-card group" aria-label="Cliente TyT">
                    <div class="client-logo-wrap">
                        <img src="{{ asset('images/tytBlack.png') }}" alt="Logo de TyT" class="client-logo">
                    </div>
                </a>

                <a href="https://www.quamaq.com.ar/" target="_blank" rel="noopener noreferrer"
                    class="client-card group" aria-label="Cliente Quamaq">
                    <div class="client-logo-wrap">
                        <img src="{{ asset('images/quamaq.png') }}" alt="Logo de Quamaq" class="client-logo">
                    </div>
                </a>

                <a href="https://juntaspampa.com.ar/" target="_blank" rel="noopener noreferrer"
                    class="client-card group" aria-label="Cliente Cliente 3">
                    <div class="client-logo-wrap">
                        <img src="{{ asset('images/juntaspampas.png') }}" alt="Logo de Cliente 3"
                            class="client-logo">
                    </div>
                </a>

                <a href="https://www.turul.com.ar/" target="_blank" rel="noopener noreferrer"
                    class="client-card group" aria-label="Cliente Cliente 4">
                    <div class="client-logo-wrap">
                        <img src="{{ asset('images/turul.png') }}" alt="Logo de Cliente 4" class="client-logo">
                    </div>
                </a>

            </div>
        </div>
    </section>

    {{-- CONTACT --}}
    <section id="contacto" class="bg-[#f5f5f5] py-20 md:py-22 scroll-mt-24">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid lg:grid-cols-12 gap-12 lg:gap-16 items-start">

                <div class="lg:col-span-5">
                    <span class="inline-block text-sm font-semibold tracking-[0.18em] uppercase text-teal-600 mb-4">
                        {{ __('messages.contact_badge') }}
                    </span>

                    <h2 class="text-[2.4rem] md:text-[3.5rem] leading-[1.05] font-extrabold text-slate-900">
                        {{ __('messages.contact_title') }}<span class="text-teal-500">.</span>
                    </h2>

                    <p class="mt-5 text-slate-600 text-lg leading-8 max-w-xl">
                        {{ __('messages.contact_text') }}
                    </p>

                    <div class="mt-10">
                        <img src="{{ asset('images/logoInfonic.png') }}" alt="Logo de Infonic"
                            class="h-14 md:h-16 w-auto">
                    </div>

                    <div class="mt-10 space-y-4">
                        <a href="https://wa.me/541150483561" target="_blank" rel="noopener noreferrer"
                            class="flex items-center gap-4 text-slate-700 hover:text-teal-600 transition-colors">
                            <span
                                class="w-11 h-11 rounded-full bg-white border border-slate-200 flex items-center justify-center shadow-sm">
                                <i class="fa-brands fa-whatsapp text-lg text-green-500"></i>
                            </span>
                            <div>
                                <p class="text-sm text-slate-500">{{ __('messages.contact_whatsapp_label') }}</p>
                                <p class="font-semibold">+54 11 5048-3561</p>
                            </div>
                        </a>

                        <a href="mailto:infonic@infonicsoluciones.com"
                            class="flex items-center gap-4 text-slate-700 hover:text-teal-600 transition-colors">
                            <span
                                class="w-11 h-11 rounded-full bg-white border border-slate-200 flex items-center justify-center shadow-sm">
                                <i class="fa-regular fa-envelope text-lg text-teal-600"></i>
                            </span>
                            <div>
                                <p class="text-sm text-slate-500">{{ __('messages.contact_email_label') }}</p>
                                <p class="font-semibold">infonic@infonicsoluciones.com</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="lg:col-span-7">
                    <div
                        class="bg-white border-2 border-teal-500 rounded-[28px] p-6 md:p-10 shadow-[0_18px_45px_rgba(15,23,42,0.06)]">

                        @if (session('success'))
                            <div class="mb-6 rounded-2xl bg-green-50 border border-green-200 text-green-700 px-4 py-3">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if (session('error'))
                            <div class="mb-6 rounded-2xl bg-red-50 border border-red-200 text-red-700 px-4 py-3">
                                {{ session('error') }}
                            </div>
                        @endif

                        <form action="{{ route('contact.send') }}" method="POST" class="space-y-6">
                            @csrf

                            <div>
                                <label for="name" class="block text-slate-800 font-medium mb-2">
                                    {{ __('messages.form_name') }}
                                </label>
                                <input type="text" id="name" name="name" value="{{ old('name') }}"
                                    placeholder="{{ __('messages.form_name_placeholder') }}"
                                    class="w-full rounded-2xl bg-slate-100 border border-slate-100 px-5 py-4 text-slate-800 placeholder:text-slate-400 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent transition"
                                    required>
                                @error('name')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="email" class="block text-slate-800 font-medium mb-2">
                                    {{ __('messages.form_email') }} <span class="text-red-500">*</span>
                                </label>
                                <input type="email" id="email" name="email" value="{{ old('email') }}"
                                    placeholder="{{ __('messages.form_email_placeholder') }}"
                                    class="w-full rounded-2xl bg-slate-100 border border-slate-100 px-5 py-4 text-slate-800 placeholder:text-slate-400 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent transition"
                                    required>
                                @error('email')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="phone" class="block text-slate-800 font-medium mb-2">
                                    {{ __('messages.form_phone') }}
                                </label>
                                <input type="text" id="phone" name="phone" value="{{ old('phone') }}"
                                    placeholder="{{ __('messages.form_phone_placeholder') }}"
                                    class="w-full rounded-2xl bg-slate-100 border border-slate-100 px-5 py-4 text-slate-800 placeholder:text-slate-400 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent transition">
                                @error('phone')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="message" class="block text-slate-800 font-medium mb-2">
                                    {{ __('messages.form_message') }} <span class="text-red-500">*</span>
                                </label>
                                <textarea id="message" name="message" rows="5" placeholder="{{ __('messages.form_message_placeholder') }}"
                                    class="w-full rounded-2xl bg-slate-100 border border-slate-100 px-5 py-4 text-slate-800 placeholder:text-slate-400 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent transition resize-none"
                                    required>{{ old('message') }}</textarea>
                                @error('message')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="pt-2 flex justify-end">
                                <button type="submit"
                                    class="inline-flex items-center justify-center rounded-full bg-teal-500 hover:bg-teal-600 text-white font-semibold px-8 md:px-10 py-4 min-w-[240px] transition-all shadow-[0_12px_28px_rgba(13,148,136,0.25)]">
                                    {{ __('messages.form_submit') }}
                                </button>
                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- FOOTER --}}
    <footer class="bg-teal-500 text-white">
        <div class="max-w-7xl mx-auto px-6 py-10">
            <div class="grid md:grid-cols-3 gap-8 items-center">

                <div class="flex justify-center md:justify-start">
                    <img src="{{ asset('images/logoInfonicBlanco.png') }}" alt="Logo blanco de Infonic"
                        class="h-12 md:h-14 w-auto">
                </div>

                <div class="text-center text-sm md:text-base text-white/95">
                    © {{ date('Y') }} {{ __('messages.footer_rights') }}
                </div>

                <div class="flex flex-col items-center md:items-end gap-2 text-sm md:text-base">
                    <div class="font-bold uppercase tracking-wide">{{ __('messages.footer_contact') }}</div>

                    <a href="https://wa.me/541150483561" target="_blank" rel="noopener noreferrer"
                        class="inline-flex items-center gap-3 text-white/95 hover:text-white transition-colors">
                        <i class="fa-brands fa-whatsapp text-lg"></i>
                        <span>(+54) 11 5048 3561</span>
                    </a>

                    <a href="mailto:infonic@infonicsoluciones.com"
                        class="inline-flex items-center gap-3 text-white/95 hover:text-white transition-colors break-all">
                        <i class="fa-regular fa-envelope text-lg"></i>
                        <span>infonic@infonicsoluciones.com</span>
                    </a>
                </div>

            </div>
        </div>
    </footer>

    {{-- SECTION NAV --}}
    <div class="section-rail hidden lg:flex" aria-label="Navegación de secciones">
        <a href="#inicio" class="section-dot active" data-target="inicio" aria-label="Ir a inicio"></a>
        <a href="#nosotros" class="section-dot" data-target="nosotros" aria-label="Ir a nosotros"></a>
        <a href="#servicios" class="section-dot" data-target="servicios" aria-label="Ir a servicios"></a>
        <a href="#clientes" class="section-dot" data-target="clientes" aria-label="Ir a clientes"></a>
        <a href="#contacto" class="section-dot" data-target="contacto" aria-label="Ir a contacto"></a>

        <a href="#inicio" class="section-top-btn" aria-label="Volver arriba">
            <i class="fa-solid fa-arrow-up" aria-hidden="true"></i>
        </a>
    </div>

    {{-- WHATSAPP FLOAT --}}
    <a href="https://wa.me/541150483561" target="_blank" rel="noopener noreferrer" class="wsp-float"
        aria-label="{{ __('messages.whatsapp_aria') }}">
        <i class="fa-brands fa-whatsapp text-2xl text-white" aria-hidden="true"></i>
    </a>

    {{-- SCRIPTS --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r134/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.net.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

    <script>
        let vantaEffect = null;

        window.addEventListener('load', function() {
            const sections = document.querySelectorAll('section[id]');
            const dots = document.querySelectorAll('.section-dot');
            const navLinks = document.querySelectorAll('.nav-link[data-target]');

            function setActiveNavigation() {
                let current = '';

                sections.forEach(section => {
                    const sectionTop = section.offsetTop - 160;
                    const sectionHeight = section.offsetHeight;

                    if (window.scrollY >= sectionTop && window.scrollY < sectionTop + sectionHeight) {
                        current = section.getAttribute('id');
                    }
                });

                dots.forEach(dot => {
                    dot.classList.toggle('active', dot.dataset.target === current);
                });

                navLinks.forEach(link => {
                    link.classList.toggle('active', link.dataset.target === current);
                });
            }

            setActiveNavigation();
            window.addEventListener('scroll', setActiveNavigation, {
                passive: true
            });

            AOS.init({
                once: true,
                easing: 'ease-out-cubic',
                duration: 700
            });

            if (window.VANTA && document.getElementById('vanta-bg')) {
                vantaEffect = VANTA.NET({
                    el: '#vanta-bg',
                    mouseControls: true,
                    touchControls: true,
                    gyroControls: false,
                    minHeight: 200,
                    minWidth: 200,
                    scale: 1,
                    scaleMobile: 1,
                    color: 0xffffff,
                    backgroundColor: 0x0d9488,
                    points: 10,
                    maxDistance: 20,
                    spacing: 18
                });
            }

            const navbar = document.getElementById('navbar');
            window.addEventListener('scroll', () => {
                navbar.classList.toggle('scrolled', window.scrollY > 20);
            }, {
                passive: true
            });

            const mobileBtn = document.getElementById('mobile-menu-btn');
            const mobileMenu = document.getElementById('mobile-menu');

            if (mobileBtn && mobileMenu) {
                mobileBtn.addEventListener('click', () => {
                    const isHidden = mobileMenu.classList.toggle('hidden');
                    mobileBtn.setAttribute('aria-expanded', String(!isHidden));
                });
            }

            gsap.registerPlugin(ScrollTrigger);
            gsap.from('.nav-link', {
                opacity: 0,
                y: -10,
                stagger: 0.08,
                duration: 0.5,
                delay: 0.3,
                ease: 'power2.out'
            });
        });

        window.addEventListener('beforeunload', function() {
            if (vantaEffect) {
                vantaEffect.destroy();
            }
        });
    </script>
</body>

</html>
