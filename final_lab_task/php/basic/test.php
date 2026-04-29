<?php

    $name = "";
    // $id = 12;
    // $cgpa = 3.5;

    //$std = ['alamin', 12, 3.5];
    //$std = array('alamin', 12, 3.5);
    // $stds = [
    //             ['alamin', 12, 3.5],
    //             ['alamin', 12, 3.5],
    //             ['alamin', 12, 3.5]
    //         ];
    // $stds[1][1];
    //$std['name'];

    $stds = [
        's1'=>['name'=>'alamin', 'id'=>12, 'cgpa'=>3.5],
        's2'=>['name'=>'abc', 'id'=>2, 'cgpa'=>3.2],
        's3'=>['name'=>'xyz', 'id'=>3, 'cgpa'=>3.1]
    ];

    //$stds['s3'];

    //echo "test <br>";
    // echo $std['name'];
    //print($name);
    //print_r($stds['s3']);
    //var_dump($std);
    //echo $std["name"]."-".$std["id"]."-".$std["cgpa"];

    // for($i=0; $i<count($std); $i++){
    //     echo "<h1>".$std['name']."</h1>";
    // }
    // $std = ['name'=>'alamin', 'id'=>12, 'cgpa'=>3.5];

    // foreach($std as $v){
    //     echo $v."<br>";
    // }
?>


<h1>Your profile name is: <?php if($name == ""){echo "not found!";}else{echo $name;} ?> </h1>