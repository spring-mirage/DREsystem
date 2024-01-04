<?php
    require_once "connection.php";
    class ModelUsers {
        
        static public function mdlShowUsers($table,$item,$value) {
            if($item!=null) {
                $stmt = Connection::conect() -> prepare("SELECT * FROM $table WHERE $item = :$item");
                $stmt -> bindParam(":".$item,$value,PDO::PARAM_STR);
                $stmt ->execute();
                return $stmt ->fetch();
                $stmt ->close();
                $stmt = null;
            } else {
                $stmt = Connection::conect() -> prepare("SELECT * FROM $table");
                $stmt -> execute();
                return $stmt ->fetchAll();
                $stmt ->close();
                $stmt = null;
            }    
        }
    }