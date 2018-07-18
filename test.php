<?php
$arr[] = array('cam'=>1, 'frame'=>1);
$arr[] = array('cam'=>2, 'frame'=>3);
$arr[] = array('cam'=>3, 'frame'=>2);
//$arr[] = array('cam'=>4, 'frame'=>5);
//$arr[] = array('cam'=>5, 'frame'=>4);

$str = json_encode($arr);
echo 'You need to call json in this format:<br>';
echo 'http://api1.icu?data=JSON';
echo '<pre>';
print_r($arr);
echo '</pre>';

echo '====================================This result data=========================================================<br>';
echo "&oline;V&oline;V&oline;V&oline;V&oline;V&oline;V&oline;V&oline;V&oline;V&oline;V&oline;V&oline;V&oline;V&oline;V&oline;V&oline;V&oline;V&oline;V&oline;V&oline;V&oline;V&oline;V&oline;V&oline;V&oline;V&oline;V&oline;V&oline;V&oline;V&oline;V&oline;V&oline;V&oline;V&oline;V&oline;V&oline;V&oline;V&oline;V&oline;V&oline;V&oline;V&oline;V&oline;V&oline;V&oline;V&oline;V&oline;V&oline;V&oline;V&oline;V&oline;V&oline;V&oline;V&oline;V&oline;V&oline;V&oline;V&oline;V&oline;V&oline;V&oline;V&oline;V&oline;V&oline;V&oline;V&oline;V&oline;V&oline;V&oline;V&oline;V&oline;V&oline;V&oline;V&oline;V&oline;V&oline;V&oline;V&oline;V&oline;V&oline;V&oline;V&oline;V&oline;V&oline;V&oline;V&oline;V&oline;V&oline;V<br>";

echo file_get_contents('http://api1.icu?data='.$str);