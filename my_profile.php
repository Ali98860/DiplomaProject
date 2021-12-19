<?php 
include('connection/db.php');
include('include/header.php');
include('include/my_profile.php');

$query=mysqli_query($conn, "select * from profiles where user_email='{$_SESSION['email']}'");
while ($row=mysqli_fetch_array($query)) {
	$img=$row['img'];
	$name=$row['name'];
	$dob=$row['dob'];
	$number=$row['number'];
	$email=$row['email'];
}
?>
<br>
<div style="margin-left: 25%; width: 50%; border: 1px solid grey; padding: 10px;">
	<form action="profile_add.php" method="POST" id="profile_form" name="profile_form" enctype="multipart/form-data"> 
		<div class="row">
			<div class="col-md-6">
				<img src="profile_img/<?php if(!empty($img)){echo $img;} else{ echo 'logo.png';}?>" alt="Cinque Terre">
			</div>
			<div class="col-md-4">
				<input type="file" class="form-control" name="img" id="img">
			</div>	
		</div>
		<div style="margin-left:30%;">
			<div class="row"> 
				<div class="col-md-6">
					<td> Имя : </td>
				</div>
				<div class="col-md-6">
					<td>
						<input type="text" name="name" id="name" value="<?php if(!empty($name)) echo $name; ?>" placeholder="Ваше Имя" class="form-group"> 
					</td>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<td> День рождения: </td>
				</div>
				<div class="col-md-6">
					<td> 
						<input type="date" name="dob" value="<?php if(!empty($dob)) echo $dob; ?>" placeholder="День рождения" class="form-group"> 
					</td>
				</div>
			</div>
		</div>
		<div  style="margin-left:30%;">
			<div class="row"> 
				<div class="col-md-6">
					<td> Телефон: </td>
				</div>
				<div class="col-md-6">
					<td> 
						<input type="Number" name="number" value="<?php if(!empty($number)) echo $number; ?>" placeholder="Телефон" class="form-group"> 
					</td>
				</div>
			</div>	
			<div class="row"> 
				<div class="col-md-6">
					<td> Email </td>
				</div>
				<div class="col-md-6">
					<td> 
						<input type="Email" name="email"  id="email" value="<?php if(!empty($email)) echo $email; ?>" placeholder="Email" class="form-group"> 
					</td>
				</div>
			</div>
			<div class="form-group">
				<input type="submit" id="submit" placeholder="Update" value="Update" name="submit" class="btn btn-success">
			</div>
		</div>
	</form>
</div>

<br>
<section class="ftco-section-parallax">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
              <h2>Подпишитесь на нашу новостную рассылку</h2>
              <p>Чтобы всегда располагать последней информацией и узнавать о новых вакансиях!</p>
              <div class="row d-flex justify-content-center mt-4 mb-4">
                <div class="col-md-8">
                  <form action="#" class="subscribe-form">
                    <div class="form-group d-flex">
                      <input type="text" class="form-control" placeholder="Ваш E-mail">
                      <input type="submit" value="Подписываться" class="submit px-3">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

<?php 
include('include/footer.php');
 ?>

<!-- <script> 

	$(document).ready(function(){

		$("#submit").click(function(e){
			e.prreventDefault();
			var data=$("#profile_form").serialize();

			$.ajax({
				type: "POST"
				url:"profile_add.php", 
				data:data, 
				succes:function(data){
					alert(data);
				}
			});
		})		

	});

</script> -->