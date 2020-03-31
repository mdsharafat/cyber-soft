<!DOCTYPE html>
<html lang="en">
     <head>
          <title>CyberSoft</title>
        @include('layouts.frontend.includes.meta')
        @include('layouts.frontend.includes.css')
        @yield('header-script')
     </head>

     <body>
          <!-- PRE LOADER -->
          <section class="preloader">
               <div class="spinner">
                    <span class="spinner-rotate"></span>
               </div>
          </section>
        
        <!-- HOME -->
        @include('layouts.frontend.includes.single-page-header')

        <!-- MENU -->
        @include('layouts.frontend.includes.single-page-menu')

        @yield('main-content')

        <!-- CONTACT -->
        @include('layouts.frontend.includes.contact')


        <!-- FOOTER -->
        @include('layouts.frontend.includes.footer')


        <!-- MODAL -->
        @include('layouts.frontend.includes.subscribe-modal')

        <!-- SCRIPTS -->
        @include('layouts.frontend.includes.js')
        @yield('footer-script')
     </body>

</html>