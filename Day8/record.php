<?php
$host = "localhost";
$username = "root";
$passwd = "";
$dbname = "db_internship";
$connection = mysqli_connect($host, $username, $passwd, $dbname);
if($_POST){
    $name = $_POST['txt1'];
    $gender = $_POST['txt2'];
    $mobile = $_POST['txt3'];
    
    $q= mysqli_query($connection,
            "insert into tbl_user(user_name,user_gender,user_mobile) values('{$name}','{$gender}','{$mobile}')") or die("error".mysqli_error($connection));
   
if($q){
  echo "<script>alert('Record Added');</script>";   
}
}
?>
<html>
    <body>
        <form method="post">
            Name  :<input type="text" name="txt1"><br>
            Gender:Male<input type="radio" value="Male" name="txt2">
            Female<input type="radio" value="Female" name="txt2"><br>
                Mobile No. : <input type="number" name="txt3">
                <input type="submit">
        </form>
        <a href="table.php">Display Record</a>
    </body>
</html>

