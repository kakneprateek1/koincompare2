<?php
require 'config.php';
?>


<html>
    <body>

        <form action="register.php" method="post">
            UserName<input name="name" type="text" ><br>
            Password<input name="password" type="password"><br>
            <input name="submit_btn" type="submit">
            <a href="a.php"><input type="button" value="Back"></a>
        </form>
        <?php
        if (isset($_POST['submit_btn'])) {
            $uname = $_POST['name'];
            $pass = $_POST['password'];

            $query = "insert into userdetails values('$uname','$pass')";
            $query_run = mysqli_query($con, $query);
            if ($query_run) {
                $bitquery = "insert into bitbns values('$uname','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0')";
                $bitquery_run = mysqli_query($con, $bitquery);
                $cdquery = "insert into coindelta values('$uname','0','0','0','0','0','0','0')";
                $cdquery_run = mysqli_query($con, $cdquery);
                $koquery = "insert into koinex values('$uname','0','0','0','0','0','0','0','0','0','0','0','0','0')";
                $koquery_run = mysqli_query($con, $koquery);
                $zpquery = "insert into zebpay values('$uname','0','0','0','0','0')";
                $zpquery_run = mysqli_query($con, $zpquery);
                echo "<script type='text/javascript'>alert('user registered')</script>";
            }
        }
        ?>
    </body>
</html>

