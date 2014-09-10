<!DOCTYPE html>

<html lang="en" class="app">
   <head>
      @include('backend.includes.head')
   </head>

   <body class="bg-info">
     	 @yield('content')
      <!-- / footer --> 
      <!-- Bootstrap --> <!-- App --> 
       	@include('backend.includes.js') 
   </body>
</html>