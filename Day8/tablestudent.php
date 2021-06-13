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
?>
<html>
    <body>
        <div><h1 align="center">Student Record</h1></div>
    </body>
    <form align="center" method="post">
        <table align="center">
            <tr>
                <td>Name:</td>
                <td><input type="text" name="txt1" required></td>
            </tr>
            <tr>
                <td>Gender:</td>
                <td>Male<input type="radio" value="Male" name="txt2">
                    Female<input type="radio" value="Female" name="txt2"></td>
            </tr>
            <tr>
                <td>Date OF Birth</td>
                <td><input type="date" name="txt3" required></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="email" name="txt4" required></td>
            </tr>
            <tr>
                <td>Mobile:</td>
                <td><input type="number" name="txt5" required></td>
            </tr>
            <tr>
                <td>Address:</td>
                <td><input type="text" name="txt6" required></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="text" name="txt7" required></td>
            </tr>
            <tr>
                <td>Area:</td>
                <td><input type="text" name="txt8" required></td>
            </tr>
            <tr>
                <td>Blood Group:</td>
                <td><input type="text" name="txt9" required></td>
            </tr>
            <tr>
                <td><input type="submit"></td>
                <td><input type="reset"></td>
            </tr>
        </table>
        <a href="displaystudent.php">Display Record</a>
    </form>
</html>


