<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>uniMail</title>
</head>
<body>

	<form>

		<!-- Hidden Required Fields -->
		<input type="hidden" name="project_name" value="Барнаульские тали">
		<input type="hidden" name="admin_email" value="dialoggg1994@gmail.com">
		<input type="hidden" name="form_subject" value="Форма отправки оставить заявку ">
		<!-- END Hidden Required Fields -->

		<input type="text" name="Имя" placeholder="You name..." required><br>
		<input type="text" name="Электронная_почта" placeholder="You E-mail..." required><br>
		<input type="text" name="Телефон" placeholder="You phone..."><br>
		<button>Send</button>

	</form>
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
	<script src="script.js"></script>

</body>
</html>