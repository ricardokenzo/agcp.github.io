<?php
session_start();
?>


<!DOCTYPE html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<html>
	<head>
		<title>Apps Page</title>
		<!--<link href="Styles/style-apps.css?v=<?php echo time(); ?>" type="text/css" rel="stylesheet"/>-->
		<link rel="stylesheet" type="text/css"
		 href="Styles/style-apps.css?ver=<?php echo rand(111,999)?>">

		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

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


		<div class="App-Header">

			<h1>Project Apps</h1>
		</div>


		<div class="apps-container">

			<div>
				<a class="box" href="https://www.mathworks.com/help/matlab/" rel='noopener noreferrer' target='_blank'>

				<!--<div class="icon"><i class="fa fa-search" aria-hidden="true"></i></div>-->
				
					<div class="icon"><h3>MATLAB</h3><img src="Icons/matlabicon_128.png" width="70" >

					</div>

					<div class="content" >
						<h3>MATLAB</h3>
						<p>A multi-paradigm numerical computing environment and proprietary programming language, allowing multiple function management.</p>
					</div>
				</a>

			</div>
			<div>
				<a class="box" href="https://www.mathworks.com/help/simulink/" rel='noopener noreferrer' target='_blank'>
					<div class="icon"><h3>Simulink</h3><img src="Icons/matlabicon_128.png" width="70">

					</div>
					<div class="content">
						<h3>Simulink</h3>
						<p>A block diagram environment for multidomain simulation and Model-Based Design, with support to system-level design and simulation.</p>
					</div>
				</a>

			</div>
			<div>
				<a class="box" href="https://www.mathworks.com/help/physmod/sm/" rel='noopener noreferrer' target='_blank'>
					<div class="icon"><h3>Simscape</h3><img src="Icons/matlabicon_128.png" width="70">

					</div>
					<div class="content">
						<h3>Simscape Multibody</h3>
						<p>Multibody simulation environment for 3D mechanical systems, such as robots, vehicle suspensions, construction equipment, and aircraft landing gear.</p>
					</div>
				</a>

			</div>

			<div>
				<a class="box" href="http://wiki.ros.org/Documentation" rel='noopener noreferrer' target='_blank'>

					<div class="icon"><h3>ROS</h3><img src="Icons/ROS.png" width="145">

					</div>

					<div class="content">
						<h3>ROS</h3>
						<p>ROS provides services designed for a heterogeneous computer cluster such as hardware abstraction, low-level device control, and package management.</p>
					</div>
				</a>


			</div>

		</div>

		<div class="App-Header2">
			<h1>Website Language Development</h1>
		</div>

		<div class="apps-container2">

			<div>
				<a class="box" href="https://devdocs.io/html/" rel='noopener noreferrer' target='_blank'>
					<div class="icon"><h3>HTML5</h3><img src="Icons/html5.png" width="105">

					</div>
					<div class="content">
						<h3>HTML5</h3>
						<p>Markup programming language used for structuring and presenting content on the World Wide Web.</p>
					</div>

				</a>
			</div>

			<div>
				<a class="box" href="https://devdocs.io/css/" rel='noopener noreferrer' target='_blank'>
					<!--<div class="icon"><i class="fa fa-search" aria-hidden="true"></i></div>-->
					
					<div class="icon"><h3>CSS3</h3><img src="Icons/css3.png" width="105">
					</div>


					<div class="content">
						<h3>CSS3</h3>
						<p>Style sheet language used for describing the presentation of a document written in a markup language like HTML.</p>
					</div>

				</a>
			</div>

			<div>
				<a class="box" href="https://www.php.net/docs.php" rel='noopener noreferrer' target='_blank'>
					<div class="icon"><h3>PHP</h3><img src="Icons/php.png" width="105">

					</div>
					<div class="content">
						<h3>PHP</h3>
						<p>A multi-paradigm numerical computing environment and proprietary programming language.</p>
					</div>

				</a>
			</div>
			<div>
				<a class="box" href="https://devdocs.io/javascript/" rel='noopener noreferrer' target='_blank'>
					<div class="icon"><h3>JavaScript</h3><img src="Icons/js.png" width="87">

					</div>
					<div class="content">
						<h3>JavaScript</h3>
						<p>Is high-level and multi-paradigm programming language with dynamic typing and first-class functions</p>
					</div>

				</a>
			</div>

		</div>


	</body>

	<div id = "footer">
		<div id = "footer-text">
			Copyright &copy; 2020 Florida Poly.
		</div>
	</div>

</html>
