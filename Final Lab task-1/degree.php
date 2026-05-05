<?php
if(isset($_REQUEST['submit'])){
    if(isset($_REQUEST['degree'])){
        $degree = $_REQUEST['degree'];
        
        echo "Degree: ";
        for($i=0; $i<count($degree); $i++){
            echo $degree[$i]." ";
        }   
    }else{
        echo "please select degree!";
    }
}else{
    echo "please submit form first!";
}