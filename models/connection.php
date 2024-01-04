<?php
    class connection{
        static public function conect(){
            $link = new PDO("mysql:host=localhost;dbname=pos","root","");
            $link ->exec("set names utf8mb4");
            return $link;
        }
    }