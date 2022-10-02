<?php

namespace MVC\controllers;

use MVC\core\controller;
use MVC\core\helpers;
use MVC\core\Session;
use MVC\models\article;

class adminarticlecontroller extends controller{
    public $data_user;

    public function __construct()
    {
        Session::Start();
       $this->data_user= Session::Get('user');
       if(empty($this->data_user)){
        echo "class not access";
        die;
       }

    }

public function index(){
     $article= new article;
     $data =$article->Getallarticle();
     
    $this->view('back/article',['title'=>'admin','data'=>$data]);

}

public function add(){


    $this->view('back/addarticle',['title'=>'admin']);


}
public function addpost(){ 

    $article= new article;

    $img=$_FILES['img'];
     move_uploaded_file($img['tmp_name'],'images/'.$img['name']);
    $data=['name'=>$_POST['name'],'icons'=>$_POST['icon'], 'user_id'=>$this->data_user['id'] ,'img'=>$img['name'] ];
    $data =$article->addarticle($data);

    if($data){
        helpers::redirect('adminarticle/index');
         }
     

    
}

public function delete($id){
    $article =new article();
     $data= $article->deletearticle($id);
     
    if($data){
   helpers::redirect('adminarticle/index');
    }

}



public function updata($id){


    $article =new article();
    $data= $article->Getarticle($id);


    $this->view('back/updataarticle',['data'=>$data]);

}
public function updatapost(){


    
    $article= new article;

    if(!empty($_FILES['img']['name'])){

        $img=$_FILES['img'];
        move_uploaded_file($img['tmp_name'],'images/'.$img['name']);
       $data=['name'=>$_POST['name'],'icons'=>$_POST['icon'], 'user_id'=>$this->data_user['id'] ,'img'=>$img['name'] ];

    }else{
        $data=['name'=>$_POST['name'],'icons'=>$_POST['icon'], 'user_id'=>$this->data_user['id'] ];

    }
   
    $id =['id'=>$_POST['id']];
    $data =$article->updataarticle($data ,$id);

    if($data){
        helpers::redirect('adminarticle/index');
         }



}
public function log(){

    Session::Stop();

    helpers::redirect('user/login');
}



}
















?>
