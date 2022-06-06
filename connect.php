<?php


 $dns = "mysql:host=localhost;dbname=id19044585_web2";


 $user = "id19044585_root";


 $pass ="CJD3M^d*X4IFFOPmjZg@";


 $option = array(


     PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'


 );


 try{


    $con = new PDO($dns , $user , $pass ,$option);


    $con->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);


    echo "";


 }


 catch(PDOExecption $e){


   
          echo "Not Connection ".$e->getMessage();


 }


?>