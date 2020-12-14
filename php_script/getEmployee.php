<?php
include "dbconnect.php";

$emp = $_POST['emp'];


$que = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * from hr_employee_view where EmployeeID='".$emp."';"));

$json = "{'empID':'".$que['EmployeeID']."',
            'name':'".$que['First_name']"',
            'phone':'".$que['EmployeeID']."',
            'email':'".$que['EmployeeID']."',
            'designation':'".$que['EmployeeID']."',
            'department':'".$que['EmployeeID']."',
            'rating':'".$que['EmployeeID']."',
            'projects':'".$que['EmployeeID']."',
            'DOB':'".$que['EmployeeID']."',
            'Address':'".$que['EmployeeID']."',
            'Aadhar':'".$que['EmployeeID']."',
            'Bank_name':'".$que['EmployeeID']."',
            'Account_name':'".$que['EmployeeID']."',
            'Account_no':'".$que['EmployeeID']."',
            'IFSC':'".$que['EmployeeID']."',
            'Branch_name':'".$que['EmployeeID']."',
            'Salary':'".$que['EmployeeID']."',
            'Login':'".$que['EmployeeID']."',
            'Pass':'".$que['EmployeeID']."'

}";

echo $json;



?>