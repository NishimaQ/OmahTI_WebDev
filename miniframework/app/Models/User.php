<?php

Class User{
    private $name = "NishimaQ";
    private $umur = 20;
    private $db;

    public function __construct(){
        $this->db = Database::getInstance();
    }

    public function umur(){
        return $this->umur;
    }

    public function showUser(){
        $data = $this->db->index('h00man');
        return $data;
    }


}