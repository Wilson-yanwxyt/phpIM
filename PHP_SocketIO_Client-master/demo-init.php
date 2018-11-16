<?php

include_once ('socket.io.php');

//Create a socket.io connection and send a simple message
$socketio = new SocketIO();
$send_data = JSON_encode(array('code'=>100,'msg'=>'init msg'));
if ($socketio->send('localhost', 3000, 'init',$send_data)){
    echo 'we sent the message and disconnected';
} else {
    echo 'Sorry, we have a mistake :\'(';
}



?>