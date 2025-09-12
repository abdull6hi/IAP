<?php
require_once 'ClassAutoLoad.php';

$mailCnt = [
    'name_from' => 'ICS C Community',
    'email_from' => 'osman.abdullahi@strathmore.edu',
    'name_to' => 'Adan',
    'email_to' => 'abdullahiosman211@gmail.com',
    'subject' => 'Welcome to ICS C Community',
    'body' => 'This is a new semester. <b>Let\'s make the most of it!</b>'
];

$ObjSendMail->Send_Mail($conf, $mailCnt);