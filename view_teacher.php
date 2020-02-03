<?php include('header.php'); ?>
<style type="text/css">
input.hidden {
    position: absolute;
    left: -9999px;
}

#profile-image1 {
    cursor: pointer;
  
     width: 100px;
    height: 100px;
	border:2px solid #03b1ce ;}
	.tital{ font-size:16px; font-weight:500;}
	 .bot-border{ border-bottom:1px #f8f8f8 solid;  margin:5px 0  5px 0}	
</style>
	

	<?php 
	include('database.php');
		if (isset($_GET['teacher_id'])) {
			$id = $_GET['teacher_id'];
			$sql = "SELECT * FROM teacher where teacher_id = '$id'";
			$obj = mysqli_query($connection,$sql);

			foreach ($obj as $key => $value) {
			
	?>

<div class="container">
	<div class="row">
		<h2 class="text-center">Teacher Profile view</h2>
        <p class="pull-right"><a href="edit_teacher.php?teacher_id=<?php echo $value['teacher_id']; ?>">Edit</a></p>
        
<div class="col-md-7 ">

<div class="panel panel-default">
  <div class="panel-heading">  <h4 >Teaacher Profile</h4></div><p></p>
   <div class="panel-body">
    <div class="box box-info">
            <div class="box-body">
                     <div class="col-sm-6">
                     <div  align="center"> <img alt="User Pic" src="images/<?php echo $value['pic']; ?>" id="profile-image1" class="img-circle img-responsive"> 
                <input id="profile-image-upload" class="hidden" type="file">
			<div style="color:#999;" ></div>
                <!--Upload Image Js And Css-->
           </div>
              
              <br>
    
              <!-- /input-group -->
            </div>
            <div class="col-sm-6">
            <h4 style="color:#00b1b1;"><?php echo $value['first_name']." ".$value['last_name']; ?> </h4></span>
              <span><p><?php echo $value['other_degree']; ?></p></span>            
            </div>
            <div class="clearfix"></div>
            <hr style="margin:5px 0 5px 0;">
    
              
			<div class="col-sm-5 col-xs-6 tital " >First Name:</div><div class="col-sm-7 col-xs-6 "><?php echo $value['first_name']; ?></div>
			     <div class="clearfix"></div>
			<div class="bot-border"></div>

			<div class="col-sm-5 col-xs-6 tital " >Last Name:</div><div class="col-sm-7"> <?php echo $value['last_name']; ?></div>
			  <div class="clearfix"></div>
			<div class="bot-border"></div>

			<div class="col-sm-5 col-xs-6 tital " >Date Of Birth:</div><div class="col-sm-7"><?php echo $value['birth']; ?></div>

			  <div class="clearfix"></div>
			<div class="bot-border"></div>

			<div class="col-sm-5 col-xs-6 tital " >Email :</div><div class="col-sm-7"><?php echo $value['email']; ?></div>

			 <div class="clearfix"></div>
			<div class="bot-border"></div>

			<div class="col-sm-5 col-xs-6 tital " >Email :</div><div class="col-sm-7"><?php echo $value['phone']; ?></div>

			 <div class="clearfix"></div>
			<div class="bot-border"></div>

			<div class="col-sm-5 col-xs-6 tital " >Religion:</div><div class="col-sm-7"><?php echo $value['religion']; ?></div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        	</div>
  		</div> 
    </div>
</div>  
    <?php } } ?>
</div>
</div>

<?php include('footer.php'); ?>


