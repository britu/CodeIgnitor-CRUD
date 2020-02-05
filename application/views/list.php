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


<a href="<?= base_url().'index.php/user/create'; ?>" class="btn btn-primary">Create</a>
<h3>View User</h3>

<hr>
<div class="container">

	<div class="row">
		<?php 
			$success = $this->session->userdata('success');
			if($success != ""){
				echo '<div class="alert alert-success">'.$success.'</div>';
			}

			$failure = $this->session->userdata('failure');
			if($failure){
				echo '<div class="alert alert-danger">'.$failure.'</div>';
			}
		?>
	</div>
	
	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Name</th>
			<th>Email</th>
			<th>Edit</th>
			<th>Delete</th>
		</thead>

		
			<?php foreach($users as $user_data) : ?>
				<tr>	
					<td><?= $user_data['id']; ?></td>
					<td><?= $user_data['name']; ?></td>
					<td><?= $user_data['email']; ?></td>
					<td><a href="<?= base_url().'index.php/user/edit/'.$user_data['id'];?>" class="btn btn-primary">Edit</a></td>
					<td><a href="<?= base_url().'index.php/user/delete/'.$user_data['id'];?>" class="btn btn-danger">Delete</a></td>
				</tr>
			<?php endforeach; ?>
		
		
		
	</table>

</div>



</div>
</body>
</html>