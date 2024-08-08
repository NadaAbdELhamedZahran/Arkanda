<?php
    session_start();
?>
<!DOCTYPE html>
<html>


    <?php include "head.php" ?>
    <body>
        <nav>
            <div class="pages" id="navbar">
                <a href="home2.php" class="active">HOME</a>
                <a href="documents.php">DOCUMENTS</a>
                <!-- <a href="videos.php">VIDEOS</a> -->
                <!-- <a href="sign.php">SIGN UP</a> -->
                <a href="logout.php">LOG OUT</a>
            </div>
        </nav>
        
        <div class="control2"> 
            <img src="images/6/pexels-photo-276508.jpeg" alt="">       
            <div class="wel">
                <?php
                    include "config.php";  

                    $sql1=$conn->query("SELECT password,admin_name FROM admins")->fetchAll(PDO::FETCH_KEY_PAIR);      
                    // ==============================================================================================

                    if(isset($_SESSION["user"])){
                        if(array_search($_SESSION["user"],$sql1) && key_exists($_SESSION["pass"],$sql1)){
                            header("location:logout.php");
                            exit();
                        }
                        else{
                            echo "welcome " . $_SESSION['user']; 
                            header("refresh:1,url=home2.php");
                            exit();
                        }
                    }
                    else{
                        header ("location:log.php");
                        exit();
                    }
                ?> 
            </div>
        </div>
    </body>
</html>