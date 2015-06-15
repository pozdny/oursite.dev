<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<link href="css/allstyle.css" type="text/css" rel="stylesheet">
<link href="css/reset.css" type="text/css" rel="stylesheet">
<link href="css/modal.css" type="text/css" rel="stylesheet">

<title>Сайт компании</title>

</head>
<body>

<div id="container">
<?php include('include/header.php')?>
	<p class="quest_data_down">Выберите параметры Вашего сайта, чтобы узнать его стоимость.</p>	
	<div class="calculator_box">
		<div class="side_calcul">
			<p class="viev_calcul_line viev_one"></p>	
				<select class="viev_calcul">
					<option>Выберите тип сайта</option>
					<option>Сайт-визитка</option>
					<option>Корпоративный сайт</option>
					<option>Интернет-магазин</option>
					<option>Landing Page</option>
				</select>	
			</p>
			<p class="viev_calcul_line"></p>
				<select class="viev_calcul">
					<option>Дизайн</option>
					<option>Сайт-визитка</option>
					<option>Корпоративный сайт</option>
					<option>Интернет-магазин</option>
					<option>Landing Page</option>
				</select>
			</p>	
			<p class="viev_calcul_line"></p>
				<select class="viev_calcul">
					<option>Количество страниц</option>
					<option>Сайт-визитка</option>
					<option>Корпоративный сайт</option>
					<option>Интернет-магазин</option>
					<option>Landing Page</option>
				</select>
			</p>
			<p class="viev_calcul_line"></p>			
				<select class="viev_calcul">
					<option>Обслуживание сайта</option>
					<option>Сайт-визитка</option>
					<option>Корпоративный сайт</option>
					<option>Интернет-магазин</option>
					<option>Landing Page</option>
				</select>
			</p>
			<p class="viev_calcul_line_chek">
				<input type="checkbox" name="chek_calcul" class="chek_calcul"> Хочу фишку на сайт
			</p>
			<p class="descr_calcul">* под обслуживанием сайта понимается любые работ, связанные с сайтом, его контентом и дизайном, а также все необходимые работы на сервере.</p>
		</div>
		<div class="image_calcul">
			<img src="images/img-calcul.png" alt="img" width="100%">
		</div>
	</div>

	<div class="forn_data">
		<p class="quest_data">Хотите заказать сайт...<span>или у Вас есть другой вопрос?</span></p>
		<p class="quest_data_down">Пожалуйста, заполните формы ниже,<br> и наши специалисты свяжутся с Вами в ближайшее время</p>
		<div class="form_box">
			<form action="" method="post">
				<input type="text" name="name" class="data_word" placeholder="Иван Иванов"><br>
				<input type="text" name="telefon" class="data_word" placeholder="+7(XXX)-XXX-XX-XX"><br>
				<input type="text" name="email" class="data_word" placeholder="mail@mail.ru"><br>
				<textarea class="data_word_area" type="text" name="message" placeholder="сообщение"></textarea>
				<input type="submit" name="submit" class="submit_data" value="отправить">
				<div style="clear:both"></div>
			</form>
		</div>
	</div>
	
	
	<div class="bufer"></div><!-- bufer -->
</div><!-- container -->

<?php include('include/footer.php')?>
</body>
</html>