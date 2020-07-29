
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
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<html>
	<head>
		<title>Golf Cart Page</title>
				<link rel="stylesheet" type="text/css"
		 href="Styles/style-golf.css?ver=<?php echo rand(111,999)?>">

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

		<div class="golf-header">
			<h1>Golf Cart Control </h1>
		</div>

		<div class = "content">

			<p>Golf Cart Inputs</p>
				
   			
				<form method="POST">
					<div class="form">
						Direction - F (forward), R (reverse)
						<input type="text" name="direction" placeholder="Direction">
						Speed% <br>
						<input type="range" min="0" max="100" value="50" class="slider" id="myRange" name="slider">

						<p>Value: <span id="demo"></span></p>

						<input type="submit" name="button"  value="Send Direction" class="btn btn-outline-success"/> 	
					</div>
					<br>
				</form>

				<form method="POST">
					<div class="form">
						<br>
						Steering Angle<br>
						<input type="range" min="0" max="100" value="50" class="steering" id="mySteer" name="steering">

						<p>Value: <span id="mysteer"></span></p>

						<input type="submit" name="button1"  value="Send Steering" class="btn btn-outline-success"/> 	
					</div>
					<br>
				</form>
				<form method="POST">
					<div class="form">
						<br>
						Brakin Percentage<br>
						<input type="range" min="0" max="100" value="50" class="braking" id="myBraking" name="braking">

						<p>Value: <span id="mybraking"></span></p>

						<input type="submit" name="button2"  value="Send Braking" class="btn btn-outline-success"/> 	
					</div>
					<br>
				</form>

				<form method="post">
						<input type="submit" name="cut" value="Cut off the power" class="btn btn-danger">
					<div class="light-buttons">
						<input type="submit" name="left" value="Left Turn" class="btn btn-outline-primary">
						<input type="submit" name="headlight" value="Headlight" class="btn btn-outline-warning">
						<input type="submit" name="right" value="Right Turn" class="btn btn-outline-primary">
					</div>
					<div class="light-buttons">
						<input type="submit" name="fourway" value="Four Way" class="btn btn-outline-danger">
						<input type="submit" name="stop" value="Stop All" class="btn btn-danger">
					</div>
				</form>



				<script>
					var slider = document.getElementById("myRange");
					var output = document.getElementById("demo");
					output.innerHTML = slider.value;

					slider.oninput = function() {
					  output.innerHTML = this.value;
					}
				</script>

				<script>
					var slidersteer = document.getElementById("mySteer");
					var outputsteer = document.getElementById("mysteer");
					outputsteer.innerHTML = slidersteer.value;

					slidersteer.oninput = function() {
					  outputsteer.innerHTML = this.value;
					}
				</script>

				<script>
					var sliderbraking = document.getElementById("myBraking");
					var outputbraking = document.getElementById("mybraking");
					outputbraking.innerHTML = sliderbraking.value;

					sliderbraking.oninput = function() {
					  outputbraking.innerHTML = this.value;
					}
				</script>


				<?php
					
    				if(array_key_exists('button', $_POST)){
    					button();
    				}
    				function button(){
    					$direction =  $_REQUEST['direction'] ;
    					$slider = $_REQUEST['slider'];
    					$add = $direction . ":". $slider;

    					echo shell_exec("python client.py $add" );
    				}
    				if(array_key_exists('button1', $_POST)){
    					button1();
    				}
    				function button1(){
    					$steer =  "st:".$_REQUEST['steering'] ;

    					echo shell_exec("python client.py $steer" );
    				}
    				if(array_key_exists('button2', $_POST)){
    					button2();
    				}
    				function button2(){
    					$braking =  "b:".$_REQUEST['braking'] ;

    					echo shell_exec("python client.py $braking" );
    				}
    			?>


				<?php
					if(isset($_POST['cut'])){
						$var = 'S';
						echo shell_exec("python client.py $var" );
					}
					if(isset($_POST['left'])){
						$var = 'LL';
						echo shell_exec("python client.py $var" );
					}
					if(isset($_POST['right'])){
						$var = 'RL';
						echo shell_exec("python client.py $var" );
					}
					if(isset($_POST['headlight'])){
						$var = 'HL';
						echo shell_exec("python client.py $var" );
					}
					if(isset($_POST['fourway'])){
						$var = 'FL';
						echo shell_exec("python client.py $var" );
					}
					if(isset($_POST['stop'])){
						$var = 'SL';
						echo shell_exec("python client.py $var" );
					}
				?>

			</div>
		</div>


	</body>

	<div id = "footer">
		<div id = "footer-text">
			Copyright &copy; 2020 Florida Poly.
		</div>
	</div>

</html>
