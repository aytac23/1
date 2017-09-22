<?php

/**
 * Created by PhpStorm.
 * User: Gun
 * Date: 20/09/2017
 * Time: 20:51
 */
class bdd
{
    private $db_name;
    private $db_user;
    private $db_pass;
    private $db_host;
    private $pdo;

    public function __construct($db_name,$db_user='root',$db_pass='root',$db_host = 'localhost')
    {
        $this->db_name = $db_name;
        $this->db_user = $db_user;
        $this->db_pass = $db_pass;
        $this->db_host = $db_host;
    }

    private function getPDO(){
        if ($this->pdo === null){
            $pdo = new PDO('mysql:host=localhost;dbname=change', 'root', '');
            $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $this->pdo = $pdo;
        }

        return $this->pdo;
    }

}