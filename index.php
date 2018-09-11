<?php
  require_once('TranslationView.php');

  $view = new TranslationView();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf8'>
		<title>Rövarspråket</title>
	</head>
	<body>
    <h1>Rövarspråket</h1>
		<?php
		  $view->show();
		?>
	</body>
</html>