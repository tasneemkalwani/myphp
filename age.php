<?php 
       
       if(isset($_POST['age']))
       {
           $age = $_POST['age'] - 2020;
           echo $age;
       }      
 
       
    
?>

<form method="POST">
<label>Age</label>
<input type="text" name="age">
<input type="submit" value="Send">
</form>