<?php

include_once ('socket.io.php');

//Create a socket.io connection and send a simple message
$socketio = new SocketIO();
$send_data = JSON_encode(array('msg'=>array('NAME'=>'kkk','REMARK'=>'消费','OP_DATE'=>time(),'consume_count'=>1)));
if ($socketio->send('localhost', 3000, 'mymsg',$send_data)){
    echo 'we sent the message and disconnected';
} else {
    echo 'Sorry, we have a mistake :\'(';
}



?>