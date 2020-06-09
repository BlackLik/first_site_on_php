<?php
	$server = "localhost";
	$db = "id13782089_mysitedb";
	$user = "id13782089_sisadmin";
	$password = "a*HqG!cc=8Qr80c3";
	$link = mysqli_connect($server, $user, $password, $db) or die(mysqli_error());
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600,700|Poppins:600,700&amp;subset=cyrillic" rel="stylesheet">

	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

	<style>
		.preloader{
			position: fixed;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			z-index: 9999;
			background-color: #fefefe;
        }
        li{
            list-style-type: none;
        }

	</style>

	<link rel="stylesheet" href="css/baguetteBox.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="icon" href="img/logo2.png" style="width: 16px; height: 16px;">
<title> GreyRex</title>
</head>
<body>
    <div class="preloader d-flex justify-content-center align-items-center">
		<div class="spinner-border" style="width: 10rem; height: 10rem;" role="status">
			<span class="sr-only">Loading...</span>
		</div>
	</div>

	<button class="scrollToTop"><i class="fa fa-angle-up"></i></button>
	
	<header>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<a class="navbar-brand" href="#">
				<img src="img/logo.png" alt=""> GreyRex
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<i class="fas fa-bars"></i>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent" >
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a class="nav-link" href="index.html">Главная</a></li>
					<li class="nav-item"><a class="nav-link" href="blog.php">Блог</a></li>
					<li class="nav-item"><a class="nav-link" href="compani.html">О компании</a></li>
					<li class="nav-item"><a class="nav-link" href="work.html">Работы</a></li>
					<li class="nav-item"><a class="nav-link" href="Reviews.html">Отзывы</a></li>
					<li class="nav-item"><a class="nav-link" href="FAQ.php">Часто задаваемые вопросы</a></li>
					<li class="nav-item"><a class="nav-link" href="Team.html">Команда</a></li>
				</ul>
			</div>
		</nav>
	</header>


 <div class="hret" style="background:#f1f1f1; color: #484848;">
    <div class="container-fluid">
    <div class="row bg-info card my-4 mb-3 pd-l-2" style="margin-top: 0 !important;border: none !important ; background:#f1f1f1 !important; color: #484848 !important;padding-top: 50px; text-align: center;" >
            <h3>
                <span class="fa fa-question-circle text-black"></span>
                Вопросы и ответы
            </h3>
        </div>
        
        <div class="row">
            
      
            <ul id="accordion" class="col-sm-6 col-md-12">
				<div class="chis">
                <!-- Question one -->
                <li>
					
                    <div id="choose" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="font-size: 23px;">
						<i class="fa fa-check-circle fa-lg" aria-hidden="true"></i> Где можно узнать о ваших предыдущих работах?
                        <span class="fa fa-chevron-down fa-1x  "></span>
                    </div>
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                      <div class="card-body" style="font-weight: 500;">
                        В разделе "Работы" в шапке нашего сайта.
                      </div>
                    </div>
                </li>
                
                <!-- Question two -->
                <li>
                    <div class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="font-size: 23px;">
						<i class="fa fa-check-circle fa-lg" aria-hidden="true"></i> Куда мне обратиться, если у меня есть жалоба?
                        <span class="fa fa-chevron-down fa-1x  "></span>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                      <div class="card-body"  style="font-weight: 500;">
                        Можете связаться с нами, заполнив форму ниже. И в течение получаса вам напишет на почту наш сотрудник и расскажет вам все, что вас интересует.
                      </div>
                    </div>
                </li>
                
                <!-- Question three -->
                <li>
                    <div class="collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="font-size: 23px;">
						<i class="fa fa-check-circle fa-lg" aria-hidden="true"></i>  У вас есть какие-либо торговые точки в стране?
                        <span class="fa fa-chevron-down fa-1x "></span>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                      <div class="card-body"  style="font-weight: 500;">
                        Только офис, торговые точки нам заменяет наш сайт.
                      </div>
                    </div>
                </li>
                
                <!-- Question Four -->
                <li>
                    <div class="collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" style="font-size: 23px;">
						<i class="fa fa-check-circle fa-lg" aria-hidden="true"></i> Как я могу подать жалобу?
                        <span class="fa fa-chevron-down fa-1x  "></span>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                      <div class="card-body"  style="font-weight: 500;">
                        Заполните форму ниже и наш сотрудник уведомит вас о ее рассмотрении.
                      </div>
                    </div>
                </li>
                
                <!-- Questiion Five -->
                <li>
                    <div class="collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive" style="font-size: 23px;">
						<i class="fa fa-check-circle fa-lg" aria-hidden="true"></i> Как я могу присоединиться к команде?
                        <span class="fa fa-chevron-down fa-1x "></span>
                    </div>
                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                      <div class="card-body"  style="font-weight: 500;">
                        Вы можете приехать в наш офис и записаться на консультацию, либо отправить нам свой почтой адрес, с помощью формы, на который ответит наш сотрудник  и проконсультирует вас в этом вопросе.
                      </div>
                    </div>
                </li>
				</div>
            </ul>
        </div>
        </div>
    </div>
     
	<section class="section-form text-center">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h4>Нужна помощь?</h4>
					<h5>Не забудьте связаться с нами.</h5>
					<p></p>

					<form action="FAQ.php" class="text-left" method="post">
						<div class="row">
							<div class="col-md-5">
								<input type="text" name="name" class="form-control" placeholder="Имя" required>
							</div>
							<div class="col-md-5">
								<input type="email" name="email" class="form-control" placeholder="Ваш почтовый адрес" required>
							</div>
							<div class="col-md-2">
								<button type="submit" name="submit" class="btn btn-pink2 btn-shadow2">Отправить</button>
							</div>
						</div>
					</form>
					<?php
						if(isset($_POST['submit'])){
							mysqli_select_db($link, $db);
							$name = (string)$_POST['name'];
							$email = (string)$_POST['email'];
							$faq = '+';
							$query = "SELECT * FROM user WHERE email = '$email'";
							$result = mysqli_query($link, $query);
							$num = mysqli_num_rows($result);
							if($num > 0){
								$query = "UPDATE `user` SET `faq`= '+', `name` = '$name' WHERE email= '$email' ";
								mysqli_query($link, $query);
							} else {
								$query = "INSERT INTO `user`(`name`, `email`, `faq`) VALUES ( '$name', '$email', '$faq')";
								mysqli_query($link, $query);
							}
						}
						/*
						if(isset($_POST['submit'])){
							if(!empty($_POST['name']) && !empty($_POST['email'])){
								$user = $_POST['name'];
								$email = $_POST['email'];
								$mail = "ashir01@mail.ru";
								$text1 = "$user есть вопрос к нашей к компании";
								$text2 = "<p>$user есть вопрос к нашей к компании</p>";
								$header = "Его почта: $email";
								mail($mail, $text1, $text2, $header);
							}
						}
						*/
					?>
				</div>
			</div>
		</div>
	</section>
	<!-- /.section-form -->

	<footer class="bg-white">
		<div class="container py-5" style="height: 350px;">
		  <div class="row py-4"> 
			<div class="col-lg-4 col-md-6 mb-4 mb-lg-0"><img src="img/logo2.png" alt="" width="40" height="40" class="mb-3"> <span style="font-weight: 600;"> GreyRex</span> 
			  <p class="font-italic text-muted">Международное качество по локальным ценам.</p>
			  <ul class="list-inline mt-4">
				<li class="list-inline-item"><a href="https://twitter.com/CrazyTh77832463" target="_blank" title="twitter"><i class="fa fa-twitter fa-2x" style="color:rgb(48, 53, 48);"></i></a></li>
				<li class="list-inline-item"><a href="https://www.facebook.com/blacklik.show" target="_blank" title="facebook"><i class="fa fa-facebook fa-2x" style="color:rgb(48, 53, 48);"></i></a></li>
				<li class="list-inline-item"><a href="https://www.instagram.com/buzova86/" target="_blank" title="instagram"><i class="fa fa-instagram fa-2x"style="color:rgb(48, 53, 48);"></i></a></li>
				<li class="list-inline-item"><a href="https://www.patreon.com/teded" target="_blank" title="pinterest"><i class="fa fa-pinterest fa-2x" style="color:rgb(48, 53, 48);"></i></a></li>
				<li class="list-inline-item"><a href="https://vimeo.com/aaronmcadams" target="_blank" title="vimeo"><i class="fa fa-vimeo fa-2x" style="color:rgb(48, 53, 48);"></i></a></li>
			  </ul>
			</div>
		
