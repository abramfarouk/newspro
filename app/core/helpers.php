<?php

namespace MVC\core;


class helpers{



    public static function redirect($path){


        header('LOCATION:http://localhost:8080/newspro/public/'.$path);





        
    }

    public static function assets($path){
         echo ROOT."/public/".$path ;

    }






}










?>