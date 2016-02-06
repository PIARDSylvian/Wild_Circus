<?php
	$titrePage = "Contact us - ";
	include("./_header.php");
?>
<section>
	<div id="contact">
		<h2>Contact us</h2>
		<form method="post" action="mailto:piard.sylvian@gmail.com">
			<p><label for="user_name">Name :</label><input type="text" name="name" id="user_name" maxlength="10" required /></p>
			<p><label for="user_email">E-mail :</label><input type="email" name="e-mail" id="user_email" required /></p>
			<p><label for="user_msg">Messages :</label><textarea name="msg" id="user_msg"></textarea></p>
			<input type="submit" value="Send">
		</form>
		<p>Your data will not be shared.</p>
	</div>
</section>
<?php include("./_footer.php")?>
