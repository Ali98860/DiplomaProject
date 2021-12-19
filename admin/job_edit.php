<?php 
  include('connection/db.php');

  include('include/header.php');
  include('include/sidebar.php');

  $Title="";
  $Description="";
  $id="";
  if(isset($_GET['edit'])) {
    $id=$_GET['edit'];
    echo $id;
    $query=mysqli_query($conn, "select * from all_jobs where job_id='$id'");
    while ($row=mysqli_fetch_array($query)) {
      $Title=$row['job_title'];
      $Description=$row['des'];
      $country=$row['country'];
      $state=$row['state'];
      $city=$row['city'];

    }
  }
 ?>


 <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="admin_dashboard.php">Обзор</a></li>
                <li class="breadcrumb-item"><a href="Job_create.php">Все вакансии</a></li>
                <li class="breadcrumb-item"><a href="#">Редактировать вакансию</a></li>
              </ol>
            </nav>
            
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Редактировать вакансию</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                
              
              </div>
<!--               <a class="btn btn-primary" href="add_customer.php">Add customers</a>
 -->            </div>
          </div>
        
          <div style="width: 60%; margin-left: 20%; background-color: #F2F4F4; ">
            <div id="msg"></div>
            <form action="" method="post" style="margin: 3%; padding: 3%;" name= "job_form" id="job_form">
              <div class="form-group">
                <label for="Customer Email">Название вакансии</label>
                 <input type="text" name="job_title" id="job_title" value="<?php echo $Title; ?>" class="form-control" placeholder="Название вакансии">
              </div>
              <div class="form-group">
                <label for="Customer Username">Описание</label>

                <textarea name="Description" id="Description" class="form-control" cols="30" rows="10" ><?php echo $Description; ?></textarea>
              </div>

              <input type="hidden" name="id" id="id" value="<?php echo $id; ?>">
              <div class="form-group">
                <label>Страна</label>
                <select name="country" class="countries form-control" id="countryId">
                  <option value="">Страна</option>
                </select>
              </div>

              <div class="form-group">
                <label>Область</label>
                <select name="state" class="states form-control" id="stateId">
                  <option value="">Область</option>
                </select>
              </div>

              <div class="form-group">
                <label>Город</label>
                <select name="city" class="cities form-control" id="cityId">
                  <option value="">Город</option>
                </select>
              </div>
              
              
                <div class="form-group">

                <input type="submit" class="btn btn-block btn-success" placeholder="Save" name="submit" id="submit">
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

    <script>
      $(document).ready(function(){
      $("#submit").click(function(){
        var Description=$("#Description").val();
        var job_title=$("#job_title").val();
        var countryId=$("#countryId").val();
        var stateId=$("#stateId").val();
        var cityId=$("#cityId").val();

        if (job_title == '') {
          alert('Напишите название вакансии');
          return false;
        }

        if (Description == '') {
          alert('Напишите описание');
          return false;
        }

        if (countryId == '') {
          alert('Выберите страну');
          return false;
        }

        if (stateId == '') {
          alert('Выберите область');
          return false;
        }

        if (cityId == '') {
          alert('Выберите город');
          return false;
        }


        var data=$("#job_form").serialize();

        
      });
      });

    </script>


    
  </body>
</html>

<?php
include('connection/db.php');

if (isset($_POST['submit'])) {
    $id=$_POST['id'];
    echo $id;
    $job_title=$_POST['job_title'];
    $Description=$_POST['Description'];
    $country=$_POST['country'];
    $state=$_POST['state'];
    $city=$_POST['city'];
    $query2=mysqli_query($conn, "Update all_jobs set job_title='$job_title', des='$Description', country='$country',
      state='$state', city='$city' where job_id='$id'");


  //   if ($query2) {
  //   echo "<script>alert('Record has been successfully updated')</script>";
  // } else{
  //   echo "<script>alert('Record has not been successfully updated')</script>";
  // }

  }
 ?>
