<?php
/**
* inline-form
* -----------------------------------------------------------------------------
*
* inline-form component
*/

$defaults = [
  'form_id' => false,
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
?>

<?php if ( ll_empty( $component_data ) || !is_plugin_active( 'gravityforms/gravityforms.php' ) ) return; ?>
<div class="ll-inline-form<?php echo $classes; ?>"<?php echo ' id="'.$id.'"'; ?> data-component="inline-form">

  <?php gravity_form( $form_id, true, true ); ?>

</div>
