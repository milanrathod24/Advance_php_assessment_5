<?php
class Survey {
  private $questions = [];

  public function loadFromFile($filename){
    $file = fopen($filename,"r");
    while(($line = fgets($file)) !== false){
      $this->questions[] = trim($line);
    }
    fclose($file);
  }

  public function getQuestions(){
    return $this->questions;
  }
}
?>
