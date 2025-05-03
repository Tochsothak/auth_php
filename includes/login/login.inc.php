<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];

    try {
        require_once 'dbh.inc.php';
        require_once '.inc.php'; 
        require_once 'logincontr';

    }
    catch (PDOException $e){
        die("Query failed: " > $e->getMessage());
    }
}
else {
    header("Location ../index.php");
    die();
}