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
    <link rel="stylesheet" href="H_complaints_style.css">
    <title>Received complaints</title>
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
            <a href="../index.html">Sign Out</a>
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

        <div class="pageTitle">Complaints</div>

        <div class="table">
            <table>
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
                <tr id="comp-2-">
                    <td id="comp-2-Compid">001297</td>
                    <td id="comp-2-Cat">Sanitation</td>
                    <td id="comp-2-Sub">Dirty floor</td>
                    <td id="comp-2-Date">08-10-2020</td>
                    <td id="comp-2-Time">13:40</td>
                    <td id="comp-1-Status">Pending</td>
                </tr>
            </table>
        </div>

        <div class="modal">
            <div class="modal-main">
                <p>Complaint details</p>
                <hr>
                <div class="empid modal-details">
                    <p>Employee ID:</p>
                    <input type="number" name="empid" id="empid">
                </div>

                <div class="modal-details">
                    <p>Date Time:</p>
                    <input type="text" name="datetime" id="datetime">
                </div>

                <div class="empid modal-details">
                    <p>Complaint ID:</p>
                    <input type="number" name="compid" id="compid">
                </div>

                <div class="phone modal-details">
                    <p>Category:</p>
                    <input type="text" name="category" id="category">
                </div>

                <div class="email modal-details">
                    <p>Subject:</p>
                    <input type="text" name="subject" id="subject">
                </div>

                <div class="desig modal-details">
                    <p>Complaint:</p>
                    <textarea readonly id="comp" name="comp" rows="4" cols="44">The main body of the complaint should be displayed here.</textarea>
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
<script src="H_complaints_app.js"></script>
</body>

</html>