<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel</title>

    <!-- Styles -->
    <link rel="stylesheet" href=" {{ asset('css/app.css') }} ">
   {{-- <script src=" {{ asset('js/app.js') }} "></script> --}}
</head>

<body>
    <div class="container px-4 mx-auto">
        @include('partials.header')

        <div class="opacity-60 h-px mb-8" style="
                background: linear-gradient(to right,
                    rgba(200, 200, 200, 0) 0%,
                    rgba(200, 200, 200, 1) 30%,
                    rgba(200, 200, 200, 1) 70%,
                    rgba(200, 200, 200, 0) 100%
                );
            ">

        </div>

        @if ($message = Session::get('success'))
            @include('partials.msg_success')
        @elseif($message = Session::get('error'))
            @include('partials.msg_error')
        @endif

        @yield('content')

    </div>
    @include('partials.footer')
</body>

</html>
