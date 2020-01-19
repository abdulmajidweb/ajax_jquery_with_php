<?php 
include 'inc/header.php';
?>
<h2>Ajax:- autocomplete textbox</h2>
<div class="content">

<style type="text/css">
	.skill{background: #fba991;margin-left: 103px;padding: 6px 30px;width: 190px;}
	.skill ul{margin: 0;padding: 0;list-style: none;}
	.skill ul li{cursor: pointer;}
</style>

	<form action="" method="POST">
		<table>
			<tr>
				<td>Username: </td>
				<td><input type="text" name="skill" id="skill" placeholder="Enter your skill..." /></td>
			</tr>
		</table>
		<div id="statusskill"></div>
	</form>
</div>
<?php include 'inc/footer.php'; ?>