<?php
require 'Response.php';

$response = new Response();
$response->addAnswer($_POST['q1']);
$response->addAnswer($_POST['q2']);

$response->saveToCSV("responses.csv");

echo "Response Saved!";
?>
