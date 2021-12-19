<?php 
include('connection/db.php');

  $Company=$_POST['Company'];
  $Description=$_POST['Description'];
  $admin=$_POST['admin'];
  

	$query=mysqli_query($conn, "insert into Company(company, des, admin)values('$Company', '$Description', '$admin') ");

	//var_dump($query);

	// if ($query) {
	// 	echo "Data has been successfully inserted";
	// }else{
	// 	echo "Some error occured, please try again";
	// }


 ?> 