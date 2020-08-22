<?php
session_start();
include('DBConnection.php');
$CustId=$_SESSION['CId'];
$TransId=$_POST['TId'];
$CustName=$_SESSION['CustName'];
$CustAddress=$_POST['CustAddress'];
$CustAmount=$_POST['CustAmount'];
$TDate=$_POST['PaymentDate'];
//echo $TDate;
//echo $CustId." ".$CustName." ".$CustAddress." ".$CustAmount." ".$TransId." ".$TDate ;

$query="INSERT INTO `gold`(`CustId`, `CustName`, `CustAddress`, `Amount`, `TransactionID`, `TransactionDate`) VALUES ('$CustId','$CustName','$CustAddress','$CustAmount','$TransId','$TDate')";
$run= mysqli_query($con,$query);

if($run === TRUE)
{
    ?>
    <script>
     alert('Transaction Successful!');
     window.location.href="home.html";
    </script>
    <?php
}
else
{
    ?>
    <script>
     alert('Transaction UnSuccessful!');
     window.location.href="home.html";
    </script>
    <?php
}
?>