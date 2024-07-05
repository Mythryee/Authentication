<?php
    include "Components/_navbar.php";

?>
<?php
    session_start();
    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
        header("location:login.php");
        exit;
    }
?>
<h1>Welcome <?php echo $_SESSION['mail'] ?></h1>