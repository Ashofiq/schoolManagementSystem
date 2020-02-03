
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Account invoice</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	
	<!-- Favicon -->
	<link rel="icon" href="/images/favicon.png" type="image/x-icon">
	
	
	<!-- Invoice styling -->
	<style>
	body{
		font-family:'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
		text-align:center;
		color:#777;
	}
	
	body h1{
		font-weight:300;
		margin-bottom:0px;
		padding-bottom:0px;
		color:#000;
	}
	
	body h3{
		font-weight:300;
		margin-top:10px;
		margin-bottom:20px;
		font-style:italic;
		color:#555;
	}
	
	body a{
		color:#06F;
	}
	
	.invoice-box{
		max-width:800px;
		margin:auto;
		padding:30px;
		border:1px solid #eee;
		box-shadow:0 0 10px rgba(0, 0, 0, .15);
		font-size:16px;
		line-height:24px;
		font-family:'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
		color:#555;
	}
	
	.invoice-box table{
		width:100%;
		line-height:inherit;
		text-align:left;
	}
	
	.invoice-box table td{
		padding:5px;
		vertical-align:top;
	}
	
	.invoice-box table tr td:nth-child(2){
		text-align:right;
	}
	
	.invoice-box table tr.top table td{
		padding-bottom:20px;
	}
	
	.invoice-box table tr.top table td.title{
		font-size:45px;
		line-height:45px;
		color:#333;
	}
	
	.invoice-box table tr.information table td{
		padding-bottom:40px;
	}
	
	.invoice-box table tr.heading td{
		background:#eee;
		border-bottom:1px solid #ddd;
		font-weight:bold;
	}
	
	.invoice-box table tr.details td{
		padding-bottom:20px;
	}
	
	.invoice-box table tr.item td{
		border-bottom:1px solid #eee;
	}
	
	.invoice-box table tr.item.last td{
		border-bottom:none;
	}
	
	.invoice-box table tr.total td:nth-child(2){
		border-top:2px solid #eee;
		font-weight:bold;
	}
	
	@media only screen and (max-width: 600px) {
		.invoice-box table tr.top table td{
			width:100%;
			display:block;
			text-align:center;
		}
		
		.invoice-box table tr.information table td{
			width:100%;
			display:block;
			text-align:center;
		}
	}
	</style>
</head>

<body >
	<h1 class="btn btn-default" onclick="myFunction()">Southest school and College :P</h1>
	<h3>Because sometimes, all you need is something simple.</h3>
	<br>

	<script type="text/javascript">
			function myFunction() {	
    			window.print();
			} 
	</script>

	<div class="invoice-box">
		<table cellpadding="0" cellspacing="0">
			<tr class="top">
				<td colspan="2">
					<table>
						<tr>
							<td class="title">
								<img src="images/logo.jpg" style="width:100%; max-width:300px;">
							</td>
							
							<td>
								Invoice #: <?php echo rand(); ?><br>
								Created: <?php echo date('F d, Y'); ?><br>
								Due: <input style="border:none" type="text" value="<?php echo date('F d, Y'); ?>">
							</td>
						</tr>
					</table>
				</td>
			</tr>
			
			<tr class="information">
				<td colspan="2">
					<table>
						<tr>
							<td>
 <?php 
								include('database.php');
								$id = $_GET['student_id'];
								
								$sql = "SELECT student.student_id, student.first_name, student.last_name, student.class FROM student INNER JOIN account ON student.student_id = account.student_id Where student.student_id = '$id' limit 0,1";
								$obj = mysqli_query($connection,$sql);
								foreach ($obj as $key => $value) {

								 echo 'Name: '.$value['first_name']." ".$value['last_name'].'<br>';
							
								  echo 'ID :'.$value['student_id'].'<br>'; 
								  echo 'Class: '.$value['class']; 
	}
?>

							</td>
							
							<td>
								Acme Corp.<br>
								John Doe<br>
								<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3852575056785d40595548545d165b5755">[email&#160;protected]</a>
							</td>
						</tr>
					</table>
				</td>
			</tr>
<?php 
include('database.php');
	if (isset($_GET['student_id'])) {
		
		$id = $_GET['student_id'];
		$sql = "SELECT * FROM account WHERE student_id = '$id'";
		$obj = mysqli_query($connection, $sql);
		
		foreach ($obj as $key => $value) {
			


?>
			<tr class="heading">
				<td>
					Payment Method
				</td>
			
				<td>
					Chash #
				</td>
			</tr>
		
			<tr class="details">
				<td>
					Chash
				</td>
				
				<td>
					<?php $total = $value['monthly_fee']+$value['monthly_exam_fee']+$value['mid_exam_fee']+$value['final_exam_fee']+$value['library']+$value['admit']; echo $total; ?>
				</td>
			</tr>
			
			<tr class="heading">
				<td>
					Item
				</td>
				
				<td>
					Amount
				</td>
			</tr>
			
			<tr class="item">
				<td>
					Monthly fee
				</td>
				
				<td>
					<?php echo $value['monthly_fee']; ?>
				</td>
			</tr>
			
			<tr class="item">
				<td>
					Monthly Exam fee
				</td>
				
				<td>
					<?php echo $value['monthly_exam_fee']; ?>
				</td>
			</tr>
			
			<tr class="item ">
				<td>
					Mid Exam fee
				</td>
				
				<td>
					<?php echo $value['mid_exam_fee']; ?>
				</td>
			</tr>

			<tr class="item ">
				<td>
					Final Exam fee
				</td>
				
				<td>
					<?php echo $value['final_exam_fee']; ?>
				</td>
			</tr>

			<tr class="item ">
				<td>
					Library
				</td>
				
				<td>
					<?php echo $value['library']; ?>
				</td>
			</tr>

			<tr class="item last">
				<td>
					Admit
				</td>
				
				<td>
					<?php echo $value['admit']; ?>
				</td>
			</tr>
			
			<tr class="total">
				<td rowspan="5" class="pull-right">Total</td>
				
				<td>
				  = <?php echo $total; ?>TK
				</td>
			</tr>
		</table>
<?php }} ?>
	</div>

	

<script src="/cdn-cgi/scripts/0e574bed/cloudflare-static/email-decode.min.js"></script></body>
</html>
