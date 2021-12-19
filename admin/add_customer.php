<?php
  include('include/header.php');
  include('include/sidebar.php');
  ?>
    

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="admin_dashboard.php">Обзор</a></li>
                <li class="breadcrumb-item"><a href="customers.php">Пользователи</a></li>
                <li class="breadcrumb-item"><a href="#">Добавить пользователя</a></li>
              </ol>
            </nav>
            
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Добавить пользователя</h1>
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
                <input type="email" name="email" id="email" class="form-control" placeholder="Email">
              </div>
              <div class="form-group">
                <label for="Customer Username">Имя пользователя</label>
                <input type="text" name="Username" id="Username" class="form-control" placeholder="Имя пользователя">
              </div>
              <div class="form-group">
                <label for="Password">Пароль</label>
                <input type="password" name="Password" id="Password" class="form-control" placeholder="Пароль">
              </div>
              <div class="form-group">
                <label for="First Name">Имя</label>
                <input type="text" name="first_name" id="first_name" class="form-control" placeholder="Имя">
              </div>
              <div class="form-group">
                <label for="Last Name">Фамилия</label>
                <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Фамилия">
              </div>
              <div class="form-group">
                <label for="Admin Type">Админ</label>
                <select name="admin_type" name="admin_type" class="form-control" id="admin_type">
                  <option value="1">Руководитель</option>
                  <option value="2">HR</option>
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
        var email=$("#email").val();
        var Username=$("#Username").val();
        var Password=$("#Password").val();
        var last_name=$("#last_name").val();
        var admin_type=$("#admin_type").val();
        var data=$("#customers_form").serialize();

        $.ajax({
          type:"POST",
          url: "customer_add.php",
          data: data,
          success: function(data){
            alert(data);
          }
        });
      });
      });

    </script>


    
  </body>
</html>
