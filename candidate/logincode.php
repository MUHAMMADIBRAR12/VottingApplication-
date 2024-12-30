<?php 
     $foodtype=$_POST['maryam'];
      $food=$_POST['nazia'];
     $foodsize=$_POST['fizza'];
     if($foodtype =='fast food'){
          echo'YES I HAVE fast food<br>';
               if( $food== 'pizza'){
                    echo 'YES I HAVE pizza<br>';
                    if( $foodsize=='small'){
                         echo'PURCHASE PIZZA';
                    }else{
                         echo'SMALL PIZZA IS NOT AVAILABLE';
                    }
               }else{
                    echo'PIZZA is not available';
               }
     }else{
           if($foodtype =='chinese'){
               echo'YES I HAVE chinese food<br>';
               if( $food== 'soup'){
                    echo 'YES I HAVE soup<br>';
               }else{
                    echo 'soup not available';
               }
           }
         }  
          
?>

