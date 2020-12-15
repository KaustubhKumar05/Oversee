<?php

$_POST['leave'];

$que = mysqli_fetch_all(mysqli_query("SELECT *, datediff(Leave_end,Leave_from) as duration from Leaves where LeaveID = '".$_POST['leave']."';"));

$json = '{"leaveID":"'.$que['LeaveID'].'",
    "From":"'.$que['Leave_from'].'",
    "Type":"'.'Paid'.'",
    "Status":"'.$que['Status'].'",
    "Duration":"'.$que['duration'].'",
    "To":"'.$que['Leave_end'].'"},';


echo $json;

?>