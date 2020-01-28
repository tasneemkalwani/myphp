<?php

$inwordsArray = array(
    "1" => "one",
    "2" => "two",
    "3" => "three",
    "4" => "four",
    "5" => "five",
    "6" => "six",
    "7" => "seven",
    "8" => "eight",
    "9" => "nine",
    "10" => "ten",
    "11" => "eleven",
    "12" => "twelve",
    "13" => "thirteen",
    "14" => "fourteen",
    "15" => "fifteen",
    "16" => "sixteen",
    "17" => "seventeen",
    "18" => "eighteen",
    "19" => "nineteen",
    "20" => "twenty",
    "30" => "thirty",
    "40" => "forty",
    "50" => "fifty",
    "60" => "sixty",
    "70" => "seventy",
    "80" => "eighty",
    "90" => "ninety",
    "100" => "one hundred",
    "1000" =>"one thousand",
    "100000" =>"one lac",
);

if(isset($_POST['number']))
{
  $number = $_POST['number'];
  echo toWords($number);
}

        function toWords($n)
         {
         global $inwordsArray;

            foreach ($inwordsArray as $keys => $inwords)
            {
            if($n == $keys)  
            return $inwords;
            }

            if ($n > 20 && $n < 100) 
            {
              return toWords(Math.floor($n / 10) * 10) + ' ' + toWords($n % 10);
            }
            
            if ($n > 100 && $n < 1000) 
            {
              return toWords(Math.floor($n / 100)) + ' hundred and ' + toWords($n % 100);
            }
            if ($n > 1000 && $n < 100000)
           {
              return toWords(Math.floor($n / 1000)) +' thousand ' + toWords($n % 1000);
            }

            return $n;
        }
?>

<form method="POST">
<label>Change in Words</label>
<input type ="text" name="number">
<input type="submit" value="Send">
</form>