  <div class="row">
<div class="col-md-12 bg-official" >
  <nav class="navbar navbar-expand-sm bg-official navbar-dark" style="z-index:20;">
    <!-- Brand -->
    <!-- <a class="navbar-brand" href="#">Logo</a> -->

    <!-- Links -->
    <ul class="navbar-nav col-md-10  " style="" >
      <li class="nav-item {{ Request::is('/') ? "active": "" }}">
        <a class="nav-link" href="/">Home</a>
      </li>
      <li class="nav-item dropdown {{ Request::is('book' || 'report' || 'guideline' || 'newsletter' || 'journal') ? "active": "" }}" >
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Publication
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item {{ Request::is('book') ? "active": "" }}" " href="/book">Book</a>
          <a class="dropdown-item {{ Request::is('report') ? "active": "" }}" " href="/report">Report</a>
          <a class="dropdown-item {{ Request::is('guideline') ? "active": "" }}" " href="/guideline">Guideline</a>
          <a class="dropdown-item {{ Request::is('newsletter') ? "active": "" }}" " href="/newsletter">Newsletter</a>
          <a class="dropdown-item {{ Request::is('journal') ? "active": "" }}" " href="/journal">Journal</a>
        </div>
      </li>
      <li style="color:black;" class="nav-item {{ Request::is('pressrelease') ? "active": "" }}">
        <a class="nav-link" href="/pressrelease">Press Release</a>
      </li>
      <li class="nav-item {{ Request::is('radioprogram') ? "active": "" }}">
        <a class="nav-link" href="/radioprogram">Radio Program</a>
      </li>
      <li class="nav-item {{ Request::is('notice') ? "active": "" }}">
        <a class="nav-link" href="/notice">Notices</a>
      </li>

      <li class="nav-item {{ Request::is('speech') ? "active": "" }}">
        <a class="nav-link" href="/speech">Speech</a>
      </li>

      <li class="nav-item dropdown {{ Request::is('photo' || 'video') ? "active": "" }}" >
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Gallery
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item {{ Request::is('photo') ? "active": "" }} " href="/photo">Photos</a>
          <a class="dropdown-item {{ Request::is('video') ? "active": "" }} " href="/video">Videos</a>

        </div>
      </li>

      <!-- Dropdown -->

    </ul>
    <ul class="col-md-2 navbar-nav" style="">
      <li class="nav-item dropdown" style="" >
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Ram Shrestha
      </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="/profile">Profile</a>
        <a class="dropdown-item" href="/activity">Activity</a>
        <a class="dropdown-item" href="#">Change Password</a>

          <a class="dropdown-item" href="#">LogOut</a>

        </div>
      </li>
    </ul>

  </div>
    </div>
