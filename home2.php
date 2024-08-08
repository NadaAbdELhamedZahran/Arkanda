<?php
    session_start();
    include "config.php";
    $sql1=$conn->query("SELECT password,user_name FROM users")->fetchAll(PDO::FETCH_KEY_PAIR);
    if(isset($_SESSION["user"])){
        if(array_search($_SESSION["user"],$sql1) && key_exists($_SESSION["pass"],$sql1)){    
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

<!DOCTYPE html>
<html>
    <?php include "head.php" ?>
    <body>
        <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
        <!-- navigation bar -->
        <nav>
            <div class="pages" id="navbar">
                <a href="home2.php" class="active">HOME</a>
                <a href="documents.php">DOCUMENTS</a>
                <!-- <a href="videos_admin.php">ADD Video</a> -->
                <!-- <a href="sign.php">SIGN UP</a> -->
                <a href="logout.php">LOG OUT</a>
            </div>
        </nav>
    
        <!-- start home page -->
        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
           
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
            </ol>
    
            <div class="carousel-inner">         
                
                <div class="carousel-item active">
                    <img src="images/1/cover1.jpg" class="d-block w-100" alt="...">
                </div>
                
                <div class="carousel-item">
                    <img src="images/1/cover2.jpg" class="d-block w-100" alt="...">
                </div>
                
                <div class="carousel-item">
                    <img src="images/1/cover3.jpg" class="d-block w-100" alt="...">
                </div>
                
                <div class="carousel-item">
                    <img src="images/1/cover4.jpg" class="d-block w-100" alt="...">
                </div>
                
                <div class="carousel-item">
                    <img src="images/1/cover5.jpg" class="d-block w-100" alt="...">
                </div>
                
            </div>
    
        </div>
        <!-- end home page -->
<!-- ============================================================================================================================================= -->
        <!-- start creative page -->
        <!-- our misson -->
        <div class="creative-page module">
            
            <div class="left-creative module">
                <div class="head-creative"><span style="color: chocolate;"> our </span> mission </div>
                <hr>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                    when an unknown printer took a galley of type and scrambled it to make a type 
                    specimen book.<span id="dotss2">...</span><span id="moree2">It has survived not only five centuries, but also the leap into 
                    electronic typesetting, remaining essentially unchanged. It was popularised in 
                    the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
                    and more recently with desktop publishing software like Aldus PageMaker including 
                    versions of Lorem Ipsum.</span>
                </p>
                <button onclick="myFunction()" id="myBtn2" style= "color:white; background-color:#ff9900; margin-left:15%; width: 50%; height:10%;">Read more</button>
                <!-- <div class="read-more-creative">
                    <img src="images/background-orange.png">
                    <a href="#">read more</a>
                </div> -->
            </div>
            
            <!-- <div class="arrow">
                <img src="images/arrow2.png">
            </div> -->

            <div class="right-creative module">
                <div class="img1-creative"><img src="images/2/left-up.jpg"></div>
                <div class="img2-creative"><img src="images/2/left-down.jpg"></div>
                <div class="img3-creative"><img src="images/2/right-up.jpg"></div>
                <div class="img4-creative"><img src="images/2/right-down.jpg"></div>
            </div>    
        </div>
        <!-- end creative page -->
<!-- ========================================================================================================================================= -->
        <!-- start best-team page-->
        <!-- arkanda founder -->
        <div class="best-team module">
            <div class="left-best-team">
                <div class="head-best-team"><span style="color: chocolate;"> arkanda </span> founder </div>
                <hr>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                    when an unknown printer took a galley of type and scrambled it to make a type 
                    specimen book.<span id="dotss3">...</span><span id="moree3"> It has survived not only five centuries, but also the leap into 
                    electronic typesetting, remaining essentially unchanged. It was popularised in 
                    the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
                    and more recently with desktop publishing software like Aldus PageMaker including 
                    versions of Lorem Ipsum.</span>
                </p>

                <button onclick="myFunction()" id="myBtn3" style= "color:white; background-color:#ff9900; margin-left:15%; width: 50%; height:10%;">Read more</button>
            </div>

            
            <div class="right-best-team">
                <!-- <div class="div">
                    <img src="">
                    <div class="data"> </div>
                </div>

                <div class="div">
                    <img src="">
                    <div class="data"> </div>
                </div>

                <div class="div">
                    <img src="">
                    <div class="data"> </div>
                </div>

                <div class="div">
                    <img src="">
                    <div class="data"> </div>
                </div>

                <div class="div">
                    <img src="">
                    <div class="data"> </div>
                </div>

                <div class="div">
                    <img src="">
                    <div class="data"> </div>
                </div> -->
                <img src="images/8.jpg">
            </div>    

        </div>
        <!-- end best-team page -->
<!-- ================================================================================================================================================ -->
        <!-- start creative-work page -->
        <div class="creative-work module">
            <div class="left-creative-work">
                <div class="head-creative-work"><span style="color: chocolate;"> our </span> creative <br> work </div>
                <hr>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                    when an unknown printer took a galley of type and scrambled it to make a type 
                    specimen book.<span id="dotss4">...</span><span id="moree4"> It has survived not only five centuries, but also the leap into 
                    electronic typesetting, remaining essentially unchanged. It was popularised in 
                    the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
                    and more recently with desktop publishing software like Aldus PageMaker including 
                    versions of Lorem Ipsum.</span>
                </p>
                <button onclick="myFunction()" id="myBtn4" style= "color:white; background-color:#ff9900; margin-left:15%; width: 50%; height:10%;">Read more</button>
            </div>

            

            <div class="slideshow-container">

                <div class="mySlides fade">
                  <img src="images/4/img1.jpg" style="width:100%">
                </div>
                
                <div class="mySlides fade">
                  <img src="images/4/img2.jpg" style="width:100%">
                </div>
                
                <div class="mySlides fade">
                  <img src="images/4/img3.jpg" style="width:100%">
                </div>
                
                
                <div class="mySlides fade">
                    <img src="images/4/img4.jpg" style="width:100%">
                </div>
                
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
                
                <div style="text-align:center">
                    <span class="dot" onclick="currentSlide(1)"></span> 
                    <span class="dot" onclick="currentSlide(2)"></span> 
                    <span class="dot" onclick="currentSlide(3)"></span>
                    <span class="dot" onclick="currentSlide(4)"></span> 
                </div>
    
            </div>
                
            
        </div>
        <!-- end creative-work page -->
<!-- =========================================================================================================================================== -->
        <!-- start choose-us page  -->
        <div class="choose-us module">

            <div class="right-choose-us">
                <img src="images/5/img.jpg">
            </div>

            <div class="left-choose-us" >
                
                <div class="header-choose-us">
                    <span style="font-size: 50px; color: chocolate; font-weight: bolder;"> why </span> choose us ?
                </div>

                <div class="data-choose-us" id="effect">
                    <div class="image-choose">
                        <img src="images/icon7.png">
                    </div>
                    <div class="choose-data">
                        <!-- <div class="head-choose-us">
                            hfkhkhuirehgkrg
                        </div> -->
                        <div class="content-choose-us">
                            Design & Supervision & Marketing Of projects in sharkia, october and badr city
                        </div>
                    </div> 
                </div>

                <div class="data-choose-us" id="effect">
                    <div class="image-choose">
                        <img src="images/icon2.png">
                    </div>
                    <div class="choose-data">
                        <!-- <div class="head-choose-us"></div> -->
                        <div class="content-choose-us">
                            finishing works in the hotel of guest house and conferences, mansoura university
                        </div>
                    </div> 
                </div>

                <div class="data-choose-us" id="effect">
                    
                    <div class="image-choose">
                        <img src="images/icon3.png">
                    </div>

                    <div class="choose-data">
                        <!-- <div class="head-choose-us"></div> -->
                        <div class="content-choose-us"> 
                            finishing works at the site of dar misr in october from al banna contracting
                        </div>
                    </div> 
                </div>

                <div class="data-choose-us" id="effect">
                    
                    <div class="image-choose">
                        <img src="images/icon1.png">
                    </div>

                    <div class="choose-data">
                        <!-- <div class="head-choose-us"></div> -->
                        <div class="content-choose-us">
                            finishing works at mountain view in october from protection contracting
                        </div>
                    </div> 
                </div>

                <div class="data-choose-us" id="effect">
                    
                    <div class="image-choose">
                        <img src="images/icon4.png">
                    </div>

                    <div class="choose-data">
                        <!-- <div class="head-choose-us"></div> -->
                        <div class="content-choose-us">
                            our services offered at the best cost, hightest quality and best time
                        </div>
                    </div> 
                </div>

            </div>
        </div>
        <!-- /* end choose us page */ -->
<!-- ========================================================================================================================================== -->
        <!-- /* start services page */ -->
        <div class="service module">
            
            <div class="left-service">
                
                <div class="head-service"><span style="color: chocolate;"> our </span> best <br> services </div>
                
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.<span id="dotss5">...</span><span id="moree5">
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown 
                    printer took a galley of type and scrambled it to make a type specimen book.</span>              
                </p>
                <button onclick="myFunction()" id="myBtn5" style= "color:white; background-color:#ff9900; margin-left:15%; width: 50%; height:10%;">Read more</button>
            </div>

            <div class="right-service">
                <img src="images/6/pexels-photo-210552.jpeg">
                <div class="inside-right-service">

                    <div class="inside-data-service">
                    
                        <div class="icon-service"><img src="images/icon5.png"></div>
                    
                        <div class="data1-service">
                            <div class="header-service">
                                engineering<br>designs
                            </div>
                            <div class="data2-service">
                                structural- arch - 3D - shop drawing
                            </div>
                        </div>
                    
                    </div>
                    
                    <div class="inside-data-service">
                    
                        <div class="icon-service"><img src="images/icon1.png"></div>
                    
                        <div class="data1-service">
                            <div class="header-service">
                                licenses andcertificates
                            </div>
                            <div class="data2-service">
                                extracting and modifing - Approval
                            </div>
                        </div>
                    
                    </div>
                    
                    <div class="inside-data-service">
                    
                        <div class="icon-service"><img src="images/icon2.png"></div>
                    
                        <div class="data1-service">
                            <div class="header-service">
                                project<br>management
                            </div>
                            <div class="data2-service">
                                engineering supervision- estimate - Marketing -time programs
                            </div>
                        </div>
                    
                    </div>
                    
                    <div class="inside-data-service">
                    
                        <div class="icon-service"><img src="images/icon3.png"></div>
                    
                        <div class="data1-service">
                            <div class="header-service">
                                contracting and tech.office services
                            </div>
                            <div class="data2-service">
                                concret- finishing - accounting contractors - smart home system
                            </div>
                        </div>
                    
                    </div>
                    

                    <div class="inside-data-service">
                    
                        <div class="icon-service"><img src="images/icon6.png"></div>
                    
                        <div class="data1-service">
                            <div class="header-service">
                                in & out door designs
                            </div>
                            <div class="data2-service">
                                cards - bourchor - flyer - banner
                            </div>
                        </div>
                    
                    </div>

                    <div class="inside-data-service">
                    
                        <div class="icon-service"><img src="images/icon4.png"></div>
                    
                        <div class="data1-service">
                            <div class="header-service">
                                other<br>services
                            </div>
                            <div class="data2-service">
                                any service compatible with our skills
                            </div>
                        </div>
                    
                    </div>            
                </div>
            </div>
        </div>
       
        <!-- end service page  -->
<!-- ========================================================================================================================================== -->
        <!-- start client page  -->
        <div class="client-page module">
            
            <div class="left-client">
                
                <div class="head-client"><span style="color: chocolate;"> our </span> client say </div>
                
                <div class="paragraph1-client">
                    <div class="icon-comma-client"><img src="images/comma.png"></div>
                    <div class="data-client"> 
                        <!-- Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                        when an unknown printer took a galley of type and scrambled it to make a type 
                        specimen book. -->
                        arkanda is the best office provid its' service in high quality, best cost comparing with other companies
                    </div>
                    <span>mahmoud khodier,Al-sharqia</span>
                </div>

                <div class="paragraph1-client">
                    <div class="icon-comma-client"><img src="images/comma.png"></div>
                    <div class="data-client">   
                        <!-- Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                        when an unknown printer took a galley of type and scrambled it to make a type 
                        specimen book. -->
                        arkanda will be achieve our dreams because its' mission is your dream our mission"
                    </div>
                    <span>ahmed mahmoud, giza</span>
                </div>

            </div>
            
            <div class="middle-client">
                <img src="images/6/pexels-photo-276508.jpeg">
            </div>

            <div class="right-client">
            
                <img src="images/comma2.png">
                
                <div class="paragraph2-client">
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                        when an unknown printer took a galley of type and scrambled it to make a type 
                        specimen book.
                    </p>
                    <span> jone doe, seo </span>

                    <div class="dott-client"><img src="images/dott.png"></div>
                </div>
            
            </div>
        
        </div>
        <!-- end client page -->
<!-- ========================================================================================================================================= -->
        <!-- start social page -->
        <div class="social module">
            
            <div class="upper-social">
                <div class="background-social">
                    <img src="images/6/pexels-photo-239886.jpeg">
                </div>
            
                <div class="head-social"><span style="color: chocolate;"> Get</span> in touch </div>
            
                <div class="icons-social">
                    <div class="face">
                        <a href="https://www.facebook.com/arkanda.egypt">
                            <img src="images/facebook-icon.png">
                        </a>
                    </div>
                    <div class="youtube">
                        <a href="https://www.youtube.com/channel/UCYLEIeI0k6PdseAXzqLQ7bA ">
                            <img src="images/youtube-icon.png">
                        </a>
                    </div>
                
                    <div class="linkedin">
                        <a href="https://www.linkedin.com/arkanda.egypt">
                            <img src="images/linkedin-icon.png">
                        </a>
                    </div>
                
                    <div class="google">
                        <a href="https://www.google.com/arkanda.egypt">
                            <img src="images/gmail-icon.png">
                        </a>
                    </div>        
                </div>

            </div>
            
            <div class="lower-social">
                <div class="data">
                    <div class="icon-data-social"><img src="images/mail.png"></div>
                    <div class="data-social">
                        <div class="head-data-social">email</div>
                        <div class="content-data-social">arkanda.egypt@gmail.com<br>mahmoud.arkanda@gmail.com</div>
                    </div>
                </div>
                <div class="data">
                    <div class="icon-data-social"><img src="images/Untitled-3.png"></div>
                    <div class="data-social">
                        <div class="head-data-social"> phone</div>
                        <div class="content-data-social">01098884660</div>
                    </div>
                </div>
                <div class="data">
                    <div class="icon-data-social"><img src="images/unnamed.png"></div>
                    <div class="data-social">
                        <div class="head-data-social">address</div>
                        <div class="content-data-social">Al-Omranyah-Giza-Egypt</div>
                    </div>
                </div>
            </div> 
            
            <div class="create-by">
                Created By Nada Abd Elhamed 
            </div>

        </div>
        <!-- end social page -->
<!-- ========================================================================================================================================== -->
        <!-- chat window -->
        <!-- <button class="open-button" onclick="openForm()">Chat</button>
        <div class="chat-popup" id="myForm">
            <form action="action.php" class="form-container" method="POST">
                <h1>Chat</h1>

                <label for="msg"><b>Message</b></label>
                <textarea placeholder="Type message.." name="msg" required></textarea>

                <button type="submit" name="submit" class="btn">Send</button>
                <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
            </form>
        </div> -->


        <script src="js/script.js"></script>
        <script>
            // read more & read less
            function myFunction() {
                var dots = document.getElementById("dotss2");
                var moreText = document.getElementById("moree2");
                var btnText = document.getElementById("myBtn2");
                
                var dots2 = document.getElementById("dotss3");
                var moreText2 = document.getElementById("moree3");
                var btnText2 = document.getElementById("myBtn3");

                var dots3 = document.getElementById("dotss4");
                var moreText3 = document.getElementById("moree4");
                var btnText3 = document.getElementById("myBtn4");

                var dots4 = document.getElementById("dotss5");
                var moreText4 = document.getElementById("moree5");
                var btnText4 = document.getElementById("myBtn5");

                if (dots.style.display === "none") {
                        dots.style.display = "inline";
                        btnText.innerHTML = "Read more";
                        moreText.style.display = "none";

                        dots2.style.display = "inline";
                        btnText2.innerHTML = "Read more";
                        moreText2.style.display = "none";

                        dots3.style.display = "inline";
                        btnText3.innerHTML = "Read more";
                        moreText3.style.display = "none";

                        dots4.style.display = "inline";
                        btnText4.innerHTML = "Read more";
                        moreText4.style.display = "none";

                } 
                else {
                        dots.style.display = "none";
                        btnText.innerHTML = "Read less";
                        moreText.style.display = "inline";

                        dots2.style.display = "none";
                        btnText2.innerHTML = "Read less";
                        moreText2.style.display = "inline";

                        dots3.style.display = "none";
                        btnText3.innerHTML = "Read less";
                        moreText3.style.display = "inline";

                        dots4.style.display = "none";
                        btnText4.innerHTML = "Read less";
                        moreText4.style.display = "inline";
                }
            }
        </script>
    </body>
</html>