<?php 
    echo 'Sono la tua API';

    if(isset($_POST['todo'])){
        $test = $_POST['todo'];
        echo $test;
    }
?>