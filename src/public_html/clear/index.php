<?php
require_once("../inc.library.php");

$statement = $pdo->prepare("TRUNCATE TABLE `ip_logs`;");
$params = array(
);
$success = $statement->execute($params);
echo $success?"Done":"Failed: ".print_r($pdo->errorInfo(), true), "\r\n";
