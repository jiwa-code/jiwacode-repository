<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset("../css/bootstrap.min.css") }}">
    <link rel="stylesheet" href="{{ asset("../css-only/style.css") }}">
    <link rel="shortcut icon" href="{{ asset("../img/jiwacode.png") }}" >
    <title>Jiwa Code</title>
    <link rel="icon" href="{{ asset('img/jiwacode.png') }}?v={{ date('YmdHis') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />
@vite('resources/css/app.css')
</head>
<body>
    @yield('isi-konten')


    <button onclick="buttonHandler()" title="Contact "
        class="tw-fixed tw-z-90 tw-bottom-10 tw-right-8  tw-bg-[#5FFC7B] tw-w-16 tw-h-16 tw-rounded-full tw-drop-shadow-lg tw-flex tw-justify-center tw-items-center tw-text-white tw-text-4xl hover:tw-bg-[#128c7e] hover:tw-drop-shadow-2xl hover:tw-animate-bounce tw-duration-300"><i class="bi bi-whatsapp"></i></button>

    <!-- Javascript code -->
    <script>
        // Do something when the button is clicked
        function buttonHandler() {
            window.location.href = 'https://wa.me/628158999271';
        }
    </script>
    @include("footer.footer")
</body>
<script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script>
        var typed = new Typed("#auto-type", {
            strings: ["Landing Page", "Web Portofolio", "Digitalisasi Pendidikan", "Sistem Informasi"],
            typeSpeed: 90,
            backSPeed: 100,
            loop: true
        })
    </script>
<script src="{{ asset("../js/bootstrap.bundle.min.js") }}"></script>
</html>
