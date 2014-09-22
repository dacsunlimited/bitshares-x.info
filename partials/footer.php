   <footer>
    <div class="container">
     <div class="row">
      <?php
       if (stripos($_SERVER['REQUEST_URI'], 'index')){
	echo '
	  <div class="col-lg-12 animated fadeInDown preserveHidden" style="margin-top: -24px;">
	   <h6 style="color: #FFF; opacity: 0.6;">' . $translate[ $lang ][ "footer_poweredby" ] . '</h6>
	  </div>';
	} else {
	echo '
	  <div class="col-lg-4 animated fadeInDown preserveHidden" style="margin-top: -2px;">
	   <h6  style="opacity: 0.6; font-weight: 100;">2014 DAC Sun Limited</h6>
	  </div>';
       }
      ?>
    </div><!-- end .row -->
   </div><!-- end .container -->
  </footer><!-- end footer -->
  <!-- Le javascript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="js/jquery.min.js"></script>

  <!-- Twitter Bootstrap script -->
  <script src="js/bootstrap.min.js" type="text/javascript"></script>

  <!-- Waypoints script -->
  <script src="js/waypoints.min.js" type="text/javascript"></script>

  <!-- Sticky navigation script -->
  <script src="js/jquery.sticky.js" type="text/javascript"></script>

  <!-- Scrolling scripts -->
  <script src="js/jquery.scrollTo.js" type="text/javascript"></script>
  <script src="js/jquery.nav.js" type="text/javascript"></script>

  <!-- Retina script -->
  <script src="js/retina.js" type="text/javascript"></script>

  <!-- Custom scripts -->
  <script src="js/custom.js" type="text/javascript"></script>
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
   (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-53814821-1', 'auto');
  ga('send', 'pageview');
  </script>
 </body>
</html>
