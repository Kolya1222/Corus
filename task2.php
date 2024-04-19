<?php 
$events = [ 
['date' => '2019-12', 'event' => 'name1'], 
['date' => '2019-12', 'event' => 'name2'], 
['date' => '2019-11', 'event' => 'name3'], 
['date' => '2019-11', 'event' => 'name4'], 
['date' => '2020-10', 'event' => 'name5'], 
['date' => '2020-10', 'event' => 'name6'], 
['date' => '2020-11', 'event' => 'name5'], 
['date' => '2020-11', 'event' => 'name6'], 
['date' => '2020-12', 'event' => 'name7'], 
['date' => '2020-12', 'event' => 'name8'], 
['date' => '2020-12', 'event' => 'name9'], 
];
$events1 = [];
foreach ($events as $value){
	$dateParts = explode("-",$value['date']);
	$events1[$dateParts[0]][$dateParts[1]][] = $value['event'];
}
var_dump($events1);
?> 