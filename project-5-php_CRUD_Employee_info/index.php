<!-- php code starts  -->
<?php 
// includein the user_Class here 
include "User.php";
// creating an object for the user class 
$user= new User();

// form info access through post method
if(isset($_POST['submit'])){
    // $data =$_POST;
    // print_r($data);
    // calling the add_employee method 
    $user->add_employee($_POST);
   

    
}

?>
<!-- php code ends -->


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
                    Employe Information
                </h1>

            </div>
            <!-- col end -->

        </div><!-- row end -->
        <!-- new row start for the form  -->
        <div class="row mt-4 justify-content-center">
            <!-- col for for form  -->
            <div class="col-4 shadow-lg rounded water-drop-bg">
                <!-- form start  -->
                <form action="" method="POST">
                    <!-- headline for the title of info  -->
                    <h2 class="text-center text-success">User Info</h2>
                    <hr class="bg-success">
                    <!-- input for the employee name  -->
                    <div class="form-group mb-2">
                        <input type="text" name="employee_name" id="" placeholder="Employee Name" class="form-control" required>

                    </div>
                    <!-- input for the employee father name  -->
                    <div class="form-group mb-2">
                        <input type="text" name="employee_father_name" id="" placeholder="Employee Father Name"
                            class="form-control" required>

                    </div>
                    <!-- input for the employee email  -->
                    <div class="form-group mb-2">
                        <input type="email" name="employee_email" id="" placeholder="Employee Email@gmail.com"
                            class="form-control" required>

                    </div>
                    <!-- input for the employee phone  -->
                    <div class="form-group mb-2">
                        <input type="text" name="employee_phone" id="" placeholder="Employee Phone-017x-xxx-xxx"
                            class="form-control" required>

                    </div>
                    <!-- input for the employee address  -->
                    <div class="form-group mb-2">
                        <input type="text" name="employee_address" id="" placeholder="Employee Address"
                            class="form-control" required>

                    </div>
                    <!-- input for the employee post -->
                    <div class="form-group mb-4">
                        <input type="text" name="employee_post" id="" placeholder="Employee Post-Software Engineer"
                            class="form-control" required>

                    </div>
                    <!-- input for the employee salary -->
                    <div class="form-group mb-2">
                        <input type="number" name="employee_salary" id="" placeholder="Employee Salary -> 36500"
                            class="form-control" required>

                    </div>
                    <div class="form-control mb-2">
                        <input type="checkbox" name="check" id="" required>
                        <p class="text-success text-bold">All the informations are checked</p>
                    </div>
                    <!-- input for the submit button -->
                    <div class="form-group mb-2">
                        <input type="submit" name="submit" id="" value="Save" class=" btn btn-success w-100">

                    </div>

                </form>
                <!-- form end -->


            </div>
            <!-- col for for form end -->
            <!-- --------------------------------------  -->
            
        </div>

        <!-- new row end for the form  -->

        <!-- new row for the table  -->
        <div class="row">
            
                <!-- new coloum start for the table  -->
            <div class="col-12 mb-4">
                <table class="table  my-5 table-bordered table-hover table-striped shadow-lg bg-light rounded">
                    <thead class="text-success font-weight-bold">
                        <tr>
                            <th>#SL</th>
                            <th>Employee Name</th>
                            <th>Employee Father's Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Title</th>
                            <th>Salary</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-success">
                        <?php 
                        $employee=$user->display();
                        $i=1;
                        while($row=mysqli_fetch_assoc($employee)){ 
                           // print_r($row);
                            ?>
                     
                        <tr>
                            <td><?php echo $i++;?></td>
                            <td><?php echo ucwords($row['name']);?></td>
                            <td><?php echo ucwords($row['father_name']);?></td>
                            <td><?php echo $row['email'];?></td>
                            <td><?php echo $row['phone'];?></td>
                            <td><?php echo $row['address'];?></td>
                            <td><?php echo ucwords( $row['post']);?></td>
                            <td><?php echo $row['salary'];?></td>
                            <td>
                                <a href="update.php?id=<?php echo $row['id']?>" class="btn btn-sm btn-success mt-1">Update</a>
                                <a href="remove.php?id=<?php echo $row['id']?>" class="btn btn-sm btn-danger mb-1">Remove</a>
                        </td>
                            
                        </tr>



                       <?php }
                        ?>
                       

                    </tbody>
                </table>


            </div>
            <!-- new coloum end for the table  -->
           
        </div>

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