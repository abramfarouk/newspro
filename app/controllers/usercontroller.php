<?php


namespace MVC\controllers;

use MVC\core\controller;
use MVC\models\user;
use GUMP;
use MVC\core\Session;
use MVC\core\helpers;




  class usercontroller extends controller  {
   
    public function __construct()
    {
        Session::Start();
       

    }
// Login 

    public function login(){

      $this->view('home/login',["title"=>"login"]);
    }

  // postlogin   

    public function postlogin(){

      $v = GUMP::is_valid($_POST,[ 
        'email'=>'required'
     
     ]);
    
     if($v ==1){
         
       $user = new user();
       $data =$user->getuser($_POST['email'],$_POST['password']);
       Session::Set('user',$data);

       helpers::redirect('adminpost/index');  

     }


     
    
    }

    public function logout(){

      Session::Stop();
    }


    


  }



?>