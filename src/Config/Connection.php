<?php

require_once 'Credentials.php' ;

use Illuminate\Database\Capsule\Manager as Connection;

$connection = new Connection();

$connection->addConnection([

    'driver'     =>   'pgsql'           ,
    'host'       =>   DB_HOST           ,
    'username'   =>   DB_USER           ,
    'password'   =>   DB_PASSWORD       ,
    'database'   =>   DB_NAME           ,
    'charset'    =>   'utf8'            ,
    'collation'  =>   'utf8_unicode_ci' ,
    'prefix'     =>   '' 

]);

$connection->setAsGlobal() ;

$connection->bootEloquent() ;