<?php

//Starting session
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include "connection.php";
session_start();
$current_user = $_SESSION['name'];

if (!$_SESSION['loged']) {
  echo "<script>
     location.href = 'login.php';
    </script>";
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />

  <script src="https://kit.fontawesome.com/e5e6ca6b44.js" crossorigin="anonymous"></script>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Rainchat</title>
  <link rel="stylesheet" type="text/css" href="output.css" />
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
    input[type="file"] {
      display: none;
    }
  </style>
</head>

<body class=" m-auto">
  <nav class="">
    <div class="flex p-4 items-center">
      <div class="ham-burger inline-block basis-1/4 cursor-pointer md:hidden">
        <div class="line h-0.5 w-6 my-1 bg-gray-800"></div>
        <div class="line h-0.5 w-6 my-1 bg-gray-800"></div>
        <div class="line h-0.5 w-6 my-1 bg-gray-800"></div>
      </div>
      <div class="nav-logo w-8 flex items-center">
        <img src="download.jpeg" alt="" />
        <h2 class="text-2xl text-gray-700 font-[20px] flex justify-center items-center">RainChat</h2>
      </div>
      <div class="nav-items absolute mt-32 bg-blue-600 -translate-x-[14rem]">

      </div>
    </div>
  </nav>

  <main class="">
    <div class="home-nav flex mx-4 p-4 md:mx-0 md:p-8 bg-[#0a182d] text-white md:justify-between md:text-sm  ">
      <div class="links basis-2/3 md:basis-0 m"><a href="#">Home</a></div>
      <div class="links space-x-2 flex items-center lg:space-x-5 ">
 

        <div class="itemss hidden md:flex space-x-2  lg:space-x-5">

          <div class="item">About</div>
          <a href="contacts.php"><div class="item">Contacts</div></a>
          <div class="item">
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"><button name="logout">Logout</form></button>
          </div>
        </div>
      </div>


    </div>
    <br><br>

    <section class="post mx-4 my-4 border-1 md:w-[80%] md:mx-auto">
      <form class="flex items-center p-4 space-x-2 border rounded-xl md:p-8" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data">
        <div class="user-img">
          <img class="rounded-[50%] w-8 h-8 object-cover" src="sss.jpg" alt="" />
        </div>

        <div class="post-area flex-1 text-sm md:text-base overflow-visible">
          <input class="border border-1 text-black  p-4 w-[100%] " type="text" name="post" id="" placeholder="<?php echo "What's on your mind ? "  ?>">
        </div>

        <div class="btn flex flex-col space-y-2 md:flex-row md:space-x-2 items-center justify-center">
          <input type="file" name="files" id="file">
          <label for="file">
          <i class="fa-solid fa-file-arrow-up text-black"></i> Choose a file
          </label>
          <input class="bg-blue-700 px-3 py-2  text-white hover:bg-blue-600 transition-all border rounded-md" type="submit" name ="send" value="Post">
        </div>
      </form>
    </section>
    <?php
    $sql1 = "SELECT * FROM `Post` ORDER BY id DESC ";

    $result1 = $connection->query($sql1);

    while ($row = mysqli_fetch_row($result1)) {
      echo "
      <div class='blog-post md:w-[80%] md:m-auto mx-4 md:flex md:my-6 md:items-center md:p-6'>
        <div class='blog-image'>
          <img class='md:object-cover' src='$row[4]' alt='' height='800'; width='600'; />
        </div>
        <div class='content p-2 md:flex-[70%]'>
          <div class='top flex justify-between items-center p-6'>
            
            <div class='user-info flex-1 p-3'>
              <h1 class='text-xl'>$row[1]</h1>
              <span class='text-sm font-semibold'>$row[3]</span>
            </div>
            <div class='add-info p-8'>
              <div
                class='dot w-[4px] h-[4px] border rounded-lg bg-black my-1'
              ></div>
              <div
                class='dot w-[4px] h-[4px] border rounded-lg bg-black my-1'
              ></div>
              <div
                class='dot w-[4px] h-[4px] border rounded-lg bg-black my-1'
              ></div>
            </div>
          </div>

          <div class='blog h-24 overflow-hidden '>
            <p class='p-10'>
             $row[2]
            </p>
          </div>
          <hr class='border-slate-600 opacity-60 my-4 p-1 w-[90%] m-auto' />
          <form method = 'POST' action ='post.php'>
          <div class='add flex justify-between'>
            <button name='comment'><i class='fa fa-comment-o flex-1 px-2' aria-hidden='true'><span class='p-2 text-sm'>0</span></i
            ></button>
            
          </div>
        </div>
        </form>
      </div>";
    }
    ?>
  </main>

  <footer class="bg-[#0a182d] text-white text-center p-2">

    <div class="links flex justify-center space-x-3 p-5 ">
      <i class="fa fa-facebook text-white" aria-hidden="true"></i>
      <i class="fa fa-twitter text-white" aria-hidden="true"></i>
      <i class="fa fa-linkedin text-white" aria-hidden="true"></i>

    </div>
    <p class="md:p-6">©2022 by Rainchat. Proudly created by Suman and Pranab.</p>
  </footer>
</body>
<script>
  if (window.history.replaceState) {
    window.history.replaceState(null, null, window.location.href);
  }
</script>

</html>

<!--Backend code-->

<?php

if (isset($_POST["logout"])) {
  session_destroy();
  echo "<script>
    location.href = 'login.php';
    </script>";
}

//post files send username time likes and comments is set to null at insert
if (isset($_POST['post'])) {
  $current_user = $_SESSION['name'];
  $date = date("h:m:s A");
  $post = $_POST['post'];
  $temp_name = $_FILES['files']['tmp_name'];
  $file_name = $_FILES['files']['name'];
  $destination = "post_photos/".$file_name.$date;


    move_uploaded_file($temp_name, $destination);

    $sql = "INSERT INTO `Post`(`Username`, `Post`, `Time`, `Image`, `Likes`, `Comment`) VALUES ('$current_user','$post','$date','$destination','0','0')";

    $result = $connection->query($sql);

    if (!$result) {
      echo "Bad sql coding";
    }
    if($result){
      echo "Good coding";
    }
  } 

?>
