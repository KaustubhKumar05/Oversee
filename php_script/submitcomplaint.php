<?php
session_start();
if(isset($_POST['submit'])){
    
    $cat=$_POST['cat']; 
    $sub=$_POST['sub']; 
    $body=$_POST['body']; 
    echo $cat;
    date_default_timezone_set("Asia/Kolkata");
    $date=date("Y/m/d");
    $time=date("H:i:s");

    $r = "INSERT INTO complaints (Comp_status, Date_Time_Stamp, Subject, Body, Category, EmployeeID) 
    VALUES ('Pending', '".$date." ".$time."', '".$sub."','".$body."','".$cat."','".$_SESSION['empID']."');";
    $comp_insert=mysqli_query($conn,$r); 

    
    
}

?>