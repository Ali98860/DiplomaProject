<?php 
$page='contact';
include('include/header.php');
include('include/h-header.php');
 ?>

    <section class="ftco-section contact-section bg-light">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h3">Наши Контакты</h2>
          </div>
          <div class="w-100"></div>
          <div class="col-md-3">
            <p><span>Адрес:</span> Ауезова 181, Алматы, Казахстан</p>
          </div>
          <div class="col-md-3">
            <p><span>Телефон:</span> <a href="tel://1234567920">+7 708 111 11 11</a></p>
          </div>
          <div class="col-md-3">
            <p><span>Email:</span> <a href="mailto:info@yoursite.com">merey1@gmail.com</a></p>
          </div>
          <div class="col-md-3">
            <p><span>Сайт</span> <a href="#">desspace.kz</a></p>
          </div>
        </div>
        <div class="row block-9">
          <div class="col-md-6 order-md-last d-flex">
            <form action="#" class="bg-white p-5 contact-form">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Имя">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Тематика">
              </div>
              <div class="form-group">
                <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Сообщение"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Отправить" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>

          <div class="col-md-6 d-flex">
          	<div id="map-container-google-1" class="z-depth-1-half map-container" class="bg-white" href="" >
             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d929.0260503049799!2d76.90518279801239!3d43.22652712212184!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x388368d83fb21287%3A0xa5a2b0a3755c05b2!2sZaymer!5e0!3m2!1sen!2skz!4v1620921344446!5m2!1sen!2skz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

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
              <p>Чтобы всегда располагать последней информацией и узнавать о новых вакансиях!<p>
              <div class="row d-flex justify-content-center mt-4 mb-4">
                <div class="col-md-8">
                  <form action="#" class="subscribe-form">
                    <div class="form-group d-flex">
                      <input type="text" class="form-control" placeholder="Ваш E-mail">
                      <input type="submit" value="Subscribe" class="submit px-3">
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