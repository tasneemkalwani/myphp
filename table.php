<?php 
       
       if(isset($_POST['number']))
       {
           $number = $_POST['number'];
                for($i=1;$i<=10;$i++)
                {
                    echo "<tr>";
                    echo "$number  * $i = ". $number * $i; 
                    echo '<br>'; 
                }           
 
      } 
    
?>

<form method="POST">
<label>Table</label>
<input type="text" name="number">
<input type="submit" value="Send">
</form>