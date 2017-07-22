<?php
  $this->load->library('session');
  $this->load->helper('url');
?>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo site_url('');?>">EMMA <span class="glyphicon glyphicon-home" aria-hidden="true"></span></a>
    </div>


    <div id="navbar" class="navbar-collapse collapse">
      <?php if (isset($_SESSION['username']) && $_SESSION['logged_in'] === true) : ?>
      <ul class="nav navbar-nav navbar">
        <li <?php if (!$this->uri->segment(1)) echo "class = 'active'"; ?>><a href="<?php echo site_url('');?>">Dashboard</a></li>
        <li <?php if ($this->uri->segment(1) === 'subscriber') echo "class = 'active'"; ?>><a href="<?php echo site_url('subscriber');?>">Subscribers</a></li>
        <li <?php if ($this->uri->segment(1) === 'message') echo "class = 'active'"; ?>><a href="<?php echo site_url('message');?>">Messages</a></li>
        <li <?php if ($this->uri->segment(1) === 'form') echo "class = 'active'"; ?>><a href="<?php echo site_url('form');?>">Forms</a></li>
        <li <?php if ($this->uri->segment(1) === 'sequence') echo "class = 'active'"; ?>><a href="<?php echo site_url('sequence');?>">Sequences</a></li>
        <li <?php if ($this->uri->segment(1) === 'media') echo "class = 'active'"; ?>><a href="<?php echo site_url('media');?>">Media</a></li>
        <li <?php if ($this->uri->segment(1) === 'backend') echo "class = 'active'"; ?>><a href="<?php echo site_url('backend');?>">Backend</a></li>

      </ul>
      <?php endif; ?>
      <ul class="nav navbar-nav navbar-right">
        <?php if (isset($_SESSION['username']) && $_SESSION['logged_in'] === true) : ?>
          <!-- user management button -->
          <div class="btn-group">
            <button type="button" class="btn btn-primary"><?php echo $_SESSION['username'];?></button>
            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="caret"></span>
              <span class="sr-only">Toggle Dropdown</span>
            </button>
            <ul class="dropdown-menu">
              <li><a href="#"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Your Profile</a></li>
              <li><a href="#"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Settings</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="<?php echo site_url('logout');?>"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Logout</a></li>
            </ul>
          </div>
          <!-- end user management button -->

        <?php else : ?>
          <li><a href="<?php echo site_url('login');?>">Login</a></li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>
</div>



</div>
