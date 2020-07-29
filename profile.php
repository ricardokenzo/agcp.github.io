<?php
//we need to use sessions
session_start();
if(!isset($_SESSION['loggedin'])){
	header('Location:index.php');
	exit;
}

$mydata = simplexml_load_file("accounts.xml");

$login = "";
$password = "";
$loginname = "";

for($i = 0; $i < count($mydata); $i++){

    $login = $mydata->login_details[$i]->login;
    $password = $mydata->login_details[$i]->password;
    $loginname = $mydata->login_details[$i]->login_name;
    }

?>

<!DOCTYPE html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<html>
	<head>
		<title>Profile Page</title>
				<link rel="stylesheet" type="text/css"
		 href="Styles/style-home.css?ver=<?php echo rand(111,999)?>">
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
					<div class="nav-item  active-nav-link" >
						<button onclick="location.href='profile.php'" type="submit" class="profile">PROFILE</button>
					</div>
					<div class="nav-item">
						<button onclick="location.href='logout.php'" type="submit" class="logout">LOGOUT</button>
					</div>
				</div>
			</div>
		</div>

		<div class = "profile-content">

				<p>Profile Info</p>
				<div>
					<p>Your account details are below:</p>
					<table>
					<tr>
						<td>Login name:</td>
						<td><?=$loginname?></td>
					</tr>
					<tr>
						<td>Username:</td>
						<td><?=$login?></td>
					</tr>
					<tr>
						<td>Password:</td>
						<td><?=$password?></td>
					</tr>

				</table>
				</div>
				<p> You now have access to the "PROJECT" pages to access the autonomous golf cart model.</p>
				<p> You can also add new documents to the Documents List page </p>
	


		</div>


	</body>

	<div id = "footer">
		<div id = "footer-text">
			Copyright &copy; 2020 Florida Poly.
		</div>
	</div>

</html>

