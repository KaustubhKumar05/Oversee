<?php 
session_start();
if(!isset($_SESSION['login_user']))
    header('Location: /');
    
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
    $que = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * from Profile where EmployeeID='".$_SESSION["empID"]."';"));


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
            <div class="option">
                <a href="U_projects.php"> Projects </a>
            </div>

            <div class="option">
                <a href="U_complaints.php">Complaints</a>
            </div>
            <div class="option">
                <a href="U_leaves.php">Leaves</a>
            </div>
            <div class="option signout" id="SIGNOUT">
                <a href="../php_script/signout.php"> Sign Out</a>
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
                    <?php echo             "<input type='text' id='name' value = '" . $que["First_name"] ." ".$que["Middle_name"]." ".$que["Last_name"]." ' readonly>";   ?>

                </div>

                <div class="item">
                    <p>Employee ID:</p>
                    <?php echo             "<input type='text' id='empid' value = '" . $que["EmployeeID"] . "' readonly>";   ?>

                </div>

                <div class="item">
                    <p>Mobile no:</p>
                    <!-- <input type="text" id="mobileno" name=""> -->
                    <?php echo             "<input type='text' id='mobileno' value = '" . $que["Mobile_no"] . "' readonly>";   ?>
                </div>

                <div class="item">
                    <p>Email ID:</p>
                    <!-- <input type="text" id="emailid" name=""> -->
                    <?php echo             "<input type='text' id='emailid' value = '" . $que["email"] . "' readonly>";   ?>
                </div>

                <div class="item">
                    <p>Designation:</p>
                    <!-- <input type="text" id="design" name=""> -->
                    <?php echo             "<input type='text' id='design' value = '" . $que["Designation_name"] . "' readonly>";   ?>

                </div>

                <div class="item">
                    <p>Department: </p>
                    <!-- <input type="text" id="dept" name=""> -->
                    <?php echo             "<input type='text' id='dept' value = '" . $que["Dept_name"] . "' readonly>";   ?>

                </div>

                <div class="item">
                    <p>Rating:</p>
                    <!-- <input type="text" id="rating" name=""> -->
                    <?php echo             "<input type='text' id='rating' value = '" . $que["RATING"] . "' readonly>";   ?>

                </div>

                <div class="item">
                    <p>Aadhar no:</p>
                    <!-- <input type="text" id="aadhar" name=""> -->
                    <?php echo             "<input type='text' id='aadhar' value = '" . $que["Aadhar_no"] . "' readonly>";   ?>

                </div>

                <div class="item">
                    <p>Address:</p>
                    <!-- <input type="text" id="address" name=""> -->
                    <?php echo             "<input type='text' id='address' value = '" . $que["Address_House_no"] . "' readonly>";   ?>

                </div>

                <div class="item">
                    <p>Bank name:</p>
                    <!-- <input type="text" id="bankname" name=""> -->
                    <?php echo             "<input type='text' id='bankname' value = '" . $que["Bank_Name"] . "' readonly>";   ?>

                </div>

                <div class="item">
                    <p>Branch:</p>
                    <!-- <input type="text" id="branchname" name=""> -->
                    <?php echo             "<input type='text' id='branchname' value = '" . $que["Branch"] . "' readonly>";   ?>

                </div>

                <div class="item">
                    <p>IFSC Code:</p>
                    <!-- <input type="text" id="ifsc" name=""> -->
                    <?php echo             "<input type='text' id='ifsc' value = '" . $que["IFSC"] . "' readonly>";   ?>

                </div>

                <div class="item">
                    <p>Login ID:</p>
                    <!-- <input type="text" id="loginid" name=""> -->
                    <?php echo             "<input type='text' id='loginid' value = '" . $que["LoginID"] . "' readonly>";   ?>

                </div>

            </div>
        </div>
    </div>
    <script src="U_home_app.js"></script>
</body>

</html>