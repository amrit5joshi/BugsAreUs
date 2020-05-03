<!DOCTYPE html>
<html>

<head>
	<title>Pest Control</title>
	<style>
		.ring {
			border-radius: 100%;
			width: 1000px;
			height: 450px;
			margin: auto;
			color: cyan;
			border: 3px solid #73AD21;
			position: absolute;
			top: calc(100% - 80%);
			left: calc(100% - 82%);
		}
	</style>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script>
		$(function() {
			$("#header").load("header.php");
			$("#footer").load("footer.php");
		});
	</script>

</head>

<body background="bug.jpg">
	<div id="header"></div>
	<div align="center" class="ring" style="background-color:grey">
		<h2>Register Your Request</h2>
		<form id="Pest" action="saveform.php" method="post"><br>
			Full Name : <input type="text" name="Name" required><br><br>
			Email Address : <input type="Email" name="Email" required><br><br>
			Telephone : <input type="tel" name="phone" pattern="[0-9]{10}" required><br><br>
			Problem Type : <input type="radio" name="Problemtype" value="Termites" required>Termites
			<input type="radio" name="Problemtype" value="Mice" required>Mice
			<input type="radio" name="Problemtype" value="Cockroaches" required>Cockroaches<br><br>
			Best Day for visit : <input type="date" name="date" required> <br><br>
			Comment <br><textarea rows="5" name="Comment" cols="60" required></textarea><br>
			<input type="submit" name="submit" value="Submit" /><br><br><br>
		</form>
	</div>
	<div id="footer"></div>
</body>

</html>