<?php
$host = "localhost";
$username = "root";
$passwd = "";
$dbname = "student_details";
$connection = mysqli_connect($host, $username, $passwd, $dbname);
if($_POST)
{
    $name = $_POST['txt1'];
    $gender = $_POST['txt2'];
    $dob = $_POST['txt3'];
    $email = $_POST['txt4'];
    $mobile = $_POST['txt5'];
    $address = $_POST['txt6'];
    $password = $_POST['txt7'];
    $area = $_POST['txt8'];
    $bloodgroup = $_POST['txt9'];
    $querry = mysqli_query($connection,
            "insert into tbl_student_details(std_name, std_gender, std_dateofbirth, std_email, std_mobile, std_address, std_password, std_area, std_bloodgroup)  "
            . "values('{$name}','{$gender}','{$dob}','{$email}','{$mobile}','{$address}','{$password}','{$area}','{$bloodgroup}')") or die("Error".mysqli_error($connection));
if($querry){
    
    echo "<script>alert('Record Added');</script>";
}
}