<?php
$counts = [0,0,0,0,0];

$file = fopen("responses.csv","r");
while(($row = fgetcsv($file)) !== false){
  $rating = (int)$row[0];
  if($rating >=1 && $rating <=5){
     $counts[$rating-1]++;
  }
}
fclose($file);

echo json_encode($counts);
?>
