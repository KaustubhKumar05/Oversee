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
    <link rel="stylesheet" href="login_style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Log In</title>
</head>
<?php include 'php_script/dbconnect.php';
 if ($conn){
     echo "connected to database";
 }
 else
 echo "Error";

?>
<body>
<div class="container">
    <div class="title">
        <p>Oversee</p>
    </div>
    <div class="main">
        <div class="fields">
            <input type="text" placeholder="Login ID" id="id" required>
            <input type="password" placeholder="Password" id="pwd" required>
        </div>

        <div class="choice">
            <input type="radio" id="HR" name="type" value="HR">
            <label for="HR">HR</label><br>
            <input type="radio" id="User" name="type" value="User">
            <label for="User">User</label><br>
        </div>
        <a id="redirectTo" href="">
            <button id="loginBtn">Log In</button>
        </a>
    </div>
</div>
<script src="login_app.js"></script>
</body>

</html>