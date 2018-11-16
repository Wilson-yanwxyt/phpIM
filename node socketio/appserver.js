var app = require('http').createServer(handler)
var io = require('socket.io')(app);
var fs = require('fs');

app.listen(3000);
console.log('listen at 3000');
var counts = 0;
function handler (req, res) {
  fs.readFile(__dirname + '/index.html',
  function (err, data) {
    if (err) {
      res.writeHead(500);
      return res.end('Error loading index.html');
    }

    res.writeHead(200);
    res.end(data);
  });
}

io.on('connection', client => {
  // client.emit('news', { hello: 'world' });
  client.on('mymsg', (data) => {
    let json_data = JSON.parse(data);
	console.log(json_data.code,json_data.msg,'called times:',++counts);
    client.broadcast.emit('news', { hello: json_data.msg,calltimes: counts });
	// client.send(counts);
	client.disconnect(true);
  });
});