<?php

namespace MVC\controllers;

use MVC\core\controller;
use MVC\core\helpers;
use MVC\core\Session;
use MVC\models\category;

class admincategorycontroller extends controller{
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
     $category= new category;
     $data =$category->Getallcategory();
     
    $this->view('back/category',['title'=>'admin','data'=>$data]);

}

public function add(){


    $this->view('back/addcategory',['title'=>'admin']);


}
public function addpost(){ 

    $category= new category;

    $img=$_FILES['img'];
     move_uploaded_file($img['tmp_name'],'images/'.$img['name']);
    $data=['name'=>$_POST['name'],'icons'=>$_POST['icon'], 'user_id'=>$this->data_user['id'] ,'img'=>$img['name'] ];
    $data =$category->addcategory($data);

    if($data){
        helpers::redirect('admincategory/index');
         }
     

    
}

public function delete($id){
    $category =new category();
     $data= $category->deletecategory($id);
     
    if($data){
   helpers::redirect('admincategory/index');
    }

}


public function updata($id){


    $category =new category();
    $data= $category->Getcategory($id);


    $this->view('back/updatacategory',['data'=>$data]);

}
public function updatapost(){


    
    $category= new category;

    if(!empty($_FILES['img']['name'])){

        $img=$_FILES['img'];
        move_uploaded_file($img['tmp_name'],'images/'.$img['name']);
       $data=['name'=>$_POST['name'],'icons'=>$_POST['icon'], 'user_id'=>$this->data_user['id'] ,'img'=>$img['name'] ];

    }else{
        $data=['name'=>$_POST['name'],'icons'=>$_POST['icon'], 'user_id'=>$this->data_user['id'] ];

    }
   
    $id =['id'=>$_POST['id']];
    $data =$category->updatacategory($data ,$id);

    if($data){
        helpers::redirect('admincategory/index');
         }



}
public function log(){

    Session::Stop();

    helpers::redirect('user/login');
}



}
















?>
