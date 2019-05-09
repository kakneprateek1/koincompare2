<?php
require 'config.php';
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Webslesson Tutorial | JSON - Dynamic Dependent Dropdown List using Jquery and Ajax</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="dropdown.js"></script>
    </head>
    <body>
        <br /><br />
        <form method="post" action="dropdown.php">
            <div class="container" style="width:600px;">

                <select name="exchange" id="exchange" class="form-control input-lg">
                    <option value="">Select exchange</option>
                </select>
                <br />
                <select name="coin" id="coin" class="form-control input-lg">
                    <option value="">Select coin</option>
                </select>
                <br />
                <input type="text" name="qty" class="form-control input-lg">
                <br />

                <input name="submit_btn" type="submit" value="submit" >
            </div>
        </form>

        <?php
        if (isset($_POST['submit_btn'])) {   
            
            $uname = $_POST['coin'];
            $coin= $_POST['coin'];
            $exchange= $_POST['exchange'];
            $qty=$_POST['qty'];
            $query = "update $exchange set $coin=$qty where username='kakne'";
            $query_run = mysqli_query($con, $query);
            
                 
        }
        ?>

    </body>
</html>

<script>
    
</script>

