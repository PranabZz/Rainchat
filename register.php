<!DOCTYPE html>
<html lang="en">
  <head>
    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }
      body {
        min-height: 100vh;
        position: relative;
        font-family: "Gill Sans", "Gill Sans MT", Calibri, "Trebuchet MS",
          sans-serif;
      }
      .container {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        box-shadow: rgba(0, 0, 0, 0.16) 0px 10px 36px 0px,
          rgba(0, 0, 0, 0.06) 0px 0px 0px 1px;
        padding: 15px;
        border: 1 px solid gainsboro;
      }
      header {
        display: flex;
        font-family: "Gill Sans", "Gill Sans MT", Calibri, "Trebuchet MS",
          sans-serif;
        font-size: 30px;
        text-align: center;
      }
      .logo img {
        height: 50px;
      }
      .logo-text {
        height: 50px;
        margin: 10px 0px;
      }
      form {
        min-height: 50vh;
        display: flex;
        flex-direction: column;
      }

      input {
        min-width: 30vw;
        border: 1px solid gray;
        padding: 10px 30px;
        margin: 5px 0px;
        border: 2px solid rgb(116, 116, 212);
        border-radius: 15px;
        outline: none;
      }

      label {
        text-align: left;
        font-weight: lighter;
        font-size: larger;
      }

      .button-container {
        display: flex;
        justify-content: space-between;
      }
      #login-c {
        display: flex;
        flex-direction: column;
      }
      button {
        padding: 10px 5px;
      }

      .register {
        display: flex;
        flex-direction: column;
        margin-bottom: 5px;
        align-items: center;
        justify-content: center;
      }
      .register-btn {
        border: 2px solid black;
        background: white;
        padding: 6px 7px;
        font-size: 16px;
        transition: all 0.3s;
        cursor: pointer;
        margin-bottom: 8px;
      }
      .register-btn:hover {
        background: rgb(116, 116, 212);
        color: white;
      }
    </style>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
  </head>
  <body>
    <div class="container">
      <header>
        <div class="logo">
          <img src="/download.jpeg" alt="" />
        </div>
        <div class="logo-text">Rainchat</div>
      </header>

      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
        <label for="username"><b>Username</b></label>
        <br />
        <input type="text" placeholder="Username" name="name" required>

        <label for="email"><b>Email</b></label>
        <br />
        <input type="text" placeholder="Email" name="email" required>
       
        <label for="Pass"><b>Password</b></label>
        <br />
        <input type="password" placeholder="password" name="register" required>
      <div class="register">
        <br><button class="register-btn" name="send">Register</button>
        <a href="login.php">Already have a account?</a>
      </div>
      </form>
    </div>
  </body>
</html>


<?php

$servername ="localhost";
$username = "user";
$password = "root";
$db = "id18428070_chat";

$conn = mysqli_connect($servername,$username,$password,$db);

if(!$conn){
  echo "No connection";
}
else{
  echo "Connected";
}

if(isset($_POST['register'])){

  $email = FILTER_INPUT(INPUT_POST, 'email');
  $pass = FILTER_INPUT(INPUT_POST, 'psw' );
  $name = FILTER_INPUT(INPUT_POST, 'name');

  $sql =   "INSERT INTO `User` (`Name`, `Email`, `Password`) VALUES ('$name', '$email', '$pass') ";

  $result  = $conn -> query($sql);

  if($result){
    echo "<br>Conneced";
    echo "<script>
    alert('Account created');
    window.location.href = 'login.php';
    </script>";
  }
  else{
    echo "<script>
    alert('Account cannot be created choose a different name or email');
    </script>";
  }
}

?>
