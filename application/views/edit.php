<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<title>CRUD APPLICATION</title>
	<link rel="stylesheet" href="https://bootswatch.com/3/flatly/bootstrap.min.css">
	<!-- <link rel="stylesheet" href="<?php //echo base_url();?>assets/CSS/style.css"> -->

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</head>
<body>

	<nav class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<a href="<?php echo base_url(); ?>" class="navbar-brand">CRUD APPLICATION</a>
			</div>

			<div id="navbar">
				<ul class= "nav navbar-nav">
					<li><a href="<?php echo base_url(); ?>">Home</a></li>
					<li><a href="<?php echo base_url(); ?>About">About</a></li>
					<li><a href="<?php echo base_url(); ?>posts">Blog</a></li>
				</ul>
			</div>
		</div> 
	</nav>

<div class="container">



<h3>Edit User</h3>
<hr>

<form method="post" name="createUser" action="<?php echo base_url().'index.php/user/edit/'.$user['id']; ?>">

	<div class="form-group">
	    <label for="name">Name:</label> <?php echo form_error('name'); ?>
	    <input type="text" class="form-control" name="name" value="<?php echo set_value('name', $user['name']); ?>">
	    
	  </div>

	  <div class="form-group">
	    <label for="email">Email address: </label><?php echo form_error('email'); ?>
	    <input type="email" class="form-control" name="email" value="<?= set_value('email', $user['email']); ?>">
	    
	  </div>
	  

	  <button type="submit" class="btn btn-default">Update</button>
	  <a href="<?= base_url().'index.php/user/index'; ?>" class="btn btn-primary">Cancel</a>

</form>




</div>
</body>
</html>