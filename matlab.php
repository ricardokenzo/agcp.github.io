
<?php
//we need to use sessions, so you should always start sessions using the below code
session_start();
//if the user is not logged in redirect to the login page
if(!isset($_SESSION['loggedin'])){
	header('Location: index.php');
	exit;
}
?>


<!DOCTYPE html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<html>
	<head>
		<title>MATLAB Page</title>
		<link rel="stylesheet" type="text/css" href="Styles/style-home.css">
	</head>

	<body>
		<div class = "nav-bar-container">
			<div class = "nav-bar">
				<div class="nav-item-left">
					<ul>
						<div class = "nav-item">
							<li><a href="index.php">HOME</a></li>
						</div>

						<div class = "nav-item ">
							<li><a href="About.php">ABOUT</a>
								<ul>
									<li><a href="About.php">About the Project</a></li>
									<li><a href="Team.php">Our Team</a></li>
									<li><a href="Sponsors.php">Sponsors</a></li>
								</ul>
							</li>
						</div>

						<div class = "nav-item">
							<li><a href="Steps.php">OVERVIEW</a>
								<ul>
									<li><a href="Steps.php">Step by Step</a></li>
									<li><a href="Apps.php">Apps</a></li>
								</ul>
							</li>

						</div>

	<?php if(isset($_SESSION['loggedin'])) : ?>
						<div class = "nav-item">
							<li><a href="Documents.php">DOCUMENTS</a>
								<ul>
									<li><a href="Documents.php">Documents List</a></li>
								</ul>
							</li>

						</div>

						<div class ="nav-item">
							<li><a href="matlab.php">PROJECT</a>
								<ul>
									<li><a href="matlab.php">MATLAB Simulation</a></li>
									<li><a href="golfcart.php">Real Simulation</a></li>
								</ul>
							</li>
						</div>
    <?php endif; ?>

						
					</ul>
				</div>


				<div class = "nav-item-right">
					<div class="nav-item">
						<button onclick="location.href='profile.php'" type="submit" class="profile">PROFILE</button>
					</div>
					<div class="nav-item">
						<button onclick="location.href='logout.php'" type="submit" class="logout">LOGOUT</button>
					</div>
				</div>
			</div>
		</div>

		<div class = "content">

			<p>Cameras and Control</p>


			
			<a href="Matlab/app_testformodel.exe" type="application/octet-stream">Your information about the exe</a>





				




			</div>
		</div>


	</body>

	<div id = "footer">
		<div id = "footer-text">
			Copyright &copy; 2020 Florida Poly.
		</div>
	</div>

</html>
