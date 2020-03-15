<footer class="footer">
    <div class="container">
        Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?>
        <span class="text-muted">&copy; Dr. Julia Riede 2020</span>
    </div>
</footer>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo asset_url();?>js/bootstrap.min.js"></script>
    <script src="http://malsup.github.com/jquery.form.js"></script>
    <script src="<?php echo asset_url();?>js/app.js"></script>
    <script src="<?php echo asset_url();?>js/form_upload.js"></script>
        </body>
</html>
