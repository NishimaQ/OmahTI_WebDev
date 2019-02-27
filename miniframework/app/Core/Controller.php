<?php

class Controller{
    public function view($view){
        require_once '../app/Views/'.$view.'.php';
    }
}