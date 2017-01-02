<?php

namespace Drupal\dino_roar\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Roar_block' block.
 *
 * @Block(
 *  id = "roar_block",
 *  admin_label = @Translation("Roar Block"),
 * )
 */
class Roar_block extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
  //  $build['roar_block']['#markup'] = 'XXXXdddddImplement Roar_block.';

    return \Drupal::formBuilder()->getForm('Drupal\dino_roar\Form\roar_block_form');

    //return $build;
  }

}
