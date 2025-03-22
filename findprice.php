<?php
set_time_limit(0);
$directory = __DIR__;
$result = [];
$filesUpdated = [];
$filesRestored = [];
$totalFound = 0;
$totalReplaced = 0;

// Функция поиска index.php в корне и первом уровне папок
function findIndexFiles($dir)
{
	$files = [];
	
	if (file_exists($dir . '/index.php')) {
		$files[] = $dir . '/index.php';
	}
	
	$subdirs = array_filter(glob($dir . '/*'), 'is_dir');
	foreach ($subdirs as $subdir) {
		if (file_exists($subdir . '/index.php')) {
			$files[] = $subdir . '/index.php';
		}
	}
	
	return $files;
}

// Функция замены переменной внутри нужного блока
function replaceVariableInBlock($content, $oldVar, $newVar, &$found, &$replaced)
{
	$pattern = '/(<h3 id="product_title">Морской контейнер под склад<\/h3>)(.*?)(<\/section>)/s';
	
	return preg_replace_callback($pattern, function ($matches) use ($oldVar, $newVar, &$found, &$replaced) {
		$block = $matches[2];
		
		// Подсчитываем количество вхождений старой переменной в блок
		$patternVar = '/\$' . preg_quote($oldVar, '/') . '\b/'; // Ищем только PHP-переменные
		$foundInBlock = preg_match_all($patternVar, $block);
		$found += $foundInBlock;
		
		// Если в блоке есть вхождения, производим замену
		if ($foundInBlock > 0) {
			$newBlock = preg_replace($patternVar, '$' . $newVar, $block, -1, $replaceCount); // Добавляем $ к новой переменной
			$replaced += $replaceCount;
			$block = $newBlock;
		}
		
		return $matches[1] . $block . $matches[3];
	}, $content);
}

// Обрабатываем POST-запрос
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	if (isset($_POST['old_var']) && isset($_POST['new_var'])) {
		$oldVar = trim($_POST['old_var']);
		$newVar = trim($_POST['new_var']);
		$indexFiles = findIndexFiles($directory);
		
		foreach ($indexFiles as $file) {
			$backupFile = dirname($file) . '/old_index.php';
			
			if (!file_exists($backupFile)) {
				copy($file, $backupFile);
			}
			
			$content = file_get_contents($file);
			$foundInFile = 0;
			$replacedInFile = 0;
			$newContent = replaceVariableInBlock($content, $oldVar, $newVar, $foundInFile, $replacedInFile);
			
			// Сохраняем измененный файл, если были замены
			if ($newContent !== $content) {
				file_put_contents($file, $newContent);
				$filesUpdated[$file] = ['found' => $foundInFile, 'replaced' => $replacedInFile];
				$totalFound += $foundInFile;
				$totalReplaced += $replacedInFile;
			}
		}
	}
	
	// Восстановление файлов
	if (isset($_POST['restore'])) {
		$indexFiles = findIndexFiles($directory);
		foreach ($indexFiles as $file) {
			$backupFile = dirname($file) . '/old_index.php';
			if (file_exists($backupFile)) {
				copy($backupFile, $file);
				$filesRestored[] = $file;
			}
		}
	}
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Замена переменных в index.php</title>
	<style>
		body { font-family: Arial, sans-serif; padding: 20px; }
		h2 { text-align: center; }
		form { max-width: 500px; margin: 0 auto; }
		input, button { width: 100%; padding: 10px; margin: 5px 0; }
		#preloader { display: none; text-align: center; }
		.log { background: #f4f4f4; padding: 10px; margin-top: 20px; }
	</style>
</head>
<body>

<h2>Поиск и замена переменной в index.php</h2>

<form method="post" id="replaceForm">
	<label>Исходное имя переменной (без $):</label>
	<input type="text" name="old_var" required>
	
	<label>Новое имя переменной (без $):</label>
	<input type="text" name="new_var" required>
	
	<button type="submit">Запустить замену</button>
</form>

<form method="post" id="restoreForm">
	<button type="submit" name="restore">Восстановить файлы</button>
</form>

<div id="preloader">Обработка... Подождите.</div>

<?php if (!empty($filesUpdated) || !empty($filesRestored)) : ?>
	<div class="log">
		<h3>Результат:</h3>
		
		<?php if (!empty($filesUpdated)) : ?>
			<h4>Измененные файлы:</h4>
			<ul>
				<?php foreach ($filesUpdated as $file => $stats) : ?>
					<li><?= $file; ?> — Найдено: <?= $stats['found']; ?>, Заменено: <?= $stats['replaced']; ?></li>
				<?php endforeach; ?>
			</ul>
			<p><strong>Всего найдено:</strong> <?= $totalFound; ?></p>
			<p><strong>Всего заменено:</strong> <?= $totalReplaced; ?></p>
		<?php endif; ?>
		
		<?php if (!empty($filesRestored)) : ?>
			<h4>Восстановленные файлы:</h4>
			<ul>
				<?php foreach ($filesRestored as $file) : ?>
					<li><?= $file; ?></li>
				<?php endforeach; ?>
			</ul>
		<?php endif; ?>
	</div>
<?php endif; ?>

<script>
	document.getElementById("replaceForm").addEventListener("submit", function() {
		document.getElementById("preloader").style.display = "block";
	});
	document.getElementById("restoreForm").addEventListener("submit", function() {
		document.getElementById("preloader").style.display = "block";
	});
</script>

</body>
</html>