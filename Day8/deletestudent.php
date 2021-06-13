<?php
$connection = mysqli_connect("localhost", "root", "", "student_details");
$id = $_GET['deleteid1'];

$q = mysqli_query($connection, 
        "update tbl_student_details set is_delete = 1 where std_id='{$id}'") or die("Error". mysqli_error($connection));

if($q){
    echo"<script>alert('Record Deleted');window.location='displaystudent.php'</script>";
}        
?>