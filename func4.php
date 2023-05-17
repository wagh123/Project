<?php
session_start();
$con=mysqli_connect("localhost","root","","hosteldb1");
if(isset($_POST['studsub'])){
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $roomno=$_POST['roomno'];
  $email=$_POST['email'];
  $message=$_POST['message'];
  	$query="insert into complaint(fname,lname,roomno,email,problem) values ('$fname','$lname','$roomno','$email','$message');";
    $result=mysqli_query($con,$query);
    if($result){
            echo "<script>alert('complaint submitted successfully!'); window.location.href = 'student.php'</script>";
            // header("Location:student.php");

        }else{
            echo "<script>alert('connot submit!'); window.location.href = 'student.php'</script>";
        }
      }

if(isset($_POST['applyleave'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $sdate=$_POST['sdate'];
    $edate=$_POST['edate'];
    $place=$_POST['place'];
    $reason=$_POST['reason'];
        $query="insert into application(fname,lname,StartDate,EndDate,place,reason) values ('$fname','$lname','$sdate','$edate','$place','$reason');";
        $result=mysqli_query($con,$query);
          if($result){
                  echo "<script>alert('Application submitted successfully!'); window.location.href = 'student.php';</script>";
              }else{
                echo "<script>alert('Application is not successfully!'); window.location.href = 'student.php';</script>";

              }
            }
?>
    

   
  
