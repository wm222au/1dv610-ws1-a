<?php
  $translation = (isset($_GET['translation']) ? $_GET['translation'] : null); 
  $translate = (isset($_GET['translate']) ? $_GET['translate'] : ''); 
?>

<form action="./" method="get">
  <input type="textarea" value="<?php echo $translate ?>" name="translate" id="translate">
  <input type="submit" value="Translate">
</form>

<?php if($translation): ?>
  <h2>Your translation: </h2>
  <p><?php echo $translation ?></p>
<?php endif; ?>