<?php

namespace App\Model;

use App\Core\MysqlBuilder;
use App\Core\Sql;
use App\Helpers\Utils;

class Site extends Sql
{

    protected $id;
    protected $name;
    protected $status;
    protected $is_banned = null;
    protected $pdo = null;
    protected $table;

    public function __construct(){
        $this->pdo = Sql::getInstance();
        $calledClassExploded = explode("\\",get_called_class());
        $this->table = strtolower(DBPREFIXE.end($calledClassExploded));
    }

    public function getId(){
        return $this->id;
    }

    public function getName(){
        return $this->name;
    }

    public function getStatus(){
        return $this->status;
    }

    public function getIsBanned(){
        return $this->is_banned;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function setStatus($status){
        $this->status = $status;
    }

    public function setIsBanned($is_banned){
        $this->is_banned = $is_banned;
    }

    public function updateStatus($id,$status):bool
    {
        $class_name= Utils::getDBNameFromClass($this);
        $sql = $this->pdo->prepare("UPDATE ".$class_name." SET `status` = $status WHERE $class_name.`id` = $id");
        return $sql->execute();
    }


    public function getSiteByName($name){
        $request = "SELECT * FROM `".$this->table."` WHERE name = ?";
        $sql = $this->pdo->prepare($request);
        $sql->execute(array($name));
        return $sql->fetchObject(Site::class);
    }

    public function getAllSiteByIdUser($id_user)
    {

        $request = "SELECT s.id, s.name, rs.name as role, rs.id as role_id, s.status
            FROM esgi_site s
            LEFT JOIN esgi_role_site rs on s.id = rs.id_site
            LEFT JOIN esgi_user_role ur on rs.id = ur.id_role_site
            LEFT JOIN esgi_user eu on ur.id_user = eu.id
            WHERE eu.id = '".$id_user."'";

        $sql = $this->pdo->prepare($request);
        $sql->execute(array($id_user));
        return $sql->fetchAll(\PDO::FETCH_CLASS, Site::class);
    }





}