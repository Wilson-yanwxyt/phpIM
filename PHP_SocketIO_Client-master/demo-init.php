<?php

include_once ('socket.io.php');

//Create a socket.io connection and send a simple message
$socketio = new SocketIO();
$ret = JSON_encode(array('code'=>100,'msg'=>'init msg'));
// echo $ret;
if ($socketio->send('localhost', 3000, 'init',$ret)){
    echo 'we sent the message and disconnected';
} else {
    echo 'Sorry, we have a mistake :\'(';
}



?>