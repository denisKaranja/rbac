	

	<!-- Load all js files here -->
	<script src="<?php echo base_url();?>assets/js/jquery-2.1.1.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
    <?php if(isset($date_picker)):?>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.js"></script>

    <script>
      $('.date-picker').datepicker(
        {
          format:'yyyy-mm-dd'
        }
      );
    </script>
    
	<?php endif; ?>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo base_url(); ?>assets/js/ie10-viewport-bug-workaround.js"></script>
    <script src="<?php echo base_url();?>assets/js/scroll.to.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery-migrate.js"></script>
    <script src="<?php echo base_url();?>assets/js/naxxserian.js"></script>

    <script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-60087022-1', 'auto');
	  ga('send', 'pageview');

	</script>
	<!-- End of js files -->


<!-- Close the conitainer -->
</div>
	</body>
</html>