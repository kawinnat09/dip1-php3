<?php
$role = 'subscriber';
$mesg = "";

if('admin' === $role ){
    $msg = 'Welcome, Admin';
}
else if('editor' === $role){
    $msg = 'Article to edit';
}
else if('subscriber' === $role){
    $msg = 'Check new Article';
}
else{
    $msg = 'Sorry';
}
echo $msg;
?>