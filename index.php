<?php
	require "header.php";
?>


	<main>

		<div class="container">
				
				<h1> Sign In </h1>
			 	<form class="my-form">
					<div class="form-group">
						<label> username : </label>
						<input type="text"  name="name">
					</div>
					<div class="form-group">
						<label> password : </label> 
						<input type="password" name="password">
					</div>
					<div class="form-group">
						<input class="button" type="submit" value="button" name="submit">
					</div>
				</form>		
			</div>
		</div>
	</main>

	<div style="margin-top: 50px;"></div>
<?php

	require "footer.php";
?>
