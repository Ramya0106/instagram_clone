<?php
    session_start();
    //$username =  $_GET['username'];
    if($_SESSION["firstname"]==NULL)
     {
       header("Location:instagram.html");
     }
?>
<html>
    <head>
        <title>some example</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">
    
        <title>Theme Template for Bootstrap</title>
    
        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Bootstrap theme -->
        <link href="css/bootstrap-theme.min.css" rel="stylesheet">
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    
        <!-- Custom styles for this template -->
        <link href="profile.css" rel="stylesheet">
    
        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
        <script src="js/ie-emulation-modes-warning.js"></script>
        <!-- <script src="js/bootstrap.min.js"></script>
        <script src="js/vendor/jquery.min.js"></script> -->
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="AjaxFileUpload-master/js/jquery-1.11.3-jquery.min.js"></script>
        <!-- <script src="AjaxFileUpload-master/js/script.js"></script> -->
        <script src="postData.js"></script>

        <!-- <script src="postData.php"></script> -->
    </head>
    <body>

    <nav class="navbar navbar-fixed-top hidden-xs" >
      <div class="container">
        <div class="navbar-header">
          <svg aria-label="Instagram" class="_8-yf5 float-left " fill="#262626" height="48" viewBox="0 0 50 48" width="24"><path d="M13.86.13A17 17 0 008 1.26 11 11 0 003.8 4 12.22 12.22 0 001 8.28 18 18 0 00-.11 14.1c-.13 2.55-.13 3.38-.13 9.9s0 7.32.13 9.9A18 18 0 001 39.72 11.43 11.43 0 003.8 44 12.17 12.17 0 008 46.74a17.75 17.75 0 005.82 1.13c2.55.13 3.38.13 9.9.13s7.32 0 9.9-.13a17.82 17.82 0 005.83-1.13A11.4 11.4 0 0043.72 44a11.94 11.94 0 002.78-4.24 17.7 17.7 0 001.13-5.82c.13-2.55.13-3.38.13-9.9s0-7.32-.13-9.9a17 17 0 00-1.13-5.86A11.31 11.31 0 0043.72 4a12.13 12.13 0 00-4.23-2.78A17.82 17.82 0 0033.66.13C31.11 0 30.28 0 23.76 0s-7.31 0-9.9.13m.2 43.37a13.17 13.17 0 01-4.47-.83 7.25 7.25 0 01-2.74-1.79 7.25 7.25 0 01-1.79-2.74 13.23 13.23 0 01-.83-4.47c-.1-2.52-.13-3.28-.13-9.7s0-7.15.13-9.7a12.78 12.78 0 01.83-4.44 7.37 7.37 0 011.79-2.75A7.35 7.35 0 019.59 5.3a13.17 13.17 0 014.47-.83c2.52-.1 3.28-.13 9.7-.13s7.15 0 9.7.13a12.78 12.78 0 014.44.83 7.82 7.82 0 014.53 4.53 13.12 13.12 0 01.83 4.44c.13 2.51.13 3.27.13 9.7s0 7.15-.13 9.7a13.23 13.23 0 01-.83 4.47 7.9 7.9 0 01-4.53 4.53 13 13 0 01-4.44.83c-2.51.1-3.28.13-9.7.13s-7.15 0-9.7-.13m19.63-32.34a2.88 2.88 0 102.88-2.88 2.89 2.89 0 00-2.88 2.88M11.45 24a12.32 12.32 0 1012.31-12.35A12.33 12.33 0 0011.45 24m4.33 0a8 8 0 118 8 8 8 0 01-8-8"></path></svg>
          <img class='navbar-brand ' src="logo.png" alt="">

        </div>
        <ul class="nav navbar-nav">
          <li><a href="instagram1.php"><i class="fa fa-home"></i></a></li>
          <li><a href="#search"><i class="fa fa-search"></i></a></li>
          <li><a href="addPost.php"><i class="fa fa-camera"></i></a></li>
          <li><a href="activity.php" id="noti"></a></li>
          <li><a href="profile.php"><i class="fa fa-fw fa-user"></i></a></li>
        </ul>
        </div>
      </nav>
      <nav class="navbar navbar-fixed-bottom">
          <a href="instagram1.php"><i class="fa fa-home"></i></a>
          <a href="#search"><i class="fa fa-search"></i></a>
          <a href="addPost.php"><i class="fa fa-camera"></i></a>
          <a href="activity.php"><i class="fa fa-envelope"></i></a>
          <a href="profile.php"><i class="fa fa-fw fa-user"></i></a>
      </nav>
     
      <!-- <nav class="navbar navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>

            <svg aria-label="Instagram" class="_8-yf5 float-left" fill="#262626" height="48" viewBox="0 0 50 48" width="24"><path d="M13.86.13A17 17 0 008 1.26 11 11 0 003.8 4 12.22 12.22 0 001 8.28 18 18 0 00-.11 14.1c-.13 2.55-.13 3.38-.13 9.9s0 7.32.13 9.9A18 18 0 001 39.72 11.43 11.43 0 003.8 44 12.17 12.17 0 008 46.74a17.75 17.75 0 005.82 1.13c2.55.13 3.38.13 9.9.13s7.32 0 9.9-.13a17.82 17.82 0 005.83-1.13A11.4 11.4 0 0043.72 44a11.94 11.94 0 002.78-4.24 17.7 17.7 0 001.13-5.82c.13-2.55.13-3.38.13-9.9s0-7.32-.13-9.9a17 17 0 00-1.13-5.86A11.31 11.31 0 0043.72 4a12.13 12.13 0 00-4.23-2.78A17.82 17.82 0 0033.66.13C31.11 0 30.28 0 23.76 0s-7.31 0-9.9.13m.2 43.37a13.17 13.17 0 01-4.47-.83 7.25 7.25 0 01-2.74-1.79 7.25 7.25 0 01-1.79-2.74 13.23 13.23 0 01-.83-4.47c-.1-2.52-.13-3.28-.13-9.7s0-7.15.13-9.7a12.78 12.78 0 01.83-4.44 7.37 7.37 0 011.79-2.75A7.35 7.35 0 019.59 5.3a13.17 13.17 0 014.47-.83c2.52-.1 3.28-.13 9.7-.13s7.15 0 9.7.13a12.78 12.78 0 014.44.83 7.82 7.82 0 014.53 4.53 13.12 13.12 0 01.83 4.44c.13 2.51.13 3.27.13 9.7s0 7.15-.13 9.7a13.23 13.23 0 01-.83 4.47 7.9 7.9 0 01-4.53 4.53 13 13 0 01-4.44.83c-2.51.1-3.28.13-9.7.13s-7.15 0-9.7-.13m19.63-32.34a2.88 2.88 0 102.88-2.88 2.89 2.89 0 00-2.88 2.88M11.45 24a12.32 12.32 0 1012.31-12.35A12.33 12.33 0 0011.45 24m4.33 0a8 8 0 118 8 8 8 0 01-8-8"></path></svg>
            <img class='navbar-brand ' src="logo.png" alt="">

          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="instagram1.php"><i class="fa fa-home"></i></a></li>
              <li><a href="#search"><i class="fa fa-search"></i></a></li>
              <li><a href="addPost.php"><i class="fa fa-camera"></i></a></li>
              <li><a href="activity.php" id="noti"></a></li>
              <li><a href="profile.php"><i class="fa fa-fw fa-user"></i></a></li>
            </ul> -->
          </div><!--/.nav-collapse -->
        <!-- </div>
      </nav> -->
      <div class="container">
        <div class="row ttt"> 
          <div class="col-xs-10 hidden-sm hidden-md hidden-lg hidden-xl">
            <h2 id="username" class="col-xs-10" ><?php echo $_SESSION["firstname"] ?></h2> 
          </div>
          <div class="col-xs-2 hidden-sm hidden-md hidden-lg hidden-xl">
            <i class="glyphicon glyphicon-menu-hamburger dropdown-toggle col-xs-2"  data-toggle="dropdown" style="float:right;"></i>
            <ul class="dropdown-menu">
              <li><a href="logOut.php">Log Out</a></li>
            </ul>        
          </div>
        
 
          <div class="col-xs-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 ">
              <button id="pro" title="change profile photo" data-toggle="modal" data-target="#exampleModalCenter"style="width:100%; height:15%; border-radius:50%; border-color:transparent; outline:none; background-color:transparent;"></button> 
              <div id="err">

              </div>
          </div>
          <section class="col-xs-8 col-sm-10 col-md-10 col-lg-7 col-xl-7">
            <div class="row sec">
              <div class=" col-sm-4 col-lg-4 col-md-4 col-xl-4" style="padding-left:0px">
                <h2 id="username" class="hidden-xs"><?php echo $_SESSION["firstname"] ?></h2> 
              </div>
              <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 hidden-xs"> 
                <button type="button" class="btn btn-light" onclick="location.href='testing.php'">Edit Profile</button>
              </div>
              <div class="col-sm-2 col-md-2 col-lg-2 col-xl-2 hidden-xs">
                <i class="glyphicon glyphicon-menu-hamburger dropdown-toggle "  data-toggle="dropdown" style="float:right;"></i>
                  <ul class="dropdown-menu">
                  <li><a href="logOut.php">Log Out</a></li>
                </ul>
              </div>
            </div>
            <div class="row sec">
              <ul  class="list-inline">
                <li id="post" class="col-sm-4 col-md-4 col-lg-4 col-xl-4" style="font-size:medium; letter-spacing:1px;">posts</li>
                <li id="followers" class="col-sm-4 col-md-4 col-lg-4 col-xl-4" style="font-size:medium; letter-spacing:1px;">followers</li>
                <li id="following" class="col-sm-4 col-md-4 col-lg-4 col-xl-4" style="font-size:medium; letter-spacing:1px;">following</li>                          
              </ul>  
            </div>
            <div id="name" class="row sec">
            
            </div>
          </section>
          <button type="button" class="btn btn-light hidden-sm hidden-sm hidden-md hidden-lg hidden-xl col-xs-12" onclick="location.href='testing.php'" >Edit Profile</button>   
        </div>
        <section>
        <!-- <ul class="nav nav-pills nav-justified ul" role="tablist">
					      <li role="presentation" class="active" id="defaultOpen"><a href="#">Posts</a></li>
                <li role="presentation" class=""><a href="#">Tagged</a></li>
                <li role="presentation" class=""><a href="#">Save</a></li>
              </ul> -->
          <ul class="nav nav-tabs col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 ul">
            <li class="active col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4"><a href="#">Post</a></li>
            <li class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4"><a  href="#">Tagged</a></li>
            <li class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4"><a href="#">Save</a></li>
          </ul>
        </section>
        <section id= "maincontent">
          <div id="x">
          </div>
        </section>

      </div>
  <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/vendor/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
    <script src='getData.js'></script>
    <script src="profile.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>

    <div class="modal fade" id="exampleModalCenter" tabindex="1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

    <form id="form">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="exampleModalLongTitle" style="font-weight:bold; padding-left:33%;">Change Profile Photo</h4>
            </div>
            <div >
              <button type="button" class="btn btn-light" style="width:100%; outline:none; color:blue; font-weight:bold;"> change Profile Photo
              <input id="uploadImage" type="file" accept="image/*" name="image"/>
              <input class="btn btn-success"  type="submit" value="Upload" style="display:none;">
              </button>
            </div>
            <div >
              <button type="submit" class="btn btn-light" style="width:100%; outline:none; color:red; font-weight:bold;" onclick="phpcall()">Remove current Photo</button>
            </div>
            <div class="modal-footer">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="padding-right:45%; outline:none;"> cancel </button> 

              <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
          </div>
        </div>
      
    </form>
</div>
  </body>
    <!-- <script src="testing.js"></script> -->
</html>