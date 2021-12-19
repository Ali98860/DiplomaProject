<?php
$conn = new mysqli("localhost", "root", "", "des_space");
$query=mysqli_query($conn,"select * from admin_login where admin_email='{$_SESSION['email']}' and admin_type = '1' ");
  if(mysqli_num_rows($query)>0){
    ?>

<!--  -->

<?php
        }else{
      ?>
<div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="#">
                  <span data-feather="home"></span>
                  Обзор <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Job_create.php">
                  <span data-feather="bar-chart-2"></span>
                  Добавить вакансию
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="apply_jobs.php">
                  <span data-feather="layers"></span>
                  Отклики
                </a>
              </li>
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Данные</span>
              <a class="d-flex align-items-center text-muted" href="#">
                <span data-feather="plus-circle"></span>
              </a>
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Этот месяц
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Квартал
                </a>
              </li>
            </ul>
          </div>
        </nav>
<?php
}

?>