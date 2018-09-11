<?php

require_once('Translator.php');

class TranslationView {
  private $translator;

  public function __construct() {
    $this->translator = new Translator();
  }

  public function show() {
    echo $this->toHTML();
  }

  public function toHTML() : string {
    $translate = (isset($_GET['translate']) ? $_GET['translate'] : ''); 
    if($translate) {
      $translation = $this->translator->translate($translate, intval($_GET['language']));
    }

    $output = '
    <form action="./" method="get">
      <input type="textarea" value="'.$translate.'" name="translate" id="translate">
      <select name="language">
        <option value="0">Rövarspråk</option>
        <option value="1">Backwards</option>
      </select>
      <input type="submit" value="Translate">
    </form>';
    
    if(isset($translation) && !empty($translation)) {
      $output .= '
        <h2>Translated to: </h2>
        <p>'.$translation.'.</p>
      ';
    } else {
      $output .= '
        Nothing to translate.
      ';
    }

    return $output;
  }
}