
<?php
	session_start();
?>


<link rel="stylesheet" href="/src/css/navbar.css">


<ul class="topnav">
	<li><a href="home.php">Home</a></li>
	
	<li><a href="about.php">About</a></li>
	
	<li class="dropdown">
		<a href="javascript:void(0)" class="dropbtn">Dropdown</a>
		<div class="dropdown-content">
			<a href="#">Link 1</a>
			<a href="#">Link 2</a>
			<a href="#">Link 3</a>
		</div>
	</li>
	
	<li><a href="#contact">Contact</a></li>
	
	<?php if (isset($_SESSION['id'])) { ?>
		
		<li class="right"><a href="logout.php">Logout</a></li>
		<li class="right"><a href="_user/home.php"><?=$_SESSION['username'];?></a></li>
		
		<?php if ($_SESSION['level'] == 2) { ?>
			
			<li class="right"><a href="_administration/home.php">Administration</a></li>
			
		<?php } ?>
		
	<?php } else { ?>
		
		<li class="right"><a href="register.html">Register</a></li>
		<li class="right"><a href="login.html">Login</a></li>
		
	<?php } ?>
	
</ul>


