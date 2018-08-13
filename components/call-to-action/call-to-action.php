<?php
/**
* call-to-action
* -----------------------------------------------------------------------------
*
* call-to-action component
*/

$defaults = [
  'supertitle'  => false,
  'heading'     => false,
  'content'     => false,
  'links'       => false,
  'image'       => false,
  'overlay'     => 1
];

$args = [
  'id'      => uniqid('call-to-action-'),
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
$classes  = $component_args['classes'];

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

$supertitle      = $component_data['supertitle'];
$heading         = $component_data['heading'];
$content         = $component_data['content'];
$links           = $component_data['links'];
$image           = $component_data['image'];
$overlay         = $component_data['overlay'];

if( $image ) {
  $bg = ' data-backgrounder';
}else{
  $bg = '';
}

?>

<?php if ( ll_empty( $component_data ) ) return; ?>
<section class="ll-call-to-action relative<?php echo $classes; ?>"<?php echo ' id="'.$id.'"'; ?> data-component="call-to-action"<?php echo $bg; ?>>


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
      background: linear-gradient(124.5deg, rgba(0,0,0,0) 0%, rgba(0,0,0,<?php echo $overlay; ?>) 100%);
    }
  </style>
<?php endif; ?>

  <?php if ($image ) : ?>

    <div class="call-to-action__feature feature">
      <?php
      if( is_array($image) ) {
        echo ll_format_image($image);
      }else{
        echo $image;
      } ?>
    </div><!-- .call-to-action__feature.feature -->

  <?php endif; ?>

  <div class="container centered row">

  <?php if( $supertitle ) : ?>

    <h2 class="call-to-action__supertitle text-center col col-md-8of12 col-lg-8of12 col-xl-8of12">
      <?php echo $supertitle; ?>
    </h2>
    <!-- .call-to-action__supertitle -->

  <?php endif; ?>

  <?php if( $heading ) : ?>

    <h3 class="call-to-action__heading text-center col col-md-8of12 col-lg-8of12 col-xl-8of12">
      <?php echo $heading; ?>
    </h3>
    <!-- .call-to-action__heading -->

  <?php endif; ?>

  <?php if( $content ) : ?>

    <div class="call-to-action__content text-center col col-md-8of12 col-lg-7of12 col-xl-7of12">
      <?php echo format_text($content); ?>
    </div>
    <!-- .call-to-action__content -->

  <?php endif; ?>

  <?php if( $links ) : ?>

    <div class="call-to-action__buttons text-center col col-md-8of12 col-lg-7of12 col-xl-7of12">

      <?php foreach( $links as $button ) : ?>
      <a class="call-to-action__button btn--gold" href="<?php echo $button['button']['url'];?>"><?php echo $button['button']['title'];?></a>
      <?php endforeach; ?>

    </div>
    <!-- .prefooter__button.col.col-md-10of12.col-lg-8of12.col-xl-8of12.col-xxl-8of12 -->

  <?php endif; ?>

</div>

</section>
