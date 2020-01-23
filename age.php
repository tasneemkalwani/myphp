<?php 
       
       if(isset($_POST['age']))
       {
           $age = 2020 - $_POST['age'];
           echo $age;
       }      
 
       
    
?>

<form method="POST">
<label>Age</label>
<input type="text" name="age">
<input type="submit" value="Send">
</form>