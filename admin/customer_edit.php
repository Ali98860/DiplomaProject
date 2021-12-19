<?php 
  include('connection/db.php');

  include('include/header.php');
  include('include/sidebar.php');

  $email="";
  $admin_username="";
  $admin_pass="";
  $first_name="";
  $last_name="";
  $admin_type="";

  if(isset($_GET['edit'])) {
    $id=$_GET['edit'];
    $query=mysqli_query($conn, "select * from admin_login where id='$id'");
    while ($row=mysqli_fetch_array($query)) {
      $email=$row['admin_email'];
      $admin_username=$row['admin_username'];
      $admin_pass=$row['admin_pass'];
      $first_name=$row['first_name'];
      $last_name=$row['last_name'];
      $admin_type=$row['admin_type'];

    }
  }

 ?>

 <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="admin_dashboard.php">Обзор</a></li>
                <li class="breadcrumb-item"><a href="customers.php">Пользователи</a></li>
                <li class="breadcrumb-item"><a href="#">Редактировать пользователя</a></li>
              </ol>
            </nav>
            
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Редактировать пользователя</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                
              
              </div>
<!--               <a class="btn btn-primary" href="add_customer.php">Add customers</a>
 -->            </div>
          </div>
        
          <div style="width: 60%; margin-left: 20%; background-color: #F2F4F4; ">
            <div id="msg"></div>
            <form action="" method="post" style="margin: 3%; padding: 3%;" name= "customers_form" id="customers_form">
              <div class="form-group">
                <label for="Customer Email">Email</label>
                <input type="email" name="email" id="email" value="<?php echo $email; ?>" class="form-control" placeholder="Email">
              </div>
              <div class="form-group">
                <label for="Customer Username">Имя пользователя</label>
                <input type="text" name="Username" id="Username" value="<?php echo $admin_username; ?>" class="form-control" placeholder="Имя пользователя">
              </div>
              <div class="form-group">
                <label for="Password">Пароль</label>
                <input type="password" name="Password" id="Password" value="<?php echo $admin_pass; ?>" class="form-control" placeholder="Пароль">
              </div>
              <div class="form-group">
                <label for="First Name">Имя</label>
                <input type="text" name="first_name" id="first_name" value="<?php echo $first_name; ?>" class="form-control" placeholder="Имя">
              </div>
              <div class="form-group">
                <label for="Last Name">Фамилия</label>
                <input type="text" name="last_name" id="last_name" value="<?php echo $last_name; ?>" class="form-control" placeholder="Фамилия">
              </div>
              <div class="form-group">
                <label for="Admin Type">Админ</label>
                <select name="admin_type" name="admin_type" value="<?php echo $admin_type; ?>" class="form-control" id="admin_type">
                  <option value="1">Руководитель</option>
                  <option value="2">HR</option>
                </select>
              </div>

              <input type="hidden" name="id" id="id" value="<?php echo $_GET['edit'] ?>">
                <div class="form-group">

                <input type="submit" class="btn btn-block btn-success" placeholder="Update" name="submit" id="submit">
              </div>
              </div>
            </form>
          </div>

          <canvas class="my-4" id="myChart" width="900" height="380"></canvas>

          <div class="table-responsive">
            
          </div>
        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
      $('#example').DataTable();
      } );
    </script>    
  </body>
</html>

<?php 
  include('connection/db.php');

  if (isset($_POST['submit'])) {
  	$id=$_POST['id'];
  	$email=$_POST['email'];
  	$Username=$_POST['Username'];
  	$Password=$_POST['Password'];
  	$first_name=$_POST['first_name'];
  	$last_name=$_POST['last_name'];
  	$admin_type=$_POST['admin_type'];
  	$query1=mysqli_query($conn, "Update admin_login set admin_email='$email', admin_username='$Username', admin_pass='$Password',
  		first_name='$first_name', last_name='$last_name', admin_type='$admin_type' where id='$id'");

  // 	if ($query1) {
  // 	echo "<script>alert('Record has been successfully updated')</script>";
  // } else{
  // 	echo "<script>alert('Record has not been successfully updated')</script>";
  // }

  }

  
 ?>