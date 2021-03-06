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
	<link rel="stylesheet" href="<?php echo base_url();?>tampung/css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>tampung/css/pembantu.css">
	<script src="<?php echo base_url();?>tampung/js/jquery.dataTables.js"></script>
	<script src="<?php echo base_url();?>tampung/js/dataTables.bootstrap.js"></script>
	

	
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

	<!--buat menu
	<link rel="stylesheet" href="jasny-bootstrap/dist/css/jasny-bootstrap.min.css">
	<script type="text/javascript" src="jasny-bootstrap/dist/js/jasny-bootstrap.min.js"></script>-->
	
	<!--dari eli
	<link rel="stylesheet" href="css/pembantu.css">
	-->
</head>
<body>
<ul>
  <li><a class="active text-center paddingnav putih tebal" href="<?php echo base_url();?>index.php/kendaliRoti/index">
  <span><img src="<?php echo base_url();?>tampung/assets/list2.svg" style="margin-bottom:10px;width:37%"></span>
  <br>List </a></li>
  <li><a class="text-center paddingnav putih" href="<?php echo base_url();?>index.php/kendaliRoti/displayInput/">
  <span><img src="<?php echo base_url();?>tampung/assets/take.svg" style="margin-bottom:10px;width:40%"></span>
  Input</a></li>
  <!--<li><a class="text-center paddingnav putih" href="<?php echo base_url();?>index.php/kendaliRoti/displayPo/">
  <span><img src="<?php echo base_url();?>tampung/assets/truck.svg" style="margin-bottom:6px;width:48%"></span>
  <br>PO</a></li>-->
  <li><a class="text-center paddingnav putih" href="../Login/logout"><i class="fa fa-sign-out fa-lg putih" aria-hidden="true" style="margin-bottom:10px"></i>
  Signout</a></li>
</ul>

<div style="margin-left:7%;padding:1px 3px;height:500px;padding-right:0%">
	<div class="container-fluid" style="padding:0%;">
		<div class="col-lg-5" style="background-color:white;">
			<h1 style="margin-bottom:20px"> RECEIVE ITEM </h1>
			<div class="kotakbiru"></div>
			<form method="POST" action="processAdd">
			<div class="row" style="padding:3%;padding-left:0%;padding-top:5%;">
				<div class="container-fluid" style="padding:0%;padding-bottom:1%">
					<div class="col-sm-3 col-md-3 col-lg-3">
						<h4 class="isiankiri"> ID </h4>
					</div>
					<div class="col-sm-9 col-md-9 col-lg-9" style="padding-top:0.2%">
						<input type="text" class="form-control" name="id">
					</div>
				</div>
				<!--<div class="container-fluid" style="padding:0%;padding-bottom:1%">
					<div class="col-sm-3 col-md-3 col-lg-3">
						<h4 class="isiankiri"> Name </h4>
					</div>
					<div class="col-sm-9 col-md-9 col-lg-9" style="padding-top:0.2%">
						<input type="text" class="form-control" name="name">
					</div>
				</div>-->
				<div class="container-fluid" style="padding:0%;padding-bottom:1%">
					<div class="col-sm-3 col-md-3 col-lg-3">
						<h4 class="isiankiri"> Quantity </h4>
					</div>
					<div class="col-sm-9 col-md-9 col-lg-9" style="padding-top:0.2%">
						<input type="text" class="form-control" name="stok">
					</div>
				</div>
				<!--<div class="container-fluid" style="padding:0%;padding-top:1%">
					<div class="col-sm-3 col-md-3 col-lg-3">
						<h4 class="isiankiri"> Status </h4>
					</div>
					<div class="col-sm-3 col-md-3 col-lg-3" style="padding-top:0.2%;">
						<div class="radio">
							<label><input type="radio" name="optradio">Inbound</label>
						</div>
					</div>
					<div class="col-sm-3 col-md-3 col-lg-3" style="padding-top:0.2%;">	
						<div class="radio">
							<label><input type="radio" name="optradio">Outbound</label>
						</div>
					</div>
				</div>-->
			</div>
			
				<div class="row text-right"style="padding-top:5%;padding-right:6%">
					<a href="<?php echo base_url();?>index.php/kendaliRoti/index"><button class="btn btn-biruout"> CANCEL </button></a>
					<button class="btn btn-biru" type="submit"> SUBMIT </button>
				</div>
			</form>	
		</div>		
</div>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog" style="padding-top:5%">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="background-color:#2196F3">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="putih">Receive Item Confirmation</h4>
      </div>
      <div class="modal-body">
        <p> Do you really want to receive this item? </p>
      </div>
      <div class="modal-footer">
		<button type="button" class="btn btn-biruout" data-dismiss="modal">CANCEL</button>
        <a href="ware_see_stock.html"><button type="button" class="btn btn-biru">SUBMIT</button></a>
      </div>
    </div>

  </div>
</div>
<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
</body>