<?php
    for($i=1; $i <= 10; $i++){
        if($i%2==0){
            echo "$i \n";
        }else{
            echo "odd\n";
            //throw new Exception("odd");
        }
    }
?>