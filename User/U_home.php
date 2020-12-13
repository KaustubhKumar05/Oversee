<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css"
          integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="U_home_style.css">
    <title>Profile</title>
</head>
<?php
    include "../php_script/dbconnect.php";
    $que = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * from employee where EmployeeID='".$_SESSION["empID"]."';"));


?>
<body>
<div class="container">
    <div class="panel">
        <div class="close">
            <i class="fas fa-angle-double-left fa-4x" id="closeBtn"></i>
        </div>
        <div class="option">
            <a href="U_home.php">Profile</a>
        </div>
        <div class="option">Projects</div>
        <div class="option">
            <a href="U_complaints.php">Complaints</a>
        </div>
        <div class="option">
            <a href="U_leaves.php">Leaves</a>
        </div>
        <div class="option signout">
            <a href="../index.php">Sign Out</a>
        </div>
    </div> 
    <div class="main">
        <div class="menu">
            <div class="btn">
                <i class="fas fa-bars fa-3x" id="menuBtn"></i>
                <p id="title">Oversee</p>
                <p id="space"></p>
            </div>
        </div>
        <div class="pageTitle">Profile</div>
        <div class="det">
            <div class="item">
                <p>Name:</p>
                <?php echo             "<input type='text' id='name' value = '" . $que["First_name"] . "'>";   ?>
                
            </div>

            <div class="item">
                <p>Employee ID:</p>
                <?php echo             "<input type='text' id='empid' value = '" . $que["EmployeeID"] . "'>";   ?>
                
            </div>

            <div class="item">
                <p>Mobile no:</p>
                <input type="text" id="mobileno" name="">
                
            </div>

            <div class="item">
                <p>Email ID:</p>
                <input type="text" id="emailid" name="">
            </div>

            <div class="item">
                <p>Designation:</p>
                <input type="text" id="design" name="">
            </div>

            <div class="item">
                <p>Department: </p>
                <input type="text" id="dept" name="">
            </div>

            <div class="item">
                <p>Rating:</p>
                <input type="text" id="rating" name="">
            </div>

            <div class="item">
                <p>Aadhar no:</p>
                <input type="text" id="aadhar" name="">
            </div>

            <div class="item">
                <p>Address:</p>
                <input type="text" id="address" name="">
            </div>

            <div class="item">
                <p>Bank name:</p>
                <input type="text" id="bankname" name="">
            </div>

            <div class="item">
                <p>Branch:</p>
                <input type="text" id="branchname" name="">
            </div>

            <div class="item">
                <p>IFSC Code:</p>
                <input type="text" id="ifsc" name="">
            </div>

            <div class="item">
                <p>Login ID:</p>
                <input type="text" id="loginid" name="">
            </div>

            <div class="item">
                <p>Password:</p>
                <input type="text" id="password" name="" value=''>
            </div>

        </div>
    </div>
</div>
<script src="U_home_app.js"></script>
</body>

</html>