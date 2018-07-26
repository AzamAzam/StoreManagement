<?php
require 'conn.php';

function checkuser($uname)
{
    global $conn;

    $sql = "SELECT *FROM users WHERE name='" . $uname . "'";
    $result = mysqli_query($conn, $sql);
    $recordsFound = mysqli_num_rows($result);
    if ($recordsFound > 0) {   // record  verfied
        $row = mysqli_fetch_assoc($result);
        return $row;
    } else return false;
}

?>