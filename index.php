<?php get_header(); ?>

  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h1 class="header center orange-text"><?php echo get_theme_mod("home_title"); ?></h1>

      <h5 class="header col s12 light"><?php echo get_theme_mod("title_extra_text"); ?></h5>


      <br><br>

    </div>
  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">flash_on</i></h2>
            <h5 class="center"><?php echo get_theme_mod("home_left_title") ?></h5>

            <p class="light"><?php echo get_theme_mod("home_left_text") ?></p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">group</i></h2>
            <h5 class="center"><?php echo get_theme_mod("home_center_title") ?></h5>


            <p class="light"><?php echo get_theme_mod("home_center_text") ?></p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">settings</i></h2>
            <h5 class="center"><?php echo get_theme_mod("home_right_description") ?></h5>

            <p class="light"><?php echo get_theme_mod("home_right_text") ?></p>
          </div>
        </div>
      </div>

    </div>
    <br><br>
  </div>

  <?php get_footer(); ?>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
