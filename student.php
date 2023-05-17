<?php
   include("func2.php");
  //  $roomno = $_SESSION['roomno'];
   $fname = $_SESSION['fname'];
   $lname = $_SESSION['lname'];
   $email = $_SESSION['email'];
   $contact = $_SESSION['contact'];


  
?>

<!doctype html>
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
    <link rel="stylesheet" href="./CSS/form.css">

    <title>DEOGIRI</title>
  </head>
  <body style="padding-top:40px;">
    
    <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
      <a class="navbar-brand" href="#"><span class="text-warning"><h4><i class="fa-solid fa-hotel"></i>&nbsp Shardabai</span>Pawar Girl's Hostel</h4></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item">
            <a  class="nav-link" href="logout.php"><i class="fa fa-power-off" aria-hidden="true"></i> Logout</a>
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
     
    
        <div class="container-fluid" style="margin-top:50px;">
        <h3 style = "margin-left: 40%; font-family: 'IBM Plex Sans', sans-serif;">Welcome  &nbsp<?php echo $fname ?> 
   </h3>
         <div class="row">
       <div class="col-md-4" style="max-width:22%;margin-top: 1%;">
         <div class="list-group" id="list-tab" role="tablist">
          <a class="list-group-item list-group-item-action active" id="list-dash-list" data-toggle="list" href="#list-dash" role="tab" aria-controls="home">Dashboard</a>
          <a class="list-group-item list-group-item-action" href="#list-doc" id="list-doc-list"  role="tab"    aria-controls="home" data-toggle="list">View Profile</a>
          <a class="list-group-item list-group-item-action" href="#list-pat" id="list-pat-list"  role="tab" data-toggle="list" aria-controls="home">Apply For Leave</a>
          <a class="list-group-item list-group-item-action" href="#list-settings" id="list-adoc-list"  role="tab" data-toggle="list" aria-controls="home">Complaint Box</a>
         </div><br>
       </div>
       <div class="col-md-8" style="margin-top: 1%;">
         <div class="tab-content" id="nav-tabContent" style="width: 950px;">
           <div class="tab-pane fade show active" id="list-dash" role="tabpanel" aria-labelledby="list-dash-list">
             
                   <div class="container-fluid container-fullw bg-light" style="margin-top:0px">
                   <div class="row">
                   <div class="col-sm-4" style="margin-left: 5%;">
                  <div class="panel panel-white no-radius text-center">
                    <div class="panel-body">
                    <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-user fa-stack-1x fa-inverse"></i> </span>
                      <h4 class="StepTitle" style="margin-top: 5%;">My Profile</h4>
                      <script>
                        function clickDiv(id) {
                          document.querySelector(id).click();
                        }
                      </script> 
                      <p class="links cl-effect-1">
                        <a href="#list-doc" onclick="clickDiv('#list-doc-list')">
                          Profile
                        </a>
                      </p>
                    </div>
                  </div>
                </div>

                <div class="col-sm-4" style="left: 20%">
                  <div class="panel panel-white no-radius text-center">
                    <div class="panel-body" >
                      <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-pencil-square-o fa-stack-1x fa-inverse"></i> </span>
                      <h4 class="StepTitle" style="margin-top: 5%;">Apply For Leave</h4>
                      
                      <p class="cl-effect-1">
                        <a href="#app-hist" onclick="clickDiv('#list-pat-list')">
                          Leave
                        </a>
                      </p>
                    </div>
                  </div>
                </div>

                <div class="col-sm-4" style="margin-left: 35%; margin-top:5%">
                  <div class="panel panel-white no-radius text-center">
                    <div class="panel-body" >
                      <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-pencil fa-stack-1x fa-inverse"></i> </span>
                      <h4 class="StepTitle" style="margin-top: 5%;">Complaint Box</h4>
                      <p class="cl-effect-1">
                        <a href="#app-hist" onclick="clickDiv('#list-adoc-list')">
                        Complaint
                      </a>
                      </p>
                    </div>
                  </div>
                 </div>               
                </div>
                </div>
              </div>
            <div class="tab-pane fade" id="list-doc" role="tabpanel" aria-labelledby="list-doc-list">
            <div class="container">
                <div class="row mx-0 justify-content-center">
                  <div class="col-md-6 col-lg-12">
                    <form
                      action="func4.php"
                      method="POST"
                      class="w-400 rounded p-4 border bg-white" 
                    >
                      <label class="d-block mb-3">
                        <span class="d-block mb-2">Name</span>
                        <input
                          value="<?php echo $fname,' ',$lname?>"
                          type="text"
                          class="form-control"
                          readonly
                        />
                      </label>
                      <label class="d-block mb-3">
                        <span class="d-block mb-2">Email address</span>
                        <input
                          value="<?php echo $email ?>"
                          class="form-control"
                          type="email"
                          readonly
                        />
                      </label>
                      <div class="mb-3">
                        <label class="d-block mb-2" require>Room No</label>
                        <div>
                          <input value="505" class="form-control" readonly/>
                        </div>
                      </div>
                      <div class="mb-3">
                        <label class="d-block mb-2" require>Contact</label>
                        <div>
                          <input  value="<?php echo $contact?>" class="form-control" readonly />
                        </div>
                      </div>
                      <div class="options">
                            <a class="btn btn-primary" href="#list-change" id="list-change-list"  role="tab" data-toggle="list" aria-controls="home">Edit Profile</a>
                            <!-- <a class="btn btn-success" href="changepassword.php">Change Password</a> -->
                      </div>
                      </div>
                    </form>
                  </div>
                </div>
             </div>
             <div class="tab-pane fade" id="list-change" role="tabpanel" aria-labelledby="list-change-list">
            <div class="container">
                <div class="row mx-0 justify-content-center">
                  <div class="col-md-6 col-lg-12">
                    <form
                      action="editprofile.php"
                      method="POST"
                      class="w-400 rounded p-4 border bg-white" 
                    >
                      <label class="d-block mb-3">
                        <span class="d-block mb-2">First Name</span>
                        <input
                          value="<?php echo $fname?>"
                          type="text"
                          class="form-control"
                          name="fname"
                          require
                        />
                      </label>
                      <label class="d-block mb-3">
                        <span class="d-block mb-2">Last Name</span>
                        <input
                          value="<?php echo $lname?>"
                          type="text"
                          class="form-control"
                          name="lname"
                          require
                        />
                      </label>
                      <label class="d-block mb-3">
                        <span class="d-block mb-2">Email address</span>
                        <input
                          value="<?php echo $email ?>"
                          class="form-control"
                          type="email"
                          name="email"
                          require
                        />
                      </label>
                      <div class="mb-3">
                        <label class="d-block mb-2" require>Room No</label>
                        <div>
                          <input value="505" class="form-control" name="roomno" require/>
                        </div>
                      </div>
                      <div class="mb-3">
                        <label class="d-block mb-2" require>Contact</label>
                        <div>
                          <input  value="<?php echo $contact?>" class="form-control" name="contact" require/>
                        </div>
                      </div>
                      <div class="options">
                            <button class="btn btn-primary" href="editprofile.php" name="update">Update Profile</button>
                            <a class="btn btn-dark" href="#list-doc" id="list-doc-list"  role="tab" data-toggle="list" aria-controls="home">Back</a>
                      </div>
                      </div>
                    </form>
                  </div>
                </div>
             </div>
             <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-adoc-list">
             <div class="container">
                <div class="row mx-0 justify-content-center">
                  <div class="col-md-6 col-lg-12">
                    <form
                      action="func4.php"
                      method="POST"
                      class="w-400 rounded p-4 border bg-white" 
                    >
                      <label class="d-block mb-3">
                        <span class="d-block mb-2">First Name</span>
                        <input
                          name="fname"
                          type="text"
                          class="form-control"
                          placeholder="enter your name"
                          require
                        />
                      </label>
                      <label class="d-block mb-3" require>
                        <span class="d-block mb-2">Last Name</span>
                        <input
                          name="lname"
                          type="text"
                          class="form-control"
                          placeholder="enter your name"
                          require
                        />
                      </label>

                      <label class="d-block mb-3">
                        <span class="d-block mb-2">Email address</span>
                        <input
                          name="email"
                          type="email"
                          class="form-control"
                          placeholder="Example12@gmail.com"
                          onkeyup='check();' required
                        />
                      </label>
                      <div class="mb-3">
                        <label class="d-block mb-2" require>Room No</label>
                        <div>
                          <input name="roomno"  class="form-control" require/>
                        </div>
                      </div>
                      <label class="d-block mb-3" require>
                        <span class="d-block mb-2">What's wrong?</span>
                        <textarea
                          name="message"
                          class="form-control"
                          rows="3"
                          placeholder="Please describe your problem"
                          onkeyup='check();' required></textarea>
                      </label>
                      <div class="mb-3">
                      <input type="submit" class="btnSubmit btn btn-primary" name="studsub" onclick="return checklen();"  value="Submit"/>
                      </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="list-pat" aria-labelledby="list-pat-list">
                    <div class="page-content">
                        <!-- Apply Leave Form -->
                        <div class="card pmd-card single-col-form">
                            <form id="apply-leave" method="post" action="func4.php">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group pmd-textfield pmd-textfield-floating-label ">
                                                <label for="name" require>First Name</label>
                                                <input type="text" class="form-control" id="name" name="fname" require>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group pmd-textfield pmd-textfield-floating-label ">
                                                <label for="name" require>Last Name</label>
                                                <input type="text" class="form-control" id="name" name="lname" require>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                                <label class="control-label" for="datepickerstart" require>Start Date</label>
                                                <input type="date" class="form-control" id="sdate" name="sdate" require>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                                <label class="control-label" for="datepickerend">End Date</label>
                                                <input type="date" class="form-control" id="edate" name="edate" require>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                                <label class="control-label" for="datepickerend" placeholder="Name of Place" require>Place</label>
                                                <input type="text" class="form-control" id="place" name="place" require>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                                <label>Reason</label>
                                                <textarea class="form-control" id="reason" name="reason" require></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                <input type="submit" class="btnSubmit btn btn-primary" name="applyleave" onclick="return checklen();"  value="Submit"/>
                                 <a href="#" class="btn btn-outline-secondary pmd-ripple-effect">Cancel</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
              </div>
            </div>
           </div>
         </div>
       </div>
     </body>
    </html>
    

   




















