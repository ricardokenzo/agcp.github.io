<?php
//we need to use sessions, so you should always start sessions using the below code
session_start();

?>

<!DOCTYPE html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<html>
	<head>
		<title>Home Page</title>
				<link rel="stylesheet" type="text/css"
		 href="Styles/style-home.css?ver=<?php echo rand(111,999)?>">

	</head>

	<body>
		<div class = "nav-bar-container">
			<div class = "nav-bar">
				<div class="nav-item-left">
					<ul>
						<div class = "nav-item active-nav-link">
							<li><a href="index.php">HOME</a></li>
						</div>

						<div class = "nav-item ">
							<li><a href="About.php">ABOUT</a>
								<ul>
									<li><a href="About.php ">About the Project</a></li>
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
<!-- php function to check if the user is logged in-->
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

<!-- if the user is not logged in, then show the login button-->
<?php if(!isset($_SESSION['loggedin'])) : ?>

				<div class = "nav-item-right">

					<a hidden href="profile.php">Profile</a>
		    	<!-- login button with js function-->
			    <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">LOGIN</button> 
			  
			    <div id="id01" class="modal"> 
			  
			        <form class="modal-content animate" action="authenticate.php" method="post"> 
			            <div class="imgcontainer"> 
			                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">x</span> 

			            </div> 
			  
			            <div class="container" class="login"> 
			            	<!-- user will be redirected to the authenticate page after submiting the login form, to validade the credentials-->
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

		</div>


		<div class="header">

			<div class="img1-background">
				<div class="text-container">
					<h1>AGCP</h1>
					<h2>Renewable Energy Based Autonomous Golf Cart Project</h2>
				</div>

				
			</div>


		</div>
			
		<div class = "content-wrapper">
			<div class="content1">
				<a href="About.php">About the Project</a>					
			</div>
			<div class="content2">
				<a href="Steps.php">Project Overview</a>
			</div>
			<div class="content3">
				<a href="Team.php">Our Team</a>
					
			</div>

		</div>

	</body>

	<script>
		const portfolioItems = document.querySelectorAll('.portfolio-item-wrapper')

		portfolioItems.forEach(portfolioItem=>{
			portfolioItem.addEventListener('mouseover',()=>{
				portfolioItem.childNodes[1].classList.add('img-darken');
			})
			portfolioItem.addEventListener('mouseout',()=>{
				portfolioItem.childNodes[1].classList.remove('img-darken');
			})
		})
	</script>



	<div id = "footer">
		<div id = "footer-text">
			Copyright &copy; 2020 Florida Poly.
		</div>
	</div>

</html>
