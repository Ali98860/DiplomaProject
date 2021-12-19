<?php
  include('include/header.php');
  

?>
    
    <div class="hero-wrap js-fullheight" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-xl-10 ftco-animate mb-5 pb-5" data-scrollax=" properties: { translateY: '70%' }">
          	<p class="mb-4 mt-5 pt-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">У нас есть <span class="number" data-number="5000">0</span> отличных предложений о работе, которые вы заслуживаете!</p>
            <h1 class="mb-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Работа мечты <br><span>ждет тебя</span></h1>

						<div class="ftco-search">
							<div class="row">
		            <div class="col-md-12 nav-link-wrap">
			            <div class="nav nav-pills text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
			              <a class="nav-link active mr-md-1" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Найти работу</a>

			              <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Найдите кандидата</a>

			            </div>
			          </div>
			          <div class="col-md-12 tab-wrap">
			            <div class="tab-content p-4" id="v-pills-tabContent">
			              <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-nextgen-tab">
			              	<form action="index.php" method="post" class="search-job">
			              		<div class="row">
			              			<div class="col-md">
			              				<div class="form-group">
				              				<div class="form-field">
				              					<div class="icon"><span class="icon-briefcase"></span></div>
								                <input type="text" name="key" id="key" class="form-control" placeholder="Графичесикй дизайнер">
								              </div>
							              </div>
			              			</div>
			              			<div class="col-md">
			              				<div class="form-group">
			              					<div class="form-field">
				              					<div class="select-wrap">
						                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
						                      <select name="category" id="category" class="form-control">
                                    <option value="">Категория</option>
                                    <?php 
                                    include('connection/db.php');
                                      $query=mysqli_query($conn, "select * from job_category");
                                      while ($row=mysqli_fetch_array($query)) {?>
                                        <option value="<?php echo $row['id']; ?>"><?php echo $row['category']; ?></option>
                                        <?php } ?>
						                      </select>
						                    </div>
								              </div>
							              </div>
			              			</div>
			              			<!-- <div class="col-md">
			              				<div class="form-group">
			              					<div class="form-field">
				              					<div class="icon"><span class="icon-map-marker"></span></div>
								                <input type="text" class="form-control" placeholder="Местоположение">
								              </div>
							              </div>
			              			</div> -->
			              			<div class="col-md">
			              				<div class="form-group">
			              					<div class="form-field">
								                <input type="submit" value="Искать" name="search" id="search" class="form-control btn btn-primary">
								              </div>
							              </div>
			              			</div>
			              		</div>
			              	</form>
			              </div>

			              <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-performance-tab">
			              	<form action="#" class="search-job">
			              		<div class="row">
			              			<div class="col-md">
			              				<div class="form-group">
				              				<div class="form-field">
				              					<div class="icon"><span class="icon-user"></span></div>
								                <input type="text" class="form-control" placeholder="Имя">
								              </div>
							              </div>
			              			</div>
			              			<div class="col-md">
			              				<div class="form-group">
			              					<div class="form-field">
				              					<div class="select-wrap">
						                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
						                      <select name="" id="" class="form-control">
						                      	<option value="">Категория</option>
						                      	<option value="">Полная занятость</option>
						                        <option value="">Частичная занятость</option>
						                        <option value="">Фриланс</option>
						                        <option value="">Стажировка</option>
						                        <option value="">Временная</option>
						                      </select>
						                    </div>
								              </div>
							              </div>
			              			</div>
			              			<!-- <div class="col-md">
			              				<div class="form-group">
			              					<div class="form-field">
				              					<div class="icon"><span class="icon-map-marker"></span></div>
								                <input type="text" class="form-control" placeholder="Location">
								              </div>
							              </div>
			              			</div> -->
			              			<div class="col-md">
			              				<div class="form-group">
			              					<div class="form-field">
								                <input type="submit" value="Искать" class="form-control btn btn-primary">
								              </div>
							              </div>
			              			</div>
			              		</div>
			              	</form>
			              </div>
			            </div>
			          </div>
			        </div>
		        </div>
          </div>
        </div>
      </div>
    </div>

    <?php 
     include('connection/db.php');

     if(isset($_POST['search']) or ($_GET['page'])){

       $page=$_GET['page'];

         if($page==""){
            $keyword=$_POST['key'];
            $category=$_POST['category'];
            $page1=0;
         }else{
          $keyword=$_GET['keyword'];
          $category=$_GET['category'];
          $page1=($page*3)-3;
           
         }

         
         $query1="select * from all_jobs LEFT JOIN company ON all_jobs.customer_email=company.admin WHERE keyword LIKE '%keyword'
         OR category='$category' limit $page1,3";

       $sql=mysqli_query($conn,$query1);

       $error=mysqli_num_rows($query1);
    ?>

    <div id="id_all_jobs">
    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2 class="mb-4"><span>Новые</span> Вакансии</h2>
            <br> <br>
            <h3> <?php
            if ($error==1) {
              echo "Нет такой вакансии!";
            }

 
            ?>
            </h3>
          </div>
        </div>
        <div class="row">

        <?php

        $sql=mysqli_query($conn, "select * from all_jobs LEFT JOIN company ON all_jobs.customer_email=company.admin WHERE category='$category' or keyword LIKE '%keyword'");

        while($row=mysqli_fetch_array($sql))
         { ?>

          <div class="col-md-12 ftco-animate">

            <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

              <div class="mb-4 mb-md-0 mr-5">
                <div class="job-post-item-header d-flex align-items-center">
                  <h2 class="mr-3 text-black h3"><?php echo $row['job_title']; ?></h2>
                  <div class="badge-wrap">
                   <span class="bg-primary text-white badge py-2 px-3"><?php echo $row['city'];?></span>
                  </div>
                </div>
                <div class="job-post-item-body d-block d-md-flex">
                  <div class="mr-3"><span class="icon-layers"></span> <a href="#"><?php echo $row['company']; ?></a></div>
                  <div><span class="icon-my_location"></span> <span><?php echo $row['country']?>,<?php echo $row['state'];?>,<?php echo $row['city'];?></span></div>
                </div>
              </div>

              <div class="ml-auto d-flex">
                <a href="blog-single.php?id=<?php echo $row['job_id']; ?> " class="btn btn-primary py-2 mr-1">Откликнуться</a>
                <a href="#" class="btn btn-secondary rounded-circle btn-favorite d-flex align-items-center icon">
                  <span class="icon-heart"></span>
                </a>
              </div>
            </div>
          </div>

          <?php } ?>  

          
      </div>
        <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <?php
                $sql = mysqli_query($conn, "select * from all_jobs LEFT JOIN company ON all_jobs.customer_email = company.admin WHERE keyword LIKE '%$keyword%' OR category='$category'");
                $count = mysqli_num_rows($sql);
                $a=$count/3;
                ceil($a);
                for($b=1; $b<=$a; $b++){

                ?>
                
                <li><a href="index.php?page=<?php echo $b;?> & $keyword=<?php echo $keyword;?> & category=<?php echo $category;?>"><?php echo $b;?></a></li>
              <?php } ?>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
<?php } ?>

    <section class="ftco-section services-section bg-light">
      <div class="container">
        <div class="row d-flex">
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-resume"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Поиск рабочих мест</h3>
                <p>Сохраните свои критерии поиска и получайте подходящие объявления о вакансиях на свою электронную почту.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-collaboration"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Простое управление</h3>
                <p>Успешно справляйтесь с любыми задачами: от небольших проектов до крупных инициатив</p>
              </div>
            </div>    
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-promotions"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Лучшие карьеры</h3>
                <p>Лучшие компании для карьеры и заработка</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-employee"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Поиск опытных кандидатов</h3>
                <p>Можно быстро найти работников в Казахстане</p>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-counter">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2 class="mb-4">Категории</h2>
          </div>
        </div>
        <div class="row">
        	<div class="col-md-3 ftco-animate">
        		<ul class="category">
        			<li><a href="#">Гейм Дизайнер <span class="number" data-number="500">0</span></a></li>
        			<li><a href="#">Графический Дизайнер <span class="number" data-number="450">0</span></a></li>
        		</ul>
        	</div>
        	<div class="col-md-3 ftco-animate">
        		<ul class="category">
        			<li><a href="#">Анимационнный Дизайнер <span class="number" data-number="500">0</span></a></li>
        			<li><a href="#">Моушн Дизайнер <span class="number" data-number="150">0</span></a></li>
        		</ul>
        	</div>
        	<div class="col-md-3 ftco-animate">
        		<ul class="category">
        			<li><a href="#">Звуковой Дизайнер <span class="number" data-number="200">0</span></a></li>
        			<li><a href="#">Дизайнер Интерьера <span class="number" data-number="400">0</span></a></li>
        		</ul>
        	</div>
        	<div class="col-md-3 ftco-animate">
        		<ul class="category">
              <li><a href="#">Веб Дизайнер <span class="number" data-number="1000">0</span></a></li>
        			<li><a href="#">UI/UX Дизайнер <span class="number" data-number="1000">0</span></a></li>
        		</ul>
        	</div>
        </div>
    	</div>
    </section>

		
   
    <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_1.jpg);" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-10">
            <div class="row">
              <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">
                  <div class="text">
                    <strong class="number" data-number="13000">0</strong>
                    <span>Вакансии</span>
                  </div>
                </div>
              </div>
              <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">
                  <div class="text">
                    <strong class="number" data-number="3000">0</strong>
                    <span>Фрилансеров</span>
                  </div>
                </div>
              </div>
              <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">
                  <div class="text">
                    <strong class="number" data-number="1500">0</strong>
                    <span>Резюме</span>
                  </div>
                </div>
              </div>
              <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">
                  <div class="text">
                    <strong class="number" data-number="500">0</strong>
                    <span>Компании</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="ftco-section testimony-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2 class="mb-4"><span>Довольные</span> Клиенты</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-4">Задача была создать дизайн лендинга по готовому макету. Аскар отлично справился с этим. Все правки были внесены. Работой я остался доволен, буду обращаться повторно. Спасибо!</p>
                    <p class="name">Нурлан Маратов</p>
                    <span class="position">Маркетолог</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-4">Задача была создать дизайн лендинга по готовому макету. Аскар отлично справился с этим. Все правки были внесены. Работой я остался доволен, буду обращаться повторно. Спасибо!</p>
                    <p class="name">Нурлан Маратов</p>
                    <span class="position">Маркетолог</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-4">Задача была создать дизайн лендинга по готовому макету. Аскар отлично справился с этим. Все правки были внесены. Работой я остался доволен, буду обращаться повторно. Спасибо!</p>
                    <p class="name">Нурлан Маратов</p>
                    <span class="position">Маркетолог</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-4">Задача была создать дизайн лендинга по готовому макету. Аскар отлично справился с этим. Все правки были внесены. Работой я остался доволен, буду обращаться повторно. Спасибо!</p>
                    <p class="name">Нурлан Маратов</p>
                    <span class="position">Маркетолог</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-4">Задача была создать дизайн лендинга по готовому макету. Аскар отлично справился с этим. Все правки были внесены. Работой я остался доволен, буду обращаться повторно. Спасибо!</p>
                    <p class="name">Нурлан Маратов</p>
                    <span class="position">Маркетолог</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2>Новости</h2>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
              </a>
              <div class="text mt-3">
              	<div class="meta mb-2">
                  <div><a href="#">Январь 5,  2021</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Вам нравятся минималистичные интерьеры в светлых тонах?</a></h3>
               <p>Светлые оттенки интерьера освежают обстановку, придают ей элегантность и шик. Нежные пастельные цвета – бежевый, светло-серый, белый – отлично сочетаются с предметами мебели и декора, домашним текстилем.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
              </a>
              <div class="text mt-3">
              	<div class="meta mb-2">
                  <div><a href="#">Январь 17, 2021</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">В украшении любого интерьера всегда действует главное правило — не навреди.</a></h3>
               <p>Каждая функциональная зона на кухне должна быть полноценно освещена: рабочая поверхность, плита, мойка, барная стойка или остров, над которым можно установить подвесные светильники.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
              </a>
              <div class="text mt-3">
              	<div class="meta mb-2">
                  <div><a href="#">Февраль 21, 2021</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">У гардеробной есть правило - чем больше тем лучше</a></h3>
               <p>Гардеробная всегда лучше чем просто шкафы, и если пространство позволяет, не стоит игнорировать это помещение при планировании комнат</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_4.jpg');">
              </a>
              <div class="text mt-3">
              	<div class="meta mb-2">
                  <div><a href="#">Апрель 2, 2021</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Как сделать балкон комнатой, а не складом?</a></h3>
               <p>В новых ЖК с этим очень сложно и я бы не рекомендовала, так как планировка, чаще всего, позволяет придумать другие варианты.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
		
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

include('include/footer.php'); ?>
  