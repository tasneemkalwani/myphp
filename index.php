<?php
$std1=array(
    "id"=>2001, 
    "firstName"=>"Ali", 
    "lastName"=>"Idrees" 
);

echo "My name is".$std1["firstName"]." ".$std1["lastName"]."and my id is".$std1["id"];

$std1=array("id"=>2001, "firstName"=>"Ali", "lastName"=>"Idrees" );

$std2=array("id"=>4001, "firstName"=>"Sana", "lastName"=>"Shah" );

$result = array_merge($std1, $std2);
print_r ($result);




?>