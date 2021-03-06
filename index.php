<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$from = 'Demo Contact Form';
		$to = 'jmcaskey@ncsu.edu';
		$subject = 'Message from Contact Demo ';

		$body ="From: $name\n E-Mail: $email\n Message:\n $message";
		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Please enter your name';
		}

		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}

		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Please enter your message';
		}
// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Thank You! I will be in touch</div>';
	} else {
		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
	}
}
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Alberto and Zach Campaign</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script>
    $(document).ready(function () {
      $(document).on("scroll", onScroll);

      //smoothscroll
      $('a[href^="#"]').on('click', function (e) {

        e.preventDefault();

        $(document).off("scroll");

        $('a').each(function () {
            $(this).parent().removeClass('active');
        })

        $(this).parent().addClass('active');

        var target = this.hash,
            menu = target;
        $target = $(target);

        $('html, body').stop().animate({
            'scrollTop': $target.offset().top-50
        }, 1000, 'swing', function () {
            $(document).on("scroll", onScroll);
        });
      });
  });

  function onScroll(event){
    var scrollPos = $(document).scrollTop();
    $('#myNavbar a').each(function () {
        var currLink = $(this);
        var refElement = $(currLink.attr("href"));

        if (refElement.position().top-50 <= scrollPos && refElement.position().top + refElement.height()-50 > scrollPos) {
            $('#myNavbar ul li a').removeClass("active");
            currLink.parent().addClass("active");
        }
        else{
            currLink.parent().removeClass("active");
        }
    });
}
  </script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */

    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    hr {
      height: 24px;
      border-top: 2px solid #999;
      width: 50%;
    }
  </style>
</head>

