<?php

include "dbconnect.php";

$leave = $_POST['leave'];
$result = $_POST['result'];

mysqli_query($conn,"UPDATE leaves set status = '".$result."' where LeaveID = '".$leave."';")


?>