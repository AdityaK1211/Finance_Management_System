<?php
  session_start();
  include('DBConnection.php');

 $uname=$_POST['name'];
 $pass=$_POST['password'];

 $query="SELECT * FROM `user` WHERE Username='$uname' and Password='$pass'";
 $run=mysqli_query($con,$query);
 $row=mysqli_num_rows($run);
 if($row == 1)
 {
    $data=mysqli_fetch_assoc($run);
    $name=$data['Name'];
    $id=$data['Id'];
    $Country=$data['Country'];
    $state=$data['State'];
    $city=$data['City'];
    $email=$data['Email'];
    $_SESSION['CustName']=$name;
    $_SESSION['CId']=$id;
    $_SESSION['CustCountry']=$Country;
    $_SESSION['CustState']=$state;
    $_SESSION['CustCity']=$city;
    $_SESSION['CustEmail']=$email;
    ?>
    <script>
    window.location.href="home.html";
    </script>
     <?php
 }
 else
 {
   ?>
    <script>
    alert("Invalid Login Credentials!");
    window.location.href="index.html";
    </script>
     <?php
 }
?>