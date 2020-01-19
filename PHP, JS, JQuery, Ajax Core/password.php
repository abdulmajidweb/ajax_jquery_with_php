<?php 
include 'inc/header.php';
?>
<h2>Create a show password button</h2>
<div class="content">
	<form action="" method="POST">
		<table>
			<tr>
				<td>Username: </td>
				<td><input type="text" name="username" placeholder="Enter your username..." /></td>
			</tr>
			<tr>
				<td>Password: </td>
				<td><input type="password" name="password" id="password" placeholder="Enter your password..." /></td>
			</tr>
			<tr>
				<td></td>
				<td><button type="button" name="showpassword" id="showpassword">Show Password</button></td>
			</tr>
		</table>
		<div id="statuspass"></div>
	</form>
</div>
<?php include 'inc/footer.php'; ?>