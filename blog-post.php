<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from 7.pdvop2sz.z8.ru/highland/1.4/blog-post.php by HTTrack Website Copier/3.x [XR&CO'2013], Sat, 15 Mar 2014 23:21:38 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="img/favicon.ico">

    <title>The Highland Template - Blog Post</title>

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
    <!--[if IE]>
    <style>
        .showcase {
             zoom: 0.6;
        }
    </style>
    <![endif]-->
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
                  <li><a href="index-2.php">Home: Default</a></li>
                  <li><a href="index-slider.php">Home: Slider</a></li>
                </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="about-us.php">About Us</a></li>
                  <li><a href="blog.php">Blog</a></li>
                  <li><a href="blog-timeline.php">Blog Timeline</a></li>
                  <li><a href="blog-post.php">Blog Post</a></li>
                  <li><a href="contact.php">Contact Us</a></li>
                  <li><a href="404.php">Error 404</a></li>
                  <li><a href="faq.php">FAQ</a></li>
                  <li><a href="gallery-text.php">Gallery Text Blocks</a></li>
                  <li><a href="gallery-bubbles.php">Gallery Bubbles</a></li>
                  <li><a href="gallery-item.php">Gallery Item</a></li>
                  <li><a href="pricing.php">Pricing</a></li>
                  <li><a href="team.php">Our Team</a></li>
                  <li class="divider"></li>
                  <li><a href="profile.php">Profile</a></li>
                  <li><a href="edit-profile.php">Edit Profile</a></li>
                  <li><a href="inbox.php">Inbox</a></li>
                  <li><a href="inbox-dialog.php">Inbox - Dialog</a></li>
                  <li><a href="signin.php">Sign In</a></li>
                  <li><a href="signup.php">Sign up</a></li>
                </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">UI Elements <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="ui-elements.php#buttons">Buttons</a></li>
                  <li><a href="ui-elements.php#panels">Panels</a></li>
                  <li><a href="ui-elements.php#info-boards">Info Boards</a></li>
                  <li><a href="ui-elements.php#navs">Navs</a></li>
                  <li><a href="ui-elements.php#alerts">Alerts</a></li>
                  <li><a href="ui-elements.php#thumbnails">Thumbnails</a></li>
                  <li><a href="ui-elements.php#social">Social Icons</a></li>
                  <li><a href="ui-elements.php#section-header">Section Header</a></li>
                  <li><a href="ui-elements.php#page-tip">Page Tip</a></li>
                  <li><a href="ui-elements.php#block-header">Block Header</a></li>
                </ul>
            </li>
            <li class="dropdown active hidden-sm">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="blog.php">Blog</a></li>
                  <li><a href="blog-timeline.php">Blog Timeline</a></li>
                  <li><a href="blog-post.php">Blog Post</a></li>
                </ul>
            </li>
            <li class="dropdown hidden-sm">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Gallery <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="gallery-text.php">Gallery Text Blocks</a></li>
                  <li><a href="gallery-bubbles.php">Gallery Bubbles</a></li>
                  <li><a href="gallery-item.php">Gallery Item</a></li>
                </ul>
            </li>
            <li class="hidden-sm hidden-md"><a href="contact.php">Contact us</a></li>
            <!-- Profile links for extra small screens -->
            <li class="visible-xs"><a href="signin.php">Sign In</a></li>
            <li  class="visible-xs"><a href="signout.php">Sign Out</a></li>
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
            <li id="signup" class="show"><a href="signup.php">Sign Up</a></li>
            <li id="signin" class="show"><a href="signin.php">Sign In</a></li>
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
                  <p><b>Administrator</b><br />admin@mysite.com</p>
                  <p><a href="profile.php">Profile</a> | <a href="signout.php" id="sign-out">Sign out</a></p>
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
    <div class="section-header">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <!-- Remove the .animated class if you don't want things to move -->
            <h1 class="animated slideInLeft"><span>Blog Post</span></h1>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-sm-8">
          <!-- Blog Post -->
          <h4><a href="blog-post.php">HighLand - a new responsive Bootstrap 3 template</a></h4>
          <ul class="text-muted list-inline">
            <li><i class="fa fa-user"></i> <a href="profile.php">Administrator</a></li>
            <li><i class="fa fa-calendar"></i> November 10, 2013</li>
            <li><i class="fa fa-comments-o"></i> 21 comments</li>
          </ul>
          <hr>
          <p class="blog-text">
            <img class="pull-right img-responsive blog-img" alt="..." src="img/works1.jpg">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc consectetur urna at neque mollis sagittis. Vivamus viverra justo in dui vulputate tincidunt in eu magna. Ut ut risus pretium, varius felis a, congue metus. Nam aliquam pretium eros, et venenatis sapien porttitor at. Nunc bibendum ipsum sit amet euismod sodales. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam varius justo sed velit dictum feugiat. Sed tempus eros quis eleifend posuere. Fusce tempus euismod sem vitae porta. Vestibulum eget mi suscipit, ultrices turpis quis, ultricies ipsum. Pellentesque et facilisis odio. Vivamus et mauris consequat, rhoncus risus vitae, porttitor dui.
            <br /><br />
            Maecenas non laoreet ipsum, id mattis nunc. Vestibulum viverra sapien a porta venenatis. Morbi in dignissim quam, eu malesuada lorem. Integer quis cursus ligula. Proin elementum, massa egestas rhoncus blandit, tortor mauris pellentesque eros, eget volutpat ligula nunc quis sapien. Integer eget cursus turpis. Sed non aliquam odio. Nullam et arcu sed felis interdum aliquam. Fusce euismod, mauris non lacinia porttitor, enim tortor porttitor diam, sit amet fringilla felis orci bibendum erat. Praesent lectus mauris, volutpat eu blandit auctor, varius faucibus est.
          </p>
          <!-- New comment form -->
          <div class="new-comment">
            <form class="form-horizontal" role="form">
              <div class="form-group">
                <div class="col-sm-2 hidden-xs">
                  <img src="img/face1.jpg" alt="..." class="img-responsive">
                </div>
                <div class="col-sm-10">
                  <textarea class="form-control" rows="3" placeholder="Leave a message..."></textarea>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-dark btn-sm">Post comment</button>
                </div>
              </div>
            </form>
          </div>
          <!-- Comments list -->
          <h4>21 comments</h4>
          <hr>
          <div class="comment">
            <div class="media">
              <a class="pull-left" href="#">
                <img class="media-object" src="img/face2.jpg" alt="...">
              </a>
              <div class="media-body">
                <p><a href="profile.php">Username</a></p>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc consectetur urna at neque mollis sagittis. Vivamus viverra justo in dui vulputate tincidunt in eu magna. Ut ut risus pretium, varius felis a, congue metus.
                </p>
                <ul class="text-muted list-inline">
                  <li><i class="fa fa-clock-o"></i> 20 minutes ago</li>
                  <li><i class="fa fa-cog"></i> <a href="#">Edit</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="comment">
            <div class="media">
              <a class="pull-left" href="#">
                <img class="media-object" src="img/face3.jpg" alt="...">
              </a>
              <div class="media-body">
                <p><a href="profile.php">Username 2</a></p>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc consectetur urna at neque mollis sagittis. Vivamus viverra justo in dui vulputate tincidunt in eu magna. Ut ut risus pretium, varius felis a, congue metus.
                </p>
                <ul class="text-muted list-inline">
                  <li><i class="fa fa-clock-o"></i> 1 hour ago</li>
                  <li><i class="fa fa-cog"></i> <a href="#">Edit</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="comment">
            <div class="media">
              <a class="pull-left" href="#">
                <img class="media-object" src="img/face4.jpg" alt="...">
              </a>
              <div class="media-body">
                <p><a href="profile.php">Username 3</a></p>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc consectetur urna at neque mollis sagittis. Vivamus viverra justo in dui vulputate tincidunt in eu magna. Ut ut risus pretium, varius felis a, congue metus.
                </p>
                <ul class="text-muted list-inline">
                  <li><i class="fa fa-calendar"></i> 11/10/2013</li>
                  <li><i class="fa fa-cog"></i> <a href="#">Edit</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <!-- Social Links -->
          <h3 class="hl">Bookmark</h3>
          <hr>
          <div class="social-icons social-icons-default">
            <ul>
                <li class="rss"><a href="#"><i class="fa fa-rss"></i></a></li>
                <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                <li class="github"><a href="#"><i class="fa fa-github"></i></a></li>
                <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li class="vk"><a href="#"><i class="fa fa-vk"></i></a></li>
                <li class="plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li class="dropbox"><a href="#"><i class="fa fa-dropbox"></i></a></li>
                <li class="vimeo"><a href="#"><i class="fa fa-vimeo-square"></i></a></li>
            </ul>
            <div class="clearfix"></div>
          </div>

          <!-- Tags -->
          <h3 class="hl">Story tags</h3>
          <hr>
          <p class="tags">
            <a href="#">Bootstrap</a>
            <a href="#">HTML5</a>
            <a href="#">Highland</a>
            <a href="#">Blog post</a>
            <a href="#">CSS3</a>
            <a href="#">jQuery</a>
          </p>
          <br />
          
          <!-- Recently Added -->
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Recently Added</h3>
            </div>
            <div class="panel-body">
              <div class="recent-blogs">
                <ul>
                  <li><a href="blog-post.php" class="new-story">HighLand - a new responsive Bootstrap 3 template</a></li>
                  <li><a href="blog-post.php" class="new-story">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a></li>
                  <li><a href="blog-post.php">Nulla dapibus lorem sed felis placerat fringilla</a></li>
                  <li><a href="blog-post.php">Praesent eget nibh quis arcu iaculis commodo et at lectus</a></li>
                  <li><a href="blog-post.php">Etiam a enim ut odio laoreet viverra</a></li>
                </ul>
              </div>
            </div>
          </div>
          
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
          <div class="headline"><h3>Contact us</h3></div>
          <div class="content">
            <p>
            San Francisco, CA 94101<br />
            1987 Lincoln Street<br />
            Phone: +0 000 000 00 00<br />
            Fax: +0 000 000 00 00<br />
            Email: <a href="#">admin@mysite.com</a>
            </p>
          </div>
        </div>
        <!-- Social icons 
        ===================== -->
        <div class="col-sm-4">
          <div class="headline"><h3>Go Social</h3></div>
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
          <div class="headline"><h3>Subscribe</h3></div>
          <div class="content">
            <p>Enter your e-mail below to subscribe to our free newsletter.<br />We promise not to bother you often!</p>
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
          <p>&copy; The Highland 2013. <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a></p>
        </div>
      </div>
    </div>
  </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../../../ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/scrolltopcontrol.js"></script><!-- Scroll to top javascript -->
  </body>

<!-- Mirrored from 7.pdvop2sz.z8.ru/highland/1.4/blog-post.php by HTTrack Website Copier/3.x [XR&CO'2013], Sat, 15 Mar 2014 23:21:38 GMT -->
</html>