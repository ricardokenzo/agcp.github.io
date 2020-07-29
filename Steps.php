<?php
session_start();
?>

<!DOCTYPE html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<html>
	<head>
		<title>Apps Page</title>
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

						<div class = "nav-item">
							<li><a href="About.php">ABOUT</a>
								<ul>
									<li><a href="About.php">About the Project</a></li>
									<li><a href="Team.php">Our Team</a></li>
									<li><a href="Sponsors.php">Sponsors</a></li>
								</ul>
							</li>
						</div>

						<div class = "nav-item  active-nav-link">
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

<?php if(!isset($_SESSION['loggedin'])) : ?>
		<link rel="stylesheet" type="text/css" href="Styles/style-home.css">

				<div class = "nav-item-right">

					<a hidden href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>


			    <!--Step 1 : Adding HTML-->
			    <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">LOGIN</button> 
			  
			    <div id="id01" class="modal"> 
			  
			        <form class="modal-content animate" action="authenticate.php" method="post"> 
			            <div class="imgcontainer"> 
			                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">x</span> 

			            </div> 
			  
			            <div class="container" class="login"> 
							<form action="authenticate.php" method="post">

				                <label for="username"><b>Username</b></label>
				                <input type="text" placeholder="Enter Username" id="username"name="username" required> 
				  
				                <label for="password"><b>Password</b></label>

				                <input type="password" placeholder="Enter Password" name="password" required> 
				  
				                <button type="submit">Login</button> 
				                <input value="Login" type="checkbox" checked="checked"> Remember me 
			            </div> 

			  
			            <div class="container" style="background-color:#f1f1f1"> 
			                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button> 
			                <span class="psw">Forgot <a href="#">password?</a></span> 
			            </div> 
			        </form> 
			    </div> 
  
    <script> 
        var modal = document.getElementById('id01'); 
        window.onclick = function(event) { 
            if (event.target == modal) { 
                modal.style.display = "none"; 
            } 
        } 
    </script> 
    <?php endif; ?>


	<?php if(isset($_SESSION['loggedin'])) : ?>
		<link rel="stylesheet" type="text/css" href="Styles/style-home.css">
    	<div class = "nav-item-right">
			<div class="nav-item">
				<button onclick="location.href='profile.php'" type="submit" class="profile">PROFILE</button>
			</div>
			<div class="nav-item">
				<button onclick="location.href='logout.php'" type="submit" class="logout">LOGOUT</button>
			</div>
		</div>

    <?php endif; ?>



			</div>
		</div>

		<div class = "content-wrapper">

				<div class = "profile-content-wrapper">


					<p>Step by Step Documentation</p>

				</div>

		</div>


	</body>

	<div id = "footer">
		<div id = "footer-text">
			Copyright &copy; 2020 Florida Poly.
		</div>
	</div>

</html>
