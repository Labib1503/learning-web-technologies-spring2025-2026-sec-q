<?php

    //print_r($_FILES);
    $name= $_FILES['myfile']['name'];
    
    $src = $_FILES['myfile']['tmp_name'];
    $des = 'upload/'.$name;

    if(move_uploaded_file($src, $des)){
        echo "Success";
    }else{
        echo "Error";
    }

?>