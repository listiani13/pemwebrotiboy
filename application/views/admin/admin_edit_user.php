<?php
defined('BASEPATH') OR exit('No direct script access allowed');
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

    <title>Transaction</title>

	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Questrial" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	<!-- datatabel-->
	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/dataTables.bootstrap.min.css">
	<script src="<?php echo base_url(); ?>/assets/js/jquery.dataTables.js"></script>
	<script src="<?php echo base_url(); ?>/assets/js/dataTables.bootstrap.js"></script>
	<!--dari eli-->
	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/pembantu.css">
	
</head>
<body>
<ul>
  <li><a class="text-center paddingnav putih" href="<?php echo base_url(); ?>index.php/Admin/report">
  <span><img src="<?php echo base_url(); ?>/assets/assets/list.svg" style="margin-bottom:10px;width:40%"></span>
  Report </a></li>
  <li><a class="active text-center paddingnav putih tebal" href="<?php echo base_url(); ?>index.php/Admin"><i class="fa fa-users fa-lg putih" aria-hidden="true" style="margin-bottom:10px"></i>
  Account</a></li>
  <li><a class="text-center paddingnav putih" href="<?php echo base_url(); ?>index.php/Admin/bread">
  <span><img src="<?php echo base_url(); ?>/assets/assets/bread.svg" style="margin-bottom:3px;width:55%"></span>
  Bread</a></li>
  <li><a class="text-center paddingnav putih" href="<?php echo base_url(); ?>index.php/Admin/logout"><i class="fa fa-sign-out fa-lg putih" aria-hidden="true" style="margin-bottom:10px"></i>
  Signout</a></li>
</ul>

<form action="<?php echo base_url(); ?>index.php/Admin/editUser" method="post">
	<div style="margin-left:7%;padding:1px 3px;height:500px;padding-right:0%">
	<div class="container-fluid" style="padding:0%;">
		<div class="col-lg-5" style="background-color:white;">
			<h1 style="margin-bottom:20px"> EDIT USER </h1>
			<div class="kotakbiru"></div>
			<div class="row" style="padding:3%;padding-left:0%;padding-top:5%;">
				<div class="container-fluid" style="padding:0%;padding-bottom:1%">
					<div class="col-sm-3 col-md-3 col-lg-3">
						<h4 class="isiankiri"> ID User </h4>
					</div>
					<div class="col-sm-9 col-md-9 col-lg-9" style="padding-top:0.2%">
						<input type="text" class="form-control" name="id_user" value="<?php echo $id;?>" disabled>
					</div>
				</div>
				<div class="container-fluid" style="padding:0%;padding-bottom:1%">
					<div class="col-sm-3 col-md-3 col-lg-3">
						<h4 class="isiankiri"> Name </h4>
					</div>
					<div class="col-sm-9 col-md-9 col-lg-9" style="padding-top:0.2%">
						<input type="text" class="form-control" name="name" value="">
					</div>
				</div>
				<div class="container-fluid" style="padding:0%;padding-bottom:1%">
					<div class="col-sm-3 col-md-3 col-lg-3">
						<h4 class="isiankiri"> Address </h4>
					</div>
					<div class="col-sm-9 col-md-9 col-lg-9" style="padding-top:0.2%">
						<input type="text" class="form-control" name="address">
					</div>
				</div>
				<div class="container-fluid" style="padding:0%;padding-bottom:1%">
					<div class="col-sm-3 col-md-3 col-lg-3">
						<h4 class="isiankiri"> Date of Birth</h4>
					</div>
					<div class="col-sm-3 col-md-3 col-lg-3" style="padding-top:0.2%">
						<select class="form-control" id="day" style="width:100%">
							<option> DD </option>
							<option value="1"> 1 </option>
							<option value="2"> 2 </option>
							<option value="3"> 3 </option>
							<option value="4"> 4 </option>
							<input type="hidden" name="selected_day" id="selected_day" value="" />
						</select>
					</div>
					<div class="col-sm-3 col-md-3 col-lg-3" style="padding-top:0.2%">
						<select class="form-control" id="month" style="width:100%" name="month">
							<option value="a"> MM </option>
							<option value="January"> January </option>
							<option value="February"> February </option>
							<option value="March"> March</option>
							<option value="April"> April </option>
							<option value="May"> May </option>
							<option value="June"> June </option>
							<option value="July"> July </option>
							<option value="August"> August </option>
							<option value="September"> September </option>
							<option value="October"> October </option>
							<option value="November"> November </option>
							<option value="December"> December </option>
						</select>
					</div>
					<input type="hidden" name="selected_month" id="selected_month" 
					value="" />
					<div class="col-sm-3 col-md-3 col-lg-3" style="padding-top:0.2%;">
							<input type="text" class="form-control" placeholder="YYYY" name="year">
					</div>
				</div>
				<div class="container-fluid" style="padding:0%;padding-top:1%">
					<div class="col-sm-3 col-md-3 col-lg-3">
						<h4 class="isiankiri"> Gender </h4>
					</div>
					<div class="col-sm-3 col-md-3 col-lg-3" style="padding-top:0.2%;width:10%;margin-right:6%">
						<div class="radio">
							<label><input type="radio" name="optradio" id="gender" name="gender" class="cbGender" value="Male">Male</label>
						</div>
					</div>
					<div class="col-sm-3 col-md-3 col-lg-3" style="padding-top:0.2%;">	
						<div class="radio">
							<label><input type="radio" name="optradio" id="gender" name="gender" class="cbGender" value="Female">Female</label>
						</div>
						<input type="text" name="selected_gender" id="selected_gender" value="" />
					</div>
				</div>
			</div>
			
		</div>
		<div class="col-lg-5" style="padding-top:7%;padding-left:3%">
			<div class="row" style="padding:3%;padding-left:0%;padding-top:5%;">
				<div class="container-fluid" style="padding:0%;padding-bottom:1%">
					<div class="col-sm-3 col-md-3 col-lg-3">
						<h4 class="isiankiri"> E-mail </h4>
					</div>
					<div class="col-sm-9 col-md-9 col-lg-9" style="padding-top:0.2%">
						<input type="text" class="form-control" name="email">
					</div>
				</div>
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
						<input type="text" class="form-control" name="password">
					</div>
				</div>
				<div class="container-fluid" style="padding:0%;padding-bottom:1%;padding-top:0.4%">
					<div class="col-sm-3 col-md-3 col-lg-3">
						<h4 class="isiankiri"> Level </h4>
					</div>
					<div class="col-sm-9 col-md-9 col-lg-9" style="padding-top:0.2%">
						<input type="text" class="form-control" name="level">
					</div>
				</div>
			</div>
			<div class="row text-right" style="padding-top:10%;padding-right:6%">
					<a href="<?php echo base_url();?>index/Admin"><button class="btn btn-biruout"> CANCEL </button></a>
					<button class="btn btn-biru" type="submit" name="btnSubmit"> SUBMIT </button>
			</div>	
		</div>	
</div>
</form>
<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
<script type="text/javascript">
$(document).ready(function() {
	$('#day').on('change', function() {
    var day = $('#day').val();
  	$("#selected_day").val(day);
	});
   $('#month').on('change', function() {
    var month = $('#month').val();
  	$("#selected_month").val(month);
	});
   $(".cbGender").change(function(){		
		//alert($('#q12_3:checked').val());
    var gender = $('#gender:checked').val();
    $("#selected_gender").val(gender);
	});
});
</script>
</body>