<?php
/*
Template Name: Dark Background
*/
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/contents/hero', 'page--dark'); ?>
  <?php include( locate_template('templates/partials/synopsis.php') ); ?>
  <?php include( locate_template('templates/partials/components.php') ); ?>
  <?php include( locate_template('templates/partials/prefooter.php') ); ?>
<?php endwhile; ?>