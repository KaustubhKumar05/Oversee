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
    <link rel="stylesheet" href="H_projects_style.css">
    <title>Project Database</title>
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

        <div class="pageTitle">Project Database</div>

        <div class="add">
            <button id="add">Add <i class="far fa-plus-square"></i></button>
        </div>


        <div class="table">
            <table>
                <tr id="rowZero">
                    <th>Project ID</th>
                    <th>Project Name</th>
                    <th>Manager ID</th>
                    <th>Department</th>
                    <th>Priority Level</th>
                    <th>Status</th>
                </tr>
                <tr id="proj-1-">
                    <td id="proj-1-Projid">001</td>
                    <td id="proj-1-Name">Oversee</td>
                    <td id="proj-1-ManID">E19CSE999</td>
                    <td id="proj-1-Dept">D5</td>
                    <td id="proj-1-Priority">High</td>
                    <td id="proj-1-Status">In progress</td>
                </tr>
                <tr id="proj-2-">
                    <td id="proj-2-Projid">002</td>
                    <td id="proj-2-Name">SmartSurf</td>
                    <td id="proj-2-ManID">E19CSE000</td>
                    <td id="proj-2-Dept">D10</td>
                    <td id="proj-2-Priority">High</td>
                    <td id="proj-2-Status">Complete</td>
                </tr>
            </table>
        </div>

        <div class="modal">
            <div class="modal-main">
                <p>Project details</p>
                <hr>
                <div class="modal-table">
                    <table>
                        <tr id="rowZero">
                            <th>Project ID</th>
                            <th>Project Name</th>
                            <th>Start Date</th>
                            <th>End date</th>
                            <th>Estimated duration</th>
                            <th>Budget</th>
                            <th>Expenditure</th>
                        </tr>
                        <tr id="proj-1-">
                            <td id="proj-1-Projid">001</td>
                            <td id="proj-1-Name">Oversee</td>
                            <td id="proj-1-Start">10-10-2020</td>
                            <td id="proj-1-End">10-02-2021</td>
                            <td id="proj-1-Estimate">4 months</td>
                            <td id="proj-1-Budget">150,000</td>
                            <td id="proj-1-Expen">200,000</td>
                        </tr>
                        <tr id="proj-2-">
                            <td id="proj-2-Projid">002</td>
                            <td id="proj-2-Name">SmartSurf</td>
                            <td id="proj-2-Start">10-08-2020</td>
                            <td id="proj-2-End">10-10-2020</td>
                            <td id="proj-2-Estimate">2 months</td>
                            <td id="proj-2-Budget">350,000</td>
                            <td id="proj-2-Expen">250,000</td>
                        </tr>
                    </table>
                </div>
                <p>Team members</p>
                <hr>
                <div class="modal-table">
                    <table>
                        <tr id="rowZero">
                            <th>Employee ID</th>
                            <th>Employee Name</th>
                        </tr>
                        <tr id="rowOne">
                            <td id="proj-1-Empid">E19CSE999</td>
                            <td id="proj-1-Name">QWERTY</td>
                        </tr>
                        <tr id="rowTwo">
                            <td id="proj-2-Empid">E19CSE000</td>
                            <td id="proj-2-Name">ASDF</td>
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
<script src="H_projects_app.js"></script>
</body>