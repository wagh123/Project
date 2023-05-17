<?php
session_start();
$con=mysqli_connect("localhost","root","","hosteldb1");
  if(isset($_POST['sendmsg']))
  {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $query = "INSERT INTO contact(name, email, contact, message) VALUES ('$fname','$lname','$email','$message')";
    $result = mysqli_query($con,$query);
    if($result){
        echo "<script>alert('message send successfully'); window.location.href = 'contact.html'</script>";
    }
    else{
        echo "<script>alert('Fail to send message'); window.location.href = 'contact.html'</script>";
    }
  }

?>