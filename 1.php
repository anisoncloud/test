<?php 
ini_set('display_errors', 'On'); 
error_reporting(E_ALL); 
$aUserScores = array(
'Ben' => 7,
'Linda' => 4,
'Tony' => 5,
'Alice' => '9'); 
echo '<pre>'; 
print_r($aUserScores); 
echo '</pre>';