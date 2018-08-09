<?php
/**
* lr-w-background
* -----------------------------------------------------------------------------
*
* lr-w-background component
*/

$defaults = [
  'style'      => false,
  'image'      => false,
  'content'    => false,
  'overlay'    => 0.5
];

$args = [
  'id'      => uniqid('lr-w-background-'),
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

$id = $component_args['id'];

/**
 * ACF values pulled into the component from the components.php partial.
 */
$style           = $component_data['style'];
$content         = $component_data['content'];
$overlay         = $component_data['overlay'];
$image           = $component_data['image'];

if( $image ) {
  $bg = ' data-backgrounder';
}else{
  $bg = '';
}

?>

<?php if ( ll_empty( $component_data ) ) return; ?>
<section class="ll-lr-w-background<?php echo ' ' . $style . $classes; ?>" <?php echo 'id="'.$id.'"'; ?> data-component="lr-w-background"<?php echo $bg; ?>>

<?php if( $bg ) : ?>
  <style>
    #<?php echo $id; ?>:before {
      position: absolute;
      content: '';
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      height: 100%;
      z-index: 0;
      background-color: rgba(0,0,0,<?php echo $overlay; ?>);
    }
  </style>
<?php endif; ?>

<?php if ($image ) : ?>

  <div class="lr-w-background__feature feature">
    <?php
    if( is_array($image) ) {
      echo ll_format_image($image);
    }else{
      echo $image;
    } ?>
  </div><!-- .lr-w-background__feature.feature -->

<?php endif; ?>

  <div class="container row stretch center">

  <?php if( $content ) : ?>
    <div class="lr-w-background__content col col-offset-md-6of12 col-md-6of12 col-offset-lg-6of12 col-lg-6of12  col-offset-xl-6of12 col-xl-6of12">
      <?php echo $content; ?>
    </div><!-- .lr-w-background__content -->
  <?php endif; ?>

</section>