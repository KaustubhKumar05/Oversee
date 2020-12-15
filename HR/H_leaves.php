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
    <link rel="stylesheet" href="H_leaves_style.css">
    <title>Leave applications</title>
</head>
<?php
    include "../php_script/dbconnect.php";
    
    $que = mysqli_fetch_all(mysqli_query($conn,"SELECT *, DATEDIFF(Leave_end,Leave_from) as duration from leaves;"),MYSQLI_ASSOC);
    
?>
<body>
<div class="container">
<div class="panel">
        <div class="close">
            <i class="fas fa-angle-double-left fa-4x" id="closeBtn"></i>
        </div>
        <div class="option">
            <a href="H_home.php">Employees</a>
        </div>
        <div class="option">
            <a href="H_projects.php">Projects</a>
        </div>
        <div class="option">
            <a href="H_dept.php">Departments</a>
        </div>
        <div class="option">
            <a href="H_complaints.php">Complaints</a>
        </div>
        <div class="option">
            <a href="H_leaves.php">Leaves</a>
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

        <div class="pageTitle">Leaves</div>

        <div class="table">
            <table>
                <tr id="rowZero">
                    <th>Leave ID</th>
                    <th>Category</th>
                    <th>From date</th>
                    <th>To date</th>
                    <th>Duration</th>
                    <th>Status</th>
                    </tr>
                    <?php
                            foreach($que as $que=>$row){
                                echo "<tr id=\"lea-".$row["LeaveID"]."\">
                                <td id=\"lea-".$row["LeaveID"]."-Leaveid\">".$row["LeaveID"]."</td>
                                <td id=\"lea-".$row["LeaveID"]."-Cat\">".$row["Leave_type"]."</td>
                                <td id=\"lea-".$row["LeaveID"]."-From\">".$row["Leave_from"]."</td>
                                <td id=\"lea-".$row["LeaveID"]."-To\">".$row["Leave_end"]."</td>
                                <td id=\"lea-".$row["LeaveID"]."-Dura\">".$row["duration"]."</td>
                                <td id=\"lea-".$row["LeaveID"]."-Stat\">".$row["Status"]."</td>
                            </tr>";
                            }

                        ?>
                
            </table>
        </div>

        <div class="modal">
            <div class="modal-main">
                <p>Leave details</p>
                <hr>
                <div class="empid modal-details">
                    <p>Leave ID:</p>
                    <input type="number" name="leaveid" id="leaveid">
                </div>

                <div class="modal-details">
                    <p>Category:</p>
                    <input type="text" name="category" id="category">
                </div>

                <div class="email modal-details">
                    <p>From:</p>
                    <input type="text" name="from" id="from">
                </div>

                <div class="email modal-details">
                    <p>To:</p>
                    <input type="text" name="to" id="to">
                </div>

                <div class="email modal-details">
                    <p>Duration:</p>
                    <input type="text" name="dura" id="dura">
                </div>

                <div class="email modal-details">
                    <p>Status:</p>
                    <input type="text" name="status" id="status">
                </div>

                <div class="modal-btn">
                    <button id="closeModal">Close</button>
                    <button id = "accept_leave">Accept</button>
                    <button id = "decline_leave">Decline</button>
                </div>

            </div>
        </div>
    </div>
</div>
<script src="H_leaves_app.js"></script>
</body>

</html>