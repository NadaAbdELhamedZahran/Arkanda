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
                <a href="doc_admin.php">ADD DOCUMENTS</a>
                <a href="add_admin.php">ADD Admin</a>
                <!-- <a href="videos_admin.php">ADD Video</a> -->
                <!-- <a href="sign.php">SIGN UP</a> -->
                <a href="logout.php">LOG OUT</a>
            </div>
        </nav>
        <div class="control1">
            <img src="images/6/pexels-photo-273238.jpeg" alt="">
            <div class="wel">
                <?php
                   include "config.php";  

                    $sql1=$conn->query("SELECT password,admin_name FROM admins")->fetchAll(PDO::FETCH_KEY_PAIR);

                    // ==============================================================================================
                
                    if(isset($_SESSION["user"])){   
                        if(array_search($_SESSION["user"],$sql1) && key_exists($_SESSION["pass"],$sql1)){
                                echo "welcome admin " . $_SESSION['user'];
                                header("refresh:1,url=home3.php");
                                exit();
                        }
                        else{
                            header("location:logout.php");
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