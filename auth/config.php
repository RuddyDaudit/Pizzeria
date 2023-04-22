<?php

$authTableData = [
    'table' => 'users',
    'idfield' => 'login',
    'cfield' => 'mdp',
    'uidfield' => 'uid',
    'rfield' => 'role',
];

$pathFor = [
    "login"  => "/prog_web/PIzza/login.php",
    "logout" => "/prog_web/PIzza/logout.php",
    "adduser" => "/prog_web/PIzza/adduser.php",
    "root"   => "/prog_web/PIzza/home.php",
];

const SKEY = '_Redirect';