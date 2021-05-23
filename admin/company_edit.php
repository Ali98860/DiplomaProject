<?php 
  include('connection/db.php');

  include('include/header.php');
  include('include/sidebar.php');

  $id=$_GET['edit'];

  $query=mysqli_query($conn, "select * from company where company_id='$id'");
  while ($row=mysqli_fetch_array($query)) {
  	$company_name=$row['company'];
  	$des=$row['des'];
    $admin=$row['admin'];
  	
  }
 ?>

 <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="admin_dashboard.php">Обзор</a></li>
                <li class="breadcrumb-item"><a href="create_company.php">Компании</a></li>
                <li class="breadcrumb-item"><a href="#">Редактировать компанию</a></li>
              </ol>
            </nav>
            
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Редактировать компанию</h1>
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
                <label for="Customer Email">Название компании</label>
                <input type="Company" name="Company" id="Company" value="<?php echo $company_name; ?>" class="form-control" placeholder="Название компании">
              </div>
              <div class="form-group">
                <label for="Customer Username">Описание</label>
               <textarea name="des" id="des" class="form-control" cols="30" rows="10">
                 <?php echo $des;?>

               </textarea>
              </div>

              <div class="form-group">
                <label for="Customer Username">Выберите админа компании</label>
                <select name="admin" class="form-control" id="admin">
                <?php 
                include('connection/db.php');
                $sql=mysqli_query($conn, "select * from admin_login where admin_type='2'");
                  while ($row=mysqli_fetch_array($sql)) { ?>
                    <option value="<?php echo $row['admin_email']; ?>"><?php echo $row['admin_email']; ?></option>

                    <?php
                  }
                 ?>
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
  	$company=$_POST['Company'];
  	$des=$_POST['des'];
    $admin=$_POST['admin'];
  	


  	$query1=mysqli_query($conn, "Update Company set company='$company', des='$des', admin='$admin' where company_id='$id'");

  	if ($query1) {
  	echo "<script>alert('Record has been successfully updated')</script>";
  } else{
  	echo "<script>alert('Record has not been successfully updated')</script>";
  }

  }

  
 ?>