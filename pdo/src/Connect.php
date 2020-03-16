<?php

namespace Academy;
use PDO;
class Connect {
    public $host="db";
    public $user="root";
    public $password=1234;
    public $db="test_db";
    public $charset="utf8";
    public $pdo=null;
    public function __construct()
    {
        $dsn = "mysql:host=$this->host;dbname=$this->db;charset=$this->charset";
        $opt = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];
    $this->pdo = new PDO($dsn, $this->user, $this->password, $opt);
    }
}
