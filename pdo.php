<?php

$host = isset($_GET["host"])?$_GET["host"]:’127.0.0.1’;
$user = isset($_GET["user"])?$_GET["user"]:’root’;
$pass = isset($_GET["password"])?$_GET["password"]:’123456’;
$db = isset($_GET["db"])?$_GET["db"]:’test’;
$table = isset($_GET["table"])?$_GET["table"]:’table’;

$cursor = "cr_123456";

try
{
  $dbh = new PDO("mysql:host=$host;port=5432;dbname=$db;user=$user;password=$pass");
 foreach($dbh->query('SELECT * from '.$table .’ limit 100’) as $row) {
        print_r($row);
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

