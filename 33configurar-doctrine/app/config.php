<?php
use Application\Services\Doctrine;

return [
    Doctrine::class => \DI\create(Doctrine::class)
        ->constructor(\DI\get('db.connectionOptions')),
    'db.connectionOptions' => [
        "driver"        =>      "pdo_mysql",
        "host"          =>      "127.0.0.1",
        "user"          =>      "root",
        "password"      =>      "root",
        "port"          =>      8889,
        "dbname"        =>      "doctrinedb",
        "unix_socket"   =>      "/Applications/MAMP/tmp/mysql/mysql.sock"
    ]
];
