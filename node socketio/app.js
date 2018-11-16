const io = require('socket.io')();
var counts = 0;
io.on('connection', client => { 
  client.on('mymsg', (data) => {
	console.log(data,'times :%s',++counts);
	client.send(counts);
	client.disconnect(true);
  });
  client.on('init',(data) => {
	console.log(data,'init msg',counts);
	client.send(counts);
	client.disconnect(true);
  });
  client.on('disconnect', () => { console.log('disconnected...') });
 });
io.listen(3000);
console.log('listen at 3000');