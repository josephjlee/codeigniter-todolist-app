<!DOCTYPE html>
<html>
<head>
	<title>myTodo Task Manager</title>
	<link  href="<?php  echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet" type="text/css" >
	<link rel="stylesheet" type="text/css" href="<?php  echo base_url(); ?>assets/css/custom.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
</head>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="brand" href="#">myTodo</a>
				<div class="nav-collapse collapse">
					<p class="navbar-text pull-right">
						
					</p>
					<ul class="nav">
						<li><a href="#">Home</a></li>
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span3">
				<div class="well sidebar-nav">
					<div style="margin: 0 0 10px 10px;">
						<!--SIDEBAR CONTENT-->
					</div>
				</div>
			</div>

			<div class="span9">
				<!--MAIN CONTENT-->

				<?php $this->load->view($main_content);   ?>

			</div><!--/span -->
		</div><!--row -->
		<hr>

		<footer>
			<p>&copy; Copyright 2018</p>
		</footer>
	</div><!--/.fluid-container-->

</body>
</html>