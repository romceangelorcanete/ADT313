<h1>Function</h1>


<?php

function printUser(){

    $user = "User 1";
    $role = "Student";
    echo $user."<br/>";
    echo $role."<br/>";
}

function editUser($value, $sage){
    //edit user
    echo 'Edit'.$value.'<br/>';
    echo 'Age'.$age.'<br/>';

}

printUser();
echo '<br/>';
editUser("Romce", 21);
?>