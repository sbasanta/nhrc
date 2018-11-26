  <div class="row">
<div class="col-md-12 bg-official" >
  <nav class="navbar navbar-expand-sm bg-official navbar-dark" style="z-index:20;">
    <!-- Brand -->
    <!-- <a class="navbar-brand" href="#">Logo</a> -->

    <!-- Links -->
    <ul class="navbar-nav col-md-10  " style="" >
      <li class="nav-item {{ Request::is('/') ? "active": "" }}">
        <a class="nav-link" href="{{url('/')}}">Home</a>
      </li>
      <li class="nav-item dropdown {{Request::segment(1)=='publication' ? "active": "" }}" >
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Publication
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item {{ Request::is('publication/book') ? "active": "" }}" " href="{{url('/publication/book')}}">Book</a>
          <a class="dropdown-item {{ Request::is('publication/report') ? "active": "" }}" " href="{{url('/publication/report')}}">Report</a>
          <a class="dropdown-item {{ Request::is('publication/guideline') ? "active": "" }}" " href="{{url('/publication/guideline')}}">Guideline</a>
          <a class="dropdown-item {{ Request::is('publication/newsletter') ? "active": "" }}" " href="{{url('/publication/newsletter')}}">Newsletter</a>
          <a class="dropdown-item {{ Request::is('publication/journal') ? "active": "" }}" " href="{{url('/publication/journal')}}">Journal</a>
        </div>
      </li>
      <li style="color:black;" class="nav-item {{ Request::is('pressrelease') ? "active": "" }}">
        <a class="nav-link" href="{{url('/pressrelease')}}">Press Release</a>
      </li>
      <li class="nav-item {{ Request::is('radioprogram') ? "active": "" }}">
        <a class="nav-link" href="{{url('/radioprogram')}}">Radio Program</a>
      </li>
      <li class="nav-item {{ Request::is('notice') ? "active": "" }}">
        <a class="nav-link" href="{{url('/notice')}}">Notices</a>
      </li>

      <li class="nav-item {{ Request::is('speech') ? "active": "" }}">
        <a class="nav-link" href="{{url('/speech')}}">Speech</a>
      </li>

      <li class="nav-item dropdown {{ Request::segment(1)=='gallery' ? "active": "" }}" >
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Gallery
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item {{ Request::is('gallery/photo') ? "active": "" }} " href="{{url('/gallery/photo')}}">Photos</a>
          <a class="dropdown-item {{ Request::is('gallery/video') ? "active": "" }} " href="{{url('/gallery/video')}}">Videos</a>

        </div>
      </li>

      <!-- Dropdown -->

    </ul>
    <ul class="col-md-2 navbar-nav" style="">
      <!-- Right Side Of Navbar -->
      <ul class="navbar-nav ml-auto">
          <!-- Authentication Links -->
          @guest
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
              </li>

          @else
              <li class="nav-item dropdown {{ Request::segment(1)=='profile' ? "active": "" }}"">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->firstname}} {{ Auth::user()->lastname}} <span class="caret"></span>
                  </a>

                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                      <a class="dropdown-item {{ Request::is('profile/profile') ? "active": "" }} " href="{{url('profile/profile')}}">Profile</a>
                      <a class="dropdown-item {{ Request::is('profile/activity') ? "active": "" }} " href="{{url('profile/activity')}}">Activity</a>
                      <a class="dropdown-item {{ Request::is('register') ? "active": "" }}" href="/register">Register User</a>

                      <a class="dropdown-item" href="#">Change Password</a>
                      <a class="dropdown-item" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                      </a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                  </div>
              </li>
          @endguest
      </ul>
    </ul>

  </div>
    </div>
