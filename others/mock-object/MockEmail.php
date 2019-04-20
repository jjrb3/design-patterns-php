<?php

include_once 'Email.php';

class MockEmail extends Email
{
    public function send()
    {
        echo __CLASS__ . " - Esto no enviaría un email.";
        return true;
    }
}