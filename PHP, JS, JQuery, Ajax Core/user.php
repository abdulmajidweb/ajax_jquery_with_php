<?php 
include 'inc/header.php';
?>
<h2>Ajax:- check username availability</h2>
<div class="content">
	<form action="" method="POST">
		<table>
			<tr>
				<td>Username: </td>
				<td><input type="text" name="username" id="username" placeholder="Enter your username" /></td>
			</tr>
		</table>
		<div id="userstatus"></div>
	</form>
</div>
<?php include 'inc/footer.php'; ?>