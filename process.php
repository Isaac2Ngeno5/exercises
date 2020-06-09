<?php
include 'db_fns.php';

    $email = $_POST['email'];
    $business = $_POST['business'];
    $description = $_POST['description'];
    $phone = $_POST['phone'];
    $name = $_POST['name'];

    $result = mysql_query('insert into landing_data (email, business, description, phone, name, stamp, date ,time,status) 
    values("'.$email.'", "'.$business.'", "'.$description.'", "'.$phone.'", "'.$name.'", "'.date('YmdHi').'", "'.date('d/m/Y').'","'.date('H:i').'", 1)');

    if($result){
        $response = array(
            'message' => 'Save Successfully',
            'data' => array('name'=>$name, 'email'=>$email)
        );
        
    }else{
        $response = array(
            'error' => 'failed to save data',
            'data' => array('name'=>$name, 'email'=>$email)
        );
    }

    echo json_encode($response);

    header('Location:index.php');
