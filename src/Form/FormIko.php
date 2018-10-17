<?php
/**
 * @file
 * Contains \Drupal\helloworld\Form\CollectPhone.
 */

namespace Drupal\custom_form_with_filter\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class FormIko extends FormBase {

  public function getFormId() {
    return 'form_iko';
  }

// Создание нашей формы.
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['options'] = array(
      '#type' => 'checkboxes',
      '#title' => 'Заголовок',
      '#options' => $options,
      '#filter' => TRUE,
    );
    $form['first'] = array(
      '#type' => 'checkbox',
      '#title' => 'Первый вариант',
      '#value' => 'Первый вариант',
    );

    $form['name'] = array(
      '#type' => 'checkbox',
      '#title' => 'Второй вариант',
      '#value' => 'Второй вариант',
    );

    $form['address'] = array(
      '#type' => 'checkbox',
      '#title' => 'Третий пункт',
      '#value' => 'Третий пункт',
    );

    // // Предоставляет обёртку для одного или более Action элементов.
    // $form['actions']['#type'] = 'actions';
    // // Добавляем нашу кнопку для отправки.
    // $form['actions']['submit'] = array(
    //   '#type' => 'submit',
    //   '#value' => $this->t('Submit'),
    //   '#button_type' => 'primary',
    // );
    return $form;
  }

  // Отправка формы.
  public function submitForm(array &$form, FormStateInterface $form_state) {
    // 123
  }

}