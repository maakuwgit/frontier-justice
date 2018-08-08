<?php
  $has_prefooter = get_field('has_prefooter');

  if( $has_prefooter !== false ) {

    $prefooter = array(
      'supertitle' => get_field('prefooter_supertitle'),
      'heading'    => get_field('prefooter_heading'),
      'content'    => get_field('prefooter_content'),
      'link'       => get_field('prefooter_link')
    );

    ll_include_component(
      'prefooter',
      $prefooter
    );

  }
?>
