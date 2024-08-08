<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<?php include "head.php" ?>

    <body>    
        <!-- navigation bar -->
        <nav>
            <div class="pages" id="navbar">
                <a href="index.php" >HOME</a>
                <a href="documents_index.php">DOCUMENTS</a>
                <!-- <a href="videos.php">VIDEOS</a> -->
                <a href="sign.php" >SIGN UP</a>
                <a href="log.php" class="active">LOG IN</a>
            </div>
        </nav>
<!-- ============================================================================================================================================ -->
        <div class="log">
            <img src="images/6/pexels-photo-239886.jpeg" alt="">
            <div class="login">
                <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                    <h2>LOGIN</h2>
                    <input type="text" name="username" placeholder="enter username" autocomplete="off">
                    <input type="password" name="pass" placeholder="enter password">
                    <input type="submit" value="login">
                    <?php
                    if($_SERVER['REQUEST_METHOD'] == "POST"){
                        if( empty($_POST['username'] == true) || empty($_POST['pass'] == true) ){
                            echo "<span style= \" text-align:center; margin-left:7%; color:#123; font-weight:bolder; font-size:15px;\"> you should write username and password to log  </span>";
                        }
                    
                        else{
                            $_SESSION["user"] = $_POST['username'];
                            $_SESSION["pass"] = $_POST['pass'];
                            // echo  "<span style= \" text-align:center; margin-left:7%; color:#123; font-weight:bolder; font-size:15px;\">"  . $_SESSION['user'] . "</span>";
                            header("location:check.php");
                            exit();
                        }
                    }
                ?>
                    
                </form>
            </div>
        </div>
     
        <script src="js/script.js"></script>
    </body>
</html>