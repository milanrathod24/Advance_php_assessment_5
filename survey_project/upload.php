<?php
require 'Survey.php';

if(isset($_FILES['surveyFile'])){
    move_uploaded_file($_FILES['surveyFile']['tmp_name'], "survey.txt");

    $survey = new Survey();
    $survey->loadFromFile("survey.txt");

    echo "<h2>Survey Uploaded Successfully!</h2>";
    echo "<h3>Loaded Questions:</h3>";

    foreach($survey->getQuestions() as $q){
        echo $q . "<br>";
    }

    echo "<br><a href='index.html'>Back</a>";
}
?>