<br>
			  <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
			  <ul class="list-unstyled mb-0">
				<li class="mb-2"><a href="blog.php" class="text-muted">Блог</a></li>
				<li class="mb-2"><a href="compani.html" class="text-muted">О компании</a></li>
				<li class="mb-2"><a href="work.html" class="text-muted">Работы</a></li>
			
			  </ul>
			</div>
			
<br>
			  <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
			  <ul class="list-unstyled mb-0">
				<li class="mb-2"><a href="Reviews.html" class="text-muted">Отзывы</a></li>
				<li class="mb-2"><a href="FAQ.php" class="text-muted">FAQ</a></li>
				<li class="mb-2"><a href="Team.html" class="text-muted">Команда</a></li>

			  </ul>
			</div>
			<div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 180px; width: 320px;">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d561.2752280224017!2d37.626029229284434!3d55.756749198784654!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54a595d933277%3A0x84be90c8d285b584!2z0JzQtdC00LjQsCDQkdGN0Lk!5e0!3m2!1sru!2sus!4v1587989153527!5m2!1sru!2sus"   style="border:0" allowfullscreen></iframe>
			  </div>
			  
		  </div>
		</div>
	
		
	  </footer>
    

	  <script src="https://use.fontawesome.com/4699b29e4e.js"></script>
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="js/baguetteBox.min.js"></script>
        <script src="js/main.js"></script>
        </body>