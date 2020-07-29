<?php
session_start();
?>

<!DOCTYPE html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<html>
	<head>
		<title>Team Page</title>
						<link rel="stylesheet" type="text/css"
		 href="Styles/style-team.css?ver=<?php echo rand(111,999)?>">

	</head>

	<body>
		<div class = "nav-bar-container">
			<div class = "nav-bar">
				<div class="nav-item-left">
					<ul>
						<div class = "nav-item">
							<li><a href="index.php">HOME</a></li>
						</div>

						<div class = "nav-item active-nav-link">
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

	<div class="team-header">
		<h1>Our Team</h1>
	</div>
	<h2>Students</h2>
	<div class="two-column-wrapper">

		<div class="team-img">
			<img src="Images/Eduarda.png">
		</div>
		<div class="team-container">
			<h3>Eduarda Farias</h3>
			<p>
		    I am an undergraduate student pursuing a bachelor’s degree in Electrical Engineering at Florida Polytechnic University. Having a passion for learning and a certain fascination for challenges and problem solving since I was a kid, the STEM field has always sparked great curiosity. As a Research Assistant, the opportunity to develop real-world applications and get hands on experience in particularly amusing fields as robotics and automation has greatly improved my skills and made me sure I am following the right path.
			</p>
		</div>

		<div class="team-img">
			<img src="Images/Ricardo.jpg">
		</div>
		<div class="team-container">
			<h3>Ricardo Ota</h3>
			<p>
			My name is Ricardo Ota and I'm an undergraduate student pursuing a Computer Engineering Bachelors with a concentration in Machine Intelligence. I'm interested in programming and software development, but most of all, I'm passionate in working on the most different projects. With the Autonomous Golf Cart Project, I was able to work on software and website development, as well as working in a team. (I also developed this website and took the headline pictures!).
			</p>
		</div>

		<div class="team-img">
			<img src="Images/James.jpg">
		</div>
		<div class="team-container">
			<h3>James Holland</h3>
			<p>
			Hi! My name is James Holland and I've recently completed my B.S. in Computer Science at Florida Poly! Since my first year at Poly, I have worked with Dr. Sargolzaei as a research assistant. Research has given me an opportunity to explore diverse topics and acquire skills that would be impossible to learn in the classroom. Through the various projects, I was able to find purpose and develop a passion for science and learning overall.</p>
		</div>

		<div class="team-img">
			<img src="Images/Bruce.png">
		</div>
		<div class="team-container">
			<h3>Bruce Hicks</h3>
			<p>My name is Bruce Hicks and I'm currently a junior working towards a B.S. in electrical engineering. I've always had a passion for robotics and automating things to make human life simpler. On top of studying, working on various projects and researching I'm also training for the 2024 Olympics for archery.
			</p>
		</div>
	</div>
		<div class="alumni">
			<h2>Faculty Members </h2>
			<p>Dr. Arman Sargolzaei</p>
			<p>Dr. Onur Toker</p>
			<p>Dr. Mohammad Reza Khalghani</p>

			<h2>Alumni</h2>
			<p>Michael Midence</p>
			<p>Ismael Lopez Sanchez</p>


		</div>


	</body>

	<div id = "footer">
		<div id = "footer-text">
			Copyright &copy; 2020 Florida Poly.
		</div>
	</div>

</html>
