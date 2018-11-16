<?php

include_once ('socket.io.php');

//Create a socket.io connection and send a simple message
$socketio = new SocketIO();
$ret = JSON_encode(array('code'=>0,'msg'=>'hello,world'));
// echo $ret;
if ($socketio->send('localhost', 3000, 'mymsg',$ret)){
    echo 'we sent the message and disconnected';
} else {
    echo 'Sorry, we have a mistake :\'(';
}



?>