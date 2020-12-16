<?php
    function parimpar($n){
        if($n % 2==0){
           return true;
        }
        else{
           return 0;
        }
    }
    
   
    echo '<br>';
    $num = parimpar(7);
    echo "$num";


?>