<?php
include "dbconnect.php";

$emp = $_POST['emp'];


$que = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * from hr_employee__details_view where EmployeeID='".$emp."';"));

$json = "{'empID':'".$que['EmployeeID']."',
            'name':'".$que['First_name']." ".$que['Middle_name']." ".$que["Last_name"]. "',
            'phone':'".$que['Mobile_no']."',
            'email':'".$que['email']."',
            'designation':'".$que['Designation_name']."',
            'department':'".$que['Dept_name']."',
            'rating':'".$que['RATING']."',
            'projects':'".$que['EmployeeID']."',
            'DOB':'".$que['DOB']."',
            'Address':'".$que['Address_House_no']." ".$que['Address_Street_name']." ".$que["Address_Landmark"]. "',
            'Aadhar':'".$que['Aadhar_no']."',
            'Bank_name':'".$que['Bank_Name']."',
            'Account_name':'".$que['Acc_Holder_Name']."',
            'Account_no':'".$que['Account_no']."',
            'IFSC':'".$que['IFSC']."',
            'Branch_name':'".$que['Branch']."',
            'Salary':'".$que['Base_salary']."',
            'Login':'".$que['LoginID']."',
            'Pass':'".$que['Password']."'

}";

echo $json;

// EmployeeID, DeptID, DesignationID, First_name, Middle_name, Last_name, email, DOB, Address_House_no, Address_Street_name, Address_Landmark, Address_State, Address_City, Aadhar_no, emp,
//  Mobile_no, Designation_name, Factor, Annual_paid_leave, Base_salary, Dept_name, RATING, Account_no, Acc_Holder_Name, IFSC, Branch, Bank_Name

?>