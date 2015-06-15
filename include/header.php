<div id="header">
	<div class="header_block_top">
		<div class="sub_header_block_top">
			<a href="http://localhost/oursayt/"><img class="logo" src="images/logo.png" alt="logo"></a>
			<div class="kontakt_box">	
				<p class="kontakt_data"><span>тел.:</span> 8-999-999-99-99</p>
				<p class="email_data"><span>E-mail:</span> tt@tt.ru</p>
				<a id="modal_open" href="#modal_box">Хочу сайт!</a>
			</div>
		</div>
	</div>
	<div class="header_block_menu">
		<div class="sub_header_block_menu">
			<div class="menu_box">	
					<div class="menu_punkt punkt_m1" onclick="location.href='http://localhost/oursayt/';"><p>Главная</p></div>
					<div class="menu_punkt punkt_m2"><p>Портфолио</p></div>
					<div class="menu_punkt punkt_m3" onclick="location.href='http://localhost/oursayt/calculator.php';"><p>Калькулятор</p></div>
					<div class="menu_punkt punkt_m4"><p>Новости</p></div>
					<div class="menu_punkt punkt_m5"><p>Отзывы</p></div>
					<div class="menu_punkt punkt_m6"><p>Контакты</p></div>
			</div>
		</div>
	</div>
	<div id="modal_box">
		<div class="content_modal">
			<a href="#close" title="Закрыть" class="close">╳</a>
			<p class="title_modal">Пожалуйста, оставьте Ваши контактные данные и Наш специалист свяжется с Вами в ближайшее время.</p>
			<form action="#data_modal" method="post">
				<label>Ваше имя:</label>
				<p class="modal_line"><input type="text" name="name" class="modal_person"></p>
				<label>Телефон:</label>
				<p class="modal_line"><input type="text" name="name" class="modal_person"></p>
				<label>E-mail:</label>
				<p class="modal_line"><input type="text" name="name" class="modal_person"></p>
				<input type="submit" name="submit" id="submit_modal" value="Отправить">
			</form>
		</div>
	</div>
	<div id="data_modal">
		<div class="content_modal_data">
			<a href="#close" title="Закрыть" class="close">╳</a>
			<p class="title_modal_data">Ваше письмо успешно отправлено!<br>Мы свяжемся с Вами в ближайшее время.</p>
		</div>
	</div>
</div>