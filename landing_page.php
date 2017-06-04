<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="description" content="Nasir Iqbal">
      <meta name="keywords" content="Nasir Iqbal">
      <title>UPSC Helper</title>
      <link rel="icon" type="image/png" href="./img/fav.ico">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
      <link rel="stylesheet" href="freelancer.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
      <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <style type="text/css" >
         body {
         background: url("upsc1.jpg") no-repeat center center fixed;
         background-size: cover;
         padding-top: 10px;
         font-family: 'Roboto', sans-serif;
         }
         .heading {
         color:#fff;
         text-align: center;
         font-weight: bolder;
         font-size: 50px !important;
         }
         .col-md-12 {
         padding-top: 50px;
         }
         .social-buttons a:link,.social-buttons a:visited,.social-buttons a:hover{
         color:#fff;
         text-decoration: none;
         font-size: 24px;
         text-align: center !important;
         }
         .fa {
         padding:20px;
         border:3px solid #fff;
         }
      </style>
   </head>
   <body>
      <div class="container">
         <div class="row">
            <div class="col-lg-12 text-center">
               <div class="col-md-12 heading">
                  <h1 style="color:#03a9f4; font-size:40px">UPSC Helper</h1>
                  <h3 style="color:#333333">Come and learn with us.</h3>
               </div>
               <?php
                  require_once('connectvars.php');
                   session_start();
                   if(isset($_SESSION['hm_id'])) {
                   echo('<p class="login" align= "center"><br><br>You are logged in as <strong> ' . $_SESSION['id_proof'] . '</strong>.<br>Go to your home page: <a href="home.php" style="cursor:pointer">Home</a><br><br>You can also logout here: <a href="logout.php" style="cursor:pointer">LogOut</a></p>');
                   }
                  
                  //for signup
                  
                    $dbc = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
                    
                    if(isset($_POST['signup'])){
                   	$_SESSION['first_name'] = $first_name = mysqli_real_escape_string($dbc,trim($_POST['firstname']));
                   	$_SESSION['last_name'] = $last_name = mysqli_real_escape_string($dbc,trim($_POST['lastname']));
                   	$_SESSION['id_proof'] = $id_proof = mysqli_real_escape_string($dbc,trim($_POST['idproof']));
                   	$_SESSION['password'] = $password1 = mysqli_real_escape_string($dbc,trim($_POST['password1']));
                   	$password2 = mysqli_real_escape_string($dbc,trim($_POST['password2']));
                   	
                   	
                   	if(!empty($first_name) && !empty($last_name) && !empty($id_proof) && !empty($password1) && !empty($password2)){
                  $email = $id_proof;
                  if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
                  if($password1 == $password2){
                  $query = "SELECT * FROM hm_profile WHERE id_proof = '$id_proof'";
                  
                  $data = mysqli_query($dbc, $query);
                  
                  
                  if(mysqli_num_rows($data) == 0){
                  
                  $now = date("Y-m-d H:i:s");
                  
                  $query = "INSERT INTO hm_profile(hm_id, first_name, last_name, id_proof, password, date_of_join) VALUES" .
                  "( 0, '$first_name', '$last_name', '$id_proof', SHA('$password1'), '$now')";
                  mysqli_query($dbc, $query);
                  }
                  else{
                  echo'<div class="alert alert-danger" align="center"><strong>An <b>account already exits</b> for this E-mail address. Please use a different address.</strong></div>';
                  $id_proof="";
                  }
                  $query1 = "SELECT hm_id, id_proof FROM hm_profile WHERE id_proof = '$id_proof'";
                  
                  $data1 = mysqli_query($dbc, $query1);
                  if(mysqli_num_rows($data1) == 1){
                  $row1 = mysqli_fetch_array($data1);
                  $_SESSION['hm_id'] = $row1['hm_id'];
                  setcookie('hm_id', $row1['hm_id'], time() + (60 * 60 * 24 * 30));    // expires in 30 days
                  setcookie('id_proof', $row1['id_proof'], time() + (60 * 60 * 24 * 30));  // expires in 30 days
                  
                  $home_url = 'http://' . $_SERVER['HTTP_HOST'] . '/upsc/home.php';
                  header('Location: ' . $home_url);
                  mysqli_close($dbc);
                  exit();
                  }
                  }
                  else{
                  echo'<div class="alert alert-danger" align="center">You must enter the <b>same password</b> twice.</div>';
                  }
                  } else{
                  echo'<div class="alert alert-danger" align="center">You must enter a <b>valid Email format</b>.</div>';
                  }
                   	}
                   	else{
                   		echo'<div class="alert alert-danger" align="center">You must enter <b>all</b> of the signup data.</div>';
                   	}
                    }
                    mysqli_close($dbc);
                   
                  //for login
                  if (!isset($_SESSION['hm_id'])) {
                  if (isset($_POST['login'])) {
                  
                  $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
                  
                  
                  $user_id_proof = mysqli_real_escape_string($dbc, trim($_POST['idproof']));
                  $user_password = mysqli_real_escape_string($dbc, trim($_POST['password']));
                  
                  if (!empty($user_id_proof) && !empty($user_password)) {
                  $email = $user_id_proof;
                  if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                  
                  $query = "SELECT hm_id, id_proof FROM hm_profile WHERE id_proof = '$user_id_proof' AND password = SHA('$user_password')";
                  $data = mysqli_query($dbc, $query);
                  
                  if (mysqli_num_rows($data) == 1) {
                  $row = mysqli_fetch_array($data);
                  $_SESSION['hm_id'] = $row['hm_id'];
                  $_SESSION['id_proof'] = $row['id_proof'];
                  setcookie('id', $row['hm_id'], time() + (60 * 60 * 24 * 30));    // expires in 30 days
                  setcookie('id_proof', $row['id_proof'], time() + (60 * 60 * 24 * 30));  // expires in 30 days
                  $home_url = 'http://' . $_SERVER['HTTP_HOST'] . '/upsc/home.php';
                  header('Location: ' . $home_url);
                  mysqli_close($dbc);
                  exit();
                  }
                  else {
                  // The username/password are incorrect so set an error message
                  $error_msg = ' "Sorry, you must enter a valid username and password to log in." ';
                  }
                  }else{
                  echo'<div class="alert alert-danger" align="center">You must enter a <b>valid Email format</b>.</div>';
                  }
                  }
                  else {
                  // The username/password weren't entered so set an error message
                  $error_msg = ' "Sorry, you must enter your username and password to log in." ';
                  }
                  
                  }
                   }
                  
                  if (empty($_SESSION['hm_id'])) {
                  if(!empty($error_msg)){
                  echo '<div class="alert alert-danger" align="center"><strong>' . $error_msg . '</strong></div>';
                  $error_msg = "";
                  }
                   ?>
               <div class="col-lg-6">
                  <div class="row">
                     <div class="col-lg-12 text-center">
                        <h2 style="color:#333333">Login</h2>
                        <br><br>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-11">
                        <form action="<?php echo $_SERVER['PHP_SELF'];?>" name="login_form" method="post" autocomplete="off">
                           <div class="row control-group">
                              <div class="form-group col-xs-12 floating-label-form-group controls">
                                 <label>Email Address</label>
                                 <input type="email" class="form-control" name="idproof" value="<?php if (!empty($user_username)) echo $user_username; ?>" maxlength="40" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address." title="Your Email Address" autofocus required="required" />
                                 <p class="help-block text-danger"></p>
                              </div>
                           </div>
                           <div class="row control-group">
                              <div class="form-group col-xs-12 floating-label-form-group controls">
                                 <label>Password</label>
                                 <input type="password" class="form-control" name="password" maxlength="16" placeholder="Password" id="password" required data-validation-required-message="Please enter your password." minlength="8" maxlength="15" title="It should be of 8 to 15  characters" required="required" />
                                 <p class="help-block text-danger"></p>
                              </div>
                           </div>
                           <br><br>
                           <div id="success"></div>
                           <div class="row">
                              <div class="form-group col-xs-12">
                                 <button name="login" type="submit" class="btn btn-success btn-lg" title="Click me, to login into your home page">Go !</button>
                              </div>
                           </div>
                        </form>
                        <br>
                        <br>
                        <br>
                        <br>
                     </div>
                  </div>
               </div>
               <?php
                  }
                  if(!isset($_SESSION['hm_id'])) {
                  ?>
               <div class="col-lg-6">
                  <div class="row">
                     <div class="col-lg-12 text-center">
                        <h2 style="color:#333333">Signup</h2>
                        <br><br>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-11">
                        <form action="<?php echo $_SERVER['PHP_SELF'];?>" name="signup_form" method="post" autocomplete="off">
                           <div class="row control-group">
                              <div class="form-group col-xs-6 floating-label-form-group controls">
                                 <label>First Name</label>
                                 <input type="text" class="form-control" id="firstname" name='firstname' maxlength="20" placeholder="First Name" title="Enter your first name, like :- 'Rahatullah'"  required data-validation-required-message="Please enter your firstname." required/>
                                 <p class="help-block text-danger"></p>
                              </div>
                              <div class="form-group col-xs-6 floating-label-form-group controls">
                                 <label>Last Name</label>
                                 <input type="text" class="form-control" id="lastname" name='lastname' maxlength="20" placeholder="Last Name" title="Enter your last name, like :- 'Ansari'" required data-validation-required-message="Please enter your lastname." required/>
                                 <p class="help-block text-danger"></p>
                              </div>
                           </div>
                           <div class="row control-group">
                              <div class="form-group col-xs-12 floating-label-form-group controls">
                                 <label>Email Address</label>
                                 <input type="email" class="form-control" id="idproof" name='idproof' size="20" maxlength="40" placeholder="Email Address" title="Like :- 'abcd@efgh.ijk'" required data-validation-required-message="Please enter your email address."  required/>
                                 <p class="help-block text-danger"></p>
                              </div>
                           </div>
                           <div class="row control-group">
                              <div class="form-group col-xs-6 floating-label-form-group controls">
                                 <label>Password</label>
                                 <input type="password" class="form-control" id="password1" name='password1' minlength="8" maxlength="15" placeholder="Password" required data-validation-required-message="Please enter your password." required/>
                                 <p class="help-block text-danger"></p>
                              </div>
                              <div class="form-group col-xs-6 floating-label-form-group controls">
                                 <label>Conform Password</label>
                                 <input type="password" class="form-control" name='password2' minlength="8" maxlength="15" placeholder="Conform Password" required data-validation-required-message="Please enter your password." required/>
                                 <p class="help-block text-danger"></p>
                              </div>
                           </div>
                           <br><br>
                           <div id="success"></div>
                           <div class="row">
                              <div class="form-group col-xs-12">
                                 <button name="signup" type="submit" class="btn btn-success btn-lg">Get in !</button>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
               <?php
                  }
                  ?>
            </div>
         </div>
      </div>
   </body>
</html>