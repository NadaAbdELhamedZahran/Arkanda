<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <?php include "head.php" ?>
    <body>
        <nav>
            <div class="pages" id="nav">
                <a href="home3.php" >HOME</a>
                <a href="doc_admin.php">ADD DOCUMENTS</a>
                <a href="add_admin.php" class="active">ADD Admin</a>
                <!-- <a href="videos_admin.php">ADD Video</a> -->
                <!-- <a href="sign.php">SIGN UP</a> -->
                <a href="logout.php">LOG OUT</a>
            </div>
        </nav>
        <div class="sign_ad">
            <img src="images/6/pexels-photo-273238.jpeg" alt="">
            <div class="sign_up_ad">
                <form action="" method="POST">
                    <h2>SIGN UP</h2>                    
                    <table>
                        <tr>
                            <th>Name : </th>
                            <td>
                                <input type="text" name="username" placeholder="enter username" autocomplete="off" required>
                            </td>
                        </tr>

                        <tr>
                            <th>Password : </th>
                            <td>
                                <input type="password" name="pass" placeholder="enter your password" required>
                               
                            </td>
                        </tr>
    
                    </table>
                    <?php
                        include "config.php";
                        $sql1=$conn->query("SELECT password,admin_name FROM admins")->fetchAll(PDO::FETCH_KEY_PAIR);
                        if(isset($_SESSION["user"])){
                            if(array_search($_SESSION["user"],$sql1) && key_exists($_SESSION["pass"],$sql1)){    
                            
                                if( empty($_POST['username'])==true && empty($_POST['pass'])){
                                    echo "<span style= \" text-align:center; margin-left:7%; color:#123; font-weight:bolder; font-size:15px;\" > you should enter admin name & password to add </span>";
                                }   
                                else{
                                    $name=$_POST['username'];
                                    $pass =$_POST['pass'] ;    
                                
                                                            
                                    try{
                                        $sql = $conn->prepare("INSERT INTO admins(admin_name,password)
                                        VALUES(?,?)");
                                        $sql->execute([$name,$pass]);
                                        
                                        echo "<span style= \" text-align:center; margin-left:40%; color:#123; font-weight:bolder; font-size:15px;\"> user added successfully </span>";
                                    }
                                    catch(PDOException $e){
                                        
                                        echo "<span style= \" text-align:center; margin-left:40%; color:#123; font-weight:bolder; font-size:15px;\" >  Duplicate entry " ;
                                        // . $e->getMessage(). "</span>";
                                    }
                                }
                            }
                            else{
                                header ("location:log.php");
                                exit();
                            }  
                        }
                        else{
                            header ("location:logout.php");
                            exit();
                        }   
                    ?>
                    <input type="submit" value="SIGN IN">
                </form>
            </div>
        </div>
        <script src="js/script.js"></script>
        <script>
            // nav
            var mynav = document.getElementById("nav");

            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function() {scrollFunction()};

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                        mynav.style.backgroundColor = "lavenderblush";
                        mynav.style.width = "60%";
                } 
                else {
                        mynav.style.backgroundColor= "white";
                        mynav.style.width = "60%";
                }
            }
        </script>
       
    </body>
</html>