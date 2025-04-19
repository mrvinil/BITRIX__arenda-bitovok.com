<?php
/**
 * User: Mrvinil
 * Date: 22.04.2020
 * Time: 14:09
 */
function writeToLog($data, $title = '') {
	$log = "\n------------------------\n";
	$log .= date("Y.m.d G:i:s") . "\n";
	$log .= (strlen($title) > 0 ? $title : 'DEBUG') . "\n";
	$log .= print_r($data, 1);
	$log .= "\n------------------------\n";
	file_put_contents(getcwd() . '/hook.log', $log, FILE_APPEND);
	return true;
}

// Шаг 1. Создаем сделку
$cleanPrice = preg_replace('/[^0-9]/', '', $_POST['price']);
$productPrice = $cleanPrice; // Используем очищенную цену
$productTitle = $_POST['title'] . ' ' . $_POST['subtitle'];

$queryUrl = 'https://armadastroy.bitrix24.ru/rest/43/utnw8v3hcnz4ls31/crm.deal.add.json';
$queryData = http_build_query(array(
	'fields' => array(
		"TITLE" => 'Заявка на аренду: ' . $productTitle . ': ' . $_POST['price'],
		"NAME" => '',
		"LAST_NAME" => '',
		"STATUS_ID" => "NEW",
		"OPENED" => "Y",
		"UTM_SOURCE" => $_POST['utm'],
		"ASSIGNED_BY_ID" => 75,
		"PHONE" => array(
			"n0" => array(
				"VALUE" => $_POST['phone'],
				"VALUE_TYPE" => "WORK",
			),
		),
		"EMAIL" => array(
			"n0" => array(
				"VALUE" => $_REQUEST['email'],
				"VALUE_TYPE" => "WORK",
			),
		),
		"UF_CRM_1519071700" => 'arenda-bitovok.com',
	),
	'params' => array("REGISTER_SONET_EVENT" => "Y")
));

$curl = curl_init();
curl_setopt_array($curl, array(
	CURLOPT_SSL_VERIFYPEER => 0,
	CURLOPT_POST => 1,
	CURLOPT_HEADER => 0,
	CURLOPT_RETURNTRANSFER => 1,
	CURLOPT_URL => $queryUrl,
	CURLOPT_POSTFIELDS => $queryData,
));

$result = curl_exec($curl);
curl_close($curl);

$result = json_decode($result, true);
writeToLog($result, 'Create deal result');

if (isset($result['error'])) {
	echo "Ошибка при создании сделки: " . $result['error_description'] . "<br/>";
	exit;
}

$dealId = $result['result']; // Получаем ID созданной сделки

// Шаг 2. Добавляем товары в сделку
$queryUrl = 'https://armadastroy.bitrix24.ru/rest/43/utnw8v3hcnz4ls31/crm.deal.productrows.set.json';
$queryData = http_build_query(array(
	'id' => $dealId, // ID созданной сделки
	'rows' => array(
		array(
			"PRODUCT_NAME" => $productTitle, // Название товара
			"PRICE" => $productPrice, // Цена товара
			"QUANTITY" => 1, // Количество товара
			"CURRENCY_ID" => "RUB", // Валюта товара
		),
	),
));

$curl = curl_init();
curl_setopt_array($curl, array(
	CURLOPT_SSL_VERIFYPEER => 0,
	CURLOPT_POST => 1,
	CURLOPT_HEADER => 0,
	CURLOPT_RETURNTRANSFER => 1,
	CURLOPT_URL => $queryUrl,
	CURLOPT_POSTFIELDS => $queryData,
));

$result = curl_exec($curl);
curl_close($curl);

$result = json_decode($result, true);
writeToLog($result, 'Add product rows result');

if (isset($result['error'])) {
	echo "Ошибка при добавлении товаров в сделку: " . $result['error_description'] . "<br/>";
} else {
	echo "Сделка успешно создана и товары добавлены.<br/>";
}
?>