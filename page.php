<?php
/**
 * Template Name: Full Width PAge
 */
get_header(); ?>

<div id="main-content" class="main-content">
  <h1><?php single_post_title(); ?></h1>
	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

      <?php
      // wp_title()
        $pageid = get_the_id();
        $content_post = get_post($pageid);
        $content = $content_post->post_content;
        $content = apply_filters('the_content', $content);
        $content = str_replace(']]>', ']]&gt;', $content);
        echo $content;
      ?>
		</div><!-- #content -->
	</div><!-- #primary -->
</div><!-- #main-content -->

<?php
get_footer();
