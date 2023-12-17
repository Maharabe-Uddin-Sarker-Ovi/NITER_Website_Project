<?php 
session_start()
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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
    <title>Register</title>
</head>
<body class="h-screen font-sans bg-cover login">
<div class="container flex items-center justify-center flex-1 h-full mx-auto">
    <div class="w-full max-w-lg">
        <div class="leading-loose">
            <form action="./backend/middleware.php" method="POST" class="max-w-xl p-10 m-4 bg-white rounded shadow-xl">
                <input type="hidden" value="ADMIN" name="user">
                <p class="text-red-800"><?php if(isset($_SESSION['error'])) echo $_SESSION['error']?></p>
                <?php unset($_SESSION['error'])?>
                <p class="font-medium text-gray-800"><b> Register As Admin</b></p>
                <div class="">
                    <label class="block text-sm text-gray-00" for="cus_name">Name</label>
                    <input class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded" id="cus_name" name="fullname" type="text" required placeholder="Your Name" aria-label="Name">
                </div>
                <div class="mt-2">
                    <label class="block text-sm text-gray-600" for="cus_email">Email</label>
                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_email" name="email" type="text" required placeholder="Your Email" aria-label="Email">
                </div>
                <div class="mt-2">
                    <label class="block text-sm text-gray-600" for="cus_email">password</label>
                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_pass2" name="pass" type="password" required placeholder="Type password" aria-label="Email">
                </div>
                <div class="mt-2">
                    <label class="block text-sm text-gray-600" for="cus_email">Retype password</label>
                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_pass" name="rpass" type="password" required placeholder="Retype your password" aria-label="Email">
                </div>
                

                <div class="mt-4">
                    <button class="px-4 py-1 font-light tracking-wider text-white bg-gray-900 rounded" type="submit">Register</button>
                </div>
                <a class="right-0 inline-block text-sm font-bold align-baseline text-500 hover:text-blue-800" href="login.html">
                    Already have an account ?
                </a>
            </form>
        </div>
    </div>
</div>

</body>
</html>