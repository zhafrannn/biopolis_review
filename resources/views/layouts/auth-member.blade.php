<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
</head>

<style>
    * {
        font-family: Poppins;
    }
</style>

<body>
    <div class="fixed left-0 top-0 z-[1000] flex h-screen w-screen items-center justify-center bg-white" id="loading-page">
        <span class="loading loading-ring loading-lg text-primary"></span>
    </div>
    <div id="page">
        @include('components.member.navbar')
        <div class="lg:p-[40px] lg:pt-[100px] p-[20px] pt-[100px]">
            @yield('content')
        </div>
    </div>

    <script>
        $('#page').hide()
        $(document).ready(function() {
            setTimeout(() => {
                $('#loading-page').hide()
                $('#page').show()
            }, 1000);
        });
    </script>
</body>

</html>