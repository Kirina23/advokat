<?php

/**
  * Configuration for database connection
  *
  */
//Проверка на лшибки
ini_set('display_errors', 1);
error_reporting(E_ALL);

$host       = "pg2.sweb.ru";
$username   = "kirina";
$password   = "Daikor@23";
$dbname     = "test"; // will use later
$dsn        = "mysql:host=$host;
            dbname=$dbname"; // will use later
$options    = array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
              );
              
    ?>