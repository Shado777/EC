<?php
  if(isset($_POST["submit1"])) {
    $con = mysqli_connect("127.0.0.1","root","","mannaka");

    $cname = $_POST['firstName'];
    $csurname = $_POST['surName'];
    $cemail = $_POST['email'];
    $cuser = $_POST['username'];
    $cpass = $_POST['password'];

    $sql = "INSERT INTO clients (id,firstname,lastname,email,username,password)
    VALUES ('','$cname','$csurname','$cemail','$cuser','$cpass')";

    mysqli_query($con,$sql);
    mysqli_close($con);
    header("refresh:6; url=MannakaRegistration.html");
  }
?>
