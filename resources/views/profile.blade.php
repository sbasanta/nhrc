<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  @include('partials.inc_header')
</head>

<body>

  <div class="container-fluid" style="box-shadow:0px 1px 2px black;">

    @include('partials.inc_banner')

    @include('partials.inc_navbar')
    {{-- @include('partials.inc_message') --}}


    <div class="row" style="padding:50px;">

      @include('partials.inc_side_navbar')

      <div class="col-md-10">
        @include('partials.inc_message')

        @yield('profile-content')
      </div>

    </div>

  </div>

  @include('partials.inc_footer')


</body>
</html>
