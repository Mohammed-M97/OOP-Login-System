<?php
session_start();
?>

<h1>hello</h1>
<?php
if (isset($_SESSION['userid']))
{
   ?>
   <ul>
    <li><a href=""><?php echo $_SESSION['useruid'] ?></a></li>
    <li><a href="includes/logout.inc.php">Logout</a></li>
   
   <?php
}

