<?php
  $this->load->library('session');
  //print_r($_SESSION);
?>
<nav class="navbar navbar-expand-lg navbar-light navbar-top bg-light">

  <a class="navbar-brand" href="<?php echo site_url('');?>"><span class="oi" data-glyph="home" title="home" aria-hidden="true"></span> Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <?php if (isset($_SESSION['username']) && $_SESSION['logged_in'] === true) : ?>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">Learn</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Design
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#">Help</a>
      </li>
      <?php if ($_SESSION['is_admin'] === true) : ?>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('admin');?>">Admin</a>
        </li>
      <?php endif; ?>
    </ul>


    <ul class="nav navbar-nav navbar-right">
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['username'];?></a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">My Profile</a>
            <a class="dropdown-item" href="#">Invite Friends</a>
            <div class="dropdown-divider"></div>
            <?php if ($_SESSION['is_admin'] === true) : ?>
              <a class="dropdown-item" href="<?php echo site_url('admin');?>">Admin Tools</a>
              <div class="dropdown-divider"></div>
            <?php endif; ?>
            <a class="dropdown-item" href="<?php echo site_url('logout');?>"><span class="la la-log-out"></span> Logout</a>
          </div>
        </li>
        <ul class="dropdown-menu">
          <li><a href="#"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Your Profile</a></li>
          <li><a href="#"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Settings</a></li>
          <li role="separator" class="divider"></li>
          <li><a href="<?php echo site_url('logout');?>"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Logout</a></li>
        </ul>
      </div>

    <?php else : ?>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">Menu 1</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Menu 2</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Menu 3</a>
          </li>

        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('login');?>">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="<?php echo site_url('register');?>">Register</a>
          </li>
            </ul>
          </div>

    <?php endif; ?>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
