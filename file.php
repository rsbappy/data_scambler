<?php
$fileName= "C:/xampp/htdocs/learnphp/file2.php";
// $fp = fopen($fileName, 'r');
// // $line = fgets($fp);
// // echo $line;
// while ( $line = fgets($fp)){
//     echo $line;
// }
// echo PHP_EOL;
// rewind($fp);
// while ( $line = fgets($fp)){
//     echo $line;
// }
$exitData =  file_get_contents($fileName);
echo $exitData;
$fp = fopen($fileName, 'a');
// fwrite($fp, $exitData);
fwrite($fp, "kdlsfdj\n");
fwrite($fp, "I\n");
fwrite($fp, "Eat\n");
fwrite($fp, "Rice\n");

fclose($fp);
?>