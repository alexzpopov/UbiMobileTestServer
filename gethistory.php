<?php
    // Configuration
    $hostname = 'localhost';
    $username = 'root';
    $password = 'eFexM3RD76Ko';
    $database = 'ubisoft_racing_test';
 
    try {
        $dbh = new PDO('mysql:host='. $hostname .';dbname='. $database, $username, $password);
    } catch(PDOException $e) {
        echo '<h1>An error has occurred.</h1><pre>', $e->getMessage() ,'</pre>';
    }
 
    $sth = $dbh->query('SELECT name, score FROM scores WHERE level_name = "' . $_GET['level_name'] . '" ORDER BY score ASC LIMIT 5');
    $sth->setFetchMode(PDO::FETCH_ASSOC);
 
    $result = $sth->fetchAll();
 
    if(count($result) > 0) {
        echo json_encode($result);
    }
?>