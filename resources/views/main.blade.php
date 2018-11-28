<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  @include('partials.inc_header')
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
</head>

<body>

  <div class="container-fluid" style="box-shadow:0px 1px 2px black;">

    @include('partials.inc_banner')

    @include('partials.inc_navbar')

    {{-- @include('partials.inc_slider') --}}
    <div class="row" style="padding:50px;">

      @include('partials.inc_sidebar')

      <div class="col-md-9">
        @include('partials.inc_breadcrumb')
        @include('partials.inc_message')

        @yield('content')
      </div>
    </div>


    @include('partials.inc_footernav')

  </div>

  @include('partials.inc_footer')


</body>
</html>
