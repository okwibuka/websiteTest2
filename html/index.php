<?php

session_start();
$_SESSION;

include("connection.php");
include("function.php");

$user_data = check_login($con); //function for checking if user is logged in

?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../images/me.jpg" rel="icon">  <!-- link image -->
    <title> olivia-LaFouine index</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container"> 

        <!-- navigations -->

       <section>
       <div class="header">
           <nav>
        <img src="../images/menu.png" alt=" menu-image" class="nav-img">
        
        <ul class="nav-ul">
            <!-- <li class="nav-li sign">SIGN-UP</li> -->
            
            <li class="nav-li lang">EN</li>

             <li class="nav-li log users"><?php echo $user_data['user_name']?>
             <ul class="hoveredList">
             <!-- <li class="nav-li sign signup hovereditems">Comments</li> -->
            <a href="logout.php"> <li class="nav-li logout hovereditems">Log Out</li> </a>
             </ul>
    </li> 
        </ul>  
       
           </nav>
       </div>
    </section>

    <!-- web itroduction -->

    <section class="web-intro signUp-intro">
        <h1>Designed by <span class="highlight"> kwibuka olivia</span> <br> 
            <span class="highlight"> &nbsp; &nbsp;  La fouine </span></h1>
            <br><br>
        <h3><div class="web-intro-effect1" id="web"> Make a website in few minute....
        make a difference. </div><br>
        <span class="web-intro-effect2"> work hard and everything </span><br>
        <span class="web-intro-effect3">will be possible.</span>
        </h3>
         <form action="index.php" method="post" class="sign-up" >
            <input type="text" name="name" class="sign-up-value" placeholder="first name">
            <input type="email" name="email" class="sign-up-value" placeholder="enter email">
            <input type="password" name="password" class="sign-up-value" placeholder="create password">
            <button class="sign-up-btn" name="submits">submit</button>
        </form>

        <button class="scroll scroll-to-comment"> <span class="scroll-cont">
            comment &downarrow;  </span> </button>
    </section>

    <!-- e-commerce -->

    <section class="commerce-div" id="commerce">
        <h1>e-commerce build in:</h1>
        <div class="e-commerce">
        <div class="e-commerce-content">
        <h3>here we are offering you to focus <br>
        on e-commerce services for being able <br>
    to perform difference marketing services <br>
for free in easy way...click on arrow button bellow to get more</h3>
<br><br>
        </div>
        <div>
<button class="e-commerce-arrow scroll-button"> <span class="e-commerce-arrow2">
    &rightarrow;  </span></button> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp;
</div>
 <div id="services"></div> <!--scroll to services div -->
<div class="commerce-hidden">
    <div class="close-commerce remove"> &leftarrow;</div>
    🎫 we provide e-learning <br> <br>
    🍵 providing cooking corses <br><br>
    💪🏻 providing some sport courses <br><br>
    🏍 teaching of riding moto bike <br><br>
    ✈ providing plane tickets <br><br>
    🚗 providing driving licence <br><br>
</div>
</div>
    </section>

    <!-- services -->

    <section class="customer-div" >
        <h1>
            customer services:
        </h1>
       
        <div class="customer-content">
       <h3>here we offer different services to our customers <br>
    that make our service more loved and used around the world <br>
just follow us and you can enjoy for free</h3> 
</div>
 <div id="coordinators"></div> <!--scroll to coordinators div-->
<button class="customer-services-btn"> <span class="customer-services-content"> tap here for accessing 
    our services</span> <br>
    <span class="customer-services-arrow"> &downarrow; </span></button>
    
<div class="services-hidden">
    <div class="close-services remove"><span>&uparrow;</span></div>
    ✔ teaching website marketing <br>
    ✔ providing some courses about website making <br>
    ✔ providing some stage to new students <br>
    ✔ teaching science lessons <br>
    ✔ teaching languages <br>
    ✔ providing certificates to the students <br>

