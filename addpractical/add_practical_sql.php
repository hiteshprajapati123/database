<?php
include '../include/config.php';
echo "<pre>";
print_r($_GET);	
$sql = "INSERT into practicals (Practical_name,Details,Practical_file) VALUES ('$_GET[practicalname]','$_GET[practicaldetails]','$_GET[practicalfile]')";	
	
	if ($conn->query($sql) === TRUE)
	{
	  	echo "New record created successfully";
	    header('Location: '.$base_url.'/studentsdata/practical.php?student_id='.$_GET['student_id']);
	}
	else
	{
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
?>