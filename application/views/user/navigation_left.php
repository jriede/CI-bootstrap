<?php
  $this->load->helper('url');
  $this->load->library('session');
?>

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-3 col-md-2 sidebar">
      <?php if (isset($_SESSION['username']) && $_SESSION['logged_in'] === true) : ?>
      <ul class="nav nav-sidebar">
        <li class="active"><a href="#">Overview <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Reports</a></li>
        <li><a href="#">Analytics</a></li>
        <li><a href="#">Export</a></li>
      </ul>
    <?php else : ?>
      <ul class="nav nav-sidebar">
      <li><a href="<?php echo site_url('register');?>">Register</a></li>
      <li><a href="<?php echo site_url('login');?>">Login</a></li>
      </ul>
    <?php endif; ?>

    </div>


  </div>

</div>
