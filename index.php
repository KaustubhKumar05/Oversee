<?php
    session_start();
    if(isset($_SESSION['type']))
    {   
        if($_SESSION['type']=="HR")
            header('location: HR\H_home.php');
        else
            header('location: User\U_home.php');
    }
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
    <link rel="stylesheet" href="login_style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Log In</title>
</head>
<?php include 'php_script/dbconnect.php';
    if ($conn)
        echo "connected to database";
    else
        echo "Error";
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        // username and password sent from form 
        
        $myusername = mysqli_real_escape_string($conn,$_POST['loginId']);
        $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
        $_SESSION['login_user'] = $myusername;
        
        $answer = $_POST['type']; 
        
        $_SESSION['type']=$answer;
        $sql = "SELECT EmployeeID FROM employee where emp='$answer' and employeeID=(SELECT EmployeeID FROM credentials WHERE LoginID = '$myusername' and Password = '$mypassword');";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $_SESSION['empID']=$row['EmployeeID'];
        
        $count = mysqli_num_rows($result);
        
        // If result matched $myusername and $mypassword, table row must be 1 row
          echo $count;
        if($count == 1) {
         
           
          //demotry 
            
             if ($answer == "HR")
                 header("location: HR\H_home.php");
           else 
                header("location: User\U_home.php"); 
            
        }else {
           $error = "Your Login Name or Password is invalid";
        }
     }


?>

<body>
    <div class="container">
        <div class="title">
            <p>Oversee</p>
        </div>

        <div class="main">
            <form method="post">
                <div class="fields">
                    <input type="text" placeholder="Login ID" id="id" name="loginId" required>
                    <input type="password" placeholder="Password" id="pwd" name="password" required>
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

            </form>
        </div>
    </div>
</body>

</html>