<?php
$url = isset($_GET["url"]) ? $_GET["url"] : 'http://127.0.0.1';
$params = ['name' => 'John', 'surname' => 'Doe', 'age' => 36];
$defaults = array(
    CURLOPT_URL => $url,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $params,
    CURLOPT_HEADER => true,
    CURLOPT_RETURNTRANSFER => false,
    CURLOPT_TIMEOUT => 2
);
$ch = curl_init();
curl_setopt_array($ch, ($options + $defaults));
?>