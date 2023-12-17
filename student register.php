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
          .double{
            display: flex;
          }
          
            
            </style> 
    <title>Register</title>
</head>
<body class="h-screen font-sans bg-cover login">
<div class="container flex items-center justify-center flex-1 h-full mx-auto my-auto">
    <div class="w-full max-w-lg">
        <div class="leading-loose">
            <div class="w-50% p-2 card">
                <div class="card-body">
                    <p class="text-red-800"><?php if(isset($_SESSION['error'])) echo $_SESSION['error']?></p>
                    <?php unset($_SESSION['error'])?>
                    <h4 class="mt-3">Register as Student</h4>
                    <form action="./backend/middleware.php" method="POST" class="form-group">
                        <input type="hidden" value="STUDENT" name="user">
                        <div class="mb-3">
                            <label for="">Full Name</label>
                            <input type="text" class="form-control" name="fullname" required>
                        </div>
                        <div class="flex-row mb-3 d-flex bd-highlight">
                            <label for="" class=" me-1">Batch</label>
                            <input type="number" class="form-control w-50" name="batch" required>
                            
                            <label for="" class="ml-2 me-1">ID</label>
                            <input type="text" class="form-control w-50" name="id" required>
                        </div>
                        <div class="flex-row mb-3 d-flex bd-highlight">
                            <label for="" class="me-1">College name</label>
                            <input type="text" class="form-control" name="cllg_name" required>
                        </div>
                        <div class="flex-row mb-3 d-flex bd-highlight">
                            <label for="" class=" me-1">Blood</label>
                            <input type="text" class="form-control w-50" name="blood" required>
                            
                            <label for="" class="ml-1 me-1">Depratment</label>
                            <input type="text" class="form-control w-50" name="dept" required>
                        </div>                        
                        <div class="flex-row mb-3 d-flex bd-highlight">
                            <label for="" class="ml-1 me-1">Social Link</label>
                            <input type="text" class="form-control" name="link" required>
                        </div>                       
                        <div class="flex-row mb-3 d-flex bd-highlight">
                            <label for="" class="ml-1 me-1">phone</label>
                            <input type="text" class="form-control w-50" name="phone" required>
                            
                            <label for="" class="ml-1 me-1">Hometown</label>
                            <input type="text" class="form-control w-50" name="hometown" required>
                        </div>                   
                        <div class="flex-row mb-3 d-flex bd-highlight">
                            <label for="" class="ml-1 me-1">Password</label>
                            <input type="text" class="form-control" name="pass" required>
                        </div>
                        <div class="flex-row mb-3 d-flex bd-highlight">
                            <label for="" class="ml-1 me-1">Retype Password</label>
                            <input type="text" class="form-control w-75" name="rpass" required>
                        </div>

                        <button type="submit" class="p-3 text-center btn btn-dark">Register</button>
                    </form> 
                </div>
            </div>
            
            
            <!-- <form action="./confirmation.html" class="max-w-xl p-10 m-4 bg-white rounded shadow-xl">
                <p class="font-medium text-gray-800"><b> Register As Student</b></p>
                <div class="">
                    <label class="block text-sm text-gray-00" for="cus_name">Full Name</label>
                    <input class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded" id="cus_name" name="cus_name" type="text" required placeholder="Your Name" aria-label="Name">
                 
                
                </div>
                <div class="mt-2 double">
                   <label class="block mt-2 text-sm text-gray-600 form-label" for="cus_email">ID</label>
                    <input class="px-2 py-2 text-gray-700 bg-gray-200 rounded w-30" id="cus_email" name="cus_email" type="text" required placeholder="Your Email" aria-label="Email">
                    <label class="block text-sm text-gray-600" for="cus_email">Batch</label>
                    <input class="px-2 py-2 text-gray-700 bg-gray-200 rounded w-50 form-control" id="cus_email" name="cus_email" type="text" required placeholder="Your Email" aria-label="Email">
                </div>
                <div class="mt-2">
                    
                </div>
                <div class="mt-2">
                    <label class="block text-sm text-gray-600" for="cus_email">Department</label>
                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_email" name="cus_email" type="text" required placeholder="Your Email" aria-label="Email">
                </div>
                <div class="mt-2">
                    <label class="block text-sm text-gray-600" for="cus_email">Batch</label>
                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_email" name="cus_email" type="text" required placeholder="Your Email" aria-label="Email">
                </div>
                <div class="mt-2">
                    <label class="block text-sm text-gray-600" for="cus_email">password</label>
                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_pass2" name="pass" type="password" required placeholder="Type password" aria-label="Email">
                </div>
                <div class="mt-2">
                    <label class="block text-sm text-gray-600" for="cus_email">Retype password</label>
                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_pass" name="cpass" type="password" required placeholder="Retype your password" aria-label="Email">
                </div>
                

                <div class="mt-4">
                    <button class="px-4 py-1 font-light tracking-wider text-white bg-gray-900 rounded" type="submit">Register</button>
                </div>
                <a class="right-0 inline-block text-sm font-bold align-baseline text-500 hover:text-blue-800" href="login.html">
                    Already have an account ?
                </a>
            </form> -->
        </div>
    
    
    
    </div>
</div>

</body>
</html>