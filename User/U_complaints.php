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
    <link rel="stylesheet" href="U_complaints_style.css">
    <title>Complaints</title>
</head>
<?php
    include "../php_script/dbconnect.php";
    $que = mysqli_fetch_all(mysqli_query($conn,"SELECT * from emp_complaintsview where EmployeeID='".$_SESSION["empID"]."';"),MYSQLI_ASSOC);
  
    if(isset($_POST['cat'])){
    
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

<body>
    <div class="container">
        <div class="panel">
            <div class="close">
                <i class="fas fa-angle-double-left fa-4x" id="closeBtn"></i>
            </div>
            <div class="option">
                <a href="U_home.php">Profile</a>
            </div>
            <div class="option"><a href="U_projects.php"> Projects </a>
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
                    <i class="fas fa-bars fa-4x" id="menuBtn"></i>
                    <p id="title">Oversee</p>
                    <p id="space"></p>
                </div>
            </div>
            <div class="pageTitle">New complaint</div>
            <div class="new">
                <form method="post">
                    <label for="cat">Category:</label>
                    <select id="cat" required>
                        <option name="cat" value="">Select</option>
                        <option name="cat" value="Sanitation">Sanitation</option>
                        <option name="cat" value="Infrastructure">Infrastructure</option>
                        <option name="cat" value="Misconduct">Misconduct</option>
                        <option name="cat" value="Other">Other</option>
                    </select>
                    <br>
                    <label for="sub">Subject:</label>
                    <input type="text" id="sub" name="sub" value="" required>
                    <br>
                    <label for="body">Body:</label>
                    <br>
                    <textarea id="body" name="body" value="" required></textarea>
                    <br>
                    <button type="submit" id="newBtn">Submit</button>
                </form>
            </div>
            <div class="existing">
                <div class="pageTitle">Registered complaints</div>
                <div class="table">
                    <table id="table">
                        <tr id="rowZero">
                            <th>Complaint ID</th>
                            <th>Category</th>
                            <th>Subject</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Status</th>
                        </tr>

                        <?php
                            $id = 1;

                            foreach($que as $que=>$row){

                                echo "<tr id=\"comp-".$id."\">
                                <td id=\"comp-".$id."-Compid\">".$row["CompID"]."</td>
                                <td id=\"comp-".$id."-Cat\">".$row["Category"]."</td>
                                <td id=\"comp-".$id."-Sub\">".$row["Subject"]."</td>
                                <td id=\"comp-".$id."-Date\">".$row["date"]."</td>
                                <td id=\"comp-".$id."-Time\">".$row["time"]."</td>
                                <td id=\"comp-".$id."-Status\">".$row["Comp_status"]."</td>
                            </tr>";


                                $id++;
                            }

                        ?>



                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="U_complaint_app.js"></script>
</body>

</html>