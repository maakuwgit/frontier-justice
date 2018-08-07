<?php
  $cat   = get_queried_object();
  $pfpid = get_option( 'page_for_posts' );

  if( !is_archive() ){
    $heading   = array(
        'text'  => get_the_title($pfpid),
        'tag'   => 'h2'
      );
  }else{
    $heading      = array(
      'text' => $cat->name,
      'tag'  => 'h2'
    );
  }

  $hero = array(
    'heading'     => $heading,
    'image'       => get_the_post_thumbnail( $pfpid )
  );

  ll_include_component(
    'hero',
    $hero,
    array(
      'classes' => array('big-headline')
    )
  );
?>