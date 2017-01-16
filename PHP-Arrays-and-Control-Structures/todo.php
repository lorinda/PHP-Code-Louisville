<?php
//$task1 = array(
//replace array() with []
$list['Task 1'] = [
    'title' => 'Laundry',
    'priority' => 2,
    'due' => '',
    'complete' => true
    ];
//$task2 = array(
$list['Task 2'] = [
    'title' => "Clean out refrigerator",
    'priority' => 3,
    'due' => '07/30/2016',
    'complete' => false
    ];

//$list = array($task1, $task2);
//var_dump($task1);
//var_dump($task2);
var_dump($list);
echo $list['Task 1']['title'];
?>