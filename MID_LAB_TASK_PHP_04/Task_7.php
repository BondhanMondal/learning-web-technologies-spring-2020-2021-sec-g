<?php
	
	for($i=0;$i<4;$i++){
        for($j=0;$j<$i;$j++){
            echo nl2br ("*");
        }
        echo nl2br("\n");
    }

    for($i=0;$i<4;$i++){
        for($j=0;$j<$i;$j++){
            echo ($j);
        }
        echo nl2br("\n");
    }


    $char = 'A';
    for($i=0;$i<4;$i++){
        for($j=0;$j<$i;$j++){
            echo ($char++);
        }
        echo nl2br("\n");
    }

?>