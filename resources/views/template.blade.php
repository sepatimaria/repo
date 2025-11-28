<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>laravelApp</title>

        {{-- Memanggil Bootstrap --}}
        <link href="{{ asset('bootstrap_5_3_8/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    </head>
    <body>

        <div class="container">
            {{-- Tambahin navbar di sini --}}
            @include('navbar')

            {{-- Konten utama halaman --}}
            @yield('main')
        </div>

        @yield('footer')

        <script src="{{ asset('js/jquery_2_2_1.min.js') }}"></script>
        <script src="{{ asset('bootstrap_5_3_8/js/bootstrap.min.js') }}"></script>

    </body>
</html>
