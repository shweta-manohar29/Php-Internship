<?php

$connection = mysqli_connect("localhost", "root", "", "student_details");
if(!isset($_GET['editid1']) || empty($_GET['editid1'])){
    header("location:displaystudent.php");
}
$id=$_GET['editid1'];

$q = mysqli_query($connection, 
        "select * from tbl_student_details where std_id='{$id}'") or die("Error".mysqli_error($connection));

$editdata = mysqli_fetch_array($q);

if($_POST){
    $name = $_POST['txt1'];
    $gender = $_POST['txt2'];
    $dob = $_POST['txt3'];
    $email = $_POST['txt4'];
    $mobile = $_POST['txt5'];
    $address = $_POST['txt6'];
    $password = $_POST['txt7'];
    $area = $_POST['txt8'];
    $bloodgroup = $_POST['txt9'];
    
    $uq = mysqli_query($connection,
            "update tbl_student_details set std_name='{$name}', std_gender='{$gender}', std_dateofbirth='{$dob}', std_email='{$email}', std_mobile='{$mobile}', std_address='{$address}', std_password='{$password}', std_area='{$area}', std_bloodgroup='{$bloodgroup}' where std_id='{$id}'");
    
   if($uq){
       echo"<script>alert('Record Updated');window.location='displaystudent.php'</script>";
   }
}

?>

<html>
    <body>
        <form method="post">
            <table>
                <tr>
                <td>Name:</td>
                <td><input type="text" value="<?php echo $editdata['std_name']; ?>" name="txt1" required></td>
            </tr>
            <tr>
                <td>Gender:</td>
                <td>Male<input type="radio" value="Male" <?php if($editdata['std_gender']=="Male") { echo "checked"; }?> name="txt2">
                    Female<input type="radio" value="Female" <?php if($editdata['std_gender']=="Female") { echo "checked"; }?> name="txt2"></td>
            </tr>
            <tr>
                <td>Date OF Birth</td>
                <td><input type="date" value="<?php echo $editdata['std_dateofbirth']; ?>" name="txt3" required></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="email" value="<?php echo $editdata['std_email']; ?>" name="txt4" required></td>
            </tr>
            <tr>
                <td>Mobile:</td>
                <td><input type="number" value="<?php echo $editdata['std_mobile']; ?>" name="txt5" required></td>
            </tr>
            <tr>
                <td>Address:</td>
                <td><input type="text" value="<?php echo $editdata['std_address']; ?>" name="txt6" required></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="text" value="<?php echo $editdata['std_password']; ?>" name="txt7" required></td>
            </tr>
            <tr>
                <td>Area:</td>
                <td><input type="text" value="<?php echo $editdata['std_area']; ?>"name="txt8" required></td>
            </tr>
            <tr>
                <td>Blood Group:</td>
                <td><input type="text" value="<?php echo $editdata['std_bloodgroup']?>" name="txt9" required></td>
            </tr>
            <tr>
                <td><input type="submit"></td>
                <td><input type="reset"></td>
            </tr>
            </table>
        </form>
    </body>
</html>

