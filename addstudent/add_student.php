<?php
include '../include/config.php';
echo "<pre>";
print_r($_GET);
$sql = "INSERT into students (Name,Collage_Name,Address,City,State,Zip,Img,Phone_no,Gender) VALUES ('$_GET[name]','$_GET[clg_name]','$_GET[address]','$_GET[city]','$_GET[State]','$_GET[zip]','$_GET[Img]','$_GET[Phone_no]','$_GET[gender]')";

	if ($conn->query($sql) === TRUE)
	{
	    echo "New record created successfully";
	    header('Location: '.$base_url);

	}
	else
		{
		    echo "Error: " . $sql . "<br>" . $conn->error;
	}
		
?>