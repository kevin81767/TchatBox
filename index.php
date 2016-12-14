<!DOCTYPE html>
	<html>
		<head>
			<title>ChatBox</title>
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<!-- Bootstrap -->
			<link href="css/bootstrap.min.css" rel="stylesheet">
			<link rel='icon' type='image/png' href='aucalogo2.png'/>
			<script src="js/jquery.js"></script>
			<script src="js/jquery.min.js"></script>
			<script type="text/javascript" src="script.js"></script>
			<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media
			queries -->
			<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
			<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/
			html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/
			respond.min.js"></script>
			<![endif]-->
			<style type="text/css">
				.container h1
				{
					text-align: center;
					color: #009688;
				}
				.hr
				{
					color: #5e35b1;
				}
				.error
				{
					text-align: center;
					color:white;
					background-color: red;
					border-radius: 3px black;
					
				}
				.feedback
				{
					padding-left: 10px;
					padding-right: 10px;
					height:300px;
					background-color: #D4FFFF;
					overflow:auto;
					border-radius: 5px;
				}

				
			</style>
		</head>
		<body>
			<div class="container">
				<h1 class="titre">
					TchatBox
				</h1>
					<br>
					<div class="return">
					</div>
					</br>
				<form class="form-group" id="formulaire">
					<input type="text" placeholder="Your name" class="form-control" id="name"><br>
					<textarea type="text" placeholder="Your message" class="form-control" id="message" rows=10></textarea><br>
					<input type="submit" id="submit" class="btn btn-info" value="Send">
				</form>
				<hr>
				<div class="feedback">
					 
				</div>
			</div>
		</body>
	</html>