<?php
/**
 * This script is to be used to receive a POST with the object information and then either updates, creates or deletes the task object
 */
require ('Task.class.php');
// Assignment: Implement this script

$data = json_decode(file_get_contents('php://input'), TRUE);

if ($data['id']=='newTask') {

	//We create

	  $name = (isset($data['name']) ? $data['name'] : NULL);
    $description = (isset($data['description']) ? $data['description'] : NULL);

    // validated the request
    if ($name == NULL) {
        http_response_code(400);
        echo json_encode(['errors' => ["Name Field is required"]]);

    } else {

        // Add the task
        $task = new Task();

        echo $task->Create($name, $description);
    }

}else
{

   // We update

    $name = (isset($data['name']) ? $data['name'] : NULL);
    $description = (isset($data['description']) ? $data['description'] : NULL);
    $task_id = (isset($data['id']) ? $data['id'] : NULL);

    // validations
    if ($name == NULL) {
        http_response_code(400);
        echo json_encode(['errors' => ["Name Field is required"]]);

    } else {

        // Update the Task
        $task = new Task();

        $task->Update($name, $description, $task_id);
    }
}

























?>