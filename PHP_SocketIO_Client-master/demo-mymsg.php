<?php

include_once ('socket.io.php');

//Create a socket.io connection and send a simple message
$socketio = new SocketIO();
$send_data = JSON_encode(array('code'=>0,'msg'=>'message from php'));
if ($socketio->send('localhost', 3000, 'mymsg',$send_data)){
    echo 'we sent the message and disconnected';
} else {
    echo 'Sorry, we have a mistake :\'(';
}



?>