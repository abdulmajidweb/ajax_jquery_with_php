<?php 
include 'inc/header.php';
?>
<h2>Auto refresh div content</h2>
<div class="content">

<style type="text/css">
	.data{background: #fba991;margin-left: 103px;padding: 6px 30px;width: 190px;}
	.data ul{margin: 0;padding: 0;list-style: none;}
	.data ul li{cursor: pointer;}
</style>

	<form action="" method="POST">
		<table>
			<tr>
				<td>Content: </td>
				<td>
					<textarea name="body" id="body"></textarea>
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" name="autosubmit" id="autosubmit" value="Post" />
				</td>
			</tr>
		</table>
		<div id="autostatus"></div>
	</form>
</div>
<?php include 'inc/footer.php'; ?>