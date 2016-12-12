<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	
	<meta name="description" content="">
    <meta name="author" content="">

    <title>REPORT</title>

	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Questrial" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	<!-- datatabel-->
	<link rel="stylesheet" href="../../css/dataTables.bootstrap.min.css">
	<script src="../../js/jquery.dataTables.js"></script>
	<script src="../../js/dataTables.bootstrap.js"></script>

	
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

	<!--buat menu
	<link rel="stylesheet" href="jasny-bootstrap/dist/css/jasny-bootstrap.min.css">
	<script type="text/javascript" src="jasny-bootstrap/dist/js/jasny-bootstrap.min.js"></script>-->
	
	<!--dari eli-->
	<link rel="stylesheet" href="../../css/pembantu.css">
	
</head>
<body>
<ul>
  <li><a class="active  text-center paddingnav putih tebal" href="admin_report.php">
  <span><img src="../../assets/assets/list.svg" style="margin-bottom:10px;width:40%"></span>
  Report </a></li>
  <li><a class="text-center paddingnav putih" href="admin_account.php"><i class="fa fa-users fa-lg putih" aria-hidden="true" style="margin-bottom:10px"></i>
  Account</a></li>
  <li><a class="text-center paddingnav putih" href="admin_bread.php">
  <span><img src="../../assets/assets/bread.svg" style="margin-bottom:3px;width:55%"></span>
  Bread</a></li>
  <li><a class="text-center paddingnav putih" href="Login/logout"><i class="fa fa-sign-out fa-lg putih" aria-hidden="true" style="margin-bottom:10px"></i>
  Signout</a></li>
</ul>

<div style="margin-left:5%;padding:1px 3px;padding-right:0%">
	<div class="container-fluid" style="padding:0%;">
	<form method="post">
		<div class="col-sm-3 col-md-3 col-lg-3" style="padding-left:3.5%;padding-right:4%;height:698px;border-right: 1px solid #E0E0E0">
			<h1 style="margin-bottom:20px"> PERIOD </h1>
			<div class="kotakbiru"></div>
			<div class="row" style="padding-left:0%;padding-top:3%">
				<div class="col-sm-2 col-md-2 col-lg-2" style="margin-right:7%">
					<h4 class="konten"> From  </h4>
				</div>
			</div>
			<div class="row" style="margin-left:1%;">
				<div class="col-sm-6 col-md-6 col-lg-6" style="padding:0%;padding-top:1%;margin-right:2%">
					<select class="form-control" id="sel1" name="month1" style="width:100%">
							<option value="01"> January </option>
							<option value="02"> February </option>
							<option value="03"> March</option>
							<option value="04"> April </option>
							<option value="05"> May </option>
							<option value="06"> June </option>
							<option value="07"> July </option>
							<option value="08"> August </option>
							<option value="09"> September </option>
							<option value="10"> October </option>
							<option value="11"> November </option>
							<option value="12"> December </option>
					</select>
				</div>
				<div class="col-sm-5 col-md-5 col-lg-5" style="padding:0%;padding-top:1%">
					<select class="form-control" id="sel1" name="year1">
							<option value="2015"> 2015 </option>
							<option value="2016"> 2016 </option>
					</select>
				</div>
			</div>
			
			<div class="row" style="padding-left:0%;padding-top:3%">
				<div class="col-sm-2 col-md-2 col-lg-2" style="margin-right:7%">
					<h4 class="konten"> To  </h4>
				</div>
			</div>
			<div class="row" style="margin-left:1%;">
				<div class="col-sm-6 col-md-6 col-lg-6" style="padding:0%;padding-top:1%;margin-right:2%">
					<select class="form-control" id="sel1" name="month2" style="width:100%">
							<option value="01"> January </option>
							<option value="02"> February </option>
							<option value="03"> March</option>
							<option value="04"> April </option>
							<option value="05"> May </option>
							<option value="06"> June </option>
							<option value="07"> July </option>
							<option value="08"> August </option>
							<option value="09"> September </option>
							<option value="10"> October </option>
							<option value="11"> November </option>
							<option value="12"> December </option>
					</select>
				</div>
				<div class="col-sm-5 col-md-5 col-lg-5" style="padding:0%;padding-top:1%">
					<select class="form-control" id="sel1" name="year2">
							<option value="2015"> 2015 </option>
							<option value="2016"> 2016 </option>
					</select>
				</div>
			</div>
			<div class="row" style="padding:10%;padding-top:12%;">
				<button type="submit" name="generate" class="btn btn-biru" style="height:37px;width:100%"> GENERATE </button>
			</div>
		</div>
		</form>
		<div class="col-sm-9 col-md-9 col-lg-9" style="background-color:#F5F5F5;padding-left:3%;height:698px">
			<h1 style="margin-bottom:20px"> REPORT </h1>
			<div class="kotakbiru"></div>
			<div class="row" style="padding:3%;padding-left:0%;background-color:#F5F5F5;">
				<div class="container-fluid">
					<table class="table table-striped" style="border:1px solid #E0E0E0" id="example">
						<thead style="background-color:white">
						<tr>
							<th>No</th>
							<th>Tanggal</th>
							<th>TRH ID</th>
							<th>Nama Roti</th>
							<th>QTY</th>
							<th>Harga Jual</th>
							<th>Subtotal</th>
						</tr>
						</thead>
						<tbody class="warnatbl">
						<?php

							if (isset($_POST['generate']))
							{
								echo "<script>$('.temp').remove();</script>";

								$month1 = $_POST['month1'];
								$year1 = $_POST['year1'];
								$month2 = $_POST['month2'];
								$year2 = $_POST['year2'];

								$where = "Tanggal BETWEEN '$year1-$month1-01' AND LAST_DAY('$year1-$month2-01')";

								$reportList = $this->db->get_where('report', $where);

								$reportList = $reportList->result_array();
								//$stid = ($conn, "SELECT * FROM report WHERE Tanggal BETWEEN '$year1-$month1-01' AND LAST_DAY('$year1-$month2-01')");

								//echo "select * from report where Tanggal >= to_date('01-$month1-$year1', 'DD-MON-YYYY') and Tanggal <= to_date('01-$month2-$year2', 'DD-MON-YYYY')";
								//oci_execute($stid);
								$no = 1;
								foreach ($reportList as $row) {

									echo "<tr class='temp'><td>$no</td>";
									echo "<td>".$row['Tanggal']."</td>";
									echo "<td>".$row['TRH ID']."</td>";
									echo "<td>".$row['Nama Roti']."</td>";
									echo "<td>".$row['QTY']."</td>";
									echo "<td>".$row['Harga jual']."</td>";
									echo "<td>".$row['Subtotal']."</td>
												</tr>";
									$no++;
								}
							}
							else
							{
								$no = 1;
								foreach ($reportList as $row) {

									echo "<tr class='temp'><td>$no</td>";
									echo "<td>".$row['Tanggal']."</td>";
									echo "<td>".$row['TRH ID']."</td>";
									echo "<td>".$row['Nama Roti']."</td>";
									echo "<td>".$row['QTY']."</td>";
									echo "<td>".$row['Harga jual']."</td>";
									echo "<td>".$row['Subtotal']."</td>
												</tr>";
									$no++;
								}
							}
							
						?>
						</tbody>
					</table>
				</div>
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