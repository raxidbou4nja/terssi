<?php
  class Pages extends Controller {
    public function __construct(){
     
    }
    
    public function index(){
      if(isLoggedIn()){
        redirect('users');
      }
      $this->view('pages/index');
    }
    public function how_to_play(){
      $this->view('pages/how_to_play');
    }
  }
