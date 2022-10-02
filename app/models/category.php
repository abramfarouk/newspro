<?php

namespace MVC\models;
use MVC\core\model ;

class category extends model  {


public function Getallcategory(){

    $data= model::db()->rows("select * FROM category");
    return $data ;
    


}
 
public function  deletecategory($id){

    $data= model::db()->delete("category",['id'=>$id] ,$limit=2);
    return $data ;
    


}

public function addcategory($data){


    $data= model::db()->insert("category", $data );
    return $data ;
    

}


public function Getcategory($id){

    $data= model::db()->row("select * FROM category  where `id` =$id");
    return $data ;
    
}


public function updatacategory($data,$id){


    $data= model::db()->update("category", $data ,$id );
    return $data ;
    

}



}
