<?php
    for($i=1; $i<=20; $i++)
    {
        for($j=1; $j<=$i; $j++)
        {
                    echo " * "; 
        }
               echo "<br/>";
    }


$size = 20;
for($i=1; $i<=$size; $i++){
    for($j=1; $j<=$size-$i; $j++){
        echo "&nbsp;&nbsp;";
    }
    for($k=1;$k<=$i;$k++){
		echo "*&nbsp;&nbsp;";
    }
echo "<br />";
}

$size = 20;
for($i=1; $i<=$size; $i++){
    for($j=1; $j<=$size; $j++){
        echo " &nbsp;&nbsp;";
        
    }
    for($k=20; $k>=$i; $k--){
        echo "*&nbsp;&nbsp;";
        
    }
echo "<br />";
}

?>