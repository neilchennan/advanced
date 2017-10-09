<?php
return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=advanced',
            'username' => 'root',
            'password' => 'root',
            'charset' => 'utf8',
        ],
        'db_hr' => [
            'class' => 'yii\db\Connection',
            'dsn'=>'oci:dbname=//10.0.1.35:1521/ORCL;charset=UTF8',
            'username'=>'stechr',
            'password'=>'sa',
            'charset' => 'utf8',
        ],
        'db_bi' => [
            'class' => 'yii\db\Connection',
            'dsn'=>'oci:dbname=//10.0.1.43:1521/ORCL;charset=UTF8',
            'username'=>'sdgfods',
            'password'=>'passw0rd',
            'charset' => 'utf8',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
    ],
];
