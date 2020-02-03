<?php include('header.php'); ?>

<?php 
	include('database.php');
	if (isset($_POST['c_submit'])) {
		$student_id = $_POST['student_id'];
		$monthly_fee        = $_POST['monthly_fee'];
		$monthly_exam_fee      = $_POST['monthly_exam_fee'];
		$mid_exam_fee      = $_POST['mid_exam_fee'];
		$final_exam_fee      = $_POST['final_exam_fee'];
		$library      = $_POST['library'];
		$admit      = $_POST['admit'];
		$month      = $_POST['month'];
		$year      = $_POST['year'];
		$sql = "INSERT into account(student_id,month,year,monthly_fee,monthly_exam_fee,mid_exam_fee,final_exam_fee,library,admit) values('$student_id','$month','$year','$monthly_fee','$monthly_exam_fee','$mid_exam_fee','$final_exam_fee','$library','$admit')";
		$obj = mysqli_query($connection, $sql);
		if ($obj) {
			echo "success";
		}else{
			echo "problem".mysqli_error($connection);
		}
	}

?>

<div class="parent-wrapper" id="outer-wrapper">
			<!-- SIDE MENU -->
			<?php include('side_menu.php'); ?>

			<!-- MAIN CONTENT -->
			<div class="main-content" id="content-wrapper">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12 clear-padding-xs">
							<h5 class="page-title"><i class="fa fa-user"></i>STUDENT ACCOUNT</h5>
							<div class="section-divider"></div>
						</div>
					</div>
