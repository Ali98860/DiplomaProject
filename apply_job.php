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
  include('connection/db.php');
  if (isset($_POST['submit'])) {

    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $dob=$_POST['dob'];   
    $file=$_FILES['file']['name']; 
    $number=$_POST['number'];
    $tmp_name=$_FILES['file']['tmp_name'];
    $id_job=$_POST['id_job']; 
    $job_seeker=$_POST['job_seeker'];

    $q="select * from job_apply where job_seeker= '$job_seeker' and id_job='$id_job'";
    $sql=mysqli_query($conn, $q);
    //var_dump($q);
    if(mysqli_num_rows($sql)>0){
      echo "<h1>Ваше заявление подано!!! </h1>"; 
    }else{

    move_uploaded_file($_FILES['file']['tmp_name'], 'files/'.$file);

    $query=mysqli_query($conn, "insert into job_apply(first_name,last_name,dob,file,id_job,job_seeker,mobile_number)values('$first_name','$last_name','$dob', '$file', '$id_job', '$job_seeker','$number')");

    if ($query) { ?>
     <p class="lead">Успешно добавлено!</p>
<?php      
    }else{
      echo "Not";
    }
  }
}
?>       
        <p class="lead">
          <a href="http://localhost/jobportal/index.php" class="btn btn-lg btn-secondary">Назад</a>
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