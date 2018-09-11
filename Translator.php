<?php

class Translator {
  private $inputText;
  private $resultText;
  private $translationType;

  private $consonants = array("b", "c", "d", "f", "g", "h", "j", "k", "l", "m", "n", "p" , "q" , "r" , "s" , "t" , "v" , "x" , "z");

  public function setText(string $input) {
    // Add whatever verifications you want here.
    $this->inputText = $input;
  }
  /**
   * Sets the translation type for this translator.
   * 0 = Rövarspråket
   * 1 = Backwards
   */
  public function setType(int $type) {
    switch ($type) {
      case 0: case 1: $this->translationType = $type; break;
      default: throw new \Exception("{$type} is not a valid type. It has to be either 0 or 1.");
    }
  }

  public function translate(string $input, int $type) : string {
    $this->setText($input);
    $this->setType($type);

    $result = "";
    if ($this->translationType == 0) {
      foreach (str_split($input) as $char) {
        // Deal with uppercase/lowercase?
        $char = strtolower($char);
        $result .= in_array($char, $this->consonants) ? "{$char}o{$char}" : $char;
      }
    } else if ($this->translationType == 1) {
      for ($i = strlen($input) - 1; $i >= 0; $i--) {
        $result .= $input[$i];
      }
    } else {
      $result = "Invalid type/input";
    }
    $this->resultText = $result;
    return $result;
  }
}