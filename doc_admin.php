<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    
    <?php include "head.php" ?>

    <body>
        <nav>
            <div class="pages" id="nav">
                <a href="home3.php" >HOME</a>
                <a href="doc_admin.php" class="active">ADD DOCUMENTS</a>
                <a href="add_admin.php">ADD Admin</a>
                <!-- <a href="videos_admin.php">ADD Video</a> -->
                <!-- <a href="sign.php">SIGN UP</a> -->
                <a href="logout.php">LOG OUT</a>
            </div>
        </nav>
        <div class="document_all">
            <img src="images/6/pexels-photo-273238.jpeg" alt="">
            <div class="document">
                <form action="" method="POST" enctype="multipart/form-data">
                    <h2>Add Document</h2>                    
                    <table>
                        <tr>
                            <th>File Upload : </th>
                            <td>
                                <input type="file" name="file" required>                                   
                            </td>
                        </tr>
                    </table>
                    <?php
                        include "config.php";
                        $sql1=$conn->query("SELECT password,admin_name FROM admins")->fetchAll(PDO::FETCH_KEY_PAIR);

                        if(isset($_SESSION["user"])){   
                            if(array_search($_SESSION["user"],$sql1) && key_exists($_SESSION["pass"],$sql1)){    
                                if(isset($_POST['submit'])){                    
                                    $fileName = $_FILES["file"]["name"];
                                    $fileTmpName = $_FILES["file"]["tmp_name"];
                                    
                                    $filepath = __DIR__ . "/" . "uploaded_doc/";
                                    $fileup = $filepath . $fileName;

                                    if(move_uploaded_file($_FILES['file']['tmp_name'],$fileup)){
                                        // echo "done";
                                    }
                                    else{   
                                        echo "not yet";
                                    }
                        
                                
                                    try{
                                        $sql = $conn->prepare("INSERT INTO links(filename) VALUES(?)");
                                        $sql->execute([$fileName]);

                                        echo "<span style= \" text-align:center; margin-left:35%; color:#123; font-weight:bolder; font-size:15px;\"> File Uploaded Successfully </span>";
                                    }
                                    catch(PDOException $e){
                                        
                                        echo "<span style= \" text-align:center; margin-left:35%; color:#123; font-weight:bolder; font-size:15px;\">  Duplicated Document" ;
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
                    <input type="submit" name="submit" value="Upload">
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
