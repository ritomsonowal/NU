<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>NU Sign In</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="https://mdbootstrap.com/previews/templates/landing-page/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://mdbootstrap.com/previews/templates/landing-page/css/mdb.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <style type="text/css">
.form-input{
  text-align: center;
}

iframe:hover{
      transform: scale(1.1);
    }
  </style>
</head>

<body>

<div class="container" id="register">
<div id="outer" style="width: 100%;">
<div id="inner">
<ul class="nav nav-pills md-pills pills-unique" id="pills-tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-signin" role="tab"
      aria-controls="pills-signin" aria-selected="true">SignIn</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-signup" role="tab"
      aria-controls="pills-signup" aria-selected="false">Register</a>
  </li>
</ul>
</div>
</div>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-signin" role="tabpanel" aria-labelledby="pills-signin-tab">Sign In
      <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4 col-sm-12">

          <h5 class="card-header indigo white-text text-center py-4" style="color: red;">
              <strong>Log In to your Profile</strong>
              <hr>
          </h5>

            <div class="card-body px-lg-5 pt-0">

            <?php include('retrive.php'); ?>

              <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="myForm" name="myForm">

                  <div class="md-form">
                      <input type="email" id="email" name="email" class="form-control form-input" style="align-content: center;" value="<?php echo $email ?>">
                      <label for="email">Email</label>
                      <span class="error"><?php echo $emailErr; ?></span>
                  </div>

                  <div class="md-form">
                      <input type="password" id="code" name="code" class="form-control form-input" style="align-content: center;" value="<?php echo $code ?>">
                      <label for="code">Password</label>
                      <span class="error"><?php echo $codeErr; ?></span>
                  </div>

                  <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" onclick="validateForm();" ><strong>Submit</strong></button>
                  <tr>
      				<td>Not a member?</td>
      				<td><a href="signup.php">signup</a></td>
      			</tr>
              </form>
          </div>
      </div>
  </div>
</div>
  <div class="tab-pane fade" id="pills-signup" role="tabpanel" aria-labelledby="pills-signup-tab">Sign up
      <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4 col-sm-12">

          <h5 class="card-header indigo white-text text-center py-4" style="color: red;">
              <strong>Register Here</strong>
              <hr>
          </h5>

            <div class="card-body px-lg-5 pt-0">

            <?php include('process.php'); ?>

              <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="myForm" name="myForm">
                  <div class="md-form">
                      <input type="text" id="name" name="name" class="form-control form-input" style="align-content: center;" value="<?php echo $name ?>">
                      <label for="name">Name</label>
                      <span class="error"><?php echo $nameErr; ?></span>
                  </div>

                  <div class="md-form">
                      <input type="email" id="email" name="email" class="form-control form-input" style="align-content: center;" value="<?php echo $email ?>">
                      <label for="email">Email</label>
                      <span class="error"><?php echo $emailErr; ?></span>
                  </div>

                  <div class="md-form">
                      <input type="text" id="number" name="number" class="form-control form-input" style="align-content: center;" value="<?php echo $number ?>">
                      <label for="number">Phone No</label>
                      <span class="error"><?php echo $numberErr; ?></span>
                  </div>

                  <div class="md-form">
                      <input type="text" id="institute" name="college" class="form-control form-input" style="align-content: center;" value="<?php echo $institute ?>">
                      <label for="institute">Institute</label>
                      <span class="error"><?php echo $instituteErr; ?></span>
                  </div>

                  <div class="md-form">
                      <input type="password" id="code1" name="code1" class="form-control form-input" style="align-content: center;" value="<?php echo $code1 ?>">
                      <label for="code1">Password</label>
                      <span class="error"><?php echo $code1Err; ?></span>
                  </div>

                  <div class="md-form">
                      <input type="password" id="code2" name="code2" class="form-control form-input" style="align-content: center;" value="<?php echo $code2 ?>">
                      <label for="code2">Re-Enter Password</label>
                      <span class="error"><?php echo $code2Err; ?></span>
                  </div>

                  <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" onclick="validateForm();" ><strong>Submit</strong></button>
                  <tr>
                      <td>Already a member?</td>
                      <td><a href="signin.php">signIn</a></td>
                  </tr>
              </form>
          </div>
      </div>
      </div>
  </div>
</div>
</div>

  <!--  JQuery  -->
    <script type="text/javascript" src="https://mdbootstrap.com/previews/templates/landing-page/js/jquery-3.3.1.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.13.1/TweenMax.min.js'></script>
    <!--  Bootstrap tooltips  -->
    <script type="text/javascript" src="https://mdbootstrap.com/previews/templates/landing-page/js/popper.min.js"></script>
    <!--  Bootstrap core JavaScript  -->
    <script type="text/javascript" src="https://mdbootstrap.com/previews/templates/landing-page/js/bootstrap.min.js"></script>
    <!--  MDB core JavaScript  -->
    <script type="text/javascript" src="https://mdbootstrap.com/previews/templates/landing-page/js/mdb.min.js"></script>
  <!-- <script type="text/javascript" src="js/index.js"></script> -->

</body>

</html>
