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
  <li class="nav-item">
    <a class="nav-link" href="#">Log Out</a>
  </li>
</ul>

</nav>
</div>
