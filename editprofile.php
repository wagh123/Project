<?php
session_start();
$con = mysqli_connect("localhost","root","","hosteldb1");
 if(isset($_POST['update'])) {
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $roomno = $_POST['roomno'];
  $contact  = $_POST['contact'];

  $query  = "UPDATE studentreg SET `fname`='$fname',`lname`='$lname',`roomno`='$roomno',`email`='$email',`contact`='$contact' WHERE fname = '$fname'";
  $result = mysqli_query($con,$query);
  if($result){
    echo "<script>alert('Profile updated Successfully'); window.location.href = 'student.php'</script>";
  }
  else{
    echo "<script>alert('Profile is not updated'); window.location.href = 'student.php'</script>";
  }
  }
?>

