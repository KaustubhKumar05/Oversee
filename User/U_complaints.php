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
                <label for="cat">Category:</label>
                <select id="cat" required>
                    <option value="">Select</option>
                    <option value="Sanitation">Sanitation</option>
                    <option value="Infrastructure">Infrastructure</option>
                    <option value="Misconduct">Misconduct</option>
                    <option value="Other">Other</option>
                </select>
                <br>
                <label for="sub">Subject:</label>
                <input type="text" id="sub" required>
                <br>
                <label for="body">Body:</label>
                <br>
                <textarea id="body" required></textarea>
                <br>
                <button type="submit" id="newBtn">Submit</button>
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
                        <tr id="comp-1-">
                            <td id="comp-1-Compid">001837</td>
                            <td id="comp-1-Cat">Infrastructure</td>
                            <td id="comp-1-Sub">Slow internet</td>
                            <td id="comp-1-Date">10-10-2020</td>
                            <td id="comp-1-Time">23:40</td>
                            <td id="comp-1-Status">Pending</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="U_complaint_app.js"></script>
</body>

</html>