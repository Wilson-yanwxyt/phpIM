<?php

include_once ('socket.io.php');

//Create a socket.io connection and send a simple message
$socketio = new SocketIO();
$send_data = 'just a test string';
if ($socketio->send('localhost', 3000, 'str',$send_data)){
    echo 'we sent the message and disconnected';
} else {
    echo 'Sorry, we have a mistake :\'(';
}



?>