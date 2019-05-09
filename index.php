
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    session_start();
    require 'config.php';
?>
<!DOCTYPE HTML>
<html>  
<body>

<form action="index.php" method="post">
UserName: <input type="text" name="uname"><br>
Password: <input type="password" name="pass"><br>
<input name="submit_btn" type="button" value='Login'>
<input type="button" value="register">
</form>

    <?php
        if(isset($_POST['submit_btn'])){
            echo"<script type='text/javascript'>alert('user registered')</script>";
            $username=$_POST['uname'];
            $password=$_POST['pass'];
            $query="select * from userdetails where username='$username' AND password='$password '";
            $query_run= mysqli_query($con,$query);
            $_SESSION['username']=$username;
            
            header('location:home.php');
        }
    ?>
</body>
</html>