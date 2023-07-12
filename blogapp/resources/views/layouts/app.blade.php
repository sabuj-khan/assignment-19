<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Shobuj</title>
        <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/favicon.ico') }}" />
        <!-- Font Awesome icons (free version)-->
        <script src="{{ asset('https://use.fontawesome.com/releases/v6.3.0/js/all.js') }}" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="{{ asset('https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800') }}" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet" />
        <script src="{{asset('https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js')}}"></script>
    </head>
    <body>

        @include('layouts.navbar')


            @yield('content')


        @include('layouts.footer')
        
       
       
        <!-- Bootstrap core JS-->
        <script src="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js') }}"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('assets/js/scripts.js') }}"></script>
        <script src="{{ asset('https://cdn.startbootstrap.com/sb-forms-latest.js') }}"></script>
    </body>
</html>
