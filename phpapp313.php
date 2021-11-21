<?php

$employee =array(
    "Name" => "Alex",
    "Email" =>"Alex@email.com",
    "Age"=>21, 
    "Gender"=>"Male"
);

foreach($employee as $key => $element){
    echo $key, ":", $element,"<br />";
}
?>