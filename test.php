<?php


//Ankit Singh: https://github.com/laracasts/Lets-Build-a-Forum-in-Laravel.git




$ary = array( 1 => 100, 2 => 200, true => 'word');
$ary2 = array( 5.7 => 100, 2.5 => 200, 1 => 'sdsd', true => 'word');
$ary1 = array( 1, 2,3, 4, 8 => 5, 6);
// print_r($ary2);
// echo $ary[];

/* ----- */
$dsp = 1;
for($i=0;$i<=3;$i++){
for($j=1;$j<=$i;$j++){
echo $dsp."&nbsp;";

$dsp = $dsp + 2;

}
echo "<br>";
}


 $row = 7;
$half = round($row/2);
$i=1; 


/* ----- */
/*  for($i=0;$i<=6;$i++){
for($k=6;$k>=$i;$k--){
echo " &nbsp;";
}
for($j=1;$j<=$i;$j++){
echo "* &nbsp;";
}
echo "<br>";
}
for($i=5;$i>=1;$i--){
for($k=6;$k>=$i;$k--){
echo " &nbsp;";
}
for($j=1;$j<=$i;$j++){
echo "* &nbsp;";
}
echo "<br>";
}  */

/* ----- */
 $oo = 1;
$half = 4;
$dec = 1;
for($i=0;$i<=7;$i++){

if($i <= 4){
	for($j=1;$j<=$i;$j++){

	echo $oo."&nbsp;";
	$oo = $oo+1;
	
	}
	echo "<br>";
}else{
	// for($l=0;$l<=$half;$l++){
	for($k=4-$dec;$k>=1;$k--){

	echo $oo."&nbsp;";
	$oo = $oo+1;
	
	// 
	}
	$dec++;
	echo "<br>";
	// }

	
}
} 

/* ----- */
for($i=0;$i<=5;$i++){
for($j=5-$i;$j>=1;$j--){
echo "*&nbsp;";
}
echo "<br>";
}

$data = 'asas dd gg rr';
list($a, $b, $c) = explode( " ", $data);
echo $a ."<br>";
echo $b ."<br>";
echo $c ."<br>";

/* ----- */
$str1 = 'yabadabadoo aae';
$str2 = 'yaba';
if (strpos($str1,$str2) !== false) {
    echo "\"" . $str1 . "\" contains \"" . $str2 . "\"";
} else {
    echo "\"" . $str1 . "\" does not contain \"" . $str2 . "\"";
}

/* ----- */
$x = 5;
echo $x;
echo "<br />";
echo $x+++$x++;
echo "<br />";
echo $x;
echo "<br />";
echo $x---$x--;
echo "<br />";
echo $x;

/* ----- */
$a = '1';
$b = &$a;
$b = "2$b";
echo "<br />";
echo $a;

/* ----- */
var_dump(0123 == 123);
var_dump('0123' == 123);
var_dump('0123' === 123);





/* ----- */
$referenceTable = array();
$referenceTable['val1'] = array(1, 2);
$referenceTable['val2'] = 3;
$referenceTable['val3'] = array(4, 5);

$testArray = array();

$testArray = array_merge($testArray, $referenceTable['val1']);
var_dump($testArray);
// $testArray = array_merge($testArray, $referenceTable['val2']);
// var_dump($testArray);
$testArray = array_merge($testArray, $referenceTable['val3']);
var_dump($testArray);

/* ----- */
$x = true and false;
var_dump($x);

/* ----- */
$x = 3 + "15%" + "$25";
echo $x;

/* ----- */
$text = 'John ';
$text[10] = 'Doe';
echo "<br />";

echo strlen($text);

var_dump(PHP_INT_MAX);
var_dump(PHP_INT_MAX + 1);
var_dump((int)(PHP_INT_MAX + 1))


?>
