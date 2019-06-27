<!DOCTYPE html>
<html lang="en">
<head>
  <title>ConstructionAdda</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <?php include_once 'templates/api/api_params.php'; ?>
</head>
<body>
<?php include_once 'templates/pages/app_header_general.php'; ?>
<div class="container-fluid" style="background-color:#ff5722;color:#fff;">

  <div class="row">
    <div class="col-sm-6" style="padding-top:30px;padding-bottom:30px;">
	  <div><b>WE CONNECT</b></div>
	  <div><h2><b>Builders, Buyers, Sellers and so on</b></h2></div>
	  <div><b>Worlds #1 Construction Industry's Platform</b></div>
	  <div align="center" class="mtop15p">
	    <button class="btn btn-default"><b>See How it works?</b></button>
	  </div>
	</div>
	<div class="col-sm-6" style="padding-top:30px;padding-bottom:30px;">
	  <div class="list-group">
	    <div class="list-group-item">
	       <!-- -->
		   <div class="container-fluid" style="color:#000;">
		     <div class="row">
			 
			   <div class="col-sm-12">
			     <h4><b>Tell us you need</b></h4><hr/>
			   </div><!-- col-sm-12 -->
			   
			 </div><!-- row  -->
			 <div class="row">
			 
			   <div class="col-sm-12">
			   
			     <div class="form-group">
				   <label>Product / Service</label>
				   <input type="text" class="form-control" placeholder="Enter your Product / Service"/>
				 </div>
				 
			   </div><!-- col-sm-12 -->
			 
			 </div><!-- row  -->
			 <div class="row">
			 
			   <div class="col-sm-6"> 
			   
				 <div class="form-group">
				   <label>Expected Price</label>
				   <div class="input-group">
				     <span class="input-group-addon"><b>Rs.</b></span>
				     <input type="text" class="form-control" placeholder="Enter your Expected Price"/>
				   </div>
				 </div>
				 
			   </div><!-- col-sm-6 -->
			   <div class="col-sm-6"> 
			   
				 <div class="form-group">
				   <label>Quantity</label>
				   <select class="form-control">
				     <option value="">Select Quantity</option>
				   </select>
				 </div> 
				 
			   </div><!-- col-sm-6 -->
			   
			 </div><!-- row  -->
			 <div class="row">
			 
				<div class="col-sm-6"></div>
				<div class="col-sm-6">
				  <button class="btn btn-default pull-right"><b>Get Best Quotation</b></button>
				</div>
				
			 </div><!-- row -->
		   </div><!-- container-fluid -->
		   <!-- -->
	    </div><!-- list-group-item -->
	  </div><!-- list-group -->

	</div>
  </div>

</div>

<div class="container-fluid">

  <div class="row">
    <div class="col-sm-3">
	  <div align="center"><h4><b>Browse by Categories</b></h4></div>
	  <div>
	    <div class="list-group">
		  <a href="<?php echo $_SESSION["PROJECT_URL"]; ?>initializer/realEstate">
		  <div class="list-group-item"><b>Real Estate</b><i class="fa fa-angle-double-right pull-right"></i></div>
		  </a>
		  <div class="list-group-item"><b>Builders</b><i class="fa fa-angle-double-right pull-right"></i></div>
		  <div class="list-group-item"><b>Building Planners</b><i class="fa fa-angle-double-right pull-right"></i></div>
		  <div class="list-group-item"><b>Borrewell</b><i class="fa fa-angle-double-right pull-right"></i></div>
		  <div class="list-group-item"><b>Proclainers / JCB</b><i class="fa fa-angle-double-right pull-right"></i></div>
		  <div class="list-group-item"><b>Bricks</b><i class="fa fa-angle-double-right pull-right"></i></div>
		  <div class="list-group-item"><b>Sand</b><i class="fa fa-angle-double-right pull-right"></i></div>
		  <div class="list-group-item"><b>Cement</b><i class="fa fa-angle-double-right pull-right"></i></div>
		  <div class="list-group-item"><b>Iron</b><i class="fa fa-angle-double-right pull-right"></i></div>
		  <div class="list-group-item"><b>Wood Works</b><i class="fa fa-angle-double-right pull-right"></i></div>
		  <div class="list-group-item"><b>Steel Fabrication Works</b><i class="fa fa-angle-double-right pull-right"></i></div>
		  <div class="list-group-item"><b>Glass Fitting Work</b><i class="fa fa-angle-double-right pull-right"></i></div>
		  <div class="list-group-item"><b>Tiles / Marbles/ Granite</b><i class="fa fa-angle-double-right pull-right"></i></div>
		  <div class="list-group-item"><b>Electrical Items</b><i class="fa fa-angle-double-right pull-right"></i></div>
		  <div class="list-group-item"><b>Plumbing Items</b><i class="fa fa-angle-double-right pull-right"></i></div>
		  <div class="list-group-item"><b>Paints</b><i class="fa fa-angle-double-right pull-right"></i></div>
		  <div class="list-group-item"><b>Ceiling Works</b><i class="fa fa-angle-double-right pull-right"></i></div>
		  <div class="list-group-item"><b>Interior Designers</b><i class="fa fa-angle-double-right pull-right"></i></div>
		  <div class="list-group-item"><b>Electricians</b><i class="fa fa-angle-double-right pull-right"></i></div>
		  <div class="list-group-item"><b>Plumbers</b><i class="fa fa-angle-double-right pull-right"></i></div>
		  <div class="list-group-item"><b>Carpenters</b><i class="fa fa-angle-double-right pull-right"></i></div>
		  <div class="list-group-item"><b>Painters</b><i class="fa fa-angle-double-right pull-right"></i></div>
		</div>
	  </div>
	</div><!-- col-sm-12 -->
  </div><!-- row -->
  
 </div><!-- container-fluid -->
</body>
</html>
