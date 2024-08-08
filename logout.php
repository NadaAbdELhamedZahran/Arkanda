<?php
session_start();
session_unset();
session_destroy();
echo "<div ><img style= \" width:100%; height:590px;\" src='images/6/pexels-photo-239886.jpeg'> </div>";
echo "<h3 style= \" text-align:center; margin-top: -30%; color:#123; font-size:100px; font-weight:bolder; \"> Logout</h3>";
header("refresh:2,url=log.php");
exit();