<div class="popup popup-callbackService">
	<div class="popup__container popup-callbackService__container" id="callbackFirstFormService">
		<button class="popup__close popup-callbackService__close link" type="button"></button>
		<form action="#" class="popup__form" id="popupcallbackService" novalidate>
			<h2 class="popup__title">Оставьте Ваши данные</h2>
			<p class="popup__desc">и мы скоро свяжемся с вами</p>
			<fieldset class="popup__input-wrap">
				<label class="popup__label">
					ФИО*
					<input class="popup__input link" id="name-input" name="fio" type="text" minlength="2" maxlength="50" required>
					<span class="popup__error name-input-error"></span>
				</label>
				<label class="popup__label">
					Ваш номер телефона
					<input class="popup__input link" id="tel-input" name="phone" type="tel" data-tel-input maxlength="18">
					<span class="popup__error tel-input-error"></span>
				</label>
				<label class="popup__label">
					Название организации
					<input class="popup__input link" id="company-input" name="company" type="text" maxlength="50">
					<span class="popup__error company-input-error"></span>
				</label>
				<label class="popup__label">
					Ваш Email*
					<input class="popup__input link" id="email-input" name="email" type="email" minlength="7" required>
					<span class="popup__error email-input-error"></span>
				</label>
				<label class="popup__label">
					Ваше сообщение
					<textarea class="popup__input link" id="comment-input" name="comment" rows="6" maxlength="250"></textarea>
					<span class="popup__error comment-input-error"></span>
				</label>
				<input class="btn btn-cta popup__btn" type="submit" value="Перезвоните мне">
				<p class="popup__text">Нажимая на эту кнопку вы соглашаетесь с <a href="#" class="popup__link link" target="_blank">политикой конфиденциальности</a></p>
			</fieldset>
		</form>
	</div>
	<div class="popup__container popup-callbackService__container popup__success" id="messageService">
		<button class="popup__close popup-callbackService__close link" type="button"></button>
		<div class="popup__form">
			<h2 class="popup__title">Спасибо за заявку!</h2>
			<p class="popup__desc">Наши менеджеры уже обрабатывают заявку</p>
			<a href="/" class="btn btn-cta popup__btn">На главную</a>
		</div>
	</div>
</div>