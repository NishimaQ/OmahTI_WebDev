<?php

class HomeController extends Controller{
    public function index(){
        return $this->view('home');
    }

    public function user($nama, $umur){
        die($nama. ' '. $umur);
    }
}