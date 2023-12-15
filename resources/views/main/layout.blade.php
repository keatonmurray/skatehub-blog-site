<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>{{config('app.name')}}</title>
            <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests" />
            <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
            <script src="https://kit.fontawesome.com/5dfbc71075.js" crossorigin="anonymous"></script>
        </head>
        <body>
            @include('includes.navbar')
            @yield('content')
            <br><br><br><br><br>
            @include('includes.footer')
            <x-bg-image/>
        </body>
    </html>