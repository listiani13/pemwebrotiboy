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
	
	<!-- datatabel
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<script src="js/jquery.dataTables.js"></script>
	<script src="js/dataTables.bootstrap.js"></script>
	-->
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
	<div class="container-fluid" style="padding:0%;background-color: #F5F5F5">
		<div class="col-lg-12" style="background-color:white;">
			<h1 style="margin-bottom:20px"> WAREHOUSE </h1>
			<div class="kotakbiru"></div>
			<div class="row" style="padding:3%;padding-left:0%;background-color:white">
				<div class="row text-right" style="margin-left:1%;margin-right:1%;margin-bottom:1%">
				
					<a href="<?php echo base_url();?>index.php/kendaliRoti/releaseBread">
					<button class="btn btn-biruout" style="height:37px;width:165px;margin-right:0.5%">
					<span class="glyphicon glyphicon-minus" aria-hidden="true" style="margin-right:10px"></span> RELEASE ITEM
					</button></a>
					
					<a href="<?php echo base_url();?>index.php/kendaliRoti/receiveBread">
					<button class="btn btn-biru" style="height:37px;width:165px;margin-right:0.5%">
					<i class="fa fa-plus" aria-hidden="true" style="margin-right:10px"></i> RECEIVE ITEM
					</button></a>
					<!--
					<a href="ware_receive_items.html"><button class="btn btn-biru" style="height:37px;width:165px;margin-right:0.5%">
					<i class="fa fa-plus" aria-hidden="true" style="margin-right:10px"></i>RECEIVE ITEM
					</button></a>-->
				</div>
				<div class="container-fluid">
					<table class="table table-striped" style="background-color:white;border:1px solid #EEEEEE" id="example">
						<thead>
						<tr>
							<th>No</th>
							<th>ID Product</th>
							<th>Name</th>
							<th>Stok</th>
							<th style="width:150px"> </th>
						</tr>
						</thead>
						<tbody class="warnatbl">
						<?php 
						$counter =0;
							foreach($rotiku->result() as $data)
							{
								$counter++;
								echo"<tr>";
								echo"<td>".$counter."</td>";
								echo "<td>".$data->id_roti."</td>";
								echo "<td>".$data->nama_roti."</td>";
								echo "<td>".$data->stok."</td>";
								echo "
								<td>
									<a href='".base_url()."index.php/kendaliRoti/deleteRoti/".$data->id_roti."'>
									<button type='button' class='btn btn-danger' name='delete'><span class='glyphicon glyphicon-pencil'></span> Delete</button>
									</a>
								</td>
								";
								echo "</tr>";
							}
							
						?>
						</tbody>
					</table>
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