<?php include('database.php');

				if(isset($_POST['submit'])){
					$search = $_POST['search'];
					$year   = $_POST['year'];
					$month  = $_POST['month'];
					$search = preg_replace('#[^0-9a-z]#i','', $search);

					$sql = "SELECT * FROM account WHERE student_id LIKE '%$search%' and month LIKE '%$month%' and year LIKE '%$year%' ";
					$query = mysqli_query($connection, $sql);
					
					$res = mysqli_num_rows($query);
					if (mysqli_num_rows($query)== 0) {
						echo 'Student not found';
					}
					if (empty($_POST['search'])) {
						echo '<p style="color:red">'.'write something'.'</p>';
					}else{	
						foreach ($query as $key => $value) {
	?>
			 <table class="table table-hover">
			    <thead>
			      <tr>
			        <th>Student id</th>
			        <th>monthly fee</th>
			        <th>Monthly exam fee</th>
			        <th>mid exam fee</th>
			        <th>final exam fee</th>
			        <th>library</th>
			        <th>admit</th>
			        <th>Total</th>
			        
			        <th>Action</th>
			      </tr>
			    </thead>
			    <tbody>
			      <tr>
			        <td><?php echo $value['student_id']; ?></td>
			        <td><?php echo $value['monthly_fee']; ?></td>
			        <td><?php echo $value['monthly_exam_fee']; ?></td>
			        <td><?php echo $value['mid_exam_fee']; ?></td>
			        <td><?php echo $value['final_exam_fee']; ?></td>
			        <td><?php echo $value['library']; ?></td>
			        <td><?php echo $value['admit']; ?></td>
			        
			        <td><?php $total = $value['monthly_fee']+$value['monthly_exam_fee']+$value['mid_exam_fee']+$value['final_exam_fee']+$value['library']+$value['admit']; echo $total; ?></td>
			        
			        <td><a href="print_account.php?student_id=<?php echo $value['student_id']; ?>"><i class="fa fa-2x fa-print" aria-hidden="true"></i>
				</a>
			</td>
			      </tr>
			    </tbody>
			  </table>

	<?php  }}}  ?>	


					<div class="row">
						<div class="col-lg-12 clear-padding-xs ">
							<div class="col-md-12">
								<div class="dash-item first-dash-item">
									<h3 class="item-title text-center"><i class="fa fa-user"></i>SEARCH STUDENT INFORMATION</h3>
									<div class="clearfix"></div>
									<div class="row">
								<div class="text-center" style="margin-top: 5px">
									
								<form class="form-inline" method="post">
								    <div class="form-group">
								      <label class=" col-sm-2" >ID:</label>
								      <div class="col-sm-2">
								        <input name="search" type="text" class="form-control"  placeholder="Enter ID" name="email">
								      </div>
								    </div>
								    <div class="form-group">
										<label for="sel1">Month:</label>
										<select name="month" class="form-control" >
											<option value="<?php echo date('F'); ?>"><?php echo date('F'); ?></option>
											<option value="january">january</option>
											<option value="february">february</option>
											<option value="march">march</option>
											<option value="april">april</option>
											<option value="may">may</option>
											<option value="june">june</option>
											<option value="july">july</option>
											<option value="augest">augest</option>
											<option value="september">september</option>
											<option value="october">october</option>
											<option value="november">november</option>
											<option value="december">december</option>

										</select>
									</div>

									<div class="form-group">
										<label for="sel1">Year:</label>
										<select name="year" class="form-control" >
											<option value="<?php echo date('Y'); ?>"><?php echo date('Y'); ?></option>
											
										</select>
									</div>
								    
								    <div class="form-group">        
								      <div class="col-sm-offset-2 col-sm-10">
								        <button type="submit" name="submit" class="btn btn-success">Search</button>
								      </div>
								    </div>
								  </form>
								</div>
								<hr>
							</div>

							<h3 class="item-title text-center"><i class="fa fa-user"></i>PAYMENT FESS</h3>
									<div class="clearfix"></div>
										
								<form class="form-horizontal " method="post">
										<div class="row centered">
										    <div class="form-group">
										      <label class="control-label col-sm-2" for="email">STUDENT ID:</label>
										      <div class="col-sm-10">
										        <input type="text" class="form-control" id="email" placeholder="Enter ID" name="student_id">
										      </div>
										    </div>

										    <div class="form-group">
										      <label class="control-label col-sm-2" for="pwd">MONTHLY FESS:</label>
										      <div class="col-sm-10">          
										        <input type="text" class="form-control" name="monthly_fee" placeholder="Enter Amount" >
										      </div>
										    </div>

										    <div class="form-group">
										      <label class="control-label col-sm-2" for="pwd">MONTHLY EXAM FESS:</label>
										      <div class="col-sm-10">          
										        <input type="text" name="monthly_exam_fee" class="form-control"  placeholder="Enter Amount" >
										      </div>
										    </div>

										    <div class="form-group">
										      <label class="control-label col-sm-2" for="pwd">MID EXAM FESS:</label>
										      <div class="col-sm-10">          
										        <input type="text" class="form-control" id="pwd" placeholder="Enter Amount" name="mid_exam_fee">
										      </div>
										    </div>

										    <div class="form-group">
										      <label class="control-label col-sm-2" for="pwd">FINAL EXAM FESS:</label>
										      <div class="col-sm-10">          
										        <input type="text" class="form-control"  placeholder="Enter Amount" name="final_exam_fee">
										      </div>
										    </div>

										    <div class="form-group">
										      <label class="control-label col-sm-2" for="pwd">LIBRARY:</label>
										      <div class="col-sm-10">          
										        <input type="text" class="form-control"  placeholder="Enter Amount" name="library">
										      </div>
										    </div>

										    <div class="form-group">
										      <label class="control-label col-sm-2" for="pwd">ADMIT:</label>
										      <div class="col-sm-10">          
										        <input type="text" class="form-control" id="pwd" placeholder="Enter Amount" name="admit">
										      </div>
										    </div>

										    <div class="form-group col-sm-4">
										      <label class="control-label col-sm-2" for="pwd">month:</label>
											  <select class="col-sm-2 form-control" name="month">
											  	<option><?php echo date('F') ?></option>
										        <option value="january">January</option>
										        <option value="february">February</option>
										        <option value="march">march</option>
										        <option value="april">april</option>
										        <option value="may">may</option>
										        <option value="june">june</option>
										        <option value="july">july</option>
										        <option value="august">august</option>
										        <option value="september">september</option>
										        <option value="october">October</option>
										        <option value="november">November</option>
										        <option value="december">december</option>
										      </select>
										    </div>
										    <div class="form-group hide">
										      <label class="control-label col-sm-2" for="pwd">year:</label>
										      <div class="col-sm-10">          
										        <input type="text" name="year" class="form-control" id="pwd" placeholder="Enter password" name="year" value="<?php echo date('Y'); ?>">
										      </div>
										    </div>	   
										    <div class="form-group">    
										      <div class="col-sm-offset-2 col-sm-10">
										        <button type="submit" name="c_submit" class="btn btn-default">Submit</button>
										      </div>
										    </div>
										  </div>
										  </form>
										</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="menu-togggle-btn">
					<a href="#menu-toggle" id="menu-toggle"><i class="fa fa-bars"></i></a>
				</div>

			
			</div>
		</div>
	
		<!-- Scripts -->
        <script src="assets/js/jQuery_v3_2_0.min.js"></script>
		<script src="assets/js/jquery-ui.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/plugins/owl.carousel.min.js"></script>
		<script src="assets/plugins/Chart.min.js"></script>
		<script src="assets/plugins/jquery.dataTables.min.js"></script>
		<script src="assets/plugins/dataTables.responsive.min.js"></script>
        <script src="assets/js/js.js"></script>
		
    </body>

</html>
				