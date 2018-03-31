<?php if(isset($signup)){
	echo "Sign up successful";
}
?>

<?php echo form_open('users/userLogin'); ?>
	<label>Username</label>
	<input type="text" name="username">

	<label>Password</label>
	<input type="password" name="password">

	<input type="submit" name="Login">
</form>