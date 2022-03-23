<?php
//session_start();

if(!empty($_POST)){
    if($_POST['login'] == "admin"){
        if($_POST['haslo'] == "admin"){
            $_SESSION['admin'] = $_POST['login'];
            header("Location: ?action=home");
        }
    }
}


?>