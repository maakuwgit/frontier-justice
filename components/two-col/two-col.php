<?php
/**
* two-col
* -----------------------------------------------------------------------------
*
* two-col component
*/

$defaults = [
  'title'     => false,
  'l_content' => false,
  'r_content' => false
];

$component_data = ll_parse_args( $component_data, $defaults );
?>

<?php
/**
 * Any additional classes to apply to the main component container.
 *
 * @var array
 * @see args['classes']
 */
$classes        = $component_args['classes'] ?: array();

/**
 * ID to apply to the main component container.
 *
 * @var array
 * @see args['id']
 */
$id = ( $component_args['id'] ? $component_args['id'] : uniqid('two-col-') );

/**
 * ACF values pulled into the component from the components.php partial.
 */
$l_content    = $component_data['l_content'];
$r_content    = $component_data['r_content'];

?>

<?php if ( ll_empty( $component_data ) ) return; ?>
<section class="ll-two-col <?php echo implode( " ", $classes ); ?>"<?php echo ' id="' . $id . '"'; ?> data-component="two-col">

  <div class="container row centered">

    <div class="two-col__block col col-md-6of12 col-lg-6of12 col-xl-6of12">

    <?php if( $l_content ) : ?>

      <?php if( $l_content['content'] ) : ?>
      <div class="two-col__left__content">
        <?php echo format_text($l_content['content']); ?>
      </div>
      <!-- .two-col__left__content -->
      <?php endif; ?>

    <?php endif; ?>

    <?php if( $l_content['image'] ) : ?>
    <figure class="two-col__left__image">

      <div class="feature">
        <?php
        if( is_array($l_content['image']) ) {
          echo ll_format_image($l_content['image']);
        }else{
          echo $l_content['image'];
        } ?>
      </div>

      <figcaption class="h0">
        <?php echo $l_content['title']; ?>
      </figcaption>

    </figure>
    <!-- .two-col__left__image -->
    <?php endif; ?>

    </div>
    <!-- .two-col__block -->

    <div class="two-col__block col col-md-6of12 col-lg-6of12 col-xl-6of12">

    <?php if( $r_content ) : ?>

      <?php if( $r_content['image'] ) : ?>
      <div class="two-col__right__image" data-backgrounder>

        <div class="feature">
          <?php
          if( is_array($r_content['image']) ) {
            echo ll_format_image($r_content['image']);
          }else{
            echo $r_content['image'];
          } ?>
        </div>

      </div>
      <!-- .two-col__right__image -->
      <?php endif; ?>

      <?php if( $r_content['content'] ) : ?>
      <div class="two-col__right__content">
        <?php echo format_text($r_content['content']); ?>
      </div>
      <!-- .two-col__right__content -->
      <?php endif; ?>

    <?php endif; ?>

    </div>
    <!-- .two-col__block -->

  </div><!-- .container.row -->

</section>