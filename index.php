<?php
  $translate = (isset($_GET['translate']) ? $_GET['translate'] : ''); 
?>

<form action="./" method="get">
  <input type="text" value="<?php echo $translate ?>" name="translate" id="translate">
  <input type="submit" value="Translate">
</form>