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
    <link rel="stylesheet" href="U_leaves_style.css">
    <title>Leaves</title>
</head>

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
                    <i class="fas fa-bars fa-4x" id="menuBtn"></i>
                    <p id="title">Oversee</p>
                    <p id="space"></p>
                </div>
            </div>
            <div class="pageTitle">Apply for leave</div>
            <div class="new">
                <label for="cat">Category:</label>
                <select id="cat" required>
                    <option value="">Select</option>
                    <option value="Paid">Paid</option>
                    <option value="Unpaid">Unpaid</option>
                    <option value="Maternity">Maternity</option>
                    <option value="Paternity">Paternity</option>
                    <option value="Compensatory">Compensatory</option>
                </select>
                <br><br>
                <label for="reason">Reason:</label>
                <input type="text" id="reason" required>
                <br><br>
                <div class="duration">
                    <label for="from">From:</label>
                    <input type="date" id="from">
                    &nbsp; &nbsp; &nbsp;
                    <label for="to">To:</label>
                    <input type="date" id="to">
                </div>

                <br>
                <button type="submit" id="newBtn">Submit</button>
            </div>
            <div class="existing">
                <div class="pageTitle">Applied leaves</div>
                <div class="table">
                    <table id="table">
                        <tr id="rowZero">
                            <th>Leave ID</th>
                            <th>Category</th>
                            <th>From</th>
                            <th>To</th>
                            <th>Duration</th>
                            <th>Status</th>
                        </tr>
                        <tr id="leave-1-">
                            <td id="leave-1-Leaveid">001837</td>
                            <td id="leave-1-Cat">Paid</td>
                            <td id="leave-1-From">05-10-2020</td>
                            <td id="leave-1-To">10-10-2020</td>
                            <td id="leave-1-Duration">2</td>
                            <td id="leave-1-Status">Pending</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="U_leaves_app.js"></script>
</body>

</html>