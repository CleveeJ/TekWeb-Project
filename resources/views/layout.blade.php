<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Industrial Competition 2024">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- <link rel="icon" href="{{ asset('assets/logo.png') }}"> -->

    {{-- Flowbite --}}
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />

    {{-- Tailwind --}}
    <script src="https://cdn.tailwindcss.com/3.3.0"></script>

    {{-- Sweet alert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- Jquery --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    {{-- Alpine js --}}
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>

    <!-- TW Elements styles-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/css/tw-elements.min.css" />

    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        crossorigin="anonymous" />

    {{-- AOS --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            AOS.init();
        });
    </script>
    <title>{{ $title }}</title>

    {{-- font --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <style>
        section::before{
            content:'';
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 200px;
            background:linear-gradient(to top, #000000,transparent);
            z-index : 1000;
        }
        section::after{
            content:'';
            position: absolute;
            top: 100%;
            width: 100%;
            height: 200px;
            background:linear-gradient(to bottom, #000000,transparent);
            z-index : 1000;
        }
        body{
            background-color: black;
            font-family: Poppins;
            color: #eee;
            font-size: 12px;
            width:100%;
        }
        
        #landing::before{
            content: '';
            position: absolute;
            inset: 0;
            background-image: url("{{asset('assets/landing-bg.jpg')}}");
            background-size: cover;
            background-position: center;
            z-index: -1;

            mask-image: url("{{asset('assets/ink_lv2.gif')}}");
            mask-size: cover;
            mask-position: center;
        }

        .items-container .item{
            animation: animate var(--duration) linear infinite;
            animation-delay: calc(var(--duration) / var(--quantity) * (var(--position)));
        }

        .items-container-reverse .item{
            animation: animate2 var(--duration) linear infinite;
            animation-delay: calc(var(--duration) / var(--quantity) * (var(--position)));
        }

        @keyframes animate{
            0% {
                top: calc(var(--height)*-1);
            }

            100% {
                top: 100%;
            }
        }

        @keyframes animate2{
            100% {
                top: calc(var(--height)*-1);
            }

            0% {
                top: 100%;
            }
        }

        ::-webkit-scrollbar {
            width: 9px;
        }

        ::-webkit-scrollbar-thumb {
            background: linear-gradient(360deg, #fff, #D3D3D3, transparent);
            border-radius: 30px;
        }

        ::-webkit-scrollbar-track {
            background: #000000;
        }

        html {
            scroll-behavior: smooth;
        }

        .swal2-confirm {
            background: #589981 !important;
        }

        .swal2-deny,
        .swal2-cancel {
            background: #cd6d00 !important;
        }

        .disableScroll {
            overflow: hidden;
        }

        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }
    </style>
    @yield('style')
</head>

<body>
    <div class="">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/js/tw-elements.umd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        function getRandomPercent() {
            return Math.floor(Math.random() * 101);
        }
    
        const container = document.querySelector('.gradient-container');
        const gradient = `
        radial-gradient(at ${getRandomPercent()}% ${getRandomPercent()}%, #26397e 0px, transparent 50%),
        radial-gradient(at ${getRandomPercent()}% ${getRandomPercent()}%, #f6c2cf 0px, transparent 50%),
        radial-gradient(at ${getRandomPercent()}% ${getRandomPercent()}%, #00a2e0 0px, transparent 50%),
        radial-gradient(at ${getRandomPercent()}% ${getRandomPercent()}%, #563176 0px, transparent 50%),
        radial-gradient(at ${getRandomPercent()}% ${getRandomPercent()}%, #c8e9f0 0px, transparent 50%),
        radial-gradient(at ${getRandomPercent()}% ${getRandomPercent()}%, #fffae4 0px, transparent 50%),
        radial-gradient(at ${getRandomPercent()}% ${getRandomPercent()}%, #26397e 0px, transparent 50%),
        radial-gradient(at ${getRandomPercent()}% ${getRandomPercent()}%, #f6c2cf 0px, transparent 50%),
        radial-gradient(at ${getRandomPercent()}% ${getRandomPercent()}%, #00a2e0 0px, transparent 50%),
        radial-gradient(at ${getRandomPercent()}% ${getRandomPercent()}%, #563176 0px, transparent 50%),
        radial-gradient(at ${getRandomPercent()}% ${getRandomPercent()}%, #c8e9f0 0px, transparent 50%),
        radial-gradient(at ${getRandomPercent()}% ${getRandomPercent()}%, #fffae4 0px, transparent 50%)
        `;
    </script>

    @yield('script')
</body>

</html>
