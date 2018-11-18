const io = require('socket.io')();
var counts = 0;
io.on('connection', client => { 
  client.on('mymsg', (data) => {
    let json_data = JSON.parse(data);
	console.log(json_data.code,json_data.msg,'called times:',++counts);
	client.send(counts);
	client.disconnect(true);
  });
  client.on('init',(data) => {
    let json_data = JSON.parse(data);
	console.log(json_data.code,json_data.msg,'init called');      
	// console.log(data,'init msg',counts);
	client.send(counts);
	client.disconnect(true);
  });
  client.on('str',(data) => {
     console.log(data,' str called');
     client.send('end');
     client.disconnect(true);
  });
  client.on('disconnect', () => { console.log('disconnected...') });
 });
io.listen(3000);
console.log('listen at 3000');