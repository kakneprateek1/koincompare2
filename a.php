<?php
require 'config.php';
$uname = 'kakne';

$pass = 'prateek';
session_start();
?>
<body>

    <form method="post" action="a.php">
        Name<input type="text" name="username"><br>
        Password<input type="password" name="password"><br>
        <input name="submit_btn" type="submit" value="submit">
        <a href="register.php"><input name="register_btn" type="button" value="register"></a>
    </form>
    <?php
    if (isset($_POST['submit_btn'])) {
        $var = 'abcd';
        $_SESSION['var'] = $var;
        $uname = $_POST['username'];
        $pass=$_POST['password'];
        $query = "select * from userdetails  where username='$uname' and password='$pass'";
        $query_run = mysqli_query($con, $query);       
        if (mysqli_num_rows($query_run) == 1) {
            $_SESSION['username']=$uname;
            header('location:home.php');
            
        }
        else{
            echo '<script type="text/javascript">alert("wrong details")</script>';
        }
    }
    ?>


</body>