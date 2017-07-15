<?php
    $dsn = 'mysql:host=localhost;dbname=planner';
    $username = 'aaronmcc_iclient';
    $password = 'wersdwew322dsafs';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
?>