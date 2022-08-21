{{View::make('front.topbar')}}
{{View::make('front.navbar_up')}}
<!-- =================================================== -->
<!-- this is the different class in between the layout and the home page so in the layout categories is NOT in the scrolled condition -->
                <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 1;">
<!-- =================================================== -->
{{View::make('front.navbar_middle')}}
          </div>
        </div>
    </div>
<!-- Navbar Ends -->
<!-- =================================================== -->
    <div>
       @yield('content')
       @show
    </div>

{{View::make('front.footer')}}
   