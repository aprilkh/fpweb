<!DOCTYPE html>
 
<html lang="en">
 
 <head>
 
   @include('layout.partials.head')
 
 </head>
 
 <body class="animsition">
 
@include('layout.partials.header')
 
       
 
@yield('content')
 
@include('layout.partials.footer')
 
@include('layout.partials.footer-scripts')
 
 </body>
 
</html>