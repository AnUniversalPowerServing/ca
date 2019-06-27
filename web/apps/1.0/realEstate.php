<!DOCTYPE html>
<html lang="en">
<head>
  <title>ConstructionAdda</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
  <?php include_once 'templates/api/api_params.php'; ?>
</head>
<body>
<?php include_once 'templates/pages/app_header_general.php'; ?>
<div class="container-fluid">
 <div class="row">
   <div class="col-sm-4">
     <div align="center"><h5><b>Filter your Options</b></h5><hr/></div>
	 <div><h5><b>Choose Residential / Commercial</b></h5></div>
	 <div> 
	   <div class="list-group">
	     <div class="list-group-item bg-grey" data-toggle="collapse" data-target="#realEstate_div_residential">
		    <b>Residential</b><i class="fa fa-angle-double-down pull-right"></i>
		 </div><!-- list-group-item -->
		 
		 <div id="realEstate_div_residential" class="collapse">
		   <div class="list-group-item">
		     <label class="checkbox-inline">
			    <input type="checkbox" data-toggle="toggle" data-size="mini" data-onstyle="success"
				data-width="80" data-on="Added" data-off="Not Added" data-offstyle="default">
				<b>Residential Apartments</b>
			</label>
		   </div><!-- list-group-item -->
		   <div class="list-group-item">
		     <label class="checkbox-inline">
			    <input type="checkbox" data-toggle="toggle" data-size="mini" data-onstyle="success"
				data-width="80" data-on="Added" data-off="Not Added" data-offstyle="default">
				<b>Independent Houses / Villa</b>
			</label>
		   </div><!-- list-group-item -->
		   <div class="list-group-item">
		     <label class="checkbox-inline">
			    <input type="checkbox" data-toggle="toggle" data-size="mini" data-onstyle="success"
				data-width="80" data-on="Added" data-off="Not Added" data-offstyle="default">
				<b>Residential Land</b>
			 </label>
		   </div><!-- list-group-item -->
		   <div class="list-group-item">
		      <label class="checkbox-inline">
			    <input type="checkbox" data-toggle="toggle" data-size="mini" data-onstyle="success"
				data-width="80" data-on="Added" data-off="Not Added" data-offstyle="default">
				<b>Farm House</b>
			  </label>
		   </div><!-- list-group-item -->
		   <div class="list-group-item">
		      <label class="checkbox-inline">
			    <input type="checkbox" data-toggle="toggle" data-size="mini" data-onstyle="success"
				data-width="80" data-on="Added" data-off="Not Added" data-offstyle="default">
				<b>Other</b>
			  </label>
		   </div><!-- list-group-item -->
		 </div><!-- collapse -->
		 <div class="list-group-item bg-grey" data-toggle="collapse" data-target="#realEstate_div_commercial">
		    <b>Commerical</b><i class="fa fa-angle-double-down pull-right"></i>
	     </div><!-- list-group-item -->
		 <div id="realEstate_div_commercial" class="collapse">
		   <div class="list-group-item">
		     <label class="checkbox-inline">
			    <input type="checkbox" data-toggle="toggle" data-size="mini" data-onstyle="success"
				data-width="80" data-on="Added" data-off="Not Added" data-offstyle="default">
				<b>Commercial Shops</b>
			 </label>
		   </div><!-- list-group-item -->
		   <div class="list-group-item">
		      <label class="checkbox-inline">
			    <input type="checkbox" data-toggle="toggle" data-size="mini" data-onstyle="success"
				data-width="80" data-on="Added" data-off="Not Added" data-offstyle="default">
				<b>Commercial Showrooms</b>
			  </label>
		   </div><!-- list-group-item -->
		   <div class="list-group-item">
		      <label class="checkbox-inline">
			    <input type="checkbox" data-toggle="toggle" data-size="mini" data-onstyle="success"
				data-width="80" data-on="Added" data-off="Not Added" data-offstyle="default">
				<b>Commercial Office/Spaces</b>
			  </label>
		   </div><!-- list-group-item -->
		   <div class="list-group-item">
		      <label class="checkbox-inline">
			    <input type="checkbox" data-toggle="toggle" data-size="mini" data-onstyle="success"
				data-width="80" data-on="Added" data-off="Not Added" data-offstyle="default">
				<b>Commercial Land</b>
			  </label>
		   </div><!-- list-group-item -->
		   <div class="list-group-item">
		      <label class="checkbox-inline">
			    <input type="checkbox" data-toggle="toggle" data-size="mini" data-onstyle="success"
				data-width="80" data-on="Added" data-off="Not Added" data-offstyle="default">
				<b>Industrial Lands / Plots</b>
			  </label>
		   </div><!-- list-group-item -->
		   <div class="list-group-item">
		      <label class="checkbox-inline">
			    <input type="checkbox" data-toggle="toggle" data-size="mini" data-onstyle="success"
				data-width="80" data-on="Added" data-off="Not Added" data-offstyle="default">
				<b>Agriculture Lands / Farm Lands</b>
			  </label>
		   </div><!-- list-group-item -->
		   <div class="list-group-item">
		      <label class="checkbox-inline">
			    <input type="checkbox" data-toggle="toggle" data-size="mini" data-onstyle="success"
				data-width="80" data-on="Added" data-off="Not Added" data-offstyle="default">
				<b>Hotel / Resorts</b>
			  </label>
		   </div><!-- list-group-item -->
		   <div class="list-group-item">
		      <label class="checkbox-inline">
			    <input type="checkbox" data-toggle="toggle" data-size="mini" data-onstyle="success"
				data-width="80" data-on="Added" data-off="Not Added" data-offstyle="default">
				<b>Guest House / Banquet Houses</b>
			  </label>
		   </div><!-- list-group-item -->
		   <div class="list-group-item">
		      <label class="checkbox-inline">
			    <input type="checkbox" data-toggle="toggle" data-size="mini" data-onstyle="success"
				data-width="80" data-on="Added" data-off="Not Added" data-offstyle="default">
				<b>Space in Retail Malls</b>
			  </label>
		   </div><!-- list-group-item -->
		   <div class="list-group-item">
		      <label class="checkbox-inline">
			    <input type="checkbox" data-toggle="toggle" data-size="mini" data-onstyle="success"
				data-width="80" data-on="Added" data-off="Not Added" data-offstyle="default">
				<b>Office in Business Park</b>
			  </label>
		   </div><!-- list-group-item -->
		   <div class="list-group-item">
		      <label class="checkbox-inline">
			    <input type="checkbox" data-toggle="toggle" data-size="mini" data-onstyle="success"
				data-width="80" data-on="Added" data-off="Not Added" data-offstyle="default">
				<b>Office in IT Park</b>
			  </label>
		   </div><!-- list-group-item -->
		   <div class="list-group-item">
		      <label class="checkbox-inline">
			    <input type="checkbox" data-toggle="toggle" data-size="mini" data-onstyle="success"
				data-width="80" data-on="Added" data-off="Not Added" data-offstyle="default">
				<b>WareHouse</b>
			  </label>
		   </div><!-- list-group-item -->
		   <div class="list-group-item">
		      <label class="checkbox-inline">
			    <input type="checkbox" data-toggle="toggle" data-size="mini" data-onstyle="success"
				data-width="80" data-on="Added" data-off="Not Added" data-offstyle="default">
				<b>Cold Storage</b>
			  </label>
		   </div><!-- list-group-item -->
		   <div class="list-group-item">
		      <label class="checkbox-inline">
			    <input type="checkbox" data-toggle="toggle" data-size="mini" data-onstyle="success"
				data-width="80" data-on="Added" data-off="Not Added" data-offstyle="default">
				<b>Factory</b>
			  </label>
		   </div><!-- list-group-item -->
		   <div class="list-group-item">
		      <label class="checkbox-inline">
			    <input type="checkbox" data-toggle="toggle" data-size="mini" data-onstyle="success"
				data-width="80" data-on="Added" data-off="Not Added" data-offstyle="default">
				<b>Manufacturing</b>
			  </label>
		   </div><!-- list-group-item -->
		   <div class="list-group-item">
		     <label class="checkbox-inline">
			    <input type="checkbox" data-toggle="toggle" data-size="mini" data-onstyle="success"
				data-width="80" data-on="Added" data-off="Not Added" data-offstyle="default">
				<b>Business Center</b>
			  </label>
		   </div><!-- list-group-item -->
		   <div class="list-group-item">
		     <label class="checkbox-inline">
			    <input type="checkbox" data-toggle="toggle" data-size="mini" data-onstyle="success"
				data-width="80" data-on="Added" data-off="Not Added" data-offstyle="default">
				<b>Other</b>
			  </label>
		   </div><!-- list-group-item -->
		 </div><!-- collapse -->
	   </div>
	 </div>
     <div><h5><b>Other Filter Options</b></h5></div>
	 <div>
	   <div class="list-group">
	     <div class="list-group-item bg-grey" data-toggle="collapse" data-target="#realEstate_div_chooseYourPurpose">
		   <b>Choose your Purpose</b><i class="fa fa-angle-double-down pull-right"></i>
		 </div><!-- list-group-item -->
		 <div id="realEstate_div_chooseYourPurpose" class="collapse">
	     <div class="list-group-item">
			  <label class="checkbox-inline">
			    <input type="checkbox" data-toggle="toggle" data-size="mini" data-onstyle="success"
				data-width="80" data-on="Added" data-off="Not Added" data-offstyle="default">
				<b>Buy a Property</b>
			  </label>
		 </div>
		 <div class="list-group-item">
			  <label class="checkbox-inline">
			    <input type="checkbox" data-toggle="toggle" data-size="mini" data-onstyle="success"
				data-width="80" data-on="Added" data-off="Not Added" data-offstyle="default">
				<b>Sell a Property</b>
			  </label>
		 </div>
		 <div class="list-group-item">
			  <label class="checkbox-inline">
			    <input type="checkbox" data-toggle="toggle" data-size="mini" data-onstyle="success"
				data-width="80" data-on="Added" data-off="Not Added" data-offstyle="default">
				<b>Rent a Property</b>
			  </label>
		 </div>
		 <div class="list-group-item">
			  <label class="checkbox-inline">
			    <input type="checkbox" data-toggle="toggle" data-size="mini" data-onstyle="success"
				data-width="80" data-on="Added" data-off="Not Added" data-offstyle="default">
				<b>PG / Accomodation</b>
			  </label>
	     </div><!-- list-group-item -->
	     </div>
	     <div class="list-group-item bg-grey" data-toggle="collapse" data-target="#realEstate_div_chooseYourRange">
		   <b>Choose your Range</b><i class="fa fa-angle-double-down pull-right"></i>
		 </div><!-- list-group-item -->
		 <div id="realEstate_div_chooseYourRange" class="collapse">
	     <div class="list-group-item">
			  <label class="checkbox-inline">
			    <input type="checkbox" data-toggle="toggle" data-size="mini" data-onstyle="success"
				data-width="80" data-on="Added" data-off="Not Added" data-offstyle="default">
				<b>Below 20 Lakhs</b>
			  </label>
		 </div>
		 <div class="list-group-item">
			  <label class="checkbox-inline">
			    <input type="checkbox" data-toggle="toggle" data-size="mini" data-onstyle="success"
				data-width="80" data-on="Added" data-off="Not Added" data-offstyle="default">
				<b>20 Lakhs - 40 Lakhs</b>
			  </label>
		 </div>
		 <div class="list-group-item">
			  <label class="checkbox-inline">
			    <input type="checkbox" data-toggle="toggle" data-size="mini" data-onstyle="success"
				data-width="80" data-on="Added" data-off="Not Added" data-offstyle="default">
				<b>40 Lakhs - 60 Lakhs</b>
			  </label>
		 </div>
		 <div class="list-group-item">
			  <label class="checkbox-inline">
			    <input type="checkbox" data-toggle="toggle" data-size="mini" data-onstyle="success"
				data-width="80" data-on="Added" data-off="Not Added" data-offstyle="default">
				<b>60 Lakhs - 80 Lakhs</b>
			  </label>
	     </div><!-- list-group-item -->
		 <div class="list-group-item">
			  <label class="checkbox-inline">
			    <input type="checkbox" data-toggle="toggle" data-size="mini" data-onstyle="success"
				data-width="80" data-on="Added" data-off="Not Added" data-offstyle="default">
				<b>80 Lakhs - 1 Crore</b>
			  </label>
	     </div><!-- list-group-item -->
		 <div class="list-group-item">
			  <label class="checkbox-inline">
			    <input type="checkbox" data-toggle="toggle" data-size="mini" data-onstyle="success"
				data-width="80" data-on="Added" data-off="Not Added" data-offstyle="default">
				<b>1 Crore - 2 Crores</b>
			  </label>
	     </div><!-- list-group-item -->
		 <div class="list-group-item">
			  <label class="checkbox-inline">
			    <input type="checkbox" data-toggle="toggle" data-size="mini" data-onstyle="success"
				data-width="80" data-on="Added" data-off="Not Added" data-offstyle="default">
				<b>2 Crores - 5 Crores</b>
			  </label>
	     </div><!-- list-group-item -->
		 <div class="list-group-item">
			  <label class="checkbox-inline">
			    <input type="checkbox" data-toggle="toggle" data-size="mini" data-onstyle="success"
				data-width="80" data-on="Added" data-off="Not Added" data-offstyle="default">
				<b>5 Crores - 10 Crores</b>
			  </label>
	     </div><!-- list-group-item -->
		 <div class="list-group-item">
			  <label class="checkbox-inline">
			    <input type="checkbox" data-toggle="toggle" data-size="mini" data-onstyle="success"
				data-width="80" data-on="Added" data-off="Not Added" data-offstyle="default">
				<b>Above 10 Crores</b>
			  </label>
	     </div><!-- list-group-item -->
	     </div>
	   </div><!-- list-group -->
	 </div>
   </div><!-- col-sm-4 -->
 </div><!-- row -->
</div><!-- container-fluid -->
</body>
</html>