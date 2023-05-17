<!DOCTYPE html>
<?php 

$con=mysqli_connect("localhost","root","","hosteldb1");


if(isset($_POST['studentsub'])){
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $roomno=$_POST['roomno'];
  $semail=$_POST['semail'];
  $contact=$_POST['contact'];
	$spassword=$_POST['spassword'];
  $cpassword=$_POST['cpassword'];
  if($spassword==$cpassword){
  	$query="insert into studentreg(fname,lname,roomno,email,contact,password,cpassword) values ('$fname','$lname','$roomno','$semail','$contact','$spassword','$cpassword');";
    $result=mysqli_query($con,$query);
    if($result)
    {
        echo "<script>alert('Student added successfully!');</script>";
    }else{
      echo "<script>alert('Unable to Add!');</script>";
    }
  }
  else{
    echo "<script>alert('password and confirm password does not match');</script>";

  }
}

if(isset($_POST['studentsub1']))
{
      $semail=$_POST['semail'];
      $query="delete from studentreg where email='$semail';";
      $result=mysqli_query($con,$query);
      if($result)
        {
          echo "<script>alert('student removed successfully!');</script>";
      }
      else{
        echo "<script>alert('Unable to delete!');</script>";
      }
}
else
{
  echo "<script>alert('Login Successfully');</script>";

}

?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/8231b1ecbe.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="./CSS/student.css">
    <title>DEOGIRI</title>
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
      <a class="navbar-brand" href="#"><span class="text-warning"><h4><i class="fa-solid fa-hotel"></i>&nbsp Shardabai</span>Pawar Girl's Hostel</h4></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        <ul class="navbar-nav ml-auto">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <li class="nav-item">
        <a class="nav-link" href="logout.php"><i class="fa fa-power-off" aria-hidden="true"></i> Logout</a>
        </li>
         <li class="nav-item">
        <a class="nav-link" href="#"></a>
         </li>
          <li class="nav-item active">
            <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="#intro">Team</a>
          </li> -->
         <li class="nav-item">
            <a class="nav-link" href="#">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">Contact Us</a>
          </li>
        </ul>
        <a href="registration.html"><button class="btn btn-primary" type="button">Register</button></a>
      </div>
    </nav>  
    <body style="padding-top:30px;">
   <div class="container-fluid" style="margin-top:60px;">
    <h3 style = "margin-left: 40%; margin-top: 7px;font-family: 'IBM Plex Sans', sans-serif;"> WELCOME ADMINISTRATOR </h3>
    <div class="row" >
    <div class="col-md-4" style="max-width:20%;margin-top: 10px;">
    <div class="list-group" id="list-tab" role="tablist" >
      <a class="list-group-item list-group-item-action active" id="list-dash-list" data-toggle="list" href="#list-dash" role="tab" aria-controls="home">Dashboard</a>
      <a class="list-group-item list-group-item-action" href="#list-pat" id="list-pat-list"  role="tab" data-toggle="list" aria-controls="home">View student</a>
      <a class="list-group-item list-group-item-action" href="#list-leave" id="list-leave-list"  role="tab" data-toggle="list" aria-controls="home">View Leaves</a>
      <a class="list-group-item list-group-item-action" href="#list-com" id="list-com-list"  role="tab" data-toggle="list" aria-controls="home">View Complaints</a>
      <a class="list-group-item list-group-item-action" href="#list-settings" id="list-adoc-list"  role="tab" data-toggle="list" aria-controls="home">Add Student</a>
      <a class="list-group-item list-group-item-action" href="#list-settings1" id="list-ddoc-list"  role="tab" data-toggle="list" aria-controls="home">Delete Student</a>
      
    </div><br>
  </div>
  <div class="col-md-8" style="margin-top: 7px;">
    <div class="tab-content" id="nav-tabContent" style="width: 100%;">
      <div class="tab-pane fade show active" id="list-dash" role="tabpanel" aria-labelledby="list-dash-list">
        <div class="container-fluid container-fullw bg-light mb-3" style="padding:20px; margin-left:20px">
              <div class="row">
                <div class="col-sm-12 mt-3" >
                  <div class="row mx-2 text-center">
                    <div class="col-sm-4 mt-3">
                      <div class="card text-white bg-danger mb-3" style="max-width : 18rem;">
                      <div class="card-header">Total Rooms</div>
                      <div class="card-body">
                        <h4 class="card-title">
                          200
                        </h4>
                        <a class="btn text-white" href="#">View</a>
                      </div>
                    </div>
                    </div>
                    <div class="col-sm-4 mt-3">
                      <div class="card text-white bg-success mb-3" style="max-width : 18rem;">
                      <div class="card-header">Alloted Rooms</div>
                      <div class="card-body">
                        <h4 class="card-title" ><?php include 'counter/Student.php'?>
                        </h4>
                        <a class="btn text-white" href="#">View</a>
                      </div>
                    </div>
                    </div>
                    <div class="col-sm-4 mt-3">
                      <div class="card text-white bg-primary mb-3" style="max-width : 18rem;">
                      <div class="card-header">Vacant Rooms</div>
                      <div class="card-body">
                        <h4 class="card-title"><?php include 'counter/student1.php'?>
                        </h4>
                        <a class="btn text-white" href="#">View</a>
                      </div>
                    </div>
                    </div>
                  </div>
                </div>
                </div>
              </div>
            </div>
    <div class="tab-pane fade" id="list-pat" role="tabpanel" aria-labelledby="list-pat-list">

    <div class="col-md-8">
    </div>
        
              <table class="table table-hover">
                <thead>
                  <tr>
                  <th scope="col">#</th>
                    <th scope="col">Fullname</th>
                    <th scope="col">Room No.</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contact</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    $con=mysqli_connect("localhost","root","","hosteldb1");
                    global $con;
                    $query = "select * from studentreg";
                    $result = mysqli_query($con,$query);
                    $cnt=1;
                    while ($row = mysqli_fetch_array($result)){
                      $pid = $row['sid'];
                      $fname = $row['fname'];
                      $lname = $row['lname'];
                      $roomno = $row['roomno'];
                      $email = $row['email'];
                      $contact = $row['contact'];
                      
                      echo "<tr>
                        <td>$cnt</td>
                        <td>$fname $lname</td>
                        <td>$roomno</td>
                        <td>$email</td>
                        <td>$contact</td>
                      </tr>";
                  $cnt++;  }
                  ?>
                </tbody>
              </table>
        <br>
      </div>
      <div class="tab-pane fade" id="list-com" role="tabpanel" aria-labelledby="list-com-list">
      <div class="col-md-8">
       </div>
          <table class="table table-hover">
            <thead>
              <tr>
              <th scope="col">#</th>
                <th scope="col">Fullname</th>
                <th scope="col">Room No.</th>
                <th scope="col">Email</th>
                <th scope="col">Complaint</th>
              </tr>
            </thead>
            <tbody>
              <?php 
                $con=mysqli_connect("localhost","root","","hosteldb1");
                global $con;
                $query = "select * from complaint";
                $result = mysqli_query($con,$query);
                $cnt=1;
                while ($row = mysqli_fetch_array($result)){
                  $fname = $row['fname'];
                  $lname = $row['lname'];
                  $roomno = $row['roomno'];
                  $email = $row['email'];
                  $problem = $row['problem'];
                  
                  echo "<tr>
                    <td>$cnt</td>
                    <td>$fname $lname</td>
                    <td>$roomno</td>
                    <td>$email</td>
                    <td>$problem</td>
                  </tr>";
              $cnt++;  }

              ?>
            </tbody>
          </table>
    <br>
  </div>
  <div class="tab-pane fade" id="list-leave" role="tabpanel" aria-labelledby="list-leave-list">
        
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Applicant Name</th>
              <th scope="col">Start Date</th>
              <th scope="col">End Date</th>
              <th scope="col">Place</th>
              <th scope="col">Reason</th>
              <!-- <th scope="col">Action</th> -->
            </tr>
          </thead>
          <tbody>
            <?php 
             $con=mysqli_connect("localhost","root","","hosteldb1");
             global $con;
             $query = "select * from application";
             $result = mysqli_query($con,$query);
             $cnt=1;
             while ($row = mysqli_fetch_array($result)){
               $fname = $row['fname'];
               $lname = $row['lname'];
               $StartDate = $row['StartDate'];
               $EndDate = $row['EndDate'];
               $place = $row['place'];
               $reason = $row['reason'];

               
               echo "<tr>
               <td>$cnt</td>
                 <td>$fname $lname</td>
                 <td>$StartDate</td>
                 <td>$EndDate</td>
                 <td>$place</td>
                 <td>$reason</td>
      
               </tr>";
            $cnt++; }

            ?>
            </tbody>
          </table>
    <br>
  </div>

