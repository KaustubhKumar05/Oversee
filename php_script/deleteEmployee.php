<?php
include "dbconnect.php";

$emp = $_POST['emp'];

$que = mysqli_query($conn,"delete from Employee where EmployeeID='".$emp."';");
echo "delete from Employee where EmployeeID='".$emp."';";

?>