
<H1>Add Books to Library</H1>

<hr>

<?php echo form_open('users/build'); ?>
	<label for="title">Title</label>
	<input type="text" name="title"><br/><br/>

	<label for="author">Author</label>
	<input type="text" name="author"><br/><br/>

	<input type="Submit" name="add book">
	
</form>