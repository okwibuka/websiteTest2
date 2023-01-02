
<?php
session_start();

include("connection.php");
include("function.php");



?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>olivia-laFouine signUp form</title>
    <link rel="stylesheet" href="../css/style-login.css">
</head>
<body>
  
      <div class="container">
          <div>
          <section class="head">

          <?php

          if(isset($_SESSION['message']))
          {
            echo $_SESSION['message'];
            unset($_SESSION['message']);
          }

          ?>

          <h2>Sign Up to Olivia</h2>
          <form action="" method="post">
          <label for="username" class="userName">username</label>
          <br>
          <input type="text" name="user_name" class="text user-input"> <br><br>
          <label for="email"  class="email">email</label> <br>
          <input type="email" name="email" class="text  email"> <br><br>
          <label for="password"  class="password">password</label> <br>
          <input type="password" name="password" class="text  password"> <br><br>
          <input  id="button" type="submit" value="Sing Up" class=" text btn-text button">
          </form>
        </section>
        <section class="create">
          <h3>already have an account?</h3> <a href="login.php">Login</a>
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
            about
          </li>
      </ul>
      </section>
    </div>
    </div>
 
</body>
</html>

<?php

if($_SERVER['REQUEST_METHOD'] == "POST")
{
  $email = $_POST['email']; 
  $user_name = $_POST["user_name"];
  $password = $_POST["password"];

    if(!empty($user_name) && !empty($password) && !empty($email) && !is_numeric($user_name))
    {
        $user_id = random_num(20);
        $query = "insert into users (user_id , user_name , password , email) values
         ('$user_id' , '$user_name' , '$password' , '$email')";

       $query_run = mysqli_query($con ,$query);

       if($query_run)
       {
        $_SESSION['message'] = "<span style='color:green'>created successfully</span>";
        header("Location: signup.php");
        exit(0);

       }else{

        $_SESSION['message'] = "<span style='color:red'>not created</span>";
        header("Location: signup.php");
        exit(0);
       }
        
    }
   
}

?>