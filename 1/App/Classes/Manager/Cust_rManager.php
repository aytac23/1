<?php
namespace Manager;
/**
 * Created by PhpStorm.
 * User: Gun
 * Date: 24/09/2017
 * Time: 18:43
 */
class Cust_rManager implements \MyInterface\crud
{
    //attribut
    protected $pdo;

    public function __construct(){
        $dbManager = new DbManager();
        $this->pdo = $dbManager->getConnection();

    }

    public function insert($obj)
    {
        // TODO: Implement insert() method.
    }

    public function selectAll()
    {
        // TODO: Implement selectAll() method.
    }

    public function selectOneById($id)
    {
        // TODO: Implement selectOneById() method.
    }

    public function update($obj)
    {
        // TODO: Implement update() method.
    }
}