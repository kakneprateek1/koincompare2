<?php

require 'config.php';
session_start();
?>
<?php

$exchange = $_POST['exchange'];
$coin= $_POST['coin'];
$qty = $_POST['qty'];
$query = "update $exchange set $coin=$qty where username='kakne'";
$query_run = mysqli_query($con, $query);
echo "$exchange $coin";
?>