<?php 
    include('connection/db.php');

    include('include/header.php');
    include('include/sidebar.php');
    ?>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
    	<nav arla-label="breadcrumb"> 
    	<ol class="breadcrumb">
    		<li class="breadcrumb-item"><a href="admin_dashboard.php">J,pjh</a></li>
    		<li class="breadcrumb-item"><a href="#">Отклики</a></li>
    	</ol>	
    	</nav>

    	<div class="d-flex justfy-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
    		<h1 class="h2">Отклики</h1>
    		<div class="btn-toolbar mb-2 mb-md-0">
    		<div class="btn-groupmr-2">
    			
    		</div>
    		
    		</div>
    	</div>

    	       <form action="" style="border: 1px solid gray; width:80%; margin-left: 10%; padding: 10px;">
    			<?php
    			include('connection/db.php');

    			 $id=_GET['id'];
    			$sql="select * from job_apply LEFT JOIN jobseeker ON job_seeker.email=job_apply.job_seeker WHERE id='$id' ";
    			$query=mysqli_query($conn, $sql);

    			while ($row=mysqli_fetch_array($query)) {

    				?>
    			
    			 
                    <div class="form-group">
                        <label>Название вакансии</label>
    				<td><?php echo $row['job_title']; ?></td>
                </div>

                <div class="form-group">
                        <label>Описание</label>
                    <td><?php echo $row['des']; ?></td>
                </div>

    				<div class="form-group">
                        <label>Имя фрилансера</label>
                    <td><?php echo $row['first_name']; ?> <?php echo $row['last_name'] ?> </td>
                </div>
    				
                <div class="form-group">
                        <label>Email фрилансера</label>
                   <td><?php echo $row['job_seeker']; ?></td>
                </div>

                <div class="form-group">
                        <label>Телефон</label>
                   <td><?php echo $row['mobile_number']; ?></td>
                </div>

                <div class="form-group">
                        <label>Job Seeker File </label>
                   <td> <a href="http://localhost/jobportal/files/<?php echo $row ['file']; ?>">Скачать файл</a></td>

                </div>

    			
    			</tr>

    			<? php  } ?>
    			}

    		<input type="submit" name="" class="btn btn-success" value="accept" placeholder="Принять">
            <input type="submit" name="" class="btn btn-danger" value="Reject" placeholder="Отклонить">
    		</form>

    	<canvas class="my-4" id="myChart" width="900" height="380"></canvas>
    	<div class="table-responsive">
    	</div>
    </main>
