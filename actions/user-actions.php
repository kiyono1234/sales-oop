<?php

include "../classes/user.php";

if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $user = new User;
    
    $user->login($username, $password);
}

?>