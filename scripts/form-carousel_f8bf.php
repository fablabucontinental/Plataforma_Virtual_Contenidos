<?php

require_once('FormProcessor.php');

$form = array(
    'subject' => 'Programa Ruta Maker Consulta',
    'email_message' => 'Tienes una consulta',
    'success_redirect' => '',
    'sendIpAddress' => false,
    'email' => array(
    'from' => 'https:&#x2F;&#x2F;fablabucontinental.github.io&#x2F;Plataforma_Virtual_Contenidos&#x2F;Proyectos.html',
    'to' => 'fablab@continental.edu.pe'
    ),
    'fields' => array(
    'name' => array(
    'order' => 1,
    'type' => 'string',
    'label' => 'Name',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Name\' is required.'
    )
    ),
    'email' => array(
    'order' => 2,
    'type' => 'email',
    'label' => 'Email',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Email\' is required.'
    )
    ),
    'phone' => array(
    'order' => 3,
    'type' => 'tel',
    'label' => 'Teléfono',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Teléfono\' is required.'
    )
    ),
    'message' => array(
    'order' => 4,
    'type' => 'string',
    'label' => 'message',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'message\' is required.'
    )
    ),
    )
    );

    $processor = new FormProcessor();
    $processor->process($form);

    ?>