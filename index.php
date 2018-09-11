<?php
  require_once('TranslationView.php');

  $view = new TranslationView();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf8'>
		<title>The translator</title>
	</head>
	<body>
    <h1>The translator</h1>
		<?php
		  $view->show();
		?>
	</body>
</html>