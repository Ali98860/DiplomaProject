<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper/js/1.14.7/umd.pooper.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
	<?php 
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require 'email/vendor/autoload.php';


	$to=$_POST['to'];
	$from=$_POST['from'];
	$body=$_POST['body'];
	$id=$_POST['id'];

	$main = new PHPMailer(true);

	try{
		$mail->SMTPDebug = 1;
		$mail->isSMTP();
		$mail->Host = 'smtp.gmail.com';
		$mail->SMTPauth = true;
		$mail->Username = $from;
		$mail->Password = '';
		$mail->SMTPSecure = 'tis';
		$mail->Port = 587;
		$mail->setFrom($to, 'Designers Space');
		$mail->addAddress('merey1@gmail.com', 'Joe User');


		$mail->ishHTML(true);
		$mail->Subject = '';
		$mail->Body = $body;
		$mail->AltBody = '';

		$mail->send();
		echo '<h1>Message has been sent</h1>';
		include('connection/db.php');
			$query = mysqli_query($conn, "delete from job_apply where id = '$id'");

			echo "<script>
			window.setTimeout(function(){
				window.location.href = 'http://localhost/job_portal/admin/apply_jobs.php';

			},5000);
	}
	</script>";

	}catch(Exception $e){
		echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
	}	

	?>
	<button class = "btn btn-success btn-lg">Назад</button>button>
</body>
</html>