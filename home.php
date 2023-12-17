<?php
session_start();
require './backend/db.php';

//Total student + student info
$select_user = "SELECT * FROM student_info";
$result = mysqli_query($db_connect,$select_user);
$rowcount = mysqli_num_rows( $result );

//Total batch
$result2 = mysqli_query($db_connect, "SELECT MAX(batch) FROM student_info");
$row = mysqli_fetch_array($result2);

//total department
$result3 = mysqli_query($db_connect,"SELECT COUNT(DISTINCT department) FROM student_info");
$row1 = mysqli_fetch_array($result3);

//Total Hometown
$result4 = mysqli_query($db_connect,"SELECT COUNT(DISTINCT hometown) FROM student_info");
$row2 = mysqli_fetch_array($result4);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="tailwind,tailwindcss,tailwind css,css,starter template,free template,admin templates, admin template, admin dashboard, free tailwind templates, tailwind example">
    <!-- Css -->
    <link rel="stylesheet" href="./dist/styles.css">
    <link rel="stylesheet" href="./dist/all.css">
    <link rel="icon" type="image/x-icon" href="./images/fav.png">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,600i,700,700i" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Dashboard</title>
</head>

<body>


    <style>
        .modal{
            left: 35%;
            margin-top: 10%;
            
        }
    </style>