<div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">...</div>

      <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
        <form class="form-group" method="post" action="Admin.php">
          <div class="row">
          <div class="col-md-4"><label>First Name:</label></div>
                  <div class="col-md-8"><input type="text" class="form-control" name="fname" onkeydown="return alphaOnly(event);" required></div><br><br>
                  <div class="col-md-4"><label>Last Name:</label></div>
                  <div class="col-md-8"><input type="text" class="form-control" name="lname" onkeydown="return alphaOnly(event);" required></div><br><br>
                  <div class="col-md-4"><label>Email ID:</label></div>
                  <div class="col-md-8"><input type="email"  class="form-control" name="semail" required></div><br><br>
                  <div class="col-md-4"><label>Room No.:</label></div>
                  <div class="col-md-8"><input type="integer"  class="form-control" name="roomno" required></div><br><br>
                  <div class="col-md-4"><label>Contact :</label></div>
                  <div class="col-md-8"><input type="integer"  class="form-control" name="contact" required></div><br><br>
                  <div class="col-md-4"><label>Password:</label></div>
                  <div class="col-md-8"><input type="password" class="form-control"  onkeyup='check();' name="spassword" id="spassword"  required></div><br><br>
                  <div class="col-md-4"><label>Confirm Password:</label></div>
                  <div class="col-md-8"  id='cpassword'><input type="password" class="form-control" onkeyup='check();' name="cpassword" id="cpassword" required>&nbsp &nbsp<span id='message'></span> </div><br><br>
                 <br><br>
                </div>
          <input type="submit" name="studentsub" value="Add student" class="btn btn-primary">
        </form>
      </div>

      <div class="tab-pane fade" id="list-settings1" role="tabpanel" aria-labelledby="list-settings1-list">
        <form class="form-group" method="post" action="Admin.php">
          <div class="row">
          
                  <div class="col-md-4" style="margin-right:3%"><label>Email ID:</label></div>
                  <div class="col-md-8"><input type="email"  class="form-control" name="semail" required></div><br><br>
                  
                </div>
          <input type="submit" name="studentsub1" value="Delete Student" class="btn btn-primary" onclick="confirm('do you really want to delete?')">
        </form>
      </div>

    </div>
  </div>
</div>
</div>
    </body>
    </html>
    

   




















