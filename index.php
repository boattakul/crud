<!DOCTYPE html>
<html>
<head>
	<title>CRUD SYSTEM</title>

	<!-- bootstrap css -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- datatables css -->
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">

</head>
<body>

  <div calss="container"'>
  	<div class="row">
		<div class="col-md-12">
			<H1>my first boot</H1>
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addMember">
				Submit
			</button>
			<button type="button" class="btn btn-primary">Cancel</button>
		</div>
   	</div>

   	<div class="modal fade" role="dialog" id="addMember">
   		<div class="modal-dialog">
   			<div class="modal-content">
   				<div class="modal-header">
   					Modal Header
   				</div>
   				    <div class="modal-body">
   				    	Modal Body
   				    </div>
   				       <div class="modal-footer">
   				         	Modal Footer
   					   </div>
   			</div>
   			
   		</div>
   	</div>

	<?php
		//include('php_action/retrieve.php');
	?>
	<div class="container">
	<h1>Button</h1>
	<button type="button" >Basic</button><br />

	<button type="button" class="btn btn-success">Basic</button>
	</div>

	<!-- jquery plugin -->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- bootstrap js -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!-- datatables js -->
	<script type="text/javascript" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

	

</body>
</html>