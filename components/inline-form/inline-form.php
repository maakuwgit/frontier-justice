<?php
/**
* inline-form
* -----------------------------------------------------------------------------
*
* inline-form component
*/

$defaults = [
  'form_id' => false,
  'image'   => false
];

$args = [
  'id'      => uniqid('inline-form-'),
  'classes' => false,
];

$component_data = ll_parse_args( $component_data, $defaults );
$component_args = ll_parse_args( $component_args, $args );
?>

<?php
/**
 * Any additional classes to apply to the main component container.
 *
 * @var array
 * @see args['classes']
 */
$classes        = $component_args['classes'];
if( $classes ) $classes = ' ' . implode( " ", $classes );

/**
 * ID to apply to the main component container.
 *
 * @var array
 * @see args['id']
 */
$id      = $component_args['id'];
$form_id = $component_data['form_id'];
$image   = $component_data['image'];
?>

<?php if ( ll_empty( $component_data ) || !is_plugin_active( 'gravityforms/gravityforms.php' ) ) return; ?>
<section class="ll-inline-form<?php echo $classes; ?>"<?php echo ' id="'.$id.'"'; ?> data-component="inline-form">

  <div class="container row between">

  <?php if ($image ) : ?>

    <div class="inline-form__feature col col-md-6of12 col-lg-5of12 col-xl-5of12">
      <?php
      if( is_array($image) ) {
        echo ll_format_image($image);
      }else{
        echo $image;
      } ?>
    </div><!-- .inline-form__feature.col -->

  <?php endif; ?>

    <div class="col col-md-6of12 col-offset-lg-7of12 col-lg-5of12 col-offset-lg-7of12 col-xl-5of12">
      <?php gravity_form( $form_id, true, true ); ?>
    </div>

  </div>
  <!-- .container.row.betwee -->

</section>