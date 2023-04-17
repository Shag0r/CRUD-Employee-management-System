<?php
// define class 
class User{
    // definig the properties 
    private $conn;

    // constructor for creating the connections 
    public function __construct(){
        // echo "I Love You Prity";
        define("HOSTNAME","localhost");
        define("USERNAME","root");
        define("PASSWORD","");
        define("DATABASE","employee");

        // php function to connect 
        $this->conn=mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DATABASE);

        // check if the connection is established 
        // if($this->conn){
        //     echo "Connected successfully ";
        // }
        // else{
        //     echo "error";
        // }
    }

    // fUnction for the insert data 
    public function add_employee($data){
       // print_r($data);
        // Array ( [employee_name] => Shagor [employee_father_name] => Gourango [employee_email] => S@gmail.com [employee_phone] => 0177 [employee_address] => 344/A,Dhanmondi [employee_post] => PHP developer [employee_salary] => 36500 [check] => on [submit] => Save )
         $employee_name=$data['employee_name'];
         $employee_father_name=$data['employee_father_name'];
         $employee_email=$data['employee_email'];
         $employee_phone=$data['employee_phone'];
         $employee_address=$data['employee_address'];
         $employee_post=$data['employee_post'];
         $employee_salary=$data['employee_salary'];

         $query="INSERT INTO `employee_info`(`name`,`father_name`,`email`,`phone`,`address`,`post`,`salary`) VALUES(' $employee_name','$employee_father_name',' $employee_email',' $employee_phone','$employee_address','$employee_post', $employee_salary)
         ";
         $check=mysqli_query($this->conn,$query);
        //  check if the data is inserted;
        // if($check){
        //     echo "
        //                    Successfully inserted
        //     ";
        // }
        // else{
        //     echo "Connot be inserted or dublicate information";
        // }






    }

    // display data 
    public function display(){

        $query="SELECT * FROM `employee_info`;";

        // connnect the dataase 
        return $data= mysqli_query($this->conn,$query);
    }

    // function for the remove 

    public function remove($id){
        $query = "DELETE FROM `employee_info` WHERE `id`=$id;";
        $del=mysqli_query($this->conn,$query);
        if($del){
            header("Location: index.php");
        }
    }

    // function for the update user 
    public function update($id){
        $query="SELECT * FROM `employee_info` WHERE `id`=$id;";
        return $data=mysqli_query($this->conn,$query);

    }
    // function for the edit and save at the fudate user 

    public function update_info($data){
        $id=$data['employee_id'];
        $employee_name=$data['employee_name'];
        $employee_father_name=$data['employee_father_name'];
        $employee_email=$data['employee_email'];
        $employee_phone=$data['employee_phone'];
        $employee_address=$data['employee_address'];
        $employee_post=$data['employee_post'];
        $employee_salary=$data['employee_salary'];
        print_r($data);


        $query="UPDATE `employee_info` SET `name`=' $employee_name',`father_name`=' $employee_father_name',`email`='$employee_email',`phone`=' $employee_phone',`address`='$employee_address',`post`=' $employee_post',`salary`= $employee_salary WHERE `id`=$id;";
        $upd= mysqli_query($this->conn,$query);
        // upd define the update function
        if($upd){
            header("Location:index.php");
        }






    }

    

}

?>