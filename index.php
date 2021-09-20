<?php
$text = $_POST["news"];
$model = $_POST["ml_model"];

exec("/Users/naveen/opt/anaconda3/bin/python /Users/naveen/Sites/CSE573-SWM-StockPrediction/Code/input-testing/predict.py $text $model 2>&1", $output);

print_r(end($output));
?>
