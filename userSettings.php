<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Blue Rise - My Settings</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="lib/css/bootstrap.css" rel="stylesheet">
	<link href="lib/css/flat-ui.css" rel="stylesheet">
	<link rel="shortcut icon" href="lib/images/favicon.ico">
	<link href="lib/css/bootstrap-responsive.css" rel="stylesheet">
	<style type="text/css">
	  body {
		padding-top: 20px;
		padding-bottom: 40px;
	  }
	
	  /* Custom container */
	  .container-narrow {
		margin: 0 auto;
		max-width: 700px;
	  }
	  .container-narrow > hr {
		margin: 30px 0;
	  }
	
	  /* Main marketing message and sign up button */
	  .jumbotron {
		margin: 60px 0;
		text-align: center;
	  }
	  .jumbotron h1 {
		font-size: 72px;
		line-height: 1;
	  }
	  .jumbotron .btn {
		font-size: 21px;
		padding: 14px 24px;
	  }
	
	  /* Supporting marketing content */
	  .marketing {
		margin: 60px 0;
	  }
	  .marketing p + h4 {
		margin-top: 28px;
	  }
	</style>
</head>

<body>	
	<h1 class="demo-panel-title offset1">BlueRise</h1>

	<div class="navbar navbar-inverse offset1">
		<div class="navbar-inner" style="width:1048px;">
			<div class="container">
				<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<div class="nav-collapse collapse">
					<ul class="nav">
						<li>
							<a href="index.html">
								Home
								<span class="navbar-unread">1</span>
							</a>
						</li>
						<li>
							<a href="support.html">
								Support
								<span class="navbar-unread">1</span>
							</a>
						</li>
						
						<li>
							<a href="#">
								How It Works
								<span class="navbar-unread">1</span>
							</a>
						</li>
						<li>
							<a href="#">
								About Us
								<span class="navbar-unread">1</span>
							</a>
						</li>
					</ul><!--navlist-->
				</div><!--/.nav-collapse -->
			</div><!--container-->
		</div><!--navbar-inner-->
	</div><!--navbar-inverse-->

	<form method="post" action="userSettingsAction.php">
		<div class="container">
			<!-- <?php
			$email = $_SESSION['username'];
			$sql = "SELECT * FROM user WHERE username = '$email'";
			$result = mysqli_query($con, $sql);
			$row = mysqli_fetch_array($result);
			$organization = $row['organization'];
			$website = $row['website'];
			$about = $row['about'];
			$receive_notification = $row['receive_notification'];
			?> -->
			<h3 class="demo-panel-title offset1">Basic Info</h3>
			<div class="row demo-row">
				<div class="span3 offset2">
					<input name="email" type="text" disabled="disabled" value="<?php echo $email; ?>" placeholder="meow@meow.com" class="span3" />
				</div>
				<div class="span3">
					<a href="#" class="btn btn-large btn-block btn-info">Change Password</a>
				</div>
			</div>
			
			<h3 class="demo-panel-title offset1">Detailed Info</h3>
			<div class="row demo-row">
				<div class="span3 offset2">
					<input name="organization" type="text" value="<?php echo $organization; ?>" placeholder="Organization" class="span3" />
					<input name="website" type="text" value="<?php echo $website; ?>" placeholder="Website" class="span3" />
				</div>
				<div class="span8 offset2">
					<textarea name="about" value="<?php echo $about; ?>" placeholder="About" rows="5" class="span8"></textarea>
				</div>
			</div>
			
			<h3 class="demo-panel-title offset1">Communication Settings</h3>
			<div class="row demo-row">
				<div class="span6 offset2">
					<?php
						if ($receive_notification) {
					?>
						<label class="checkbox checked" for="receive-email">
							<span class="icon"></span>
							<span class="icon-to-fade"></span>
							<input name="receive_notification" check type="checkbox" value id="receive-email">Receive notifications
						</label>
					<?php
						}
						else {
					?>
						<label class="checkbox" for="receive-email">
							<span class="icon"></span>
							<span class="icon-to-fade"></span>
							<input name="receive_notification" type="checkbox" value id="receive-email">Receive notifications
						</label>
					<?php } ?>
				</div>
			</div>

			<div class="row demo-row"></div>

			<div class="row demo-row">
				<div class="span3 offset2">
					<input type="submit" class="btn btn-large btn-block btn-success" value="Save">
				</div>
				<div class="span3 offset1">
					<a href="deleteAccount.php" class="btn btn-large btn-block btn-danger">Delete Account</a>
				</div>
			</div>

			<div class="row demo-row"></div>
		</div><!--container-->
	</form>
	
	<footer class="offset1"style="width:1048px;white-space:nowrap;">
		<div class="container"style="width:1048px;white-space:nowrap;">
			<div class="row">
				<table class="span12">
					<div class="span2"><a href="#">site map</a></div>
					<div class="span2"><a href="#">Join us</a></div>
					<div class="span2"><a href="#">Privacy policy</a></div>
					<div class="span2"><a href="#">Team of use</a></div>
					<div class="span2"><a href="#">contact</a></div>
					<div class="span12">
					<h4>Where the Internet of things is being built</h4>
					<p>Connect devices and apps on the BlueRise platform,
						exchange data and ideas with developers, and bring smart
						products to the world!</p>
					</div>
				</table>
			</div>
		</div>
	</footer>

	<script src="lib/js/jquery-1.8.2.min.js"></script>
	<script src="lib/js/jquery-ui-1.10.0.custom.min.js"></script>
	<script src="lib/js/jquery.dropkick-1.0.0.js"></script>
	<script src="lib/js/custom_checkbox_and_radio.js"></script>
	<script src="lib/js/custom_radio.js"></script>
	<script src="lib/js/jquery.tagsinput.js"></script>
	<script src="lib/js/bootstrap-tooltip.js"></script>
	<script src="lib/js/jquery.placeholder.js"></script>
	<script src="http://vjs.zencdn.net/c/video.js"></script>
	<script src="lib/js/application.js"></script>
	<script src="lib/js/jquery.js"></script>
	<script src="lib/js/bootstrap-transition.js"></script>
	<script src="lib/js/bootstrap-collapse.js"></script>
	<!--[if lt IE 8]>
	  <script src="js/icon-font-ie7.js"></script>
	  <script src="js/icon-font-ie7-24.js"></script>
	<![endif]-->
	<script type="text/javascript">
	  var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
	  document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
	<script type="text/javascript">
	  try{
		var pageTracker = _gat._getTracker("UA-19972760-2");
		pageTracker._trackPageview();
		} catch(err) {}
	</script>
</body>
</html>