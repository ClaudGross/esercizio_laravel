<!DOCTYPE html>

<html lang="en">

 <head>

   @include('layouts.partials.head')

   @include('layouts.partials.nav')

 </head>

 <body>

@yield('content')

@include('layouts.partials.footer')

@include('layouts.partials.footer-scripts')

 </body>

</html>