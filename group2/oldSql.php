<?php

    $host = 'db';
    $db   = 'test_db';
    $user = 'root';
    $pass = '1234';
    $charset = 'utf8';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $opt = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];
    $pdo = new PDO($dsn, $user, $pass, $opt);

    //$res = $pdo->query('select * from users');

    // foreach ($res as $key) {
    //     echo '<pre>';
    //     print_r($key);
    //     echo '</pre>';
    // }

    $user = [
        'name'=>'Joker',
        'surname'=>'Valetovich', 
        'gender'=>'m'
    ];
    
    $res = $pdo->prepare("insert into users (name, surname, gender) values(:name, :surname, :gender)");
    $result = $res->execute($user);
    


    echo '<pre>';
    print_r($result);
    echo '</pre>'
?>