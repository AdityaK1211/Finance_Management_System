<?php
session_start();
include('DBConnection.php');
$CustId=$_SESSION['CId'];
$SchemeId=$_SESSION['SchemeId'];
$TransId=$_POST['TId'];
$CustName=$_POST['CustName'];
$CustAddress=$_POST['CustAddress'];
$TypeOfPurchase=$_POST['TypeOfPurchase'];
$TypeOfInvestment=$_POST['TypeOfInvestment'];
$CustInterest=$_POST['CustInterest'];
$CustBankName=$_POST['BankName'];
$CustAmount=$_POST['CustAmount'];
$CustTenure=$_POST['CustTem'];
$TDate=$_POST['PaymentDate'];
//echo $TDate;
//echo $CustAddress." ".$CustId." ".$SchemeId." ".$TransId." ".$CustName." ".$CustAddress." ".$TypeOfPurchase." ".$TypeOfInvestment." ".$CustAmount." ".$CustInterest." ".$CustTenure;

$query="INSERT INTO `transactions`(`CustId`, `CustName`, `CustAddress`, `TypeOfPurchase`, `TypeOfScheme`, `SchemeId`, `Amount`, `Interest`, `Tenure`, `SchemeProvider`,`TransactionId`,`TransactionDate`) VALUES ('$CustId','$CustName','$CustAddress','$TypeOfPurchase','$TypeOfInvestment','$SchemeId','$CustAmount','$CustInterest','$CustTenure','$CustBankName','$TransId','$TDate')";
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