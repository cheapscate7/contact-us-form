
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<link rel="stylesheet" href="css/style.css">
	</head>

	
	<div id="popup"class="popup">
	<div class="popup-content">
		<div class="header">
			<h1>Contact Us <span class="close">&times;</span></h1>
		</div>

		<div class="form">
			<form method="post" action="php/mail_action_2.php">
				<input class="type1 form-item" placeholder="Name" type="text" name="name" required></input>
				<input class="type1 form-item" placeholder="Email" type="text" name="email" required></input>
				<textarea class="type1 form-item" placeholder="Please type your message..." name="content" rows="15" required></textarea>
				<button class="form-button" type="submit"><img src="https://cdn4.iconfinder.com/data/icons/defaulticon/icons/png/256x256/mail.png"/></button>
			</form>
		</div> 
	</div>
	</div>
	
	<button id="open-popup" class="open-popup">contact</button>	
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<script src="javascript/contact-form-actions.js"></script>
</html>


