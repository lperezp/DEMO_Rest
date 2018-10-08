<?php

class Message{

    private $vcon;

    public $id_message;
    public $name_user;
    public $message;
    public $date_message;

    public function __construct($db){
        $this->vcon=$db;
    }

    function readMessage()
    {
        $sql = "select m.id_message,u.name_user, m.message from message m inner join user u on m.id_user = u.id_user;";
        $stmt = $this->vcon->query($sql);
        return $stmt;
    }

    function insertMessage(){
        $sql = "insert into message(id_user,message,date) set id_user=:id_user,message=:message,date=:date";

        $stmt = $this->vcon->query($sql);
    }
}

