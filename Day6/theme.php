
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
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Student Form</title>

<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<?php
include './design/menu.php';
include './design/logo.php';
?>

<div id="wrapper"> 
	<!-- end #header -->
	<div id="page-bgtop"></div>
	<div id="page">
            <div><img src="phpimage.jpg" width="920" height="300" alt="" /></div>
		<div id="content">
			<div class="post">
				<h2 class="title"><a href="#">Student Form</a></h2>
				
				<div style="clear: both;">&nbsp;</div>
				<div class="entry">
                                    <form method="post">
                                        <table>
                                                    <tr>
                <td>Name:</td>
                <td><input type="text" name="txt1"></td>
            </tr>
            <tr>
                <td>Gender:</td>
                <td><select name="txt2">
                        <option>Male</option>
                        <option>Female</option>
                    </select></td>
            </tr>
            <tr>
                <td>Date OF Birth</td>
                <td><input type="date" name="txt3"></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="email" name="txt4"></td>
            </tr>
            <tr>
                <td>Mobile:</td>
                <td><input type="number" name="txt5"></td>
            </tr>
            <tr>
                <td>Address:</td>
                <td><input type="text" name="txt6"></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="text" name="txt7"></td>
            </tr>
            <tr>
                <td>Area:</td>
                <td><input type="text" name="txt8"></td>
            </tr>
            <tr>
                <td>Blood Group:</td>
                <td><input type="text" name="txt9"></td>
            </tr>
            <tr>
                <td><input type="submit"></td>
                <td><input type="reset"></td>
            </tr>
                                        </table>
                                    </form>	
				</div>
			</div>
			<div class="post">
				
				<div style="clear: both;">&nbsp;</div>
				<div class="entry">
					
				</div>
			</div>
			<div style="clear: both;">&nbsp;</div>
		</div>
		<!-- end #content -->
		<?php
                include './design/sidebar.php';
                ?>
		<!-- end #sidebar -->
		<div style="clear: both;">&nbsp;</div>
	</div>
	<div id="page-bgbtm"></div>
	<!-- end #page --> 
</div>
    <?php
    include './design/footer.php';
    ?>

<!-- end #footer -->
</body>
</html>