<body style="margin-left:-20px; margin-right:-40px;">
  <!-- Navbar at top of screen. Currently persistent with scroll -->
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">

        <!-- mobile version of menu. Three span objects make appealing menu button-->
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

        <a class="navbar-brand" href="#">Vote Now!</a>
      </div>

      <!-- List of menu items that will appear at the navbar or in mobile dropdown menu-->
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="#mission">MISSION</a>
          </li>
          <li><a href="#platform">PLATFORM</a>
          </li>
          <li><a href="#profiles">WHO WE ARE</a>
          </li>
          <li><a href="#steps">STEPS</a>
          </li>
          <li><a href="#plan">PLANS</a>
          </li>
          <li><a href="#full-platform">FULL PLATFORM</a>
          </li>
          <li><a href="#email">CONTACT</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container-fluid">

    <div class="row">
      <div class="col-xs-12 col-md-12">
        <!--Carousel Wrapper-->
        <div id="video-carousel" class="carousel slide carousel-fade" data-ride="carousel">
          <!--Slides-->
          <div class="carousel-inner" role="listbox">
            <!-- First slide -->
            <div class="carousel-item active">
              <!--Mask color-->
              <div class="view hm-indigo-light embed-responsive embed-responsive-16by9">
                <!--Video source-->
                <video class="video-fluid" autoplay loop>
                  <source src="https://mdbootstrap.com/img/video/Lines.mp4" type="video/mp4" />
                </video>
                <div class="full-bg-img"></div>
              </div>

              <!--Caption-->
              <div class="carousel-caption">
                <div class="animated fadeInDown">
                  <h1 class="h1-responsive">Alberto and Zach for President</h1>
                  <h3>Vote March 2018</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Rows start here. Each panel shoud be a row-->
    <section id="mission" style="background:#E9967A;">
      <div class="row">
        <div class="col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2 text-center">
          <h1>Our Mission</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2 text-justified">
          <p>NC State University is home to driven, innovative, and outstanding students. This community needs effective leadership, and that is what Alberto and Zach stand for. Currently, there is too much stagnation at the highest levels of student leadership. NC State deserves better, and that is why Alberto and Zach are running. </p>
          <br>
        </div>
      </div>
    </section>

    <section id="platform" style="background:#cccccc;">
      <div class="row">
        <div class="col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2 text-center">
          <h1>Platform Highlights</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2 text-justified">
          <h2 class="text-center">Sample platform item title</h2>
          <p>This text is sample text used to add a visual reference of what a potential platform description would look like on the webpage. Very plain at the moment but we will see what happens after</p>
        </div>
        <hr>
        <br>
      </div>

      <div class="row">
        <div class="col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2 text-justified">
          <h2 class="text-center">Sample platform item title</h2>
          <p>This text is sample text used to add a visual reference of what a potential platform description would look like on the webpage. Very plain at the moment but we will see what happens after</p>
        </div>
        <hr>
        <br>
      </div>
    </section>

    <section id="profiles" style="background:#E9967A;">
      <div class="row">
        <div class="col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2 text-center">
          <h1>Candidate Profiles</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-4 col-xs-offset-2 col-md-4 col-md-offset-2 text-center">
          <img src="https://placehold.it/150x80?text=IMAGE" class="img-circle img-responsive" style="width:100%" alt="Image">
          <h2 class="text-center">Candidate 1</h2>
          <p>This text is sample text used to add a visual reference of what a potential platform description would look like on the webpage. Very plain at the moment but we will see what happens after</p>
          <br>
          <a href="#"><img src="images/fbIcon.png" height="50">
          </a>
          <br>
        </div>
        <div class="col-xs-4 col-md-4 text-center">
          <img src="https://placehold.it/150x80?text=IMAGE" class="img-circle img-responsive" style="width:100%" alt="Image">
          <h2 class="text-center">Candidate 2</h2>
          <p>This text is sample text used to add a visual reference of what a potential platform description would look like on the webpage. Very plain at the moment but we will see what happens after</p>
          <br>
          <a href="#"><img src="images/fbIcon.png" height="50">
          </a>
          <br>
        </div>
      </div>
    </section>

    <section id="steps" style="background:#cccccc;">
      <div class="row">
        <div class="col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2 text-center">
          <h1>steps</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2 text-justified">
          <h2 class="text-center">Sample step item title</h2>
          <p>This text is sample text used to add a visual reference of what a potential platform description would look like on the webpage. Very plain at the moment but we will see what happens after</p>
        </div>
      </div>
      <hr>
      <br>
      <div class="row">
        <div class="col-xs-4 col-xs-offset-1 col-md-4 col-md-offset-1">
          <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
        </div>
        <div class="col-xs-6 col-md-6">
          <h2 class="text-center">Sample step item title</h2>
          <p>This text is sample text used to add a visual reference of what a potential platform description would look like on the webpage. Very plain at the moment but we will see what happens after</p>
        </div>
      </div>
      <hr>
      <br>
    </section>

    <section id="plan" style="background:#E9967A;">
      <div class="row">
        <div class="col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2 text-center">
          <h1>Timeline</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-4 col-xs-offset-1 col-md-4 col-md-offset-1">
          <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
        </div>
        <div class="col-xs-6 col-md-6">
          <h2 class="text-center">Sample timeline item title</h2>
          <p>This text is sample text used to add a visual reference of what a potential platform description would look like on the webpage. Very plain at the moment but we will see what happens after</p>
        </div>
      </div>
      <hr>
      <br>
      <div class="row">
        <div class="col-xs-4 col-xs-offset-1 col-md-4 col-md-offset-1">
          <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
        </div>
        <div class="col-xs-6 col-md-6">
          <h2 class="text-center">Sample timeline item title</h2>
          <p>This text is sample text used to add a visual reference of what a potential platform description would look like on the webpage. Very plain at the moment but we will see what happens after</p>
        </div>
      </div>
      <hr>
      <br>
    </section>

    <section id="full-platform" style="background:#cccccc;">
      <div class="row">
        <div class="col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2 text-center">
          <h1>Full Platform</h1>
        </div>
      </div>

    </section>
    <section id="email" style="background:#E9967A;">
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <h1 class="page-header text-center">Contact</h1>
          <form class="form-horizontal" role="form" method="post" action="index.php">
            <div class="form-group">
              <label for="name" class="col-sm-2 control-label">Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
                <?php echo "<p class='text-danger'>$errName</p>";?>
              </div>
            </div>
            <div class="form-group">
              <label for="email" class="col-sm-2 control-label">Email</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
                <?php echo "<p class='text-danger'>$errEmail</p>";?>
              </div>
            </div>
            <div class="form-group">
              <label for="message" class="col-sm-2 control-label">Message</label>
              <div class="col-sm-10">
                <textarea class="form-control" rows="4" name="message">
                  <?php echo htmlspecialchars($_POST[ 'message']);?>
                </textarea>
                <?php echo "<p class='text-danger'>$errMessage</p>";?>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-10 col-sm-offset-2">
                <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-10 col-sm-offset-2">
                <?php echo $result; ?>
              </div>
            </div>
          </form>
        </div>
      </div>
    </section>

  </div>
</body>
