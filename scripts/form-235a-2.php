<?php

require_once('FormProcessor.php');

$form = array(
    'subject' => 'Новая заявка с сайта Sattor.art',
    'email_message' => 'Новая заявка с сайта Sattor.art',
    'success_redirect' => '',
    'sendIpAddress' => true,
    'email' => array(
    'from' => 'info1@sattor.art',
    'to' => 'info@sattor.art',
    'toCopy' => '',
    'toHiddenCopy' => ''
    ),
    'fields' => array(
    'Имя' => array(
    'order' => 1,
    'type' => 'string',
    'label' => 'Имя',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Имя\' is required.'
    )
    ),
    'Телефон' => array(
    'order' => 2,
    'type' => 'tel',
    'label' => 'Телефон',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Телефон\' is required.'
    )
    ),
    )
    );

    $processor = new FormProcessor('');
    $processor->process($form);

    ?>