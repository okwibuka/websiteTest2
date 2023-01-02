
<?php

session_start();

include("connection.php");
include("function.php");

// $user_data = check_login($con) ;

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    //something was posted

    // $user_name = $_POST["user_name"];
    $password = $_POST["password"];
    $email = $_POST['email'];

    if(!empty($email) && !empty($password)) 
    {
        //read from database
        
        $query = "select * from users where email = '$email' limit 1";
        
        $result = mysqli_query($con , $query);

        if($result){
            if($result && mysqli_num_rows($result) > 0)
            {
                $user_data = mysqli_fetch_assoc($result);
                 
                if($user_data['password'] === $password)
                {
                    $_SESSION['user_id'] = $user_data['user_id'];
                    header("Location: index.php");
                    die;
                }
            }
        }

        echo "wrong user name or password";
    }
    else
    {
        echo "wrong user name or password";
    }
}
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>olivia-laFouine login form</title>
    <link rel="stylesheet" href="../css/style-login.css">
</head>
<body>
  
      <div class="container">
          <div>
          <section class="head">
          <h2>Sign In to Olivia</h2>
          <form action="" method="post">
          <label for="username" class="userName">Email</label>
          <br>
          <input type="email" name="email" class="text user-input"> <br><br>
          <label for="password"  class="password">password</label> <br>
          <input type="password" name="password" class="text  password"> <br><br>
          <input id="button" class=" text btn-text button" type="submit" value="Log In">
          </form>
        </section>
      <section class="create">
          <h3>new to olivia?</h3> <a href="signup.php">create account</a>
      </section>
      <section class="lists">
      <ul>
          <li>
              terms
          </li>
          <li>
            privacy
          </li>
          <li>
            security
          </li>
          <li>
             <a href="">contact olivia</a> 
          </li>
      </ul>
     
      </section>
    </div>
    </div>
 
</body>
</html>