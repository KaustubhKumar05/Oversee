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
    <link rel="stylesheet" href="H_dept_style.css">
    <title>Department Database</title>
</head>

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

        <div class="pageTitle">Department Database</div>

        <div class="add">
            <button id="add">Add <i class="far fa-plus-square"></i></button>
        </div>


        <div class="table">
            <table>
                <tr id="rowZero">
                    <th>Department ID</th>
                    <th>Department Name</th>
                    <th>HOD ID</th>
                    <th>Employee count</th>
                </tr>
                <tr id="dept-1-">
                    <td id="dept-1-Deptid">001</td>
                    <td id="dept-1-Name">IT</td>
                    <td id="dept-1-HODID">E19CSE999</td>
                    <td id="dept-1-Empcount">25</td>
                </tr>
                <tr id="dept-2-">
                    <td id="dept-2-Deptid">001</td>
                    <td id="dept-2-Name">IT</td>
                    <td id="dept-2-HODID">E19CSE999</td>
                    <td id="dept-2-Empcount">25</td>
                </tr>
            </table>
        </div>

        <div class="modal">
            <div class="modal-main">
                <p>Department details</p>
                <hr>
                <div class="modal-table">
                    <table>
                        <tr id="rowZero">
                            <th>Department ID</th>
                            <th>Department Name</th>
                            <th>HOD ID</th>
                            <th>Employee count</th>
                        </tr>
                        <tr id="dept-1-">
                            <td id="dept-1-Deptid">001</td>
                            <td id="dept-1-Name">IT</td>
                            <td id="dept-1-HODID">E19CSE999</td>
                            <td id="dept-1-Empcount">25</td>
                        </tr>
                        <tr id="dept-2-">
                            <td id="dept-2-Deptid">001</td>
                            <td id="dept-2-Name">IT</td>
                            <td id="dept-2-HODID">E19CSE999</td>
                            <td id="dept-2-Empcount">25</td>
                        </tr>
                    </table>
                </div>
                <div class="modal-btn">
                    <button id="closeModal">Close</button>
                    <button id="addUpdate">Update</button>
                    <button id="remove">Remove</button>
                </div>

            </div>
        </div>
    </div>
</div>
<script src="H_dept_app.js"></script>
</body>