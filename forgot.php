<?php
  require_once("config.php");

 
  if(isset($_POST['submit'])){
        //d($_POST,1);
        $user_name    = mysql_real_escape_string(trim($_POST['myusername']));
        
        $sql    = sprintf("SELECT *FROM users WHERE LOWER(user_name)='%s' OR email='%s'",strtolower($user_name),strtolower($user_name));
        $result = mysql_query($sql);
        $user   = mysql_fetch_object($result);
        mysql_free_result($result);
        if(isset($user->user_name)){
            $recovery_code = md5(md5($user->user_name.rand(0,99999)));
            if(mysql_query("UPDATE users SET recovery_code='".$recovery_code."' WHERE user_id='".$user->user_id."'")){
                $email = $user->email;
                $fname = $user->fname;

                $subject = 'Welcome to filmpact.com! Reset your password';

                // message
                $message = '
                <html>
                <head>
                  <title>filmpact.com Reset Password</title>
                </head>
                <body>
                  <p>Please click the following link to reset your filmpact.com password.</p>
                   <a href="http://'.$_SERVER["SERVER_NAME"].'/recovery.php?code='.$recovery_code.'">Click Here</a> or copy the following link into your browser & go <br/>
                   http://'.$_SERVER["SERVER_NAME"].'/recovery.php?code='.$recovery_code.'
                </body>
                </html>
                ';

                // To send HTML mail, the Content-type header must be set
                $headers  = 'MIME-Version: 1.0' . "\r\n";
                $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

                // Additional headers
                $headers .= 'To: '.$fname.' <'.$email.'>' . "\r\n";
                $headers .= 'From: filmpact.com <info@filmpact.com>' . "\r\n";

                // Mail it
                @mail($email, $subject, $message, $headers);

                $success_message[] = "<h3 style='color:green'>We have sent a mail to reset your password.</h3>";
                setFlashData("success_message",$success_message);
            }else{
                $error_message[] = "<h3 style='color:red'>We could not sent mail right now. please try again later.</h3>";
                setFlashData("error_message",$success_message);
            }
        }else{
          $error_message[] = "<h3 style='color:red'>Invalid Username or Email</h3>";
          setFlashData("error_message",$success_message);
        }
    
    }
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from 7.pdvop2sz.z8.ru/highland/1.4/signup.php by HTTrack Website Copier/3.x [XR&CO'2013], Sat, 15 Mar 2014 23:21:45 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="img/favicon.ico">

    <title>FilmPact</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/animate.css" />
    <link rel="stylesheet" type="text/css" href="css/elements.css" />
    <link rel="stylesheet" type="text/css" href="css/custom.css" />
    <link href="fonts/font-awesome-4.0.3/css/font-awesome.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css" />
</head>

<body>

    <!-- Navbar
    ============= -->
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index-2.php">The Highland</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Home <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="index-2.php">Home: Default</a>
                            </li>
                            <li><a href="index-slider.php">Home: Slider</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown active">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="about-us.php">About Us</a>
                            </li>
                            <li><a href="blog.php">Blog</a>
                            </li>
                            <li><a href="blog-timeline.php">Blog Timeline</a>
                            </li>
                            <li><a href="blog-post.php">Blog Post</a>
                            </li>
                            <li><a href="contact.php">Contact Us</a>
                            </li>
                            <li><a href="404.php">Error 404</a>
                            </li>
                            <li><a href="faq.php">FAQ</a>
                            </li>
                            <li><a href="gallery-text.php">Gallery Text Blocks</a>
                            </li>
                            <li><a href="gallery-bubbles.php">Gallery Bubbles</a>
                            </li>
                            <li><a href="gallery-item.php">Gallery Item</a>
                            </li>
                            <li><a href="pricing.php">Pricing</a>
                            </li>
                            <li><a href="team.php">Our Team</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="profile.php">Profile</a>
                            </li>
                            <li><a href="edit-profile.php">Edit Profile</a>
                            </li>
                            <li><a href="inbox.php">Inbox</a>
                            </li>
                            <li><a href="inbox-dialog.php">Inbox - Dialog</a>
                            </li>
                            <li><a href="signin.php">Sign In</a>
                            </li>
                            <li><a href="signup.php">Sign up</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">UI Elements <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="ui-elements.php#buttons">Buttons</a>
                            </li>
                            <li><a href="ui-elements.php#panels">Panels</a>
                            </li>
                            <li><a href="ui-elements.php#info-boards">Info Boards</a>
                            </li>
                            <li><a href="ui-elements.php#navs">Navs</a>
                            </li>
                            <li><a href="ui-elements.php#alerts">Alerts</a>
                            </li>
                            <li><a href="ui-elements.php#thumbnails">Thumbnails</a>
                            </li>
                            <li><a href="ui-elements.php#social">Social Icons</a>
                            </li>
                            <li><a href="ui-elements.php#section-header">Section Header</a>
                            </li>
                            <li><a href="ui-elements.php#page-tip">Page Tip</a>
                            </li>
                            <li><a href="ui-elements.php#block-header">Block Header</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown hidden-sm">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="blog.php">Blog</a>
                            </li>
                            <li><a href="blog-timeline.php">Blog Timeline</a>
                            </li>
                            <li><a href="blog-post.php">Blog Post</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown hidden-sm">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Gallery <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="gallery-text.php">Gallery Text Blocks</a>
                            </li>
                            <li><a href="gallery-bubbles.php">Gallery Bubbles</a>
                            </li>
                            <li><a href="gallery-item.php">Gallery Item</a>
                            </li>
                        </ul>
                    </li>
                    <li class="hidden-sm hidden-md"><a href="contact.php">Contact us</a>
                    </li>
                    <!-- Profile links for extra small screens -->
                    <li class="visible-xs"><a href="signin.php">Sign In</a>
                    </li>
                    <li class="visible-xs"><a href="signout.php">Sign Out</a>
                    </li>
                </ul>
                <!-- Search form for extra small screens -->
                <form class="navbar-form navbar-left visible-xs" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-blue">Go!</button>
                </form>
                <ul class="nav navbar-nav navbar-right hidden-xs">
                    <!-- Sign in & Sign up -->
                    <li id="signup" class="show"><a href="signup.php">Sign Up</a>
                    </li>
                    <li id="signin" class="show"><a href="signin.php">Sign In</a>
                    </li>
                    <!-- Signed in. Profile Menu -->
                    <li id="cogs-menu" class="hidden">
                        <a href="edit-profile.php">
                            <i class="fa fa-gears fa-lg"></i>
                        </a>
                    </li>
                    <li id="profile-menu" class="dropdown hidden">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Administrator <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class="account">
                                <div class="avatar"></div>
                                <p><b>Administrator</b>
                                    <br />admin@mysite.com</p>
                                <p><a href="profile.php">Profile</a> | <a href="signout.php" id="sign-out">Sign out</a>
                                </p>
                                <div class="clearfix"></div>
                            </li>
                        </ul>
                    </li>
                    <!-- Search Button -->
                    <li id="search">
                        <a href="#" id="search-btn"><i class="fa fa-search" id="search-icon"></i> Search</a>
                        <div class="search-box hidden" id="search-box">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">Go!</button>
                                </span>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Main body
================== -->

    <div class="wrapper">
        <!-- Page Tip -->
        <div class="page-tip animated slideInDown">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <p>Fill out the form below to sign up.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Form -->
        <div class="container">

            <?php include "alert_message.php"; ?>
            
            <div class="row">
                <div class="col-md-4 col-md-offset-4 signup">
                    <h3 class="hl top-zero">Recover Password</h3>
                    <hr>
                    <form role="form" method="post" action="forgot.php">
                        
                        <div class="form-group">
                            <input type="text"  required class="form-control" id="myusername" name="myusername" placeholder="Username or Email" data-toggle="popover" data-placement="left" data-trigger="focus" data-content="Enter your nickname here." data-original-title="Username">
                        </div>
                        
                        <button type="submit" class="btn btn-green" name="submit">Recover</button> &nbsp; &nbsp; <a href="signin.php" class="btn btn-warning">Back To Sign In</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Foooter
================== -->
    <footer>
        <div class="container">
            <div class="row">
                <!-- Contact Us 
        =================  -->
                <div class="col-sm-4">
                    <div class="headline">
                        <h3>Contact us</h3>
                    </div>
                    <div class="content">
                        <p>
                            San Francisco, CA 94101
                            <br />1987 Lincoln Street
                            <br />Phone: +0 000 000 00 00
                            <br />Fax: +0 000 000 00 00
                            <br />Email: <a href="#">admin@mysite.com</a>
                        </p>
                    </div>
                </div>
                <!-- Social icons 
        ===================== -->
                <div class="col-sm-4">
                    <div class="headline">
                        <h3>Go Social</h3>
                    </div>
                    <div class="content social">
                        <p>Stay in touch with us:</p>
                        <ul>
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-youtube"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-github"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-vk"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <!-- Subscribe 
        =============== -->
                <div class="col-sm-4">
                    <div class="headline">
                        <h3>Subscribe</h3>
                    </div>
                    <div class="content">
                        <p>Enter your e-mail below to subscribe to our free newsletter.
                            <br />We promise not to bother you often!</p>
                        <form class="form" role="form">
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <label class="sr-only" for="subscribe-email">Email address</label>
                                        <input type="email" class="form-control" id="subscribe-email" placeholder="Enter email">
                                        <span class="input-group-btn">
                                            <button type="submit" class="btn btn-default">OK</button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Legal 
  ============= -->
    <div class="legal">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <p>&copy; The Highland 2013. <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/scrolltopcontrol.js"></script>
    <!-- Scroll to top javascript -->
</body>

<!-- Mirrored from 7.pdvop2sz.z8.ru/highland/1.4/signup.php by HTTrack Website Copier/3.x [XR&CO'2013], Sat, 15 Mar 2014 23:21:45 GMT -->

</html>