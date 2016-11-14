<?php 

$myname = 'Mustafa Shakeel Qurehi';
echo $myname;
$newVar = $myname;
echo $myname;

$multi = array('name' => 'Mustafa','age'=>38,'city'=>'Coquitlam' );

echo '<br/>';
echo $multi['name'];

// Multi Dimentional Array 
$mda = array(array('name'=>'Mustafa','age'=>38),
			  array('name'=>'Eisa','age'=>37),
			  array('name'=>'Amer','age'=>34) );

echo '<br/>';
// foreach ($mda as $key => $value) {

// 	echo $key['name'];
// 	foreach ($value as $a => $b) {
// 		echo $a['name'];
// 	}
// }

echo " this is a cool quote my $myname";
$name = 'Mustafa';

$me = $name = 'Mustafa'?'Thats Me ': ' Thats not me ';

echo " This is ternary operator".$me;

// $keys = array_keys($mda);

// for($i = 0 ; $i < count($mda) ; $i++){

// 	//echo $keys[$i];
// 	foreach ($mda[$keys[$i]] as $key=> $value) {
// 		# code...

// 		echo $value ;
// 		// echo "    :   ".$value.'<b/>';
// 	}
// }
// echo $keys;
// print_r($keys);

$reverseME = strrev($myname);
echo '<br/>'.$reverseME;

function fixNames($first, $middle, $last){
	$one = strtolower($first);
	$two = strtolower($middle);
	$three = strtolower($last);

	return " My Name is ".$one. "  ".$two. "  ".$three;
}

echo fixNames("Musafa ", " SHAKEEL ","Qureshi");


?>