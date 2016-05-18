<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Coffee Order</title>
	<style>
		body { font-family: menlo; font-size: 14px;}
		input {
			height: 20px;
			width: 200px;
			border-radius: .2em;
			text-align: left;
		}
		button {
			float: right;
			padding-left: 15px;
			padding-right: 15px;	
		}
		.container {
			padding-top: 60px;
			padding-left: 200px;
			padding-right: 200px;
		}

		#order li { 
			background-color: #eee; 
			height: 30px;
			text-align: left;
			padding-top: 10px;
			padding-left: 15px;
			list-style: none;
		}
		.box {
			border: 0.7px solid #eee;
			height: 130px;
		}

		.box p {
			padding-left: 20px;
			padding-right: 20px;
		}
		.box button{
			margin-right: 40px;
		}
		

	</style>
</head>
<body>
	<div class="container">
		@yield('content')
	</div>
	<script src="https://code.jquery.com/jquery-2.2.3.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/mustache.js/2.2.1/mustache.js"></script>
	<script src="main.js"></script>
	<script type="text/javascript">
		
	</script>
</body>
</html>