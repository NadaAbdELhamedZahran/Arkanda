<?php

session_start();

include "config.php";    

$sql1=$conn->query("SELECT password,admin_name FROM admins")->fetchAll(PDO::FETCH_KEY_PAIR);
$sql2=$conn->query("SELECT password,user_name FROM users")->fetchAll(PDO::FETCH_KEY_PAIR);
// ==============================================================================================

if(isset($_SESSION["user"])){
    if(array_search($_SESSION["user"],$sql1) && key_exists($_SESSION["pass"],$sql1)){
        header("location:control1.php");
        exit();
    }
    elseif(array_search($_SESSION["user"],$sql2) && key_exists($_SESSION["pass"],$sql2)){
        header("location:control2.php");
        exit();
    }
    else{
        echo "<h3 style= \" text-align:center; margin-top: 15%; color:#123; font-size:30px; font-weight:bolder; background-color:orange;\"> wrong username or password or you shoule sign up first</h3>";
        header("refresh:3,url=log.php");
        exit();
    }
}
else{
    header("location:log.php");
    exit();
}