<?php
$host = isset($_GET["host"]) ? $_GET["host"] : "127.0.0.1";
$user = isset($_GET["user"]) ? $_GET["user"] : "root";
$pass = isset($_GET["password"]) ? $_GET["password"] : "123456";
$db = isset($_GET["db"]) ? $_GET["db"] : "test";
$table = isset($_GET["table"]) ? $_GET["table"] : "table";
try{
    $dbh = new PDO("mysql:host=$host;port=3306;dbname=$db;user=$user;password=$pass",[
        PDO::ATTR_PERSISTENT => true
    ]);
    foreach ($dbh->query("select * from $table limit 100") as $item){
        print_r($item);
    }
    $dbh = null;
}
catch (PDOException $e){
    echo $e->getMessage();
}