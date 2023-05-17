<?php
session_start();
$con=mysqli_connect("localhost","root","","hosteldb1");
if(isset($_POST['patsub1'])){
	$fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $roomno=$_POST['roomno'];
  $email=$_POST['email'];
  $contact=$_POST['contact'];
	$password=$_POST['password'];
  $cpassword=$_POST['cpassword'];
  if($password==$cpassword){
  	$query="insert into studentreg(fname,lname,roomno,email,contact,password,cpassword) values ('$fname','$lname','$roomno','$email','$contact','$password','$cpassword');";
    $result=mysqli_query($con,$query);
    if($result){
        $_SESSION['username'] = $_POST['fname']." ".$_POST['lname'];
        $_SESSION['fname'] = $_POST['fname'];
        $_SESSION['lname'] = $_POST['lname'];
        $_SESSION['roomno'] = $_POST['roomno'];
        $_SESSION['contact'] = $_POST['contact'];
        $_SESSION['email'] = $_POST['email'];

        header("Location:student.php");
    } 

    $query1 = "select * studentreg;";
    $result1 = mysqli_query($con,$query1);
    if($result1){
      $_SESSION['sid'] = $row['sid'];
    }

  }
  else{
    header("Location:error1.php");
  }
}
?>