<?php
//get tasklist array from POST
$task_list = filter_input(INPUT_POST, 'tasklist', 
        FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);
if ($task_list === NULL) {
    $task_list = [];
    
//    add some hard-coded starting values to make testing easier
//    $task_list[] = 'Write chapter';
//    $task_list[] = 'Edit chapter';
//    $task_list[] = 'Proofread chapter';
}

//get action variable from POST
$action = filter_input(INPUT_POST, 'action');

//initialize error messages array
$errors = [];

//process
switch( $action ) {
    case 'Add Task':
        $new_task = filter_input(INPUT_POST, 'newtask');
        if (empty($new_task)) {
            $errors[] = 'The new task cannot be empty.';
        } else {
            array_push($task_list, $new_task);
        }
        break;
    case 'Delete Task':
        $task_index = filter_input(INPUT_POST, 'taskid', FILTER_VALIDATE_INT);
        if ($task_index === NULL || $task_index === FALSE) {
            $errors[] = 'The task cannot be deleted.';
        } else {
            unset($task_list[$task_index]);
            $task_list = array_values($task_list);
        }
        break;
    case 'Modify Task':
        $task_to_modify = filter_input(INPUT_POST, 'taskid', FILTER_VALIDATE_INT);
        break;

    case 'Save Changes':
        $modifiedtaskid = intval(filter_input(INPUT_POST, 'modifiedtaskid', FILTER_VALIDATE_INT));
        $modifiedtask = filter_input(INPUT_POST, 'modifiedtask');
        $replacement = array($modifiedtaskid => $modifiedtask);
        $task_list = array_replace($task_list, $replacement);

        break;
    
    case 'Cancel Changes':

        break;
    
    case 'Promote Task':
        $promotetaskid = filter_input(INPUT_POST, 'taskid', FILTER_VALIDATE_INT);
        $new_id = $promotetaskid - 1;
        if($new_id < 0){
            $errors[] = "You can not promote past the first task.";
        } else {
            $temp_list = array_splice($task_list, $promotetaskid, 1);
            $temp2_list = array_splice($task_list, 0, $new_id);
            $task_list = array_merge($temp2_list, $temp_list, $task_list);
        }
        break;
        
    case 'Sort Tasks':
        sort($task_list);
        break;
    

}

include('task_list.php');
?>