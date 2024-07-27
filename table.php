<?php  include ('include/config.php');?>
<?php  include ('include/header.php');?>
<!DOCTYPE html>
<html>
	<head>
		<title>students-data-<?php echo $app_name; ?></title>
	</head>
	<body>
		<div style="margin-top:60px; margin-left: 20px;">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
				    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
				    <li class="breadcrumb-item active" aria-current="page">Table</li>
				</ol>
			</nav>
		</div>
		<div class="row m-4">
				<div class="col-3" style="margin-top:50px">
					<div class="input-group">
						<label class="input-group-text" for=""><i class="bi bi-funnel"></i></label>
					  	<select class="form-select" aria-label="Filter select" onchange="location = this.value">
						    <option selected><i class="bi bi-funnel"></i>Table</option>
						    <option value="index.php">Card</option>
						</select>
					</div>
				</div>
			</div>
		<div class="table-responsive border "style="margin: 70px;">
			<table class="table">
				<table class="table caption-top">
					<caption>List of student</caption>
					<thead>
					    <tr>
					      	<th scope="col">id</th>
					      	<th scope="col">name</th>
					      	<th scope="col">collage_name</th>
					      	<th scope="col">address</th>
					      	<th scope="col">city</th>
					      	<th scope="col">state</th>
					      	<th scope="col">zip</th>
					      	<th scope="col">phone_no</th>
					      	<th scope="col">gender</th>
					    </tr>
					</thead>
					<tbody>
						<?php
							$sql = "SELECT  * FROM students" ;
							$result = $conn->query($sql);
							if ($result->num_rows > 0) {
							    // Output data of each row
								$id=0;
							    while($row = $result->fetch_assoc()) {
							   		$id++;
							   		$name = $row["Name"];
							    	$collegeName = $row["Collage_Name"];
							    	$address = $row["Address"];
							    	$city = $row["City"];
							    	$state = $row["State"];
							    	$zip = $row["Zip"];
							    	$phoneno = $row["Phone_no"];
							    	$gender = $row["Gender"];

									echo'
									    <tr>
									    	<td>'.$id.'</td>
									      	<td>'.$name.'</td>
									      	<td>'.$collegeName.'</td>
									      	<td>'.$address.'</td>
									      	<td>'.$city.'</td>
									      	<td>'.$state.'</td>
									      	<td>'.$zip.'</td>
									      	<td> '.$phoneno.'</td>
									      	<td>'.$gender.'</td>
									    </tr>';
							    }
							}
						?>
					    
					 </tbody>
				</table>
		  	</table>
		</div>			
	</body>
<?php  include ('include/footer.php');?>
</html>