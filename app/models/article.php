<?php

namespace MVC\models;
use MVC\core\model ;

class article extends model  {


public function Getallarticle(){

    $data= model::db()->rows("select * FROM article");
    return $data ;
    

}
 



public function  deletearticle($id){

    $data= model::db()->delete("article",['id'=>$id] );
    return $data ;
    


}

public function addarticle($data){


    $data= model::db()->insert("article", $data );
    return $data ;
    

}


public function Getarticle($id){

    $data= model::db()->row("select * FROM article  where `id` =$id");
    return $data ;
    
}


public function updataarticle($data,$id){


    $data= model::db()->update("article", $data ,$id );
    return $data ;
    

}



}
