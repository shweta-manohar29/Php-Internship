<?php
$connection = mysqli_connect("localhost", "root", "", "student_details");
$q = mysqli_query($connection, 
        "select * from tbl_student_details where is_delete = 0") or die("Error". mysqli_error($connection));

echo"<table border='1'>";
echo"<tr>";
echo"<th>ID</th>";
echo"<th>Name</th>";
echo"<th>Gender</th>";
echo"<th>Date Of Birth</th>";
echo"<th>Email</th>";
echo"<th>Mobile</th>";
echo"<th>Address</th>";
echo"<th>Password</th>";
echo"<th>Area</th>";
echo"<th>Bloodgroup</th>";
echo"<th>Action</th>";
echo"</tr>";

while($row = mysqli_fetch_array($q)){
    echo"<tr>";
    echo"<td>{$row['std_id']}</td>";
    echo"<td>{$row['std_name']}</td>";
    echo"<td>{$row['std_gender']}</td>";
    echo"<td>{$row['std_dateofbirth']}</td>";
    echo"<td>{$row['std_email']}</td>";
    echo"<td>{$row['std_mobile']}</td>";
    echo"<td>{$row['std_address']}</td>";
    echo"<td>{$row['std_password']}</td>";
    echo"<td>{$row['std_area']}</td>";
    echo"<td>{$row['std_bloodgroup']}</td>";
    echo"<td><a href = 'editstudent.php?editid1={$row['std_id']}'>Edit</a>  |  <a href='deletestudent.php?deleteid1={$row['std_id']}'>Delete</a></td>";
    echo"</tr>";
    }
echo"</table>";

echo"<a href='tablestudent.php'>Add Record</a>";
?>