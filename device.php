<html>
<head>
	<link href="lib/css/bootstrap.css" rel="stylesheet">
	<link href="lib/css/flat-ui.css" rel="stylesheet">
	<script src="lib/js/jquery.js"></script>
    	<script src="lib/js/bootstrap-transition.js"></script>
     	<script src="lib/js/bootstrap-modal.js"></script>
    	<script src="lib/js/bootstrap-collapse.js"></script>

	<title>Blue Rise - Your Own Device</title>
</head>
<body>
<?php include 'headaer.php'; ?>

<div class="container">
<a href="#addDevice" role="button" class="btn span2 offset9" data-toggle="modal">Add Device</a>

<!--
	<table>
		<tr>
			<td><h2>Title</h2></td>		
		</tr>
		<tr>
			<td><input method="POST", placeholder="Give your decices a Name",type="text",size="500"></td>
		</tr>
		<tr>
			<td><h2>Tags</h2></td>		
		</tr>
		<tr>
			<td><input method="POST", placeholder="Use comma separated tags(CSV) to describe your Arduino.",type="text",size="1000"></td>
		</tr>
		<tr>
			<td><input type="submit" value="Create" ,name="a" method="GET"></td>
		</tr>
	</table>
-->

	<div id="addDevice" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-header">
	    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">��</button>
	    <h3 id="myModalLabel">Configure your Device</h3>
	  </div>
	  <div class="modal-body">
		<form action="#" method="get">
			<input type="text" placeholder="">
		</form>
	  </div>
	  <div class="modal-footer">
	    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
	    <button class="btn btn-primary">Save Configurations</button>
	  </div>
	</div>

</div>

<?php include 'footer.php'; ?>
</body>
</html>

