<?php
session_start();
?>


<!doctype html>
<html lang="en">

<head>
  <title>Login | Admin/Studnet</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="./dist/styles.css">
  <link rel="icon" type="image/x-icon" href="./images/fav.png">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
    crossorigin="anonymous">
  <style>
  .login{
    background: url('./images/niter1.png') no-repeat fixed center;
    -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

  
  </style>  
</head>

<body class="h-screen font-sans bg-cover login">
<div class="container flex items-center justify-center flex-1 h-full mx-auto">
  <div class="w-full max-w-lg">
    <div class="leading-loose">
      
      <form action="./backend/check.php" method="POST" class="max-w-xl p-10 m-4 bg-white rounded shadow-xl">
        <?php
        $type = $_SESSION['type'];
        
        
        if($type == "blank"){
          
        ?>
        <input type="hidden" value="<?= $_POST['user']?>" name="login_type">
       
        <p class="text-lg font-medium font-bold text-center text-gray-800">Login As <?=  $_POST["user"]?></p>
        <p class="text-lg font-medium font-bold text-center text-red-600"><?php if(isset($_SESSION['login_fail']))?></p>
        <?php unset($_SESSION['login_fail'])?>
        <div>
          <label class="block text-sm text-gray-00" for="username"><?= $_POST['user']?> ID (Login ID)</label>
          <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded test_user" id="username" name="userid" type="text" required placeholder="Your ID" aria-label="username">
        </div>
        <div class="mt-2">
          <label class="block text-sm text-black-600" for="password">PASSWORD</label>
          <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded test_pass" required id="password" name="password" type="password" placeholder="*******" aria-label="password">
        </div>
        <div class="items-center justify-between mt-4">
         <button class="px-4 py-1 font-light tracking-wider text-white bg-gray-900 rounded test_login" type="submit">Login</button>
          
          <a class="right-0 inline-block text-sm font-bold align-baseline text-500 hover:text-blue-800" href="#">
            Forgot Password?
          </a>
        </div>

        <?php
        if($_POST['user'] == 'ADMIN'){
          echo '<a class="right-0 inline-block text-sm font-bold align-baseline text-500 hover:text-blue-800" href="./admin register.php">Not registered ?</a>';
        }
        else if($_POST['user'] == 'STUDENT'){
          echo '<a class="right-0 inline-block text-sm font-bold align-baseline text-500 hover:text-blue-800" href="./student register.php">Not registered ?</a>';
        }
        ?>



        <?php } elseif($_SESSION['type'] == 'ADMIN' || $_SESSION['type'] == 'STUDENT' ) {?>
          <input type="hidden" value="<?php echo $_SESSION['type'] ?>" name="login_type">
          <p class="text-lg font-medium font-bold text-center text-gray-800">Login As <?php echo $_SESSION['type']?></p>
          <?php if(isset($_SESSION['login_fail'])) {echo $_SESSION['login_fail'];}?>
          <?php unset($_SESSION['login_fail'])?>
          <?php if(isset($_SESSION['exist'])) {echo $_SESSION['exist'];}?>
          <?php unset($_SESSION['exist'])?>
          <p class="text-lg font-medium font-bold text-center text-red-600"><?php if(isset($_SESSION['login_fail']))?></p>
          <?php unset($_SESSION['login_fail'])?>
          <p class="text-lg font-medium font-bold text-center text-red-600"><?php if(isset($_SESSION['login_fail']))?></p>
          <div>
            <label class="block text-sm text-gray-00" for="username">ID (Login ID)</label>
            <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded1" id="username" name="userid" type="text" required placeholder="Your ID" aria-label="username">
          </div>
          <div class="mt-2">
            <label class="block text-sm text-black-600" for="password">PASSWORD</label>
            <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded test_pass" required id="password" name="password" type="password" placeholder="*******" aria-label="password">
          </div>
          <div class="items-center justify-between mt-4">
          <button class="px-4 py-1 font-light tracking-wider text-white bg-gray-900 rounded test_login" type="submit">Login</button>
            
            <a class="right-0 inline-block text-sm font-bold align-baseline text-500 hover:text-blue-800" href="#">
              Forgot Password?
            </a>
          </div>

          <?php
          if($_SESSION['type'] == 'ADMIN'){
            echo '<a class="right-0 inline-block text-sm font-bold align-baseline text-500 hover:text-blue-800" href="./admin register.php">Not registered ?</a>';
          }
          else if($_SESSION['type'] == 'STUDENT'){
            echo '<a class="right-0 inline-block text-sm font-bold align-baseline text-500 hover:text-blue-800" href="./student register.php">Not registered ?</a>';
          }
          ?>
        <?php }?>
       
      </form>

    </div>
  </div>
</div>
</body>

</html>
