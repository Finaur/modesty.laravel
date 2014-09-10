<!DOCTYPE html>

<html lang="en" class="app">
   <head>
      @include('backend.includes.head')
   </head>
  
   
   <body class="">
      <section class="vbox">
         <header class="bg-white-only header header-md navbar navbar-fixed-top-xs">
            @include('backend.includes.header')
         </header>
         <section>
            <section class="hbox stretch">
               <!-- .aside --> 
               <aside class="bg-black dk aside hidden-print" id="nav">
                  <section class="vbox">
                     <section class="w-f-md scrollable">
                        <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="10px" data-railOpacity="0.2">
                           <!-- nav --> 
                           @include('backend.includes.nav')
                           <!-- / nav --> 
                        </div>
                     </section>
                     <footer class="footer hidden-xs no-padder text-center-nav-xs">
                           @include('backend.includes.footer')
                     </footer>
                  </section>
               </aside>
               <!-- /.aside --> 

               <!--main content-->
               <section id="content">
                  @yield('content')
               </section>
               <!--end of content-->

            </section>
         </section>
      </section>

      <!-- Bootstrap --> 
      <!-- App --> 
      @include('backend.includes.js')      
   </body>
</html>

