<?php

class HomeController extends Controller{
    public function index(){
        $user = $this->model('User');

        return $this->view('home', ["nama" => 'NishimaQ', "umur" => $user->umur()]);
    }

    public function user($nama, $umur){
        die($nama. ' '. $umur);
    }

    public function checkmodel(){
        $user = $this->model('User');
        die(var_dump($user));
    }

    public function umur(){
        $umur = $this->model('User')->umur();        
        die(var_dump($umur));
    }

    public function shit(){
        $user = $this->model('User')->showUser();  
        // die(var_dump($user));
        return $this->view('shit', ["users" => $user]);
    }
}