<?php

	$msg_box = ""; // в этой переменной будем хранить сообщения формы
	$errors = array(); // контейнер для ошибок
	// проверяем корректность полей
	if($_POST['p'] == "") 	 $errors[] = "Поле не заполнено!";
	// если форма без ошибок
	if(empty($errors)){
		// собираем данные из формы
		//$message  = "Имя: " . $_POST['form1__name'] . "<br/>";
		$message   = "Телефон: " 			. $_POST['p'] . "<br/>";
		$message  .= "Имя: " 				. $_POST['n'] . "<br/>";
		$message  .= "Форма: " 				. $_POST['t'] . "<br/>";

		send_mail($message);
		$msg_box = "Сообщение успешно отправлено!";

	}else{
		// если были ошибки, то выводим их
		$msg_box = "";
		foreach($errors as $one_error){
			$msg_box .= "<span style='color: red;'>$one_error</span><br/>";
		}
	}
	// делаем ответ на клиентскую часть в формате JSON
	echo json_encode(array(
		'result' => $msg_box
	));
	// функция отправки письма
	function send_mail($message){
		// почта, на которую придет письмо
		$mail_to = "info@bitovki24.com";
		// тема письма
		$subject = "Заявка (форма Б/У)";
		// заголовок письма
		$headers= "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/html; charset=utf-8\r\n";
		$headers .= "From: BIT <no-reply@test.com>\r\n";
		// отправляем письмо
		mail($mail_to, $subject, $message, $headers);
	}

$roistatData = array(
    'roistat' => isset($_COOKIE['roistat_visit']) ? $_COOKIE['roistat_visit'] : null,
    'key'     => 'NTc2OTQ6Njg3NTI6MThhY2QzYjVkOWQ0NTZhNjk2ZTk4OGRiMmU4ZTdlYTc=', // API-ключ для интеграции с CRM, указывается в настройках интеграции с CRM.
    'title'   => 'Заявка на Б/У',
    'comment' =>'',
    'name'    => $_POST['n'],
    'phone'   => $_POST['p'],
    'is_need_callback' => '0', // После создания в Roistat заявки, Roistat инициирует обратный звонок на номер клиента, если значение параметра рано 1 и в Ловце лидов включен индикатор обратного звонка.
    'callback_phone' => '<Номер для переопределения>', // Переопределяет номер, указанный в настройках обратного звонка.
    'sync'    => '0', // 
    'is_need_check_order_in_processing' => '1', // Включение проверки заявок на дубли
    'is_need_check_order_in_processing_append' => '1', // Если создана дублирующая заявка, в нее будет добавлен комментарий об этом
    'fields'  => array(
    	'UF_CRM_1516196163' => 'bitovkirus.ru',
    // Массив дополнительных полей. Если дополнительные поля не нужны, оставьте массив пустым.
    // Примеры дополнительных полей смотрите в таблице ниже.
     "charset" => "UTF-8", // Сервер преобразует значения полей из указанной кодировки в UTF-8.
    ),
);
  
file_get_contents("https://cloud.roistat.com/api/proxy/1.0/leads/add?" . http_build_query($roistatData));

?>