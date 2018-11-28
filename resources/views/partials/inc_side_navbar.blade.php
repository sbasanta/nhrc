  <div class="col-md-2" style="border-right:2px solid #E9ECEF;">
<nav class="navbar bg-light card">
<!-- Links -->
<ul class="navbar-nav">
  <li class="nav-item ">
    <a class="nav-link {{ Request::is('profile/profile') ? "active": "" }} " href="/profile/profile">Profile</a>
  </li>
  <li class="nav-item ">
    <a class="nav-link {{ Request::is('profile/activity') ? "active": "" }}" href="/profile/activity">Activity</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Change Password</a>
  </li>
  @if(Auth::user()->user_type=='SuperAdmin' || Auth::user()->user_type=='Admin' )

  <li class="nav-item">
    <a class="nav-link {{ Request::is('register') ? "active": "" }}" href="/register">Regiser User</a>
  </li>
@endif
  <li class="nav-item">
    <a class="nav-link" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">Log Out</a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
  </li>
</ul>

</nav>
</div>