</div>
    </section>

    <!-- coordinators  -->

    <section class="coordinators" >
        <h3>
           
            here are our coordinators: 
        </h3>
        <div class="coordinators-addresses">
            <div class="coordinator-one">
                <img src="../images/me.jpg" alt=" cordinator-one-img" class="cordinator-one-img">

                <cite> ☝🏻 
                    _KWIBUKA olivier</cite>
                <blockquote> this is our first coordinator <br>
                with any problem you can contact <br>
            him and he will be available at any <br>
        time you can need him to help you.. </blockquote>
        <br>  <br>
        <span class="adress"><u>Address:</u> </span>
        <ul>
            <li>
                <span class="coordinator-address"> TEL:</span> 0781691699
            </li>
           <li>
            <span class="coordinator-address"> EMAIL:</span> okwibuka@gmail.com
           </li>
           <li>
            <span class="coordinator-address">RESIDENCE:</span> kigali 
           </li>
        </ul>
    </p>

            </div>

            <div class="coordinator-two">
                <img src="../images/david.jpg" alt=" cordinator-two-img"class= "cordinator-two-img">

                <cite> ☝🏻_IRADUKUNDA david</cite>
               <blockquote>this is our second coordinator <br>
                with any problem you can contact <br>
            him and he will be available at any <br>
        time you can need him to help you.. </blockquote> 
        <br>  <br>
        <span class="adress"><u>Address:</u> </span>
        <ul>
            <li>
                <span class="coordinator-address"> TEL:</span> 0780672834
            </li>
           <li>
            <span class="coordinator-address"> EMAIL:</span> iradavid1999@gmail.com
           </li>
           <li>
            <span class="coordinator-address">RESIDENCE:</span> kigali 
           </li>
        </ul>
    </p>

            </div>
            <div class="coordinator-three">
                <img src="../images/tresor.jpg" alt=" cordinator-three-img" class="cordinator-three-img">

                <cite> ☝🏻_MBONYIMFURA Tresor</cite>
                <blockquote> this is our third coordinator <br>
                with any problem you can contact <br>
            him and he will be available at any <br>
        time you can need him to help you.. </blockquote>
        <br>  <br>
        <span class="adress"><u>Address:</u> </span>
        <ul>
            <li>
                <span class="coordinator-address"> TEL:</span> 0780531877
            </li>
           <li>
            <span class="coordinator-address"> EMAIL:</span> tresor@gmail.com
           </li>
           <li>
            <span class="coordinator-address">RESIDENCE:</span> kigali 
           </li>
        </ul>
    </p>

            </div>
        </div>
    </section>

    <!-- comment and footer -->

    <section class="footer" id="comment" style="">
    
         <!-- <form action="index.php" method="post" class="last-sign-up"></form>
            <h1>sign up here &downarrow;</h1>
            <input type="text" name="name" class="sign-up-value" placeholder="first name">
            <input type="email" name="email" class="sign-up-value" placeholder="email">
            <input type="password" name="password" class="sign-up-value" placeholder="create password">
            <button class="sign-up-btn" name="submits">submit</button>
</form>    -->
    
    
        <div class="comment">
            <form action="" method="post">
       <input type="text" name="comment" required placeholder="enter comment....." class="comment-input">
<button name="commentBtn" class="comment-btn"> <span class="comment-submit"> submit </span></button>
</form>

<div class="comment-container">
    <div class="comment-header">
        <h3>comments</h3>
    </div>
    <div class="comment-body">

    <?php

                        
                        $query =" select * from comment order by date desc";
                        $result = mysqli_query($con , $query);
                        $resultCheck = mysqli_num_rows($result);

                        if($resultCheck > 0)
                        {

                            while($row = mysqli_fetch_assoc($result))
                            {
                                echo $row['date']. "<br>";
                                echo  $row['comment'] . "<br>"; 
                                echo "<br>";
                                
                            }
                        }
                        else
                        {
                            echo "no comment found";
                        }
                        ?>

    </div>
</div>
    </div> 
    <div class="copyright">
        <div class="end-nav">
        <ul>
            <li>
                <a href="">
                terms</a>
            </li>
            <li>
                <a href="">
                conditions
            </a>
            </li>
            <li>
                <a href="">
                    news
                </a>
            </li>
            <li>
                <a href="">
                    about
                </a>
            </li>
            <li>
                <a href="">contacts</a>
            </li>
        </ul>
    </div>
    <div class="copyright-info">
        &copy; Copyright by
 
 <span>Olivier Kwibuka </span> at 
  kigali, 2022
 </p>
    </div>
    </div>
    </section> 

    <!-- login form -->

    <section class="login login-hidden">
    
        <form action="">
            <div class="exit"> <span class="cross">&cross; </span> </div>
            <h1>Fill the form below:</h1>
            <label for="username" class="user">User Name:</label>
            <input type="text" class="name-type type">
            
            <label for="email" class=" user">Email:</label>
            <input type="email" class="email-type type">
            
            <label for="password" class="user">Password:</label>
            <input type="password" class="password-type type">
            <label for="submit" class="submit">
    
            <button class="button">submit</button>
        </label>
        </form>
    </section>

    <!-- menu items -->

    <section class="menu-items menu-hidden">
        <div class="menu">
            <div class="menu-exit"> <span>&cross;</span></div>
            <div class="links">
            <ul>
                <li>
                    <a href="#web" class="menu-item">commerce</a>
                </li>
                <li>
                    <a href="#services" class="menu-item">services</a>
                </li>
                <li>
                    <a href="#coordinators" class="menu-item">coordinators</a>
                </li>
                <li>
                    <a href="#comment" class="menu-item">comment</a>
                </li>
            </ul>
        </div>
        </div>
    </section>

    <!-- languages -->

    <section class="language-items lang-hidden">
        <div class="language">
            <div class="language-exit">
               <span> &cross; </span>
            </div>
            <div>
                <ul>
                    <li>
                        English <span class="lang-space">ENG</span>
                    </li>
                    <li>
                        French <span class="lang-space">ENG</span>
                    </li>
                    <li>
                        Spanish <span class="lang-space">SPN</span>
                    </li>
                    <li>
                        Swahili <span class="lang-space">SWA</span>
                    </li>
                    <li>
                        Ringala <span class="lang-space">RING</span>
                    </li>
                    <li>
                        Chineese <span class="lang-space">CHI</span>
                    </li>
                    <li>
                        Indian <span class="lang-space">HIND</span>
                    </li>
                    <li>
                        Arabic <span class="lang-space">ARB</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>
     <div class="overlay"></div> 
    </div>

   

    
    <script src="../java/java.js"></script>
    
</body>
</html>