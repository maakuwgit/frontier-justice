<?php
/**
* photo-stack-w-content
* -----------------------------------------------------------------------------
*
* photo-stack-w-content component
*/

$defaults = [
  'heading'     => false,
  'subheading'  => false,
  'button'      => false,
  'content'     => false,
  'images'      => false,
  'caption'     => false
];

$args = [
  'id'      => uniqid('photo-stacke-w-content-'),
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
$heading     = $component_data['heading'];
$subheading  = $component_data['subheading'];
$content     = $component_data['content'];
$button      = $component_data['button'];
$caption     = $component_data['caption'];
$images      = $component_data['images'];
?>

<?php if ( ll_empty( $component_data ) ) return; ?>
<section class="ll-photo-stack-w-content<?php echo implode( " ", $classes ); ?>"<?php echo $id; ?> data-component="photo-stack-w-content">

  <div class="container row between flex-start">

    <?php if( $heading ) : ?>

      <?php if( $heading['tag'] ) : ?>
    <<?php echo $heading['tag']; ?> class="photo-stack-w-content__headline text-right"><?php echo $heading['text']; ?></<?php echo $heading['tag']; ?>>
    <!-- .photo-stack-w-content__headline -->
      <?php endif; ?>

    <?php endif; ?>

    <?php if( $subheading ) : ?>

      <?php if( $subheading['tag'] ) : ?>
    <<?php echo $subheading['tag']; ?> class="photo-stack-w-content__subheadline col col-sm-8of12 col-offset-md-1of12 col-md-5of12 col-offset-lg-1of12 col-lg-5of12 col-offset-xl-1of12 col-xl-5of12"><?php echo $subheading['text']; ?></<?php echo $subheading['tag']; ?>>
    <!-- .photo-stack-w-content__subheadline -->
      <?php endif; ?>

    <?php endif; ?>

  </div>

  <div class="container row">

    <?php if( $content ) : ?>

      <div class="photo-stack-w-content__photo0 col col-sm-8of12 col-md-6of12 col-lg-6of12 col-xl-6of12">
      <?php echo $content; ?>
      </div><!-- .photo-stack-w-content__description -->

    <?php endif; ?>

    <?php if( $button ) : ?>

      <nav class="photo-stack-w-content__button col col-sm-8of12 col-md-6of12 col-lg-6of12 col-xl-6of12">
        <a class="btn" href="<?php echo $button['url']; ?>"><?php echo $button['title']; ?></a>
      </nav><!-- .photo-stack-w-content__button -->

    <?php endif; ?>

  </div>

</section>