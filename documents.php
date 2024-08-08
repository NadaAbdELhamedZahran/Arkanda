<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

    <?php include "head.php"?>
    <body>

        <!-- navigation bar -->
        <nav>
            <div class="pages" id="nav">
                <a href="home2.php">HOME</a>
                <a href="documents.php" class="active">DOCUMENTS</a>
                <!-- <a href="videos_admin.php">ADD Video</a> -->
                <a href="logout.php">LOG OUT</a>
            </div>
        </nav>
        <div class="container">
            <img src="images/6/pexels-photo-273238.jpeg" alt="">
            <table class="scrolldown"> 
                <!-- Table head content -->
                <thead> 
                    <tr>
                        <th>ID : </th>
                        <th>File : </th>
                        <th>Action : </th>
                    </tr>
                </thead> 
                    
                <!-- Table body content -->
                <tbody> 
                    <?php 
                        include "config.php";
                        $sql1=$conn->query("SELECT password,user_name FROM users")->fetchAll(PDO::FETCH_KEY_PAIR);
            
                        if(isset($_SESSION["user"])){   
                            if(array_search($_SESSION["user"],$sql1) && key_exists($_SESSION["pass"],$sql1)){    
                            
                                include "config.php";
                                
                                $sql=$conn->query("SELECT * FROM links");
                                $sql->execute();
                                while($row=$sql->fetch()){
                                ?>
                                <tr>
                                    <td><?php echo $row['id']?></td>
                                    <td><?php echo $row['filename'] ?></td>
                                    <td>
                                        <a href = "install.php?doc=<?php echo $row['filename']?>" class="fa fa-download"> Download </a>
                                    </td>
                                </tr>
                                <?php
                                }
                            }
                            else{
                                header("location:log.php");
                                exit();
                            }
                        }
                        else{
                            header("location:logout.php");
                            exit();
                        }
                    ?>            
            
                </tbody> 
            </table> 
        </div>

        <script src="js/script.js"></script>
        <script>
            // nav
            var mynav = document.getElementById("nav");

            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function() {scrollFunction()};

            function scrollFunction() {
                if (document.body.scrollTop > 5 || document.documentElement.scrollTop > 5) {
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
