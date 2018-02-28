<?php


require 'database_connection.php';



/**
 * Created by PhpStorm.
 * User: johangriesel
 * Date: 15122016
 * Time: 15:14
 * @package    ${NAMESPACE}
 * @subpackage ${NAME}
 * @author     johangriesel <info@stratusolve.com>
 * Task_Data.txt is expected to be a json encoded string, e.g: [{"TaskId":1,"TaskName":"Test","TaskDescription":"Test"},{"TaskId":"2","TaskName":"Test2","TaskDescription":"Test2
  */

  
        $query = $this->db->prepare("SELECT * FROM tasks");
        $query->execute();
        $data = array();
        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
            $data[] = $row;
        }
  
$html = '<a id="newTask" href="#" class="list-group-item" data-toggle="modal" data-target="#myModal">
                    <h4 class="list-group-item-heading">No Tasks Available</h4>
                    <p class="list-group-item-text">Click here to create one</p>
                </a>';
if (strlen($data) < 1) {
    die($html);
}
$taskArray = json_decode(['tasks' => $data]);
if (sizeof($taskArray) > 0) {
    $html = '';
    foreach ($taskArray as $task) {
        $html .= '<a id="'.$task->id.'" href="#" class="list-group-item" data-toggle="modal" data-target="#myModal">
                    <h4 class="list-group-item-heading">'.$task->task.'</h4>
                    <p class="list-group-item-text">'.$task->dsescription.'</p>
                </a>';
    }
}
die($html);
?>