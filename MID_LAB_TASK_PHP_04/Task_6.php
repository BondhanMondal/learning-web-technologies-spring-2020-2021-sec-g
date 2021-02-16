<?php

	$students = [
        0=> [
            'id'	=>1, 
            'name'	=>'Bondhan', 
            'dept'	=>'CSE', 
            'email'	=>'15-30578-3@student.aiub.edu'
        ],
        1=> [
            'id'	=>2, 
            'name'	=>'abc', 
            'dept'	=>'CSE', 
            'email'	=>'abc@student.aiub.edu'
        ],
        2=> [
            'id'	=>3, 
            'name'	=>'X', 
            'dept'	=>'CSSE', 
            'email'	=>'X@student.aiub.edu'
        ],
        3=> [
            'id'	=>4, 
            'name'	=>'Y', 
            'dept'	=>'BBA', 
            'email'	=>'Y@student.aiub.edu'
        ]
    ];

    $searchname = "Bondhan";
    for($i=0;$i<4;$i++){
        if($searchname==$students[$i]['name']){
            echo nl2br('Student ID : '.$students[$i]['id']."\n");
            echo nl2br('Student Name : '.$students[$i]['name']."\n");
            echo nl2br('Dept. Name : '.$students[$i]['dept']."\n");
            echo nl2br('Student Email : '.$students[$i]['email']."\n");
        }
    }


?>