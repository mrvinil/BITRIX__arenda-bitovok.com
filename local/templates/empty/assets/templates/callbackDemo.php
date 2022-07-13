<div class="popup popup-demo">
	<div class="popup__container popup-demo__container" id="callbackFirstFormDemo">
		<button class="popup__close popup-demo__close link" type="button"></button>
		<form action="#" class="popup__form" id="popupcallbackDemo">
			<h2 class="popup__title">Форма заявки на демо-доступ к программе</h2>
			<p class="popup__desc">Оставьте ваши данные и мы отправим вам доступ к демо базе</p>
			<fieldset class="popup__input-wrap">
				<label class="popup__label">
					ФИО*
					<input class="popup__input link" name="fio" type="text" required>
				</label>
				<label class="popup__label">
					Ваш номер телефона
					<input class="popup__input link" name="phone" type="tel" data-tel-input maxlength="18">
				</label>
				<label class="popup__label">
					Название организации
					<input class="popup__input link" name="company" type="text">
				</label>
				<label class="popup__label">
					Ваш Email*
					<input class="popup__input link" name="email" type="email" required>
				</label>
				<label class="popup__label">
					Ваше сообщение
					<textarea class="popup__input link" name="comment" rows="6"></textarea>
				</label>
				<label class="popup__label popup__label_checkbox">
					<input class="popup__input" name="check" type="checkbox" value="Да">
					Хотите получить руководство пользователя
				</label>
				<input class="btn btn-cta popup__btn" type="submit" value="Оставить заявку">
				<p class="popup__text">Нажимая на эту кнопку вы соглашаетесь с <a href="#" class="popup__link link" target="_blank">политикой конфиденциальности</a></p>
			</fieldset>
		</form>
	</div>
	<div class="popup__container popup-demo__container popup__success" id="messageDemo">
		<button class="popup__close popup-demo__close link" type="button"></button>
		<div class="popup__form">
			<h2 class="popup__title">Спасибо за заявку!</h2>
			<p class="popup__desc">Наши менеджеры уже обрабатывают заявку</p>
			<a href="/" class="btn btn-cta popup__btn">На главную</a>
		</div>
	</div>
</div>