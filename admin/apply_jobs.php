<?php 
include('connection/db.php');
include('include/header.php');
include('include/sidebar.php');
?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
    <nav arla-label="breadcrumb"> 
        <ol class="breadcrumb">
        	<li class="breadcrumb-item"><a href="admin_dashboard.php">Обзор</a></li>
        	<li class="breadcrumb-item"><a href="#">Отклики</a></li>
        </ol>	
    </nav>

    <div class="d-flex justfy-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
    	<h1 class="h2">Все вакансии</h1>
    	<div class="btn-toolbar mb-2 mb-md-0">
    		<div class="btn-groupmr-2"></div>
    	</div>
    </div>

    <table id="example" class="display" style="width:100%">
    	<thead>
    		<tr>
    			<th>#</th>
    			<th>Название вакансии</th>
    			<th>Имя фрилансера</th>
    			<th>Email фрилансера</th>
    			<th>Действия</th>
            </tr>
    	</thead>
    	<tbody>
    		<?php
    		include('connection/db.php');

    		$a=1;
    		$sql="select * from job_apply  where customer_email='{$_SESSON['email']}'";
    		$query=mysqli_query($conn, $sql);
    		while ($row=mysqli_fetch_array($query)) { ?>
    			<tr>
    				<td><?php echo $a; ?></td>
    				<td><?php echo $row['job_title']; ?></td>
    				<td><?php echo $row['first_name']; ?> <?php echo $row['last_name'] ?> </td>
    				<td><?php echo $row['job_seeker']; ?></td>
    				<td> <a href="http://localhost/jobportal/files/<?php echo $row ['file']; ?>">Скачать файл</a></td>
    				<td>
    					<div class="row">
    						<div class="btn-group">
    							<a href="view_applied_jobs.php?id=<?php echo $row['id']; ?>" class="btn btn-succes"> <span class="glyphicon glyphicon-eye-open"> </span></a>
    						</div>
    					</div>
    				</td>
    			</tr>
    			<? php $a++; } ?>
    			}
    		</tbody>
    		<tfoot>
    			<tr>
    				<th> #</th>
    				<th>Название вакансии</th>
                    <th>Имя фрилансера</th>
                    <th>Email фрилансера</th>
                    <th>Действия</th>
    			</tr>
    		</tfoot>
    	</table>
    	<canvas class="my-4" id="myChart" width="900" height="380"></canvas>
    	<div class="table-responsive">
    	</div>
    </main>
