<!DOCTYPE html>
<html lang="en">

  <head>
@include('_head')
</head>

  <body>

    <!-- Default Bootstrap Navbar -->
    @include('menu')

    <div class="container">
    @include('partials._message') 
      @yield('content')

      <hr>
        <p class="text-center"> Copyright! All Rights are reserved under License of Rutvij Kothari </p>
      

    </div>
    <!-- end of .container -->
@include('partials._javascript')

  </body>

</html>