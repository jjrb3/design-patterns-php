<?php

class Email
{
    protected $to = '';
    protected $from = '';
    protected $body = '';
    protected $subject = '';

    public function setProperties($to, $from, $subject, $body)
    {
        $this->to = $to;
        $this->from = $from;
        $this->subject = $subject;
        $this->body = $body;
    }

    public function send()
    {
        echo __CLASS__ . " - Esta función enviaría un email.";
    }
}