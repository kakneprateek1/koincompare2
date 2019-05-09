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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="knockout.js"></script>
        <script src="home.js" defer="defer"></script>
    </head>
    <body>
        <br /><br />
        <form method="post" >
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

                <input name="submit_btn" type="button" value="submit" >
            </div>
        </form>
        </br>
        </br>
        </br>
        </br>
    <h3>Koinex</h3>
    <table style="overflow: hidden">
        <tr>
            <th>Coin</th>
            <th>Quantity</th>
            <th>Value</th>
        </tr>
        <tr>
            <td>Bitcoin</td>
            <td id="elt3" data-bind="text:a"></td>
            <td id="elt1" data-bind="text:value1"></td>
        </tr>
        <tr>
            <td>Ripple</td>
            <td id="elt4" data-bind="text:b"></td>
            <td id="elt2" data-bind="text:value"></td>
        </tr>
        <tr>
            <td>Ether</td>
            <td id="ethcount" data-bind="text:ethcount"></td>
            <td id="ethval" data-bind="text:ethval"></td>
        </tr>
        <tr>
            <td>LiteCoin</td>
            <td id="ltccount" data-bind="text:ltccount"></td>
            <td id="ltcval" data-bind="text:ltcval"></td>
        </tr>
        <tr>
            <td>BitcoinCash</td>
            <td id="bchcount" data-bind="text:bchcount"></td>
            <td id="bchval" data-bind="text:bchval"></td>
        </tr>
        <tr>
            <td>OmiseGo</td>
            <td id="omgcount" data-bind="text:omgcount"></td>
            <td id="omgval" data-bind="text:omgval"></td>
        </tr>
        <tr>
            <td>Request</td>
            <td id="rqcount" data-bind="text:rqcount"></td>
            <td id="rqval" data-bind="text:rqval"></td>
        </tr>
        <tr>
            <td>0x(ZRX)</td>
            <td id="zrxcount" data-bind="text:zrxcount"></td>
            <td id="zrxval" data-bind="text:zrxval"></td>
        </tr>
        <tr>
            <td>Golem</td>
            <td id="gntcount" data-bind="text:gntcount"></td>
            <td id="gntval" data-bind="text:gntval"></td>
        </tr>
        <tr>
            <td>BAT</td>
            <td id="batcount" data-bind="text:batcount"></td>
            <td id="batval" data-bind="text:batval"></td>
        </tr>
        <tr>
            <td>Aeternity</td>
            <td id="aecount" data-bind="text:aecount"></td>
            <td id="aeval" data-bind="text:aeval"></td>
        </tr>
        <tr>
            <td>Tron</td>
            <td id="trxcount" data-bind="text:trxcount"></td>
            <td id="trxval" data-bind="text:trxval"></td>
        </tr>
        <tr>
            <td>Stellar</td>
            <td id="xlmcount" data-bind="text:xlmcount"></td>
            <td id="xlmval" data-bind="text:xlmval"></td>
        </tr>
        
       
    </table>
    
    <h3>Bitbns</h3>
    <table style="overflow: hidden">
        <tr>
            <th>Coin</th>
            <th>Quantity</th>
            <th>Value</th>
        </tr>
        <tr>
            <td>Bitcoin</td>
            <td id="bitbtccount" data-bind="text:bitbtccount"></td>
            <td id="bitbtcval" data-bind="text:bitbtcval"></td>
        </tr>
        <tr>
            <td>Ripple</td>
            <td id="bitxrpcount" data-bind="text:bitxrpcount"></td>
            <td id="bitxrpval" data-bind="text:bitxrpval"></td>
        </tr>
        <tr>
            <td>Ether</td>
            <td id="bitethcount" data-bind="text:bitethcount"></td>
            <td id="bitethval" data-bind="text:bitethval"></td>
        </tr>
        <tr>
            <td>LiteCoin</td>
            <td id="bitltccount" data-bind="text:bitltccount"></td>
            <td id="bitltcval" data-bind="text:bitltcval"></td>
        </tr>
        <tr>
            <td>Dash</td>
            <td id="bitdashcount" data-bind="text:bitdashcount"></td>
            <td id="bitdashval" data-bind="text:bitdashval"></td>
        </tr>
        <tr>
            <td>DeepBrainChain(DBC)</td>
            <td id="bitdbccount" data-bind="text:bitdbccount"></td>
            <td id="bitdbcval" data-bind="text:bitdbcval"></td>
        </tr>
        <tr>
            <td>DOGE</td>
            <td id="bitdogcount" data-bind="text:bitdogcount"></td>
            <td id="bitdogval" data-bind="text:bitdogval"></td>
        </tr>
        <tr>
            <td>Gas</td>
            <td id="bitgascount" data-bind="text:bitgascount"></td>
            <td id="bitgasval" data-bind="text:bitgasval"></td>
        </tr>
        <tr>
            <td>Neo</td>
            <td id="bitneocount" data-bind="text:bitneocount"></td>
            <td id="bitneoval" data-bind="text:bitneoval"></td>
        </tr>
        <tr>
            <td>RedPulse</td>
            <td id="bitrpxcount" data-bind="text:bitrpxcount"></td>
            <td id="bitrpxval" data-bind="text:bitrpxval"></td>
        </tr>
        <tr>
            <td>SiaCoin</td>
            <td id="bitsccount" data-bind="text:bitsccount"></td>
            <td id="bitscval" data-bind="text:bitscval"></td>
        </tr>
        <tr>
            <td>Tron</td>
            <td id="bittrxcount" data-bind="text:bittrxcount"></td>
            <td id="bittrxval" data-bind="text:bittrxval"></td>
        </tr>
        <tr>
            <td>Stellar</td>
            <td id="bitxlmcount" data-bind="text:bitxlmcount"></td>
            <td id="bitxlmval" data-bind="text:bitxlmval"></td>
        </tr>
        <tr>
            <td>Monero</td>
            <td id="bitxmrcount" data-bind="text:bitxmrcount"></td>
            <td id="bitxmrval" data-bind="text:bitxmrval"></td>
        </tr>
        <tr>
            <td>BitcoinCash</td>
            <td id="bitbchcount" data-bind="text:bitbchcount"></td>
            <td id="bitbchval" data-bind="text:bitbchval"></td>
        </tr>
    </table>
    <h3>Coindelta</h3>
    <table style="overflow: hidden">
        <tr>
            <th>Coin</th>
            <th>Quantity</th>
            <th>Value</th>
        </tr>
        <tr>
            <td>Bitcoin</td>
            <td id="cdbtccount" data-bind="text:cdbtccount"></td>
            <td id="cdbtcval" data-bind="text:cdbtcval"></td>
        </tr>
        <tr>
            <td>Ripple</td>
            <td id="cdxrpcount" data-bind="text:cdxrpcount"></td>
            <td id="cdxrpval" data-bind="text:cdxrpval"></td>
        </tr>
        <tr>
            <td>Ether</td>
            <td id="cdethcount" data-bind="text:cdethcount"></td>
            <td id="cdethval" data-bind="text:cdethval"></td>
        </tr>
        <tr>
            <td>LiteCoin</td>
            <td id="cdltccount" data-bind="text:cdltccount"></td>
            <td id="cdltcval" data-bind="text:cdltcval"></td>
        </tr>
        <tr>
            <td>BitcoinCash</td>
            <td id="cdbchcount" data-bind="text:cdbchcount"></td>
            <td id="cdbchval" data-bind="text:cdbchval"></td>
        </tr>
        <tr>
            <td>QTUM</td>
            <td id="cdqtumcount" data-bind="text:cdqtumcount"></td>
            <td id="cdqtumval" data-bind="text:cdqtumval"></td>
        </tr>
        <tr>
            <td>OmiseGO</td>
            <td id="cdomgcount" data-bind="text:cdomgcount"></td>
            <td id="cdomgval" data-bind="text:cdomgval"></td>
        </tr>
    </table>
    <h3>Zebpay</h3>
    <table style="overflow: hidden">
        <tr>
            <th>Coin</th>
            <th>Quantity</th>
            <th>Value</th>
        </tr>
        <tr>
            <td>Bitcoin</td>
            <td id="zpbtccount" data-bind="text:zpbtccount"></td>
            <td id="zpbtcval" data-bind="text:zpbtcval"></td>
        </tr>
        <tr>
            <td>Ripple</td>
            <td id="zpxrpcount" data-bind="text:zpxrpcount"></td>
            <td id="zpxrpval" data-bind="text:zpxrpval"></td>
        </tr>
        <tr>
            <td>Ether</td>
            <td id="zpethcount" data-bind="text:zpethcount"></td>
            <td id="zpethval" data-bind="text:zpethval"></td>
        </tr>
        <tr>
            <td>LiteCoin</td>
            <td id="zpltccount" data-bind="text:zpltccount"></td>
            <td id="zpltcval" data-bind="text:zpltcval"></td>
        </tr>
        <tr>
            <td>BitcoinCash</td>
            <td id="zpbchcount" data-bind="text:zpbchcount"></td>
            <td id="zpbchval" data-bind="text:zpbchval"></td>
        </tr>
        
    </table>
    <?php
      
        $username='kakne';
        $query = "select * from koinex where username='$username'";
        $query_run = mysqli_query($con, $query);
        if (mysqli_num_rows($query_run) == 1) {

            while ($rows = mysqli_fetch_array($query_run)) {

                $var1 = $rows['btc'];
                $var1 = (int) $var1;
                $_SESSION['var1'] = $var1;
                
                $var2=$rows['xrp'];
                $var2 = (int) $var2;
                $_SESSION['var2'] = $var2;
                
                
                $koeth=$rows['eth'];
                $koeth = (int) $koeth;
                $_SESSION['koeth'] = $koeth;
                
                $koltc=$rows['ltc'];
                $koltc = (int) $koltc;
                $_SESSION['koltc'] = $koltc;
                
                $kobch=$rows['bch'];
                $kobch = (int) $kobch;
                $_SESSION['kobch'] = $kobch;
                
                $koomg=$rows['omg'];
                $koomg = (int) $koomg;
                $_SESSION['koomg'] = $koomg;
                
                $korq=$rows['request'];
                $korq = (int) $korq;
                $_SESSION['korq'] = $korq;
                
                $kozrx=$rows['request'];
                $kozrx = (int) $kozrx;
                $_SESSION['kozrx'] = $kozrx;
                
                $kognt=$rows['gnt'];
                $kognt = (int) $kognt;
                $_SESSION['kognt'] = $kognt;
                
                $kobat=$rows['bat'];
                $kobat = (int) $kobat;
                $_SESSION['kobat'] = $kobat;
                
                $koae=$rows['aeternity'];
                $koae = (int) $koae;
                $_SESSION['koae'] = $koae;
                
                $kotrx=$rows['trx'];
                $kotrx = (int) $kotrx;
                $_SESSION['koae'] = $kotrx;
                
                $koxlm=$rows['xlm'];
                $koxlm = (int) $koxlm;
                $_SESSION['koxlm'] = $koxlm;
            }
        } else {
            echo 'not found';
        }
        
        $bitquery = "select * from bitbns where username='$username'";
        $bitquery_run = mysqli_query($con, $bitquery);
        if (mysqli_num_rows($query_run) == 1) {
            while ($rows = mysqli_fetch_array($bitquery_run)) {

                $bitbtc = $rows['btc'];
                $bitbtc = (int) $bitbtc;
                $_SESSION['bitbtc'] = $bitbtc;
                
                $bitxrp=$rows['xrp'];
                $bitxrp = (int) $bitxrp;
                $_SESSION['bitxrp'] = $bitxrp;
                
                
                $biteth=$rows['eth'];
                $biteth = (int) $biteth;
                $_SESSION['biteth'] = $biteth;
                
                $bitltc=$rows['ltc'];
                $bitltc = (int) $bitltc;
                $_SESSION['bitltc'] = $bitltc;
                
                $bitbch=$rows['bch'];
                $bitbch = (int) $bitbch;
                $_SESSION['bitbch'] = $bitbch;
                
                $bitxmr=$rows['xmr'];
                $bitxmr = (int) $bitxmr;
                $_SESSION['bitxmr'] = $bitxmr;
                
                $bitrpx=$rows['rpx'];
                $bitrpx = (int) $bitrpx;
                $_SESSION['bitrpx'] = $bitrpx;
                
                $bitsc=$rows['sc'];
                $bitsc = (int) $bitsc;
                $_SESSION['bitsc'] = $bitsc;
                
                $bittrx=$rows['trx'];
                $bittrx = (int) $bittrx;
                $_SESSION['bittrx'] = $bittrx;
                
                $bitdash=$rows['dash'];
                $bitdash = (int) $bitdash;
                $_SESSION['bitdash'] = $bitdash;
                
                $bitdog=$rows['doge'];
                $bitdog = (int) $bitdog;
                $_SESSION['bitdog'] = $bitdog;
                
                $bitgas=$rows['gas'];
                $bitgas = (int) $bitgas;
                $_SESSION['bitgas'] = $bitgas;
                
                $bitneo=$rows['neo'];
                $bitneo= (int) $bitneo;
                $_SESSION['bitneo'] = $bitneo;
                
                $bitxlm=$rows['xlm'];
                $bitxlm = (int) $bitxlm;
                $_SESSION['bitxlm'] = $bitxlm;
                
                $bitdbc=$rows['dbc'];
                $bitdbc = (int) $bitdbc;
                $_SESSION['bitdbc'] = $bitdbc;
                /*
                $korq=$rows['request'];
                $korq = (int) $korq;
                $_SESSION['korq'] = $korq;
                
                $kozrx=$rows['request'];
                $kozrx = (int) $kozrx;
                $_SESSION['kozrx'] = $kozrx;
                
                $kognt=$rows['gnt'];
                $kognt = (int) $kognt;
                $_SESSION['kognt'] = $kognt;
                
                $kobat=$rows['bat'];
                $kobat = (int) $kobat;
                $_SESSION['kobat'] = $kobat;
                
                $koae=$rows['aeternity'];
                $koae = (int) $koae;
                $_SESSION['koae'] = $koae;
                
                $kotrx=$rows['trx'];
                $kotrx = (int) $kotrx;
                $_SESSION['koae'] = $kotrx;
                
                $koxlm=$rows['xlm'];
                $koxlm = (int) $koxlm;
                $_SESSION['koxlm'] = $koxlm;
                 * 
                 */
            }
        }
        $cdquery = "select * from coindelta where username='$username'";
        $cdquery_run = mysqli_query($con, $cdquery);
        if (mysqli_num_rows($cdquery_run) == 1) {
            while ($rows = mysqli_fetch_array($cdquery_run)) {

                $cdbtc = $rows['btc'];
                $cdbtc = (int) $cdbtc;
                $_SESSION['cdbtc'] = $cdbtc;
                
                
                $cdxrp=$rows['xrp'];
                $cdxrp = (int) $cdxrp;
                $_SESSION['cdxrp'] = $cdxrp;
                
                
                $cdeth=$rows['eth'];
                $cdeth = (int) $cdeth;
                $_SESSION['cdeth'] = $cdeth;
               
                $cdltc=$rows['ltc'];
                $cdltc = (int) $cdltc;
                $_SESSION['cdltc'] = $cdltc;
                
                $cdbch=$rows['bch'];
                $cdbch = (int) $cdbch;
                $_SESSION['cdbch'] = $cdbch;
                
                $cdq=$rows['qtum'];
                $cdq = (int) $cdq;
                $_SESSION['cdq'] = $cdq;
                
                $cdomg=$rows['omg'];
                $cdomg = (int) $cdomg;
                $_SESSION['cdomg'] = $cdomg;
                
                
            }
        }
        
        $zpquery = "select * from zebpay where username='$username'";
        $zpquery_run = mysqli_query($con, $zpquery);
        if (mysqli_num_rows($zpquery_run) == 1) {
            while ($rows = mysqli_fetch_array($zpquery_run)) {
                
                $zpbtc = $rows['btc'];
                $zpbtc = (int) $zpbtc;
                $_SESSION['zpbtc'] = $zpbtc;
                
               
                $zpxrp=$rows['xrp'];
                $zpxrp = (int) $zpxrp;
                $_SESSION['zpxrp'] = $zpxrp;
                
                
                $zpeth=$rows['eth'];
                $zpeth = (int) $zpeth;
                $_SESSION['zpeth'] = $zpeth;
               
                $zpltc=$rows['ltc'];
                $zpltc = (int) $zpltc;
                $_SESSION['zpltc'] = $zpltc;
                
                $zpbch=$rows['bch'];
                $zpbch = (int) $zpbch;
                $_SESSION['zpbch'] = $zpbch;                
                
            }
        }
        ?>
        <script>
            var var1 = <?php echo $var1; ?>;
            var var2 = <?php echo $var2; ?>;
            var koeth = <?php echo $koeth; ?>;
            var koltc = <?php echo $koltc; ?>;
            var kobch = <?php echo $kobch; ?>;
            var koomg = <?php echo $koomg; ?>;
            var korq = <?php echo $korq; ?>;
            var kozrx = <?php echo $kozrx; ?>;
            var kognt = <?php echo $kognt; ?>;
            var kobat = <?php echo $kobat; ?>;
            var koae = <?php echo $koae; ?>;
            var kotrx = <?php echo $kotrx; ?>;
            var koxlm = <?php echo $koxlm; ?>;
            var bitbtc = <?php echo $bitbtc; ?>;
            var bitxrp= <?php echo $bitxrp; ?>;
            var biteth= <?php echo $biteth; ?>;
            var bitltc= <?php echo $bitltc; ?>;
            var bitbch= <?php echo $bitbch; ?>;
            var bitxmr= <?php echo $bitxmr; ?>;
            var bitrpx= <?php echo $bitrpx; ?>;
            var bitsc= <?php echo $bitsc; ?>;
            var bittrx= <?php echo $bittrx; ?>;
            var bitdash= <?php echo $bitdash; ?>;
            var bitgas= <?php echo $bitgas; ?>;
            var bitneo= <?php echo $bitneo; ?>;
            var bitdog= <?php echo $bitdog; ?>;
            var bitxlm= <?php echo $bitxlm; ?>;
            var bitdbc= <?php echo $bitdbc; ?>;
            var cdbtc= <?php echo $cdbtc; ?>;
            var cdxrp= <?php echo $cdxrp; ?>;
            var cdeth= <?php echo $cdeth; ?>;
            var cdltc= <?php echo $cdltc; ?>;
            var cdbch= <?php echo $cdbch; ?>;
            var cdq= <?php echo $cdq; ?>;
            var cdomg= <?php echo $cdomg; ?>;
            var zpbtc= <?php echo $zpbtc; ?>;
            var zpxrp= <?php echo $zpxrp; ?>;
            var zpeth= <?php echo $zpeth; ?>;
            var zpltc= <?php echo $zpltc; ?>;
            var zpbch= <?php echo $zpbch; ?>;
            
        </script>
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


<style>

    textarea {

        resize: none;
        border: 0px solid #888; 
        overflow:hidden;
        font-weight: bold;
        color:#00732a;
        text-align: center;
        padding: 10px;
        font-size: 15px;
        width:  calc(100% - 1300px);
        min-width:93px;
        max-width:250px;
        background-color: azure;
    } 
    table{
        text-align: center;
        overflow: hidden;
    }
    td,th{
        text-align: center;
        background-color:gainsboro;
        width:300px;
    }
</style>
