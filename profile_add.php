

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/logo.jpg">

    <title>Designer's Space</title>

        <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Custom styles for this template -->
    <link href="css/cover.css" rel="stylesheet">
  </head>

  <body class="text-center">

   <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
       <!-- <header class="masthead mb-auto">
        <div class="inner">
          <h3 class="masthead-brand">Cover</h3>
          <nav class="nav nav-masthead justify-content-center">
            <a class="nav-link active" href="#">Home</a>
            <a class="nav-link" href="#">Features</a>
            <a class="nav-link" href="#">Contact</a>
          </nav>
        </div>
      </header> -->

      <main role = 'main' class="inner cover">
        <h1 class="cover-heading">Готово</h1>

<?php 
session_start();

include('connection/db.php');
$img=$_FILES['img']['name'];
$user_email=$_SESSION['email'];
$name=$_POST['name'];
$dob=$_POST['dob'];
$number=$_POST['number'];
$email=$_POST['email']; 
$tmp_name=$_FILES['img']['tmp_name'];

$sql=mysqli_query($conn, "select * from profiles where email='{$_SESSION['email']}'");
$sql_check=mysqli_num_rows($sql);
if (!empty($sql_checkl)) {
	$query=mysqli_query($conn,"update profiles set img='$img', name='$name', dob='$dob', number='$number',email='$email' where user_email='$user_email'");
	
	// if($query) {	
	// 	echo "<h1> Данные обновлены ! </h1>";
	// }else{
	// 	echo "<h1> Problems ! </h1>";
	// }
}
else{
	move_uploaded_file($_FILES["img"]["tmp_name"], 'profile_img/'.$img);
	$query=mysqli_query($conn,"insert into profiles(img,name,dob,number,email,user_email)values('$img','$name','$dob','$number','$email','$user_email')");
	
	// if($query) {
	// 	echo "<h1> Profile Added succesfully ! </h1>";
	// }else{
	// 	echo "<h1> Problems ! </h1>";
	// }
}
?>
      
        <p class="lead">
          <a href="http://localhost/jobportal/my_profile.php" class="btn btn-lg btn-secondary">Назад</a>
        </p>
      </main>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
  </body>
</html>