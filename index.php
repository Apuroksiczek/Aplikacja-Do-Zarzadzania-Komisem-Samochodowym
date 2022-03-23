<?php
session_start();
include("view/view.php");
$dbhost = "localhost";
$dbname = "proj";
$dbuser = "root";
$dbpassword = "";

try{
    $conn = new PDO("mysql:host=".$dbhost.";dbname=".$dbname, $dbuser, $dbpassword);
 }
 catch(PDOException $error){
     echo $error->getMessage();
 }

define('_ROOT_PATH', dirname(__FILE__));   

$actions = array("login","logout","home", "about_us","car_list", "contact","test","car_view","add_car", "edytuj", "sprzedaj","lista_transakcji", "klient_show","kupione_pojazdy", "edytuj_klienta");
if(!isset($_SESSION['action']))
    $_SESSION['action'] = 'home';

if(!empty($_GET['action'] )){
    if(in_array($_GET['action'] , $actions)){
        $_SESSION['action'] = $_GET["action"];
    }else{
        $_SESSION['action'] = 'pageNotFound';
    }
}


$view = new View();
$view->render($_SESSION['action'],$conn);

// $view->render("test");