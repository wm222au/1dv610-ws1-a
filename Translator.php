<?php

class Translator {
  private $inputText;
  private $resultText;

  private $consonants = array("b", "c", "d", "f", "g", "h", "j", "k", "l", "m", "n", "p" , "q" , "r" , "s" , "t" , "v" , "x" , "z");

  public function setText(string $input) {
    // Add whatever verifications you want here.
    $this->inputText = $input;
  }

  public function translate(string $input) : string {
    $this->setText($input);
    $result = "";
    foreach (str_split($input) as $char) {
      // Deal with uppercase/lowercase
      $char = strtolower($char);
      $result .= in_array($char, $this->consonants) ? "{$char}o{$char}" : $char;
    }
    $this->resultText = $result;
    return $result;
  }
}