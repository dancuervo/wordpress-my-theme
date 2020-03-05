<!-- FOOTER SCRIPTS -->
  <!-- Bootstrap core JavaScript -->
  
    <?php
        $theme_path = get_template_directory_uri();
    ?>

  <script src="<?php echo $theme_path; ?>/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo $theme_path; ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="<?php echo $theme_path; ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact form JavaScript -->
  <script src="<?php echo $theme_path; ?>/js/jqBootstrapValidation.js"></script>
  <script src="<?php echo $theme_path; ?>/js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="<?php echo $theme_path; ?>/js/agency.min.js"></script>

</body>
<?php wp_footer();?>
</html>