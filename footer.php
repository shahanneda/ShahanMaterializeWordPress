<footer class="page-footer orange">
  <div class="container">
    <div class="row">
      <div class="col l6 s12">

        <?php dynamic_sidebar( 'footer_text' ); ?>

      </div>
      <div class="col l3 s12">
        <?php dynamic_sidebar( 'footer_text_2' ); ?>
      </div>
      <div class="col l3 s12">
        <?php dynamic_sidebar( 'footer_text_3' ); ?>
      </div>
    </div>
  </div>
  <div class="footer-copyright">
    <div class="container">
    Made by <a class="orange-text text-lighten-3" href="http://shahan.ca">Shahan Neda</a>
    </div>
  </div>
  <script>



  (function($) {
    $( document ).ready(function(){
      $(".button-collapse").sideNav();
      $(".wpcf7-response-output").addClass("card-panel").addClass("red").addClass("white-text");
    })
  }(jQuery));
  </script>
  <?php wp_footer(); ?>
</footer>
