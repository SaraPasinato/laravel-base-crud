<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('cdns')
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>@yield('title','MyComics')</title>
</head>
<body>
 {{--  creare un includes header  --}}
    @include('includes.header')
  {{--  >>creare un layout jumbotron  --}}
  <section id='jumbotron'>
    <div class="container-sm">
       @yield('content-jumbotron')
    </div>
  </section>

  {{--  >>creare un section   --}}
   <main class="container-sm">
    <section id="@yield('section-id')">
        @yield('content-section')
    </section>

   </main>
 {{--  creare un includes footer  --}}
    @include('includes.footer')

    @yield('scripts')
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>