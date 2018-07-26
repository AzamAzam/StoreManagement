<?php session_start();
require 'nav.php';
?>
<h1>Welcome <?php echo $_SESSION['user']['name']?></h1>
