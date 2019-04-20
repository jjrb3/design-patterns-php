<?php

include_once 'Email.php';
include_once 'MockEmail.php';

$email = new MockEmail();
$email->setProperties('test@ejemplo.com', 'desde@ejemplo.com', 'Tema', 'Este es el body');
$email->send();