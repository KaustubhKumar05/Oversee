<?php
include "dbconnect.php";

$emp = $_POST['emp'];


$que = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * from hr_employee_view where EmployeeID='".$emp."';"));

$json = "{'empID':'".$que['EmployeeID']."',
            'name':'".$que['First_name']"'

}";

echo $json;



?>