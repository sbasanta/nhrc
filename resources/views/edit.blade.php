<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  @include('partials.inc_header')

</head>

<body>

  <div class="container-fluid" style="box-shadow:0px 1px 2px black;">

    @include('partials.inc_banner')

    @include('partials.inc_navbar')

    {{-- @include('partials.inc_slider') --}}
    <div class="row" style="padding:50px;">



      <div class="col-md-12">
        @include('partials.inc_breadcrumb')
        @include('partials.inc_message')

        @yield('content-edit')
      </div>
    </div>

    @include('partials.inc_footernav')

  </div>

  @include('partials.inc_footer')


</body>
</html>
