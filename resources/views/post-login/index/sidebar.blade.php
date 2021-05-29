<style type="text/css">

  .sidebar {
    min-height: calc(100vh - 63px);
    background: #ffffff;
    font-family: "Nunito Sans", "Nunito",sans-serif;
    padding: 0;
    width: 255px;
    z-index: 11;
    transition: width 0.25s ease, background 0.25s ease;
    -webkit-transition: width 0.25s ease, background 0.25s ease;
    -moz-transition: width 0.25s ease, background 0.25s ease;
    -ms-transition: width 0.25s ease, background 0.25s ease; }
    .sidebar .nav .nav-item .nav-link {
      align-items: center;}

</style>
<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
   
    <li class="nav-item nav-profile">
      <div class="nav-link">
        <div class="user-wrapper">
          <div class="profile-image">
            <img src="images/index.png" alt="profile image">
          </div>
          <div class="text-wrapper text-center">
            <p class="profile-name  text-center" style="font-size: 20px;">{{auth()->user()->name}}</p>
            <div>
              <small class="designation text-muted">{{auth()->user()->email}}</small>
              <span class="status-indicator online"></span>
            </div>
          </div>
        </div>
      </div>
    </li>
    
    <li class="nav-item">
      <a class="nav-link" href="/dashboard">
        <i class="menu-icon mdi mdi-television"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
        <i class="menu-icon mdi mdi-content-copy"></i>
        <span class="menu-title">Customize Pages</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="/custom-carousel">Customize Carousel</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/custom-about">Customize About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/custom-service">Customize Service</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/custom-portfolio">Customize Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/custom-news">Customize News</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/custom-gallery">Customize Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/custom-contact">Customize Contact</a>
          </li>
        </ul>
      </div>
    </li>
   
    <li class="nav-item">
      <a class="nav-link" href="/admin-news">
        <i class="menu-icon mdi mdi-newspaper"></i>
        <span class="menu-title">News</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/admin-service">
        <i class="menu-icon mdi mdi-receipt"></i>
        <span class="menu-title">Service</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/team">
        <i class="menu-icon mdi mdi-account-multiple"></i>
        <span class="menu-title">Team</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/partners">
        <i class="menu-icon mdi mdi-account-multiple-plus-outline"></i>
        <span class="menu-title">Partners</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/admin-portfolio">
        <i class="menu-icon mdi mdi-poll-box"></i>
        <span class="menu-title">Portfolio</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/admin-gallery">
        <i class="menu-icon mdi mdi-image"></i>
        <span class="menu-title">Gallery</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/admin-contact">
        <i class="menu-icon mdi mdi-account"></i>
        <span class="menu-title">Contact</span>
      </a>
    </li>
    
  </ul>
</nav>