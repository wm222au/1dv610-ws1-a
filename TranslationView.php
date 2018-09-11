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
      $translation = $this->translator->translate($translate);
    }

    $output = '
    <form action="./" method="get">
      <input type="textarea" value="'.$translate.'" name="translate" id="translate">
      <input type="submit" value="Translate">
    </form>';
    
    if(isset($translation)) {
      $output .= '
        <h2>Your translation: </h2>
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