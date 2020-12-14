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
    <link rel="stylesheet" href="U_projects_style.css">
    <title>Projects</title>
</head>
<?php
    include "../php_script/dbconnect.php";
    // $que = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * from Projects where EmployeeID='".$_SESSION["empID"]."';"));
    date_default_timezone_set("Asia/Kolkata");
    $date=date("Y/m/d");
    $time=date("h:i:sa");
    $upcoming= mysqli_fetch_assoc(mysqli_query($conn,"SELECT * from upcoming_view where EmployeeID='".$_SESSION["empID"]."';"));
    $completed= mysqli_fetch_assoc(mysqli_query($conn,"SELECT * from completed_view where EmployeeID='".$_SESSION["empID"]."';"));
    $ongoing= mysqli_fetch_assoc(mysqli_query($conn,"SELECT * from ongoing_view where EmployeeID='".$_SESSION["empID"]."';"));
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
            <div class="option signout">
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

            <div class="selection">
                <h2 class="choice selected" id="ongoing">Ongoing</h2>
                <h2 class="choice" id="upcoming">Upcoming</h2>
                <h2 class="choice" id="completed">Completed</h2>
            </div>

            <div class="listview show" id="ongoingView">
                <div class="item">
                    <div class="parallel">
                        <div class="subpart">
                            Project ID:
                            <?php echo             "<input type='text' value='" .  $ongoing["ProjectID"]   . "' readonly>";   ?>
                        </div>
                        <div class="subpart">
                            Priority:
                            <?php echo             "<input type='text' value='" . $ongoing["Priority"] . "' readonly>";   ?>

                        </div>
                        
                    </div>

                    <div class="parallel">
                        <div class="subpart">
                            Project Name:
                            <?php echo             "<input type='text' value='" . $ongoing["Project_name"] . "' readonly>";   ?>

                        </div>
                        <div class="subpart">
                            Project Manager:
                            <?php echo             "<input type='text' value='" . $ongoing["First_name"] . "' readonly>";   ?>

                        </div>
                    </div>

                    <div class="parallel">
                        <div class="subpart">
                            Start Date:
                            <?php echo             "<input type='text' value='" . $ongoing["Start_date"] . "' readonly>";   ?>

                        </div>
                        <div class="subpart">
                            End Date:
                           <?php echo             "<input type='text' value='" . $ongoing["End_date"] . "' readonly>";   ?>

                        </div>
                    </div>

                    <!-- <div class="parallel">
                        <div class="subpart">
                            Rating:
                            <?php echo             "<input type='text' value='" . $ongoing["Rating"] . "' readonly>";   ?>

                        </div>
                        <div class="subpart">
                            Status:
                            <?php echo             "<input type='text' value='" . $ongoing["ProjectID"] . "' readonly>";   ?>

                        </div>
                    </div> -->

                </div>
            </div>
            <div class="listview" id="upcomingView">
            <div class="item">
                    <div class="parallel">
                        <div class="subpart">
                            Project ID:
                            <?php echo             "<input type='text' value='" . $upcoming["ProjectID"] . "' readonly>";   ?>
                        </div>
                        <div class="subpart">
                            Priority:
                            <?php echo             "<input type='text' value='" . $upcoming["Priority"] . "' readonly>";   ?>

                        </div>
                        
                    </div>

                    <div class="parallel">
                        <div class="subpart">
                            Project Name:
                            <?php echo             "<input type='text' value='" . $upcoming["Project_name"] . "' readonly>";   ?>

                        </div>
                        <div class="subpart">
                            Project Manager:
                            <?php echo             "<input type='text' value='" . $upcoming["First_name"] . "' readonly>";   ?>

                        </div>
                    </div>

                    <div class="parallel">
                        <div class="subpart">
                            Start Date:
                            <?php echo             "<input type='text' value='" . $upcoming["Start_date"] . "' readonly>";   ?>

                        </div>
                        <div class="subpart">
                            End Date:
                           <?php echo             "<input type='text' value='" . $upcoming["End_date"] . "' readonly>";   ?>

                        </div>
                    </div>

                   <!--  <div class="parallel">
                        <div class="subpart">
                            Rating:
                            <?php echo             "<input type='text' value='" . $upcoming["Rating"] . "' readonly>";   ?>

                        </div>
                        <div class="subpart">
                            Status:
                            <?php echo             "<input type='text' value='" . $upcoming["ProjectID"] . "' readonly>";   ?>

                        </div>
                    </div> -->

                </div>
               
                

            </div>
            <div class="listview" id="completedView">
                
            <div class="item">
                    <div class="parallel">
                        <div class="subpart">
                            Project ID:
                            <?php echo             "<input type='text' value='" .  $completed["ProjectID"] . "' readonly>";   ?>
                        </div>
                        <div class="subpart">
                            Priority:
                            <?php echo             "<input type='text' value='" . $completed["Priority"] . "' readonly>";   ?>

                        </div>
                        
                    </div>

                    <div class="parallel">
                        <div class="subpart">
                            Project Name:
                            <?php echo             "<input type='text' value='" . $completed["Project_name"] . "' readonly>";   ?>

                        </div>
                        <div class="subpart">
                            Project Manager:
                            <?php echo             "<input type='text' value='" . $completed["First_name"] . "' readonly>";   ?>

                        </div>
                    </div>

                    <div class="parallel">
                        <div class="subpart">
                            Start Date:
                            <?php echo             "<input type='text' value='" . $completed["Start_date"] . "' readonly>";   ?>

                        </div>
                        <div class="subpart">
                            End Date:
                           <?php echo             "<input type='text' value='" . $completed["End_date"] . "' readonly>";   ?>

                        </div>
                    </div>

                    <!-- <div class="parallel">
                        <div class="subpart">
                            Rating:
                            <?php echo             "<input type='text' value='" . $completed["Rating"] . "' readonly>";   ?>

                        </div>
                        <div class="subpart">
                            Status:
                            <?php echo             "<input type='text' value='" . $completed["ProjectID"] . "' readonly>";   ?>

                        </div>
                    </div> -->

                </div>
            </div>
        </div>
        <script src="U_projects_app.js"></script>
</body>

</html>