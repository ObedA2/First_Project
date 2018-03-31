<!DOCTYPE html>
<html>
<head>
	<title>Sign Up Form</title>
</head>
<body>	
	<?php echo form_open('users/create'); ?>

		<label for="id">ID</label>
		<input type="id" name="id"><br/></br>

		<label for="name">Name</label>
		<input type="text" name="name"><br/></br>

		<label for="email">Email</label>
		<input type="type email" name="email"><br/></br>

		<label for="username">Username</label>
		<input type="text" name="username"><br/></br>

		<label for="password">Password</label>
		<input type="password" name="password"><br/></br>

		<input type="submit" name="create user">

	<?php echo anchor('Users/getUserData','See Users') ?>
	
</body>
</html>	