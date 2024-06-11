<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?><div class="main-head-section">
	<h3>contact</h3>
	<div class="contact-map">
		 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d424396.3176723366!2d150.92243255000002!3d-33.7969235!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b129838f39a743f%3A0x3017d681632a850!2sSydney+NSW%2C+Australia!5e0!3m2!1sen!2sin!4v1431587453420" width="100%" height="151px" frameborder="0" style="border:0"></iframe>
	</div>
</div>
<div class="contact_top">
	<div class="col-md-8 contact_left">
		<h4>Contact Form</h4>
		<p>
			 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tincidunt dolor et tristique bibendum. Aenean sollicitudin vitae dolor ut posuere.
		</p>
<?$APPLICATION->IncludeComponent("bitrix:main.feedback", "contact", Array(
	"EMAIL_TO" => "haskellisp@gmail.com",	// E-mail, на который будет отправлено письмо
		"EVENT_MESSAGE_ID" => "",	// Почтовые шаблоны для отправки письма
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",	// Сообщение, выводимое пользователю после отправки
		"REQUIRED_FIELDS" => "",	// Обязательные поля для заполнения
		"USE_CAPTCHA" => "N",	// Использовать защиту от автоматических сообщений (CAPTCHA) для неавторизованных пользователей
	),
	false
);?>
	</div>
	<div class="col-md-4 company-right">
		<div class="company_ad">
			<h3>Contact Info</h3>
			 Lorem ipsum dolor sit amet, consectetur adipiscing elit velit justo. <address>
			<p>
				 email:<a href="#">info@display.com</a>
			</p>
			<p>
				 phone: 1.306.222.4545
			</p>
			<p>
				 222 2nd Ave South
			</p>
			<p>
				 Saskabush, SK S7M 1T6
			</p>
 </address>
		</div>
	</div>
	<div class="clearfix">
	</div>
</div>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>