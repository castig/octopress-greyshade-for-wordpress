    </div><!-- .container --> 
  <?php wp_footer(); ?>


   <script src="<?php echo get_template_directory_uri(); ?>/js/slash.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.fancybox.pack.js"></script>
    <script type="text/javascript">
    (function($){
      $('.fancybox').fancybox();
    })(jQuery);
    </script> <!-- Delete or comment this line to disable Fancybox -->


    <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-XXXXXXXXXXX']);
      _gaq.push(['_setDomainName', 'http://xxxxxxxxxx.com']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>

</body>
</html>

