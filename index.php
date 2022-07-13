<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ajax Learning</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<style type="text/css">
		.error{
			color: red;
		}
	</style>
</head>
<body>
<div class="container" style="margin: 50px;">
	<div class="row">
		<div class="col-md-4">
			<form action="" id="form">
				<div class="form-group">
					<input type="text" id="name" name="name" class="form-control" placeholder="Enter Name..." />
				</div>
				<div class="form-group">
					<input type="text" id="phone" name="phone" class="form-control" placeholder="Enter Phone Number..." />
				</div>
				<div class="form-group">
					<input type="text" id="email" name="email" class="form-control" placeholder="Enter Email..." />
				</div>
				<div class="form-group">
					<button type="button" id="button" class="btn btn-success" onclick="addData()">Add</button>
				</div>
				<div class="form-group">
					<div class="msg"></div>
				</div>
			</form>
		</div>		
	</div>
</div>
<script type="text/javascript">
	// $(document).ready(function(){
	// 	$("#button").click(function(){
	// 		var name = $("#name").val();
	// 		// $.post(
	// 		// 	"formdata.php",
	// 		// 	{test:name},
	// 		// 	function(messg){
	// 		// 		$(".msg").html(messg);
	// 		// 	})
	// 		// alert(name);
	// 		var i = 0;
	// 		$.ajax({
	// 			type: 'POST',
	// 			url: 'formdata.php',
	// 			data: $('#form').serialize(),
	// 			beforeSend: function() {
	// 				$("#button").html('<button class="btn btn-success">Processing...</button>');
	// 			},
	// 			success: function(data){
	// 				$(".msg").html(data);
	// 			}
	// 			})
	// 	})
	// })
	function addData() {
		var name = $("#name").val();
		var phone = $("#phone").val();
		var email = $("#email").val();

		if(name.length == "" || phone.length == "" || email.length == ""){
			$(".msg").html("Please fill data");
			$(".msg").addClass("error");
		}

		$.ajax({
			type: 'POST',
			url: 'formdata.php',
			data: $('#form').serialize(),
			beforeSend: function() {
				$("#button").html('<button class="btn btn-success">Processing...</button>');
			},
			success: function(data){
				$(".msg").html(data);
			}
		})
	}
</script>
</body>
</html>asass