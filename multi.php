<?php
         $grade = array( 
            "mohammad" => array (
               "physics" => 'A',
               "maths" => 'B',	
               "chemistry" => 'A'
            ),
            
            "qadir" => array (
               "physics" => 'A',
               "maths" => 'C',
               "chemistry" => 'B'
            ),
            
            "zara" => array (
               "physics" => 'B',
               "maths" => 'A',
               "chemistry" => 'A'
            )
         );

         echo "grade for mohammad in physics : " ;
         echo $grade['mohammad']['physics'] . "<br />"; 
         
         echo "Grade for qadir in maths : ";
         echo $grade['qadir']['maths'] . "<br />"; 
         
         echo "Grade for zara in chemistry : " ;
         echo $grade['zara']['chemistry'] . "<br />"; 
      ?>
   
