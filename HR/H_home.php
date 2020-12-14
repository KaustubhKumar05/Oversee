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
    <link rel="stylesheet" href="H_home_style.css">
    <title>Employee Database</title>
</head>

<body>
<div class="container">
    <div class="panel">
        <div class="close">
            <i class="fas fa-angle-double-left fa-4x" id="closeBtn"></i>
        </div>
        <div class="option">
            <a href="H_home.html">Employees</a>
        </div>
        <div class="option">
            <a href="H_projects.html">Projects</a>
        </div>
        <div class="option">
            <a href="H_dept.html">Departments</a>
        </div>
        <div class="option">
            <a href="H_complaints.html">Complaints</a>
        </div>
        <div class="option">
            <a href="H_leaves.html">Leaves</a>
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

        <div class="pageTitle">Employee Database</div>

        <div class="add">
            <button id="add">Add <i class="far fa-plus-square"></i></button>
        </div>

        <div class="table">
            <table>
                <tr id="rowZero">
                    <th>Employee ID</th>
                    <th>Name</th>
                    <th>Phone no.</th>
                    <th>Email ID</th>
                    <th>Designation</th>
                    <th>Department</th>
                    <th>Rating</th>
                </tr>
                <tr id="emp-1-">
                    <td id="emp-1-Empid">001</td>
                    <td id="emp-1-Name">Jill</td>
                    <td id="emp-1-Phone">7876354289</td>
                    <td id="emp-1-Email">E19CSE000@bennett.edu.in</td>
                    <td id="emp-1-Desig">Student</td>
                    <td id="emp-1-Dept">CSE</td>
                    <td id="emp-1-Rating">5</td>
                </tr>
                <tr id="emp-2-">
                    <td id="emp-2-Empid">002</td>
                    <td id="emp-2-Name">Jack</td>
                    <td id="emp-2-Phone">7875394289</td>
                    <td id="emp-2-Email">E19CSE999@bennett.edu.in</td>
                    <td id="emp-2-Desig">Student</td>
                    <td id="emp-2-Dept">CSE</td>
                    <td id="emp-2-Rating">2</td>
                </tr>

            </table>
        </div>

        <div class="modal">
            <div class="modal-main">
                <p>Employee details</p>
                <hr>
                <div class="scroll-area">
                    <div class="empid modal-details">
                        <p>Employee ID:</p>
                        <input type="text" name="empid" id="empid">
                    </div>

                    <div class="name modal-details">
                        <p>Full name:</p>
                        <input type="text" name="name" id="name">
                    </div>

                    <div class="phone modal-details">
                        <p>Phone no:</p>
                        <input type="number" name="phone" id="phone">
                    </div>

                    <div class="email modal-details">
                        <p>Email:</p>
                        <input type="text" name="email" id="email">
                    </div>

                    <div class="desig modal-details">
                        <p>Designation:</p>
                        <input type="text" name="desig" id="desig">
                    </div>

                    <div class="dept modal-details">
                        <p>Department:</p>
                        <input type="text" name="dept" id="dept">
                    </div>

                    <div class=" modal-details">
                        <p>Rating:</p>
                        <input type="number" name="rating" id="rating">
                    </div>

                    <div class="dept modal-details">
                        <p>Projects completed:</p>
                        <input type="text" name="projcount" id="projcount">
                    </div>

                    <div class=" modal-details">
                        <p>DOB:</p>
                        <input type="text" name="DOB" id="DOB">
                    </div>

                    <div class=" modal-details">
                        <p>Address:</p>
                        <input type="text" name="address" id="address">
                    </div>

                    <div class=" modal-details">
                        <p>Aadhar no:</p>
                        <input type="text" name="aadhar" id="aadhar">
                    </div>

                    <div class=" modal-details">
                        <p>Bank name:</p>
                        <input type="text" name="bankname" id="bankname">
                    </div>

                    <div class=" modal-details">
                        <p>Account holder's name:</p>
                        <input type="text" name="accname" id="accname">
                    </div>

                    <div class=" modal-details">
                        <p>Account no:</p>
                        <input type="number" name="accno" id="accno">
                    </div>

                    <div class=" modal-details">
                        <p>IFSC code:</p>
                        <input type="text" name="ifsc" id="ifsc">
                    </div>

                    <div class=" modal-details">
                        <p>Branch name:</p>
                        <input type="text" name="bname" id="bname">
                    </div>

                    <div class=" modal-details">
                        <p>Salary:</p>
                        <input type="number" name="sal" id="sal">
                    </div>

                    <div class=" modal-details">
                        <p>Login ID:</p>
                        <input type="text" name="loginid" id="loginid">
                    </div>

                    <div class=" modal-details">
                        <p>Password:</p>
                        <input type="text" name="loginpwd" id="loginpwd">
                    </div>
                </div>


                <div class="modal-btn">
                    <button id="closeModal">Close</button>
                    <button id ="addUpdate">Update</button>
                    <button id ="remove">Remove</button>
                </div>

            </div>
        </div>
    </div>
</div>
<script src="H_home_app.js"></script>
</body>

</html>