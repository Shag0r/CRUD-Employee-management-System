<!-- this page is created for the update information of the table data  -->
<?php

// includein the user_Class here 
include "User.php";
// creating an object for the user class 
$user= new User();

$id=$_GET['id'];
$data=$user->update($id);
$row=mysqli_fetch_assoc($data);
// print_r($row);
if(isset($_POST['update_save']))
{
    $user->update_info($_POST);

}




?>


<!-- creating HTML form for the updation process  -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- link for logo icon -->
    <link rel="shortcut icon" href="" type="image/x-icon">

    <!-- link for fontawsam icons  -->
    <link rel="stylesheet" href="css/all.css">
    <!-- link for bootstrap  -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- link for custom css -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!-- headline start -->


    <div class="container"> <!-- container start  -->

        <div class="row"> <!-- row start  -->
            <!-- col start  -->
            <div class="col-12">
                <h1 class="bg-success text-bold text-center py-5 text-white ">
                    Update Employe Information
                </h1>

            </div>
            <!-- col end -->

        </div><!-- row end -->
        <!-- new row start for the form  -->
        <div class="row mt-4 justify-content-center mb-4">
            <!-- col for for form  -->
            <div class="col-4 shadow-lg rounded water-drop-bg">
                <!-- form start  -->
                <form action="" method="POST">
                    <!-- headline for the title of info  -->
                    <h2 class="text-center text-success">User Info</h2>
                    <hr class="bg-success">
                    <!-- input for the employee ID but with disable option  -->
                    <div class="form-group mb-2">
                        <input type="number" name="employee_id" id="" value="<?php echo $row['id']; ?>" class="form-control" >

                    </div>
                    <!-- input for the employee name  -->
                    <div class="form-group mb-2">
                        <input type="text" name="employee_name" id="" placeholder="Employee Name" class="form-control"value="<?php echo $row['name']; ?>" required>

                    </div>
                    <!-- input for the employee father name  -->
                    <div class="form-group mb-2">
                        <input type="text" name="employee_father_name" id="" placeholder="Employee Father Name"
                            class="form-control" value="<?php echo $row['father_name']; ?>" required>

                    </div>
                    <!-- input for the employee email  -->
                    <div class="form-group mb-2">
                        <input type="email" name="employee_email" id="" placeholder="Employee Email@gmail.com"
                            class="form-control" value="<?php echo $row['email']; ?>" required>

                    </div>
                    <!-- input for the employee phone  -->
                    <div class="form-group mb-2">
                        <input type="text" name="employee_phone" id="" placeholder="Employee Phone-017x-xxx-xxx"
                            class="form-control"value="<?php echo $row['phone']; ?>" required>

                    </div>
                    <!-- input for the employee address  -->
                    <div class="form-group mb-2">
                        <input type="text" name="employee_address" id="" placeholder="Employee Address"
                            class="form-control"value="<?php echo $row['address']; ?>" required>

                    </div>
                    <!-- input for the employee post -->
                    <div class="form-group mb-4">
                        <input type="text" name="employee_post" id="" placeholder="Employee Post-Software Engineer"
                            class="form-control"value="<?php echo $row['post']; ?>" required>

                    </div>
                    <!-- input for the employee salary -->
                    <div class="form-group mb-2">
                        <input type="number" name="employee_salary" id="" placeholder="Employee Salary -> 36500"
                            class="form-control"value="<?php echo $row['salary']; ?>" required>

                    </div>
                    <div class="form-control mb-2">
                        <input type="checkbox" name="check" id="" required>
                        <p class="text-success text-bold">All the informations are checked</p>
                    </div>
                    <!-- input for the submit button -->
                    <div class="form-group mb-2">
                        <input type="submit" name="update_save" id="" value="Save Update" class=" btn btn-success w-100">

                    </div>

                </form>
                <!-- form end -->


            </div>
            <!-- col for for form end -->
            <!-- --------------------------------------  -->
            
        </div>

        <!-- new row end for the form  -->

       
    </div> <!-- container end -->


    <!-- headline end -->


     <!-- footer section start  -->
     <?php
        include "foot.php";
     ?>
     <!-- footer section end -->








    <!-- ------------------------------------------------------------------------------------ -->
    <!-- file attachment for Js -->
    <!-- file for Jquery  -->
    <script src="Jquery/jquery-3.6.3.min.js"></script>
    <!-- 
        ...
        ,,,,
        ,,,,
     -->
    <!-- files for plugines  -->
    <!-- ripple plugin  -->
    <script src="Jquery/main.js"></script>
    <!-- ============================================================ -->
    <!-- fontawsame file for js  -->
    <script src="js/all.js"></script>
    <!-- bootstreap file for js  -->
    <script src="js/bootstrap.bundle.js"></script>


</body>

</html>