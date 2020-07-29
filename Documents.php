<?php
//we need to use sessions, so you should always start sessions using the below code
session_start();
//if the user is not logged in redirect to the login page
/*if(!isset($_SESSION['loggedin'])){
	header('Location: Documents.html');
	exit;
}*/
if(!isset($_SESSION['loggedin'])){
	header('Location: index.php');
	exit;
}

?>
<!DOCTYPE html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<html>
	<head>
		<title>Documents Page</title>
						<link rel="stylesheet" type="text/css"
		 href="Styles/style-docs.css?ver=<?php echo rand(111,999)?>">
	</head>

	<body>
		<div class = "nav-bar-container">
			<div class = "nav-bar">
				<div class="nav-item-left">
					<ul>
						<div class = "nav-item">
							<li><a href="index.php">HOME</a></li>
						</div>

						<div class = "nav-item">
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


		<div class="doc-header">
			<h1> Documents List </h1>
		</div>

		<div class = "profile-content-wrapper">


			<div class = "doc-list">
			<?php
				$resource = opendir("Documents/");
				while(($entry = readdir($resource)) !== FALSE){
					if ($entry != '.' && $entry != '..'){
						//echo $entry."<br/>";
						echo"<img src='Images/PDF.png' width='5%'>";
						echo"<a rel='noopener noreferrer' target='_blank' href='Documents/".$entry."' >$entry</a><br/> ";


					}
				}
				//echo "<a href='Documents/Autonomous_Golf_Cart_ROS_Manual.pdf'></a>";

			?>
			</div>

			<?php if(isset($_SESSION['loggedin'])) : ?>


				<?php 
					if(isset($_GET['message'])){
						$message=$_GET['message'];
						echo $message;
					}?>
			<br>
			<div class = "submitform">
				<p> As you are logged in, you can use the form below to upload a document to the list </p>
				
				<form name="form" method="post" action="UpDoc.php" enctype="multipart/form-data" >
				<input type="file" name="my_file" required/><br /><br />
				<input type="submit" name="submit" value="Upload"/>

				</form>
			</div>


			<?php endif; ?>

		</div>



	</body>
	
	<div id = "footer">
		<div id = "footer-text">
			Copyright &copy; 2020 Florida Poly.
		</div>
	</div>

</html>
