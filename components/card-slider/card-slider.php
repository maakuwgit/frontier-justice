<?php
/**
* card-slider
* -----------------------------------------------------------------------------
*
* card-slider component
*/

$defaults = [
  'heading' => false,
  'slides' => false
];

$args = [
  'id'      => uniqid('card-slider-'),
  'classes' => false,
];

$component_data = ll_parse_args( $component_data, $defaults );
$component_args = ll_parse_args( $component_args, $args );

/**
 * Any additional classes to apply to the main component container.
 *
 * @var array
 * @see args['classes']
 */
$classes  = $component_args['classes'] ?: array();

/**
 * ID to apply to the main component container.
 *
 * @var array
 * @see args['id']
 */
$id            = ' id="' . $component_args['id'] . '"';

/**
 * ACF values pulled into the component from the components.php partial.
 */
$slides       = $component_data['slides'];

if( $component_data['heading'] ) {
  $heading         = $component_data['heading']['text'];
  $heading_tag     = $component_data['heading']['tag'];
}
?>

<?php if ( ll_empty( $component_data ) ) return; ?>
<div class="ll-card-slider <?php echo implode( " ", $classes ); ?>"<?php echo $id; ?> data-component="card-slider">

  <div class="container row centered center">

  <?php if( $heading ) : ?>

    <<?php echo $heading_tag; ?> class="card-slider__heading col">
      <?php echo $heading; ?>
    </<?php echo $heading_tag; ?>>
    <!-- .hero__heading -->

  <?php endif; ?>

  </div>
  <!-- .container -->

  <div class="card-slider__slides">

    <?php foreach( $slides as $slide ) : ?>

    <figure class="card-slider__slide" data-backgrounder>
      <div class="feature">
        <?php echo ll_format_image($slide['background']); ?>
      </div>

      <figcaption>
        <?php echo format_text($slide['content']); ?>
      </figcaption>
    </figure>
    <!-- .card-slider_slide -->

    <?php endforeach; ?>

  </div>
  <!-- .card-slider_slides -->

  <nav class="card-slider__nav row center centered"></nav>
  <!-- .card-slider-nav -->

</div>
