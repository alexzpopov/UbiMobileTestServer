<?php
    // Configuration
    $hostname = 'localhost';
    $username = 'root';
    $password = 'eFexM3RD76Ko';
    $database = 'ubisoft_racing_test';

    $secretKey = "mySecretKey"; // Change this value to match the value stored in the client javascript below 

    try {
        $dbh = new PDO('mysql:host='. $hostname .';dbname='. $database, $username, $password);
    } catch(PDOException $e) {
        echo '<h1>An error has ocurred.</h1><pre>', $e->getMessage() ,'</pre>';
    }

    $realHash = hash('sha256', $_GET['name'] . $_GET['score'] . $secretKey);
    if($realHash == $_GET['hash']) {
        $sth = $dbh->prepare('INSERT INTO scores VALUES (null, :name, :level_name, :score)');
        try {
            $sth->execute(array(':name' => $_GET['name'], ':level_name' => $_GET['level_name'], ':score' => $_GET['score']));
        } catch(Exception $e) {
            echo '<h1>An error has ocurred.</h1><pre>', $e->getMessage() ,'</pre>';
        }
    }
?>