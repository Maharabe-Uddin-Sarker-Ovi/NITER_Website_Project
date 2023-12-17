<?php
session_start();
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

          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

          <style>
            .login{
              background: url('./images/niter1.png') no-repeat fixed center;
              -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;



          }

          .btn{
            margin-left: 10rem;
          }
          
          
            
            </style> 
    <title>Congratulations!!</title>
</head>
<body class="h-screen font-sans bg-cover login">
<div class="container flex items-center justify-center flex-1 h-full mx-auto">
    <div class="w-full max-w-lg">
        <div class="leading-loose">
            <form action="./login.php" method="POST" class="max-w-xl p-10 m-4 bg-white rounded shadow-xl">
                <h3 class="font-medium text-center text-gray-800"><b> Congratulations!!</b></h3>
                
                <p class="font-medium text-center text-gray-800"><em><?php if(isset($_SESSION['success']))echo $_SESSION['success']?></em></p>
                
                <p class="font-medium text-center text-gray-800"><em>Your login Id is : <?php if(isset($_SESSION['id']))echo $_SESSION['id']?></em></p>
                
                <p class="font-medium text-center text-red-800">**Use the above given ID for login purpose**</p>
                <input type="hidden" value="<?php echo $_SESSION['type']?>" name="user">
                <button type = "submit" class=" btn btn-dark">Login</button>
                
                
            </form>
        </div>
    </div>
</div>

</body>
</html>