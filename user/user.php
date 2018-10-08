<?php

class User{

    private $vcon;

    public function __construct($db){
        $this->vcon=$db;
    }

    function readUser()
    {
        $sql = "select id_user, name_user, mail from user;";
        $stmt = $this->vcon->query($sql);
        return $stmt;
    }

    function addUser(){

    }
}