<!--Container -->
<div class="mx-auto bg-grey-400">
    <!--Screen-->
    <div class="flex flex-col min-h-screen">
        <!--Header Section Starts Here-->
        <header class="bg-nav">
            <div class="flex justify-between">
                <div class="inline-flex items-center p-1 mx-3">
                    <i class="pr-2 text-white fas fa-bars" onclick="sidebarToggle()"></i>
                    <h1 class="p-2 text-white">Logo</h1>
                </div>
                <div class="flex flex-row items-center p-1">
                    <!-- <img onclick="profileToggle()" class="inline-block w-8 h-8 rounded-full" src="https://avatars0.githubusercontent.com/u/4323180?s=460&v=4" alt=""> -->
                    <a href="#" onclick="profileToggle()" class="hidden p-2 text-white no-underline md:block lg:block">
                    <?php print_r($_SESSION['id']['full_name'])?></a>
                    
                    <a href="./backend/logout.php" class="btn btn-primary"><button type="submit" class="btn btbn-primary test_logout">Logout</button></a>
                    <div id="ProfileDropDown" class="absolute hidden mt-12 mr-1 bg-white rounded shadow-md pin-t pin-r">
                        <ul class="list-reset">
                         <li></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <!--/Header-->

        <div class="flex flex-1">
            <!--Sidebar-->
            <aside id="sidebar" class="hidden w-1/2 border-r bg-side-nav md:w-1/6 lg:w-1/6 border-side-nav md:block lg:block">

                <ul class="flex flex-col list-reset">
                    <li class="w-full h-full px-2 py-3 bg-white border-b border-light-border">
                        <a href="index.html"
                           class="font-sans text-sm font-hairline no-underline hover:font-normal text-nav-item">
                            <i class="float-left mx-2 fas fa-tachometer-alt"></i>
                            Dashboard
                            <span><i class="float-right fas fa-angle-right"></i></span>
                        </a>
                    </li>
                    </ul>

            </aside>
            <!--/Sidebar-->
            <!--Main-->
            <main class="flex-1 p-3 overflow-hidden bg-white-300">

                <div class="flex flex-col">
                    <!-- Stats Row Starts Here -->
                    <div class="flex flex-col flex-1 mx-2 md:flex-row lg:flex-row">
                        <div class="p-2 mx-2 mb-2 border-l-8 shadow-lg bg-red-vibrant hover:bg-red-vibrant-dark border-red-vibrant-dark md:w-1/4">
                            <div class="flex flex-col p-4">
                                <a  class="text-2xl text-white no-underline">
                                    <?= $rowcount?>
                                </a>
                                <a href="#" class="text-lg text-white no-underline">
                                    Total Students
                                </a>
                            </div>
                        </div>

                        <div class="p-2 mx-2 mb-2 border-l-8 shadow bg-info hover:bg-info-dark border-info-dark md:w-1/4">
                            <div class="flex flex-col p-4">
                                <a href="#" class="text-2xl text-white no-underline">
                                    <?php print_r($row[0]);
                                     ?>
                                </a>
                                <a href="#" class="text-lg text-white no-underline">
                                    Total Batch
                                </a>
                            </div>
                        </div>

                        <div class="p-2 mx-2 mb-2 border-l-8 shadow bg-warning hover:bg-warning-dark border-warning-dark md:w-1/4">
                            <div class="flex flex-col p-4">
                                <a href="#" class="text-2xl text-white no-underline">
                                    <?php print_r($row1[0]);?>
                                </a>
                                <a href="#" class="text-lg text-white no-underline">
                                    Total Departments
                                </a>
                            </div>
                        </div>

                        <div class="p-2 mx-2 mb-2 border-l-8 shadow bg-success hover:bg-success-dark border-success-dark md:w-1/4">
                            <div class="flex flex-col p-4">
                                <a href="#" class="text-2xl text-white no-underline">
                                    <?php print_r($row2[0])?>
                                <a href="#" class="text-lg text-white no-underline">
                                    Total Hometown
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- /Stats Row Ends Here -->

                    <!-- Card Sextion Starts Here -->
                    <div class="flex flex-col flex-1 mx-2 md:flex-row lg:flex-row">

                        <!-- card -->

                        <div class="w-full mx-2 overflow-hidden bg-white rounded shadow">
                            <div class="px-6 py-2 border-b border-light-grey">
                                <div class="text-xl font-bold">Student Details</div>
                            </div>

                            <!-- Example single danger button -->
                            <?php 
                            $type = $_SESSION['type'];
                            if($type == 'ADMIN'){
                            ?>
                            <form action="./backend/filter.php" method="POST">
                                
                                <!-- <label for="" class="mt-3 ml-2"><b>Departmemt</b> </label>
                               <select name="dept" class="px-4 mt-2 ml-1 btn btn-secondary">
                                    <option value="">None</option>
                                    <option value="CSE">CSE</option>
                                    <option value="EEE">EEE</option>
                                    <option value="TEX">TEX</option>
                                  </select>
                                  <label for="" class="mt-3 ml-2"><b>Batch:</b> </label>
                                  <select name="batch" class="px-4 mt-3 ml-1 btn btn-secondary">
                                    <option value="">None</option>
                                    <option value="10">10</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="5">5</option>
                                  </select>
                                  <label for="" class="mt-3 ml-2"><b>Blood:</b> </label>
                                  <select name="bld" class="px-4 mt-3 ml-1 btn btn-secondary">
                                    <option value="">None</option>
                                    <option value="B+">B+</option>
                                    <option value="A+">A+</option>
                                    <option value="O+">O+</option>
                                    <option value="AB+">AB+</option>
                                  </select> 
                                  <label for="" class="mt-3 ml-2"><b>Hometown:</b> </label>
                                  <select name="home" class="px-4 mt-3 ml-1 btn btn-secondary">
                                    <option value="">None</option>
                                    <option value="volvo">Dhaka</option>
                                    <option value="saab">CTG</option>
                                    <option value="Barishal">Barishal</option>
                                    <option value="Tangail">Tangail</option>
                                  </select> -->

                                  <input type="text" class="px-5 test_search form-control" name="search_value">

                                  <button type="submit" class="mt-3 ml-5 btn btn-primary search_btn">Search</button>
                            </form>
 
                            <div class="p-2 mt-3 table-responsive">
                                <table class="table text-grey-darkest table-bordered table-striped table-hover">
                                    <thead class="text-white bg-grey-dark text-normal">
                                    <tr>
                                        <th scope="col">Sl. No.</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Student ID</th>
                                        <th scope="col">Departmemt</th>
                                        <th scope="col">Batch</th>
                                        <th scope="col">Contact No.</th>
                                        <th scope="col">Blood</th>
                                        <th scope="col">Home town</th>
                                        <th scope="col">Collage Name</th>
                                        <th scope="col">Social Media link</th>
                                        <th scope="col">Edit</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                        <?php if($_SESSION['filter'] != 'blank'){?>    
                                            <?php foreach($_SESSION['filter'] as $key=>$rd){?>
                                            <tr>
                                                <th scope="row"><?=$key+1?></th>
                                                <td>
                                                <?=$rd['2'];?>
                                                </td>
                                                <td><?=$rd['4'];?></td>
                                                <td><?=$rd['5'];?></td>
                                                <td><?=$rd['3'];?></td>
                                                <td>
                                                    <?=$rd['6'];?>
                                                </td>
                                                <td>
                                                    <?=$rd['7'];?>
                                                </td>
                                                <td>
                                                    <?=$rd['8'];?>
                                                </td>
                                                <td>
                                                    <?=$rd['9'];?>
                                                </td>
                                                <td>
                                                    <?=$rd['10'];?>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#EditModal<?= $rd[0];?>">Edit</button>
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="EditModal<?= $rd[0];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Edit Details</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="./backend/action.php" method= "POST">
                                                                        
                                                                        <input type="hidden" value="<?= $rd[0];?>" name="edit">
                                                                        <div class="mb-3">
                                                                            <label for="">Full Name</label>
                                                                            <input type="text" readonly class="form-control" required value="<?= $rd['2'];?>">
                                                                        </div>
                                                                        <div class="flex-row mb-3 d-flex bd-highlight">
                                                                            <label for="" class=" me-1">Batch</label>
                                                                            <input type="number" readonly  class="form-control w-50" name="batch" required value="<?= $rd['3'];?>">
                                                                            
                                                                            <label for="" class="ml-2 me-1">ID</label>
                                                                            <input type="text" readonly class="form-control w-50" name="id" required value="<?= $rd['4'];?>">
                                                                        </div>
                                                                        <div class="flex-row mb-3 d-flex bd-highlight">
                                                                            <label for="" class="me-1">College name</label>
                                                                            <input type="text" class="form-control" name="cllg_name" required value="<?= $rd['9'];?>">
                                                                        </div>
                                                                        <div class="flex-row mb-3 d-flex bd-highlight">
                                                                            <label for="" class=" me-1">Blood</label>
                                                                            <input type="text" class="form-control w-50" name="blood" required value="<?= $rd['7'];?>">
                                                                            
                                                                            <label for="" class="ml-1 me-1">Depratment</label>
                                                                            <input type="text" class="form-control w-50" name="dept" required value="<?= $rd['5'];?>">
                                                                        </div>                        
                                                                        <div class="flex-row mb-3 d-flex bd-highlight">
                                                                            <label for="" class="ml-1 me-1">Social Link</label>
                                                                            <input type="text" class="form-control" name="link" required value="<?= $rd['10'];?>">
                                                                        </div>                       
                                                                        <div class="flex-row mb-3 d-flex bd-highlight">
                                                                            <label for="" class="ml-1 me-1">phone</label>
                                                                            <input type="text" class="form-control w-50" name="phone" required value="<?= $rd['6'];?>">
                                                                            
                                                                            <label for="" class="ml-1 me-1">Hometown</label>
                                                                            <input type="text" class="form-control w-50" name="hometown" required value="<?= $rd['8'];?>">
                                                                        </div>                   
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                            <button type="submit" class="btn btn-primary">Update</button>
                                                                        </div>
                                                                        
                                                                    </form>
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#DeleteModal<?= $rd[0];?>">DELETE</button>
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="DeleteModal<?= $rd[0];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">DELETE This Record!!</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="./backend/action.php" method="POST" >
                                                                    <h4 class="m-3 text-center">Are you sure want to DELETE this Record?</h4>
                                                                    <input type="text" value="<?= $rd[0];?>" name="delete_id">
                                                                    <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                            <button type="submit" class="btn btn-danger">Yes, DELETE</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php } $_SESSION['filter'] = 'blank';?>
                                        <?php } else{?>
                                            <?php foreach($result as $key=>$rd){?>
                                            <tr>
                                                <th scope="row"><?=$key+1?></th>
                                                <td>
                                                <?=$rd['full_name'];?>
                                                </td>
                                                <td><?=$rd['class_id'];?></td>
                                                <td><?=$rd['department'];?></td>
                                                <td><?=$rd['batch'];?></td>
                                                <td>
                                                    <?=$rd['phone'];?>
                                                </td>
                                                <td>
                                                    <?=$rd['blood'];?>
                                                </td>
                                                <td>
                                                    <?=$rd['hometown'];?>
                                                </td>
                                                <td>
                                                    <?=$rd['college_name'];?>
                                                </td>
                                                <td>
                                                    <?=$rd['social_link'];?>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#EditModal<?= $rd['id'];?>">Edit</button>
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="EditModal<?= $rd['id'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Edit Details</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="./backend/action.php" method= "POST">
                                                                        
                                                                        <input type="hidden" value="<?= $rd['id'];?>" name="edit">
                                                                        <div class="mb-3">
                                                                            <label for="">Full Name</label>
                                                                            <input type="text" readonly class="form-control" required value="<?= $rd['full_name'];?>">
                                                                        </div>
                                                                        <div class="flex-row mb-3 d-flex bd-highlight">
                                                                            <label for="" class=" me-1">Batch</label>
                                                                            <input type="number" readonly  class="form-control w-50" name="batch" required value="<?= $rd['batch'];?>">
                                                                            
                                                                            <label for="" class="ml-2 me-1">ID</label>
                                                                            <input type="text" readonly class="form-control w-50" name="id" required value="<?= $rd['class_id'];?>">
                                                                        </div>
                                                                        <div class="flex-row mb-3 d-flex bd-highlight">
                                                                            <label for="" class="me-1">College name</label>
                                                                            <input type="text" class="form-control" name="cllg_name" required value="<?= $rd['college_name'];?>">
                                                                        </div>
                                                                        <div class="flex-row mb-3 d-flex bd-highlight">
                                                                            <label for="" class=" me-1">Blood</label>
                                                                            <input type="text" class="form-control w-50" name="blood" required value="<?= $rd['blood'];?>">
                                                                            
                                                                            <label for="" class="ml-1 me-1">Depratment</label>
                                                                            <input type="text" class="form-control w-50" name="dept" required value="<?= $rd['department'];?>">
                                                                        </div>                        
                                                                        <div class="flex-row mb-3 d-flex bd-highlight">
                                                                            <label for="" class="ml-1 me-1">Social Link</label>
                                                                            <input type="text" class="form-control" name="link" required value="<?= $rd['social_link'];?>">
                                                                        </div>                       
                                                                        <div class="flex-row mb-3 d-flex bd-highlight">
                                                                            <label for="" class="ml-1 me-1">phone</label>
                                                                            <input type="text" class="form-control w-50" name="phone" required value="<?= $rd['phone'];?>">
                                                                            
                                                                            <label for="" class="ml-1 me-1">Hometown</label>
                                                                            <input type="text" class="form-control w-50" name="hometown" required value="<?= $rd['hometown'];?>">
                                                                        </div>                   
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                            <button type="submit" class="btn btn-primary">Update</button>
                                                                        </div>
                                                                        
                                                                    </form>
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#DeleteModal<?= $rd['id'];?>">DELETE</button>
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="DeleteModal<?= $rd['id'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">DELETE This Record!!</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="./backend/action.php" method="POST" >
                                                                    <h4 class="m-3 text-center">Are you sure want to DELETE this Record?</h4>
                                                                    <input type="text" value="<?= $rd['id'];?>" name="delete_id">
                                                                    <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                            <button type="submit" class="btn btn-danger">Yes, DELETE</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        <?php }?>
                                    </tbody>
                                </table>
                            </div>
                            <?php } else { ?>
                                <div class="p-2 mt-3 table-responsive">
                                <table class="table text-grey-darkest table-bordered table-striped table-hover">
                                    <thead class="text-white bg-grey-dark text-normal">
                                    <tr>
                                        <th scope="col">Sl. No.</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Student ID</th>
                                        <th scope="col">Departmemt</th>
                                        <th scope="col">Batch</th>
                                        <th scope="col">Contact No.</th>
                                        <th scope="col">Home town</th>
                                        <th scope="col">Collage Name</th>
                                        <th scope="col">Social Media link</th>
                                        

                                    </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($result as $key=>$rd){?>
                                        <tr>
                                        <th scope="row"><?=$key+1?></th>
                                            <td>
                                              <?=$rd['full_name'];?>
                                            </td>
                                            <td><?=$rd['class_id'];?></td>
                                            <td><?=$rd['department'];?></td>
                                            <td><?=$rd['batch'];?></td>
                                            <td>
                                                <?=$rd['phone'];?>
                                            </td>
                                            <td>
                                                <?=$rd['hometown'];?>
                                            </td>
                                            <td>
                                                <?=$rd['college_name'];?>
                                            </td>
                                            <td>
                                                <?=$rd['social_link'];?>
                                            </td>
                                            
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <?php }?>
                        </div>
                        <!-- /card -->

                    </div>
                    <!-- /Cards Section Ends Here -->
                   
                </div>  
                                
                    
            </main>
            <!--/Main-->
        </div>
        <!--Footer-->
        <footer class="p-2 text-white bg-grey-darkest">
            <div class="flex flex-1 mx-auto">&copy; Niter Student Dashboard System</div>
            <div class="flex flex-1 mx-auto">Distributed by: OVI</div>
        </footer>
        <!--/footer-->

    </div>

</div>
<script src="./js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>