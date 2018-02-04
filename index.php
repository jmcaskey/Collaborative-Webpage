<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$from = 'Demo Contact Form'; 
		$to = 'example@domain.com'; 
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

<body style="margin-left:-20px; margin-right:-20px;">
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

        <a class="navbar-brand" href="#">Logo photo</a>
      </div>

      <!-- List of menu items that will appear at the navbar or in mobile dropdown menu-->
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Link1</a>
          </li>
          <li><a href="">Link2</a>
          </li>
          <li><a href="">Link3</a>
          </li>
          <li><a href="">Link4</a>
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
              <div class="view hm-indigo-light">
                <!--Video source-->
                <video class="video-fluid" autoplay loop>
                  <source src="https://mdbootstrap.com/img/video/Lines.mp4" type="video/mp4" />
                </video>
                <div class="full-bg-img"></div>
              </div>

              <!--Caption-->
              <div class="carousel-caption">
                <div class="animated fadeInDown">
                  <h3 class="h3-responsive">Alberto and Zach for President</h3>
                  <p>Vote March 2018</p>
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
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur? At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere
          </p>
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
