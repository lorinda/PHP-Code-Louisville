<?php
//header('Content-type: text/plain');
include 'list.php';

foreach($list as $key => $item){
    echo $key.' = '.$item['title']."<br>\n";
}
echo '<table>';
echo "<tr>";
echo "<th>Title</th>";
echo "<th>Priority</th>";
echo "<th>Due Date</th>";
echo "<th>Complete</th>";
echo "</tr>";

foreach($list as $item){
    echo '<tr>';
    echo '<td>'.$item['title']."</td>\n";
    echo '<td>'.$item['priority']."</td>\n";
    echo '<td>'.$item['due']."</td>\n";
    echo '<td>';
    if($item['complete']){
        echo 'Yes';
    }else{
        echo 'No';
    }
    echo "</td>\n";
    echo '</tr>';
}
echo '</table>';

//var_dump($list);


//Previous Example:
//$task1 = array(
//replace array() with []"
//$list['Task 1'] = [
//    'title' => 'Laundry',
//    'priority' => 2,
//    'due' => '',
//    'complete' => true
//    ];
////$task2 = array(
//$list['Task 2'] = [
//    'title' => "Clean out refrigerator",
//    'priority' => 3,
//    'due' => '07/30/2016',
//    'complete' => false
//    ];

//$list = array($task1, $task2);
//var_dump($task1);
//var_dump($task2);

//echo $list['Task 1']['title'];
?>