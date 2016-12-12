<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

# kalo udah login ga bisa kesini
if(isset($_SESSION['level'])){
	if($_SESSION['level'] == '1')
	{
		echo "<script type='text/javascript'>window.location.href = 'Admin';</script>";
	}
	else if($_SESSION['level'] == '2')
	{
		echo "<script type='text/javascript'>window.location.href = 'Kasir';</script>";
	}
	else
	{
		echo "<script type='text/javascript'>window.location.href = 'KendaliRoti';</script>";
	}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	
	<meta name="description" content="">
    <meta name="author" content="">

    <title>LOGIN</title>

	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Questrial" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	<!-- datatabel-->
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<script src="js/jquery.dataTables.js"></script>
	<script src="js/dataTables.bootstrap.js"></script>
	
	<!--dari eli-->
	<link rel="stylesheet" href="css/pembantu.css">
	
	
</head>
<body>

<form action="Login/aksi_login" method="post">
<div style="margin-left:35%;margin-top:10%;padding:1px 3px;height:500px;padding-right:0%">
	<div class="container-fluid" style="padding:0%;">
		<div class="col-lg-5" style="background-color:white;">
			<h1 style="margin-bottom:20px">LOGIN</h1>
			<div class="kotakbiru"></div>
			<div class="row" style="padding:3%;padding-left:0%;padding-top:5%;">
				<div class="container-fluid" style="padding:0%;padding-bottom:1%">
					<div class="col-sm-3 col-md-3 col-lg-3">
						<h4 class="isiankiri"> Username </h4>
					</div>
					<div class="col-sm-9 col-md-9 col-lg-9" style="padding-top:0.2%">
						<input type="text" class="form-control" name="username">
					</div>
				</div>
				<div class="container-fluid" style="padding:0%;padding-bottom:1%">
					<div class="col-sm-3 col-md-3 col-lg-3">
						<h4 class="isiankiri"> Password </h4>
					</div>
					<div class="col-sm-9 col-md-9 col-lg-9" style="padding-top:0.2%">
						<input type="password" class="form-control" name="password" id="password">
					</div>
				</div>
				<div class="container-fluid" style="padding:0%;padding-bottom:1%">
					<div class="col-sm-3 col-md-3 col-lg-3">
						<h4 class="isiankiri"> Level </h4>
					</div>
					<div class="col-sm-9 col-md-9 col-lg-9" style="padding-top:0.2%">
						<select name="level" class="form-control" required>
							<option value="0">Pilih Level User</option>
							<option value="1">Administrator</option>
							<option value="2">Kasir</option>
							<option value="3">Warehouse</option>
						</select>
					</div>
				</div>
			</div>
			<div class="row text-right" style="padding-top:5%;padding-right:6%">
					<button class="btn btn-biru" name="login" type="submit" value="Login"> SUBMIT </button>
			</div>	
		</div>	
</div>
</form>

  </div>
</div>
<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>

</body>