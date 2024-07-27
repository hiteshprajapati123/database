<?php  include ('../include/config.php');?>
<?php  include ('../include/header.php');?>
<?php  include ('../addpractical/add_practical_model.php');?>
<html>
	<head>
		<title>students corner-<?php echo $app_name; ?></title>
	</head>
	<body>
		<div style="margin-top:60px; margin-left: 20px;">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
				    <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
				    <li class="breadcrumb-item active" aria-current="page">Practical</li>
				</ol>
			</nav>
		</div>
		<div class="container">
			<div class="row" style="margin-top: 30px;">
				<div class="col-sm-12 col-lg-4 col-md-6 ">
					<div class="card mx-auto mb-3 " style="width: 18rem;">
						<div class="card-body">
						  	<div style="text-align: center; margin: 150px 0px; font-size: 80px; ">
						  		<a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" style="text-decoration: none;">
						  			+
						  		</a>
						  	</div>
						</div>
					</div>
				</div>	
				<!-- Add all students practicals list in card -->
				<?php
					$sql = "SELECT  * FROM practicals" ;
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
					    // Output data of each row
					     while($row = $result->fetch_assoc()) {
					   		$practicalname = $row["Practical_name"];
					    	$practicaldetails = $row["Details"];
					    	$practicalfile = $row["Practical_file"];

							echo'
							<div class="col-sm-12 col-lg-4 col-md-6">
								<div class="card  mx-auto mb-5" style="width: 18rem;">
							  		<img src="#" class="card-img-top" alt="..." style="height: 250px;">
							  		<div class="card-body">
							    		<h5 class="card-title">
							    			'.$practicalname.'
							    		</h5>
							    		<p class="card-text">
							    			Details: '.$practicaldetails.'
							    			<br>Practical_file: '.$practicalfile.'
							    		</p>
							    		<div class="text-center">
							    			<a href="studentsdata/practical.php?student_id='.$row['Id'].'" class="btn btn-primary">
							   					Go to my practical
							   				</a>
							   			</div>
						 			</div>
								</div>	
							</div>';
					    }
					}
				?>
			</div>
		</div>
	</body>
<?php  include ('../include/footer.php');?>
</html>		