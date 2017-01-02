<?php

namespace Drupal\dino_roar\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class roar_block_form.
 *
 * @package Drupal\dino_roar\Form
 */
class roar_block_form extends FormBase {


  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'roar_block_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['first_field'] = [
      '#type' => 'text_format',
      '#title' => $this->t('First field'),
    ];
    $form['date'] = [
      '#type' => 'date',
      '#title' => $this->t('Date'),
    ];

    $form['submit'] = [
        '#type' => 'submit',
        '#value' => t('Submit'),
    ];

    return $form;
  }

  /**
    * {@inheritdoc}
    */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    parent::validateForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    // Display result.
    foreach ($form_state->getValues() as $key => $value) {
        drupal_set_message($key . ': ' . $value);
    }

  }

}
