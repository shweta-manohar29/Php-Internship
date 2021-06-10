<?php
$host = "localhost";
$username = "root";
$passwd = "";
$dbname = "db_internship";
$connection = mysqli_connect($host, $username, $passwd, $dbname);
$q = mysqli_query($connection,
        "insert into tbl_user(user_name,user_gender,user_mobile) values('shweta manohar','female','9173748896')") 
        or die("error".mysqli_error($connection));
if($q)
{
    echo "<script>alert('Record Added');</script>";
}
