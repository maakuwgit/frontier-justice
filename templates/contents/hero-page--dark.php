<?php
  $hero = array(
    'heading'     => get_field('hero_heading'),
    'content'     => get_field('hero_content'),
    'image'       => get_field('hero_image'),
    'overlay'     => get_field('overlay_strength'),
    'video'       => get_field('hero_video')
  );

  ll_include_component(
    'hero',
    $hero,
    array(
      'classes' => array('big-headline')
    )
  );
?>
