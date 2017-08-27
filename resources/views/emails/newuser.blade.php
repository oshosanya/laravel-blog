<!DOCTYPE html>
<html>
@include('layouts.head')
<body>
<div class="container">
	<h3>Brain Challenge 2017</h3>
	<div class="row">
		<div class="col-sm-12">
			<p>You have successfully registered for Brain Challenge 2017. Below are your login credentials</p>
			<p><b>Email: {{ $email }}</b></p>
			<p><b>Password: {{ $password }}</b></p>
			<p>You will need to change your password immediately you login. Please use a password you can remember. After changing your password, click on print slip, then fill the remaining details on the slip which include your parent's details and consent signature. Do not forget to attach a passport photograph. Then the slip should be submitted to the library at 2C, Michael Whenu Crescent before 23rd May, 2017</p>
		</div>
	</div>
</div>
</body>
</html>