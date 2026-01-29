<?php
class Response {
  private $answers = [];

  public function addAnswer($answer){
    $this->answers[] = $answer;
  }

  public function saveToCSV($filename){
    $file = fopen($filename,"a");
    fputcsv($file, $this->answers);
    fclose($file);
  }
}
?>
