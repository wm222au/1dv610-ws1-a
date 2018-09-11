<?php

require_once('Translator.php');

$translator = new Translator();

class TranslationView {
  public function show() {
    echo $this->toHTML();
  }

  public function toHTML() : string {
    $translate = (isset($_GET['translate']) ? $_GET['translate'] : ''); 
    if($translate) {
      $translation = $translator->translate($translate);
    }

    $output = '
    <form action="./" method="get">
      <input type="textarea" value="'.$translate.'" name="translate" id="translate">
      <input type="submit" value="Translate">
    </form>';
    
    if($translation) {
      $output .= '
        <h2>Your translation: </h2>
        <p>'.$translation.'</p>
      ';
    }

    return $output;
  }
}