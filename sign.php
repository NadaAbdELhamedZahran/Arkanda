<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<?php include "head.php" ?>

    <body>
    
        <!-- navigation bar -->
        <nav>
            <div class="pages" id="nav">
                <a href="index.php" >HOME</a>
                <a href="documents_index.php">DOCUMENTS</a>
                <!-- <a href="videos.php">VIDEOS</a> -->
                <a href="sign.php" class="active">SIGN UP</a>
                <a href="log.php">LOG IN</a>
             </div>
        </nav>
<!-- ==================================================================================== -->
        <div class="sign">
            <img src="images/6/pexels-photo-276508.jpeg" alt="">
            <div class="sign_in">
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
                                <input type="password" name="pass" placeholder="enter your password">
                               
                            </td>
                        </tr>
    
                        <tr>
                            <th>Email : </th>
                            <td>
                                <input type="email" name="mail" placeholder="enter your email">
                            </td>
                        </tr>
    
                       
                        <tr>
                            <th>Age : </th>
                            <td>
                                <input type="number" name="age" placeholder="enter your age" min=1>
                            </td>
                        </tr>
    
                        
                                            
                        <tr>
                            <th>Gender : </th>
                            <td>
                                <select name="gender">
                                    <option value="Male" style="margin=0% auto;">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </td>
                        </tr>
         
                        <tr>
                            <th>Nationality : </th>
                            <td>
                                <input type="text" name="nation" value="Egyptian">
                            </td>
                        </tr>
         
                        <tr>
                            <th>Job Title</th>
                            <td>
                              <input type="text" name="jobtitle" placeholder=" enter your job title">
                            </td>
                        </tr>
                    </table>
                    <?php    
                        if($_SERVER['REQUEST_METHOD'] == "POST"){
                            $name=$_POST['username'];
                            $pass =$_POST['pass'] ;
                            $email =$_POST['mail'] ;
                            $age =$_POST['age'] ;
                            $gender =$_POST['gender'] ;
                            $nation =$_POST['nation'] ;
                            $jobtitle =$_POST['jobtitle'] ;

                                                    
                            try{
                                include "config.php";

                                $sql = $conn->prepare("INSERT INTO users(user_name,password,email,age,gender,nationality,job_title)
                                VALUES(?,?,?,?,?,?,?)");
                                $sql->execute([$name,$pass,$email,$age,$gender,$nation,$jobtitle]);
                                
                                echo "<span style= \" text-align:center; margin: 2% auto; color:#123; font-size:15px; font-weight:bolder; class=\"error\"> user added successfully </span>";
                            }
                            catch(PDOException $e){
                                
                                echo "<span class=\"error\">  Connection Failed" . $e->getMessage(). "</span>";
                            }
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