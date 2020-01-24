<?php 
       $x = 75;
       if(isset($_POST['num'])) 
       {
        $num = $_POST['num'];
        switch($num) {
            case ($num < $x):
            echo " Your number is lower!";
            break;

            case ($num > $x):
            echo " Your number is higher!";
            break;

            case ($num == $x):
            echo " Congratulations! You guessed the hidden number.";
            break;

            case '':
            echo " You never set a number!";
            break;
        }
    }
 
       
    
?>

<form method="POST">
<label>Guess the Number</label>
<input type="text" name="num">
<input type="submit" value="Send">
</form>



