<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page-Rainchat</title>
    <link rel="stylesheet" href="login.css">
    <style>
    *{
    margin: 0;padding: 0;box-sizing: border-box;
}
body{
   position: relative;
   height: 100vh;
  font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}

.login-container{
    /* background-color: rgb(219, 233, 245); */
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    
    display: flex;
    flex-direction: column;
    align-items: center;
    
    justify-content: center;
     box-shadow:   rgba(0, 0, 0, 0.16) 0px 10px 36px 0px, rgba(0, 0, 0, 0.06) 0px 0px 0px 1px;
            padding: 15px 30px;
            border: 1px solid gainsboro;

}
 header{
            display: flex;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-size: 30px;
            text-align: center;}

             
        .logo img{
            height: 50px;
           

        }
        .logo-text{
            height: 50px;
             margin: 10px 0px;
        }

        form{
            padding: 30px 40px;
            min-width: 30vw;

            
        }
        input{
            min-width: 100%;
           
            
           
            border: 1px solid gray;
            padding: 10px 30px;
             margin: 5px 10px;
             border: 2px solid rgb(116, 116, 212);
             border-radius: 15px;
             outline: none;
        }
        button{
            border: 2px solid black;
            background: white;
            padding: 6px 7px;
            font-size: 16px;
            transition: all .3s;
            cursor: pointer;
            margin-bottom: 8px;

        }
        button:hover{
             background: rgb(116, 116, 212);
            color: white;
        }
        a{
            margin-bottom: 20px;
        }
        </style>
</head>
<body>
    <div class="login-container">
      <header>
           
              <div class="logo">
                  <img src="/download.jpeg" alt="">
              </div>
              <div class="logo-text">Rainchat</div>  
            
        </header>


        <div class="welcome">Welcome to RainChat ✌️</div>

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">

             <label for="username"><b>Username</b></label>
              <br>
            <input type="text" placeholder="Username" name="name" required>
            
            <label for="email"><b>Email</b></label>
              <br>
            <input type="text" placeholder="email" name="email" required>

             <label for="Pass"><b>Password</b></label>
              <br>
            <input type="password" placeholder="password" name="psw" required>
        <a href="">Forget your password?</a>
        <div class="login-btn flex justify-center items-center">
            <button  name ="register" >Login</button>
        </div>
        <div class="register">
            <a href="register.php">Create new Account</a>
        </div>
        </form>
</div>
    
</body>
</html>


<?php

include "connection.php";
if(isset($_POST['register'])){
  $email = FILTER_INPUT(INPUT_POST, 'email');
  $pass = FILTER_INPUT(INPUT_POST, 'psw' );
  $name = filter_var($_POST['name'],FILTER_SANITIZE_STRING);

 $sql =  "SELECT * FROM User WHERE Email = '$email' AND Password = '$pass' AND Name = '$name'";

  $result  = $conn -> query($sql);

if(mysqli_num_rows($result) === 1){
      session_start();
      $_SESSION['name'] = filter_var($name, FILTER_SANITIZE_STRING);
      $_SESSION['loged'] = TRUE;
    echo "Connected";
    echo "<script>
    location.href = 'home.php';
    </script>";
  }
  else{
    echo "No match";
}

}
?>
