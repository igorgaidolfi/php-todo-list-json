<?php 
    $todo_list = file_get_contents('todo-list.json');
    $list = json_decode($todo_list,true);
    if(isset($_POST['toDo'])){
        $toDo = $_POST['toDo'];
        $obj= array(key($list[0]) => $toDo);
        array_push($list,$obj);
        file_put_contents('todo-list.json', json_encode($list));
    }
    
    header('Content-type: application/json');
    
    echo json_encode($list);
?>