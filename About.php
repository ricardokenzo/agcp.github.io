<?php
session_start();
?>

<!DOCTYPE html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<html>
	<head>
		<title>About Page</title>
				<link rel="stylesheet" type="text/css"
		 href="Styles/style-about.css?ver=<?php echo rand(111,999)?>">


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

<link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400&display=swap" rel="stylesheet">
		<div class="about-header">
			<h1> About The Project </h1>
		</div>
			<div class="about-intro">
				
				<p>Vehicle automation has become an inevitable phenomenon and increasingly close to a worldwide reality. Defined and divided into six different levels by the Society of Automotive
					Engineers (SAE), ranging from “no automation” to “full automation”, driving automation and its applications are already available and are expected to have a significant
					presence in the future. Aiming to be a contribution to the development of this industry, the
					goal of the Autonomous Golf Cart Project is to modify a standard golf cart to implement a
					fully autonomous driving system</p>
			</div>
		<div class="two-column-wrapper">

			
				<div class="about-img1">
				</div>
				<div class="about-container">
					<h3>Basic Approach</h3>
					<p>
					To simplify the modeling process and make it more efficient, the vehicle is divided into subsystems. Each subsystem is modeled individually and the respective models are subsequently combined to form the full cart model. Considering the golf cart specifications and the early stage of the project, the main subsystems implemented were “Vehicle Body”, “Braking” and “Motor/Motor Controller”. The goal of this primary approach is to build a model for a vehicle that accelerates and brakes successfully, following values provided through the ROS network and returning information (such as instantaneous velocity and acceleration) as feedback. Once this basic model for the cart is accomplished, subsystems for “Steering”, “Sensor Data Processing” and “Output Processing” will possibly be added.</p>
				</div>
			
			



			
			<div class="about-container">
				<h3>Simscape</h3>
				<p>Using block diagrams, Simulink allows modeling, simulating and analyzing systems. Within Simulink’s environment, Simscape is an added feature that enables the modeling of physical systems by using blocks that represent physical components with physical connections. Two options were considered when deciding how to approach vehicle modeling on MatLab: taking a strictly equation based approach using basic Simulink blocks or taking a physical modeling approach by integrating Simscape and Simulink. Since using Simscape was significantly more intuitive and allowed a more accurate representation of the actual golf cart systems, the second approach was chosen.</p>
			</div>
			<div class="about-img1">
			</div>


			<div class="about-img3">
			</div>
			<div class="about-container">
				<h3>ROS</h3>
				<p>Performed by a majority of the population on a daily basis, driving seems a reasonably simple task and the series of actions involved can be mindlessly disregarded. However, the complexity of this process becomes clear when trying to implement driving automation and the existence of a network that allows free and organized flow of relevant data through every part of the system unveils as an absolute necessity.
				Among several operating systems, ROS (Robot Operating System) particularly excels in fulfilling this need and is frequently used in driving automation projects. ROS provides several services and is a “distributed framework” that enables not only the design of executables, inside nodes that can be grouped and divided into stacks and packages, but also their communication. In ”Autonomous Golf Cart Navigation Using ROS” [1] the operating system’s unique way of providing a nodal-based system, in which programmers can benefit from a high level of modularity, is described as a keen advantage. It allows parts to be developed and tested independently, making the process more efficient and less time consuming.
				</p>
			</div>
			
			<div class="about-container">
				<h3>Navigation</h3>
				<p>Two of the most imperative factors in allowing the completely autonomous operation of a vehicle are effective localization and navigation, in other words, the vehicle being capable of calculating and recognizing its position within the surrounding environment and capable of choosing and following a path, determining its subsequent steps based on predetermined and/or generated maps, its current localization and acquired sensor data.
				To provide the vehicle with the necessary information, commonly used equipment includes LIDAR, stereo camera, GPS unit, wheel encoders, and inertial measurement units (IMUs). Data provided by GPS units is reported as insufficiently accurate, therefore creating a need for additional sensors, localization approaches or even navigation systems . In “Golf cart Prototype Development and Navigation Simulation Using ROS and Gazebo” [2], a RT3002 navigation system connected to the NI CompactRIO is used, publishing position and velocity values to the higher level controller application with an accuracy of two centimeters, for example.
				</p>
			</div>
			<div class="about-img1">
			</div>


			<div class="about-img1">
			</div>
			<div class="about-container">
				<h3>Safety System</h3>
				<p>A feature present in a great majority of designs analyzed is a safety system, specially dedicated to manage emergency situations, usually allowing the driver (or passengers) to override the autonomous mode. An approach described involves the use of an electromagnetic clutch to enable and disable autonomous steering (not powered while in manual mode and cutting power to the steering servo) and kill switches along with impact sensors, with the purpose of cutting power to the engine and forcing a stop if pressed. Another safety strategy is to determine maximum velocities according to the vehicle’s distance from surrounding objects and reverting the polarity of the motor, causing the vehicle to immediately slow down if an obstacle is identified within a close range [2]. Additional strategies include the use of sounds and visuals to alert the driver, and potentially passengers, of an emergency or malfunction.
				</p>
			</div>


		</div>

		<div class = "end">
			<h4>For more information, please log in.</a></h4>
		</div>

	</body>

	<div id = "footer">
		<div id = "footer-text">
			Copyright &copy; 2020 Florida Poly.
		</div>
	</div>

</html>
