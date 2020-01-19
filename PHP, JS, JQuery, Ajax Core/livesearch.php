<?php 
include 'inc/header.php';
?>
<h2>Ajax live data search</h2>
<div class="content">


	<form action="" method="POST">
		<table>
			<tr>
				<td>Type keyword: </td>
				<td><input type="text" name="livesearch" id="livesearch" placeholder="Type your keyword..." /></td>
			</tr>
		</table>
		<div id="statuslive"></div>
	</form>
</div>
<?php include 'inc/footer.php'; ?>