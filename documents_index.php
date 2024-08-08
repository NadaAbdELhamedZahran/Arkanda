<!DOCTYPE html>
<html>
    
    <?php include "head.php" ?>

    <body>
    
        <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
        <!-- navigation bar -->
        <nav>
            <div class="pages" id="nav">
                <a href="index.php" >HOME</a>
                <a href="documents_index.php" class="active">DOCUMENTS</a>
                <!-- <a href="videos.php">VIDEOS</a> -->
                <a href="sign.php">SIGN UP</a>
                <a href="log.php">LOG IN</a>
            </div>
        </nav>
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
<?php
    echo "<div ><img style= \" width:100%; height:590px;\" src='images/6/pexels-photo-239886.jpeg'> </div>";
    echo "<h3 style= \" text-align:center; margin-top: -30%; color:#123; font-size:100px; font-weight:bolder; \"> You Should Log In First</h3>";
    header("refresh:2,url=log.php");
    exit();
?>
