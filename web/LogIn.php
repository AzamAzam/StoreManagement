<?php

require 'api.php';
$errormsg = "";
$uname = "";
if (isset($_REQUEST["loginbtn"]) == true) {
    $uname = $_REQUEST["userName"];
    $pswd = $_REQUEST["password"];

    $user = checkuser($uname);
    if ($user == false) {
        $errormsg = "Username or password is incorrect";
    } else if ($user['password'] == $pswd) {
        session_start();
        $user['password'] = '';
        $_SESSION["user"] = $user;
        header('location:welcome.php');
    } else     $errormsg = "Username or password is incorrect";


}


?>
<html>
<header>
    <title>Dollar Industries (Pvt.) Ltd</title>

</header>
<body>
<div>
    <form method="post">
        <label>Username:</label><br>
        <input type="text" placeholder="Enter user name" value="<?php echo $uname ?>" name="userName"><br>
        <label>Password:</label><br>
        <input type="password" placeholder="Enter user name" name="password"><br>
        <input type="submit" name="loginbtn" value="Login"><br>

        <span style="color: red"><?php echo $errormsg ?></span><br>
    </form>
</div>
</body>
</html>
