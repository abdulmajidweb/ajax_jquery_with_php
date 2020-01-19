<?php 
include 'inc/header.php';
?>
<h2>Ajax auto save data</h2>
<div class="content">


	<form action="" method="POST">
		<table>
			<tr>
				<td>Type content: </td>
				<td><textarea name="content" id="content"></textarea></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="hidden" name="contentid" id="contentid"></td>
			</tr>
		</table>
		<style type="text/css">
			#statussave{color: blue;}
		</style>
		<div id="statussave"></div>
	</form>
</div>
<?php include 'inc/footer.php'; ?>