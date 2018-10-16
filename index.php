<?php
$continents = [
	"Asia"=>["Tapirus indicus", "Birgus latro", "Pelodiscus sinensis"],
	"Europe"=>["Nyctereutes procyonoides", "Alopex lagopus", "Canis lupus"],
	"Africa"=>["Cercopithecus lhoesti", "Equus quagga", "Atilax paludinosus"],
	"Australia"=>["Macropus","Canis lupus dingo","Phascolarctos cinereus"]
];
$name_two = [];
foreach($continents as $continent => $animals){
	foreach($animals as $animal){
		$all_animals= [];
		$anim = explode(' ', $animal);
		$all_animals[]=$anim;
		foreach($all_animals as $k){
			if(count($k) === 2){
				$comma_separated = implode(",", $k);
				$str = str_replace(',',' ', $comma_separated);
				$name_two[]=$str;
			}
		}
	}
}

echo '<pre>';
var_dump($name_two);
echo '<pre>';

foreach($name_two as $name){
    $parts = explode(' ', $name);
    $first[] = $parts[0];
    $second[] = $parts[1];
	
	$random_first_word = [];
	
	while (count($random_first_word) < count($name_two)){
   $test = $first[rand(0, count($name_two)-1)];
    if (!in_array($test, $random_first_word)) {
        array_push($random_first_word, $test);
    }
}
	$random_second_word = [];
 
while (count($random_second_word) < count($name_two)){
    $test = $second[rand(0, count($name_two)-1)];
    if (!in_array($test, $random_second_word)) {
        array_push($random_second_word, $test);
    }
}
	$final_result = [];
 
for($i = 0; $i < count($name_two); $i++){
    $final_result[]= $random_first_word[$i] . ' ' . $random_second_word[$i];  
} 
var_dump($final_result);
	echo "<pre>";
	foreach ($continents as $key => $arrays){
		echo '<h2>'.$key.'</h2>';
			echo implode(",", $key);
			
	}
echo "</pre";
?>