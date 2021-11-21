<?php
for($i = 2; $i <= 6; $i = $i + 1){

    if($i % 2 === 1){
        continue;
        echo $i, "<br />";
    }
    echo $i, "<br />";
}
?>