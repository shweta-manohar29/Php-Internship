<?php

$connection = mysqli_connect("localhost", "root", "", "db_internship");
if(!isset($_GET['editid1']) || empty($_GET['editid1'])){
    header("location:table.php");
}
$id = $_GET['editid1'];

$editq = mysqli_query($connection, 
        "select * from tbl_user where user_id='{$id}'") or die("Error".mysqli_error($connection));
        
$editdata = mysqli_fetch_array($editq);

if($_POST){
    $txt1=$_POST['txt1'];
    $txt2=$_POST['txt2'];
    $txt3=$_POST['txt3'];
    
    $uq = mysqli_query($connection, 
            "update tbl_user set user_name='{$txt1}', user_gender='{$txt2}', user_mobile='{$txt3}' where user_id='{$id}'");
    
    if($uq){
        echo "<script>alert('Record Added');window.location = 'table.php'</script>";
    }
}


?>

<html>
    <body>
        <form method="post">
            Name  :<input type="text" value="<?php echo $editdata['user_name'] ?>" name="txt1"><br>
            Gender: Male<input type="radio" <?php if($editdata['user_gender']=="Male"){ echo "checked";}?> value="Male" name="txt2">
            Female<input type="radio"<?php if($editdata['user_gender']=="Female"){ echo "checked";}?> value="Female"  name="txt2"><br>
                Mobile No. : <input type="number" value="<?php echo $editdata['user_mobile'] ?>" name="txt3">
                <input type="submit"> 
        </form>
    </body>
</html>

