<?php

namespace Drupal\dino_roar\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Entity;

/**
 * Provides a 'block_fields' block.
 *
 * @Block(
 *  id = "block_fields",
 *  admin_label = @Translation("Block_fields"),
 * )
 */
class block_fields extends BlockBase {


  /**
   * {@inheritdoc}
   */
  public function defaultConfiguration() {
    return [
         'select_one' => 2,
         'text_1' => $this->t('abcd'),
         'number_1' => 2,
        ] + parent::defaultConfiguration();

 }

  /**
   * {@inheritdoc}
   */
  public function blockForm($form, FormStateInterface $form_state) {
    $form['select_one'] = [
      '#type' => 'select',
      '#title' => $this->t('select one'),
      '#description' => $this->t('ssssss'),
      '#options' => array('1' => $this->t('1'), '2' => $this->t('2'), '3' => $this->t('3'), '4' => $this->t('4'), '5' => $this->t('5')),
      '#default_value' => $this->configuration['select_one'],
      '#size' => 5,
      '#weight' => '0',
    ];
    $form['text_1'] = [
      '#type' => 'text_format',
      '#title' => $this->t('text 1'),
      '#description' => $this->t('aaaaa'),
      '#default_value' => $this->configuration['text_1'],
      '#weight' => '0',
    ];
    $form['number_1'] = [
      '#type' => 'number',
      '#title' => $this->t('number 1'),
      '#description' => $this->t(''),
      '#default_value' => $this->configuration['number_1'],
      '#weight' => '0',
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function blockSubmit($form, FormStateInterface $form_state) {
    $this->configuration['select_one'] = $form_state->getValue('select_one');
    $this->configuration['text_1'] = $form_state->getValue('text_1');
    $this->configuration['number_1'] = $form_state->getValue('number_1');
  }

  /**
   * {@inheritdoc}
   */
  public function build() {
      $node = \Drupal::entityTypeManager()->getStorage('node')->load(1);

      $title = $node->get('title')->value;
      $body = $node->get('body')->value;
      $entity_type = $node->getEntityType()->getBundleEntityType();
      var_dump($entity_type);

      $build = [];
      $build['block_fields_select_one'] =
        [
            '#markup' => '<p>' . $title . '</p>',

        ];
      $build['block_fields_text_1']['#markup'] = '<p>' . $body . '</p>';
    //  $build['block_fields_text_1']['#markup'] = '<p>' . $entity_type . '</p>';
      return $build;
  }

}  // 658442